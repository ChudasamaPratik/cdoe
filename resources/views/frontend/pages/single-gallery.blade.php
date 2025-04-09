
@extends('frontend.layouts.main')
@section('title', 'Single-Gallery')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h2 class="text-white">Gallery</h2>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>	
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="page-gallery">
    <div class="container">
        <div class="row gallery-items page-gallery-box">
            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-cursor-text="View" style="visibility: visible; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="View" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="View" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="View" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="View" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1s" data-cursor-text="View" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s" data-cursor-text="View" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s" data-cursor-text="View" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                    <a href="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="View" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
                    <a href="images/gallery/single/gallery-3.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection