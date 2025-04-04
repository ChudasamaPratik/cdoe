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
        <marquee class="marqe-scroll" onmouseover="this.stop();" onmouseout="this.start();"><span>Approval from UGC DEV
                Aviated.</span></marquee>
    </div>




    <div class="our-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <h4 class="team-message">Message from the Chancellor </h4>
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/team/chancellor.gif') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Prof. (Dr.) Harmohinder Singh Bedi</h3>
                                                <p>Chancellor</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod
                                                officiis incidunt aut est delectus, quibusdam nemo sequi blanditiis.
                                                Quisquam in delectus eaque atque provident, sit nemo inventore dolore ea
                                                ipsam quas voluptatem suscipit rerum quod illum fugiat veritatis?
                                                Placeat voluptatum maxime vero sunt doloremque.</p>
                                        </div>
                                        <!-- <div class="service-btn">
                                                                                                                    <a href="#" class="readmore-btn">Read More</a>
                                                                                                                </div> -->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <h4 class="team-message">Message from the Vice Chancellor </h4>
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/team/vc.png') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Prof. (Dr.) Sat Prakash Bansal</h3>
                                                <p>Vice Chancellor</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod
                                                officiis incidunt aut est delectus, quibusdam nemo sequi blanditiis.
                                                Quisquam in delectus eaque atque provident, sit nemo inventore dolore ea
                                                ipsam quas voluptatem suscipit rerum quod illum fugiat veritatis?
                                                Placeat voluptatum maxime vero sunt doloremque.</p>
                                        </div>
                                        <!-- <div class="service-btn">
                                                                                                                    <a href="#" class="readmore-btn">Read More</a>
                                                                                                                </div> -->
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <h4 class="team-message">Message from the Director </h4>
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/team/director-about.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Sh. Sanjay Kumar Singh</h3>
                                                <p>Director</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod
                                                officiis incidunt aut est delectus, quibusdam nemo sequi blanditiis.
                                                Quisquam in delectus eaque atque provident, sit nemo inventore dolore ea
                                                ipsam quas voluptatem suscipit rerum quod illum fugiat veritatis?
                                                Placeat voluptatum maxime vero sunt doloremque.</p>
                                        </div>
                                        <!-- <div class="service-btn">
                                                                                                                    <a href="#" class="readmore-btn">Read More</a>
                                                                                                                </div> -->
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <h4 class="team-message">Message from the Registrar </h4>
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/team/registrar.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Prof. Suman Sharma
                                                </h3>
                                                <p>Registrar</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod
                                                officiis incidunt aut est delectus, quibusdam nemo sequi blanditiis.
                                                Quisquam in delectus eaque atque provident, sit nemo inventore dolore ea
                                                ipsam quas voluptatem suscipit rerum quod illum fugiat veritatis?
                                                Placeat voluptatum maxime vero sunt doloremque.</p>
                                        </div>
                                        <!-- <div class="service-btn">
                                                                                                                    <a href="#" class="readmore-btn">Read More</a>
                                                                                                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="testimonial-pagination text-center swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span
                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
                role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
                role="button" aria-label="Go to slide 4"></span>
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
                                (CDOE) is committed to providing high-quality, flexible learning opportunities to students
                                worldwide. Our innovative approach combines cutting-edge technology with expert instruction
                                to deliver an unparalleled educational experience.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At CDOE, we believe that education should be
                                accessible to all, regardless of geographical location or personal circumstances. Our
                                programs are designed to accommodate diverse learning needs and schedules, enabling students
                                to pursue their academic goals while balancing work and personal commitments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="process-step-no">
                            <img src="{{ asset('frontend/images/icons/UGC-DEB-Entitled.png')}}" alt="">
                        </div>
                        <div class="process-step-content">
                            <h3>UGC DEB Entitled</h3>
                            <p>Recognized by UGC DEB for Online Education Programs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="process-step-no">
                            <img src="{{ asset('frontend/images/icons/NAAC-Accreditation.png')}}" alt="">
                        </div>
                        <div class="process-step-content">
                            <h3>NAAC Accreditation: A+ Grade</h3>
                            <p>Awarded A+ status by NAAC for excellence in evaluation criteria.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="process-step-no">
                            <img src="{{ asset('frontend/images/icons/UGC-Category-University.png')}}" alt="">
                        </div>
                        <div class="process-step-content">
                            <h3>UGC Category 2 University</h3>
                            <p>Recognized by UGC for academic autonomy and excellence.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="process-step-no">
                            <img src="{{ asset('frontend/images/icons/university-ranking.png')}}" alt="">
                        </div>
                        <div class="process-step-content">
                            <h3>Univesity Rankings</h3>
                            <p>The university holds numerous national and international rankings, showcasing its excellence
                                and reputation globally.</p>
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
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/BACHELOR-OF-COMMERCE.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>BACHELOR OF COMMERCE (HONS)</h3>
                            <p><b>Qualification:</b> 10 + 2</p>
                            <p><b>Duration:</b> 3 Years (6 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/BACHELOR-OF-LIBRARY-INFORMATION-SCIENCE.png') }}"
                                alt="">
                        </div>
                        <div class="service-content">
                            <h3>BACHELOR OF LIBRARY & INFORMATION SCIENCE</h3>
                            <p><b>Qualification:</b> Bachelor's</p>
                            <p><b>Duration:</b> 1 year (2 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/MASTER-OF-SOCIAL-WORK.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF SOCIAL WORK</h3>
                            <p><b>Qualification:</b> Bachelor's</p>
                            <p><b>Duration:</b> 2 Years (4 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/BACHELOR-OF-LIBRARY-INFORMATION-SCIENCE.png') }}"
                                alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF LIBRARY & INFORMATION SCIENCES</h3>
                            <p><b>Qualification:</b> B. Lib.I. Sc</p>
                            <p><b>Duration:</b> 1 year (2 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.10s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/POLITICAL-SCIENCE.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF ARTS (POLITICAL SCIENCE)</h3>
                            <p><b>Qualification:</b> Bachelor's</p>
                            <p><b>Duration:</b> 2 Years (4 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.12">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/economic.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF ARTS (ECONOMICS)</h3>
                            <p><b>Qualification:</b> Bachelor's</p>
                            <p><b>Duration:</b> 2 Years (4 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.14s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/history.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF ARTS (HISTORY)</h3>
                            <p><b>Qualification:</b> Bachelor's</p>
                            <p><b>Duration:</b> 2 Years (4 Semesters)</p>
                        </div>
                        <div class="service-btn">
                            <a href="course-details.html" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
