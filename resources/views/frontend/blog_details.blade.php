@extends('frontend.main_master')
@section('main')

@section('title')
Blog | Asma Abughaith Website
@endsection
<main>

<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">{{$blog->blog_title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="breadcrumb__wrap__icon">
        <ul>
        @php
                $images = App\Models\MultiImage::all();
                @endphp
                @foreach($images as $image)
                <li><img src="{{asset($image->multi_image)}}" alt=""></li>
                @endforeach
        </ul>
    </div> -->
</section>
<!-- breadcrumb-area-end -->


<!-- blog-details-area -->
<section class="standard__blog blog__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <img src="{{asset($blog->blog_image)}}" alt="">
                    </div>
                    <div class="blog__details__content services__details__content">
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</li>
                        </ul>
                        <h2 class="title">{{$blog->blog_title}}</h2>
                        <p>{!! $blog->blog_description !!}</p>
                    </div>
                    <div class="blog__details__bottom">
                        <ul class="blog__details__tag">
                            <li class="title">Tag:</li>
                            <li class="tags-list">
                            @php
                                $tags = explode(',', $blog->blog_tags);
                            @endphp

                                @foreach($tags as $tag)
                                <a href="#">{{$tag}}</a>
                                @endforeach
                            </li>
                        </ul>
                       
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog__sidebar">
                    <div class="widget">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>


                    <div class="widget">
                        <h4 class="widget-title">Recent Blog</h4>
                        <ul class="rc__post">
                            @foreach($allBlog as $item)
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="blog-details.html"><img src="{{asset($item->blog_image)}}" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="blog-details.html">{{$item->blog_title}}</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="sidebar__cat">
                            @foreach($categories as $val)
                            <li class="sidebar__cat__item"><a href="{{route('category.blog',$val->id)}}">{{$val->blog_category}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-details-area-end -->


<!-- contact-area -->
@include('frontend.home_all.home_contact')
<!-- contact-area-end -->

</main>

@endsection