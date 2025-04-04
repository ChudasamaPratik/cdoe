@extends('frontend.layouts.main')
@section('title', 'About CDOE')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">About CDOE</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About CDOE</li>
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
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="">
                                <img src="{{ asset('frontend/images/about-himachal.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="about-img-2">
                            <figure class="">
                                <img src="{{ asset('frontend/images/about-himachal-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="success-rating-box">
                            <div class="Success-rating-content">
                                <h2><span>A++</span> Grade</h2>
                                <p>NAAC Accreditation </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">About CDOE</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">The Centre for Distance and Online Education
                                (CDOE) is committed to providing high-quality, flexible learning opportunities to
                                students worldwide. Our innovative approach combines cutting-edge technology with expert
                                instruction to deliver an unparalleled educational experience.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At CDOE, we believe that education should be
                                accessible to all, regardless of geographical location or personal circumstances. Our
                                programs are designed to accommodate diverse learning needs and schedules, enabling
                                students to pursue their academic goals while balancing work and personal commitments.
                            </p>
                        </div>
                    </div>
                    <div class="why-choose-content-body">
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icons/UGC-DEB-Entitled.png') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>UGC DEB Entitled</h3>
                                <p>Recognized by UGC DEB for Online Education Programs.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icons/NAAC-Accreditation.png') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>NAAC Accreditation: A++ Grade</h3>
                                <p>Awarded A++ status by NAAC for excellence in evaluation criteria.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icons/UGC-Category-University.png') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>UGC Category 1 University</h3>
                                <p>Recognized by UGC for academic autonomy and excellence.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icons/university-ranking.png') }}" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Univesity Rankings</h3>
                                <p>The university holds numerous national and international rankings, showcasing its
                                    excellence and reputation globally.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
