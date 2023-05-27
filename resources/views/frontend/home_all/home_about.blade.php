@php 
$aboutpage = App\Models\About::find(1);
$allMultiImage=App\Models\MultiImage::all();
@endphp
<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach($allMultiImage as $image)
                    <li>
                        <img class="light" src="{{asset($image->multi_image)}}" alt="XD">
                    </li>
                   @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 About me</span>
                        <h2 class="title">{{$aboutpage->title}}</h2>
                    </div>
                    <div class="about__exp">
                        <!-- <div class="about__exp__icon">
                        <i class="ri-profile-fill"></i>
                        </div> -->
                        <div class="about__exp__content">
                            <p>{{$aboutpage->short_title}}</p>
                        </div>
                    </div>
                    <p class="desc">{{$aboutpage->short_description}}</p>
                    <a href="{{url('/upload/home_about/Asam-Abughaith CV.pdf')}}" download class="btn">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>