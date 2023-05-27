@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Footer Page</h4>
                        <form method="POST" action="{{ route('update.footer') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $footers->id}}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                <textarea required="" class="form-control" rows="5" name="short_description">{{ $footers->short_description }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Short Title" name="number"
                                        value="{{ $footers->number }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="address" name="address"
                                        value="{{ $footers->address }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" placeholder="email" name="email"
                                        value="{{ $footers->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">facebook</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="facebook" name="facebook"
                                        value="{{ $footers->facebook }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">twitter</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="twitter" name="twitter"
                                        value="{{ $footers->twitter }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">copyright</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="copyright" name="copyright"
                                        value="{{ $footers->copyright }}">
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