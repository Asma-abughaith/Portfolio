<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Http\Requests\passwordRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification= array(
            'message'=>"you are logged out",
            'alert-type'=>'success'
        );

        return redirect('/login')->with($notification);
    }
    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }
    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit',compact('editData'));

    }
    public function storeProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->profile_image = $filename;
        }
        $data->save();
        $notification = array(
            'message'=>"admin profile updated successfuly",
            'alert-type'=>"success"
        );

        return redirect()->route('admin.profile')->with($notification);
    }
    public function ChangePassword()
    {
        return view('admin.admin_change_password');

    }
    public function UpdatePassword(passwordRequest $request)
    {
        $hashPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->new_password);
            $user->save();
            session()->flash('message',"the password updated successfully");
            return redirect()->back();
        }else{
            session()->flash('message', 'old password does not match.');
            session()->flash('alert-type', 'error');

            return redirect()->back();
        }
        
        
    }

}
