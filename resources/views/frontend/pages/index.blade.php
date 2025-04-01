@extends('frontend.layouts.main')
@section('content')
<div class="hero hero-bg-image hero-slider-layout">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-slide">
                    <div class="hero-slider-image">
                        <img src="{{ asset('frontend/images/banner-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-slide">
                    <div class="hero-slider-image">
                        <img src="{{ asset('frontend/images/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-pagination"></div>
    </div>
</div>
<div class="our-scrolling-ticker p-relative">
    <h4 class="announcement"><i class="fa fa-bullhorn" aria-hidden="true"></i> Announcement</h4>
    <marquee class="marqe-scroll" onmouseover="this.stop();" onmouseout="this.start();"><span>Important
            notification regarding age relaxation in Non-Professional PG Courses.</span></marquee>
</div>



<div class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h4 class="team-message">Message from the Vice-Chancellor</h4>
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/HVC-GGV-Bilaspur.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Prof. Alok Kumar Chakrawal</h3>
                                            <p>Vice Chancellor</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>At Guru Ghasidas Vishwavidyalaya, we believe that education is not
                                            confined by walls but is an evolving journey that transcends boundaries.
                                            As a Central University with an esteemed NAAC A++ accreditation, we are
                                            dedicated to offering learning experiences that cater to diverse</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="#" class="readmore-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="team-message">Message from the Registrar</h4>
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/Prof-A-S-Ranadive.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Prof. A.S. Ranadive</h3>
                                            <p>Registrar</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>Welcome to Guru Ghasidas Vishwavidyalaya, where education meets
                                            innovation. As a Central University with an NAAC A++ Grade, we are
                                            committed to making quality learning accessible to everyone, regardless
                                            of geographical or professional constraints. The Centre for .</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="#" class="readmore-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="team-message">Message from the Director</h4>
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/ProfManishSirDirCDOE.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Prof. Manish Shrivastava</h3>
                                            <p>Director (CDOE)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>Greetings from the Centre for Distance and Online Education (CDOE) at
                                            Guru Ghasidas Vishwavidyalaya! As a Central University with an NAAC A++
                                            Grade, we take pride in our commitment to delivering quality education
                                            that meets the needs of a diverse and dynamic student population.</p>
                                    </div>
                                    <div class="service-btn">
                                        <a href="#" class="readmore-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us bg-abt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-images">
                    <div class="about-img-1">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/about-himachal.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="about-img-2">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/about-himachal-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="success-rating-box">
                        <div class="Success-rating-content">
                            <h2><span>A+</span> Grade</h2>
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
                            <img src="{{ asset('frontend/images/icons/NAAC-Accreditation.png') }}"
                                alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>NAAC Accreditation: A++ Grade</h3>
                            <p>Awarded A++ status by NAAC for excellence in evaluation criteria.</p>
                        </div>
                    </div>
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/UGC-Category-University.png') }}"
                                alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>UGC Category 1 University</h3>
                            <p>Recognized by UGC for academic autonomy and excellence.</p>
                        </div>
                    </div>
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/university-ranking.png') }}"
                                alt="">
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



<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="text-anime-style-3 text-white" data-cursor="-opaque">Our Programs</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('frontend/images/icons/bca.png') }}" alt="">
                    </div>
                    <div class="service-content">
                        <h3>BACHELOR OF COMPUTER APPLICATIONS</h3>
                        <p><b>Qualification:</b> 10 + 2</p>
                        <p><b>Duration:</b> 3 Years (6 Semesters)</p>
                    </div>
                    <div class="service-btn">
                        <a href="#" class="readmore-btn">Read More</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6">
                <div class="service-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('frontend/images/icons/bca.png') }}" alt="">
                    </div>
                    <div class="service-content">
                        <h3>BACHELOR OF COMPUTER APPLICATIONS</h3>
                        <p><b>Qualification:</b> 10 + 2</p>
                        <p><b>Duration:</b> 3 Years (6 Semesters)</p>
                    </div>
                    <div class="service-btn">
                        <a href="#" class="readmore-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('frontend/images/icons/bca.png') }}" alt="">
                    </div>
                    <div class="service-content">
                        <h3>BACHELOR OF COMPUTER APPLICATIONS</h3>
                        <p><b>Qualification:</b> 10 + 2</p>
                        <p><b>Duration:</b> 3 Years (6 Semesters)</p>
                    </div>
                    <div class="service-btn">
                        <a href="#" class="readmore-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('frontend/images/icons/bca.png') }}" alt="">
                    </div>
                    <div class="service-content">
                        <h3>BACHELOR OF COMPUTER APPLICATIONS</h3>
                        <p><b>Qualification:</b> 10 + 2</p>
                        <p><b>Duration:</b> 3 Years (6 Semesters)</p>
                    </div>
                    <div class="service-btn">
                        <a href="#" class="readmore-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="client-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-image">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/flexible-learning.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="client-body">
                        <div class="client--content">
                            <h3>Flexible Learning</h3>
                            <p>Access course materials anytime, anywhere, and study at your own pace</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="client-item wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="client-image">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/expert-faculty.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="client-body">
                        <div class="client--content">
                            <h3>Expert Faculty</h3>
                            <p>Learn from industry professionals and experienced educators.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="client-item wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="client-image">
                        <figure class="image-anime">
                            <img src="{{ asset('frontend/images/Accredited-Programs.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="client-body">
                        <div class="client--content">
                            <h3>Accredited Programs</h3>
                            <p>Earn globally recognized qualifications from our accredited courses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
