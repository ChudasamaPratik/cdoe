@extends('frontend.layouts.main')
@section('title', 'Gallery')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h2 class="text-white">CUHG Gallery</h2>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>	
                            <li class="breadcrumb-item active" aria-current="page">CUHG Gallery</li>
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
            <div class="page-gallery-cuhg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-cuhg-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="gallery-cuhg-featured-image">
                        <a href="{{ route('single-gallery') }}">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery/single/gallery-1.jpg')}}" alt="">                                
                            </figure>    
                        </a>                            
                    </div>
                    <div class="gallery-cuhg-item-body">
                        <div class="gallery-cuhg-item-content">
                            <h2><a href="{{ route('single-gallery') }}">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></h2>
                        </div>
                        <div class="gallery-cuhg-item-btn">
                            <a href="{{ route('single-gallery') }}" class="readmore-btn">View more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-cuhg-item wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="gallery-cuhg-featured-image">
                        <a href="{{ route('single-gallery') }}">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}" alt="">                                
                            </figure>    
                        </a>                            
                    </div>
                    <div class="gallery-cuhg-item-body">
                        <div class="gallery-cuhg-item-content">
                            <h2><a href="{{ route('single-gallery') }}">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></h2>
                        </div>
                        <div class="gallery-cuhg-item-btn">
                            <a href="{{ route('single-gallery') }}" class="readmore-btn">View more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-cuhg-item wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="gallery-cuhg-featured-image">
                        <a href="{{ route('single-gallery') }}">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}" alt="">                                
                            </figure>    
                        </a>                            
                    </div>
                    <div class="gallery-cuhg-item-body">
                        <div class="gallery-cuhg-item-content">
                            <h2><a href="{{ route('single-gallery') }}">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></h2>
                        </div>
                        <div class="gallery-cuhg-item-btn">
                            <a href="{{ route('single-gallery') }}" class="readmore-btn">View more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-cuhg-item wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="gallery-cuhg-featured-image">
                        <a href="{{ route('single-gallery') }}">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery/single/gallery-3.jpg')}}" alt="">                                
                            </figure>    
                        </a>                            
                    </div>
                    <div class="gallery-cuhg-item-body">
                        <div class="gallery-cuhg-item-content">
                            <h2><a href="{{ route('single-gallery') }}">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></h2>
                        </div>
                        <div class="gallery-cuhg-item-btn">
                            <a href="{{ route('single-gallery') }}" class="readmore-btn">View more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-cuhg-item wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="gallery-cuhg-featured-image">
                        <a href="single-gallery.html">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery/single/gallery-2.jpg')}}" alt="">                                
                            </figure>    
                        </a>                            
                    </div>
                    <div class="gallery-cuhg-item-body">
                        <div class="gallery-cuhg-item-content">
                            <h2><a href="single-gallery.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></h2>
                        </div>
                        <div class="gallery-cuhg-item-btn">
                            <a href="single-gallery.html" class="readmore-btn">View more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-cuhg-item wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                    <div class="gallery-cuhg-featured-image">
                        <a href="single-gallery.html">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend/images/gallery/single/gallery-1.jpg') }}" alt="">                                
                            </figure>    
                        </a>                            
                    </div>
                    <div class="gallery-cuhg-item-body">
                        <div class="gallery-cuhg-item-content">
                            <h2><a href="single-gallery.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></h2>
                        </div>
                        <div class="gallery-cuhg-item-btn">
                            <a href="single-gallery.html" class="readmore-btn">View more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
@endsection