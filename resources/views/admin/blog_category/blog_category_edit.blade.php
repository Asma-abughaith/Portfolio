@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Update Blog Category Page</h4>
                        <form method="POST" action="{{ route('update.blog.category') }}" >
                            @csrf
                            <input type="hidden" name="id" value="{{$blogCategory->id}}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Blog Category Name"
                                        name="blog_category" value="{{$blogCategory->blog_category}}">
                                    @error('blog_category')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection