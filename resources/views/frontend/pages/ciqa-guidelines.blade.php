@extends('frontend.layouts.main')
@section('title', 'CIGA Guidelines')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">CIQA Guidelines</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CIQA Guidelines</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-features">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">CIGA Guidelines
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/Quality-Assurance.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Quality Assurance</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">Download</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/Internal-Assessment.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Internal Assessment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">Download</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/Accreditation.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Accreditation</h3>
                            <p>A visa is a conditional authorization granted by a country to a foreign national,
                                allowing them to enter and stay for specific purposes.</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">Download</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/Faculty-Development.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Faculty Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">Download</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/Curriculam-Review.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Curriculam Review</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">Download</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/Feedback-System.png') }}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Feedback System</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
