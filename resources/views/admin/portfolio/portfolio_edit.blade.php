@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Portfolio Edit Page</h4>
                        <form method="POST" action="{{ route('update.portfolio') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$portfolio->id}}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Portfolio Title"
                                        name="portfolio_name" value="{{$portfolio->portfolio_name}}">
                                    @error('portfolio_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Portfolio Title"
                                        name="portfolio_title" value="{{$portfolio->portfolio_title}}">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio
                                    Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="portfolio_description">value="{{$portfolio->portfolio_description}}"</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">about
                                    Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="portfolio_image" id="portfolio_image_edit">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                    <img id="showportfolioimage_edit" class="rounded avatar-lg"
                                        src="{{asset($portfolio->portfolio_image)}}" alt="Card image cap">

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
<script type="text/javascript">
//how to make image appear when you upload the image
$(document).ready(function() {
    $('#portfolio_image_edit').change(function(e) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#showportfolioimage_edit').attr('src', e.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });
});
</script>
@endsection