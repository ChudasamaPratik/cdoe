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
        <!-- CSS Styles for text justification and read-more functionality -->
        <style>
            .testimonial-body p {
                text-align: justify;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                /* Show only 3 lines initially */
                -webkit-box-orient: vertical;
                margin-bottom: 10px;
            }

            .testimonial-body p.expanded {
                display: block;
                -webkit-line-clamp: unset;
            }

            .service-btn {
                text-align: right;
                margin-top: 10px;
            }

            .readmore-btn {
                display: inline-block;
                color: #007bff;
                cursor: pointer;
                font-weight: 500;
                text-decoration: none;
            }

            .readmore-btn:hover {
                text-decoration: underline;
            }
        </style>

        <!-- Modified HTML Structure with read-more buttons -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- First slide -->
                                <div class="swiper-slide">
                                    <h4 class="team-message">Message from the Chancellor </h4>
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/team/Pic_Chancellor.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Prof. (Dr.) Harmohinder Singh Bedi</h3>
                                                <p>Chancellor</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>Delighted to experience a proud moment when I came to know that the Central
                                                University of Himachal Pradesh (CUHP) is drawing its efforts for the
                                                professionals for their skill up-gradation and providing access to such
                                                youth who have little
                                                or no access to the higher education. For reaching the unreached, the CUHP
                                                has
                                                established Centre for Distance and Online Education (CDOE) for offering its
                                                academic programmes through online learning (OL) mode. In the today's fast
                                                growing world, online learning and distance learning is the best way to
                                                kill, reskill and up-skill our youth and enable them to lead a better life.
                                                I am fully sure that the CUHP will continue its endeavours of providing
                                                quality higher education through its ODL and OL programmes of CDOE by
                                                ensuring inclusive access and equity as has been emphasized in our Indian
                                                Constitution and National Education Policy-2020. I extend my best wishes to
                                                CDOE for such noble efforts.</p>
                                        </div>
                                        <div class="service-btn">
                                            <a href="#" class="readmore-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second slide -->
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
                                            <p>Considering the vital significance of the Goal of "Viksit Bharat@2047" and
                                                moving ahead on the path of vision enshrined in National Education
                                                Policy-2020, I
                                                feel extreme pride that our university Central University of Himachal
                                                Pradesh
                                                (CUHP), Dharamshala has stepped into a new era of offering academic
                                                programmes at
                                                higher level through online learning (OL) mode. The NEP-2020 talks about
                                                increasing
                                                the access to higher education and improving GER at higher level to 50% by
                                                2040.
                                                The current GER at higher level is much low and the programmes through open
                                                and
                                                distance mode and online learning mode can play a major role in realizing
                                                this target. To add an Aahuti (contribution) to this 'National Yajna', our
                                                University has
                                                established Centre for Distance and Online Education (CDOE) which shall
                                                offer various higher education academic programmes through ODL and OL mode.
                                                Our
                                                university has been accredited with A+ Grade and has been accorded Graded
                                                Autonomy by UGC. We have been working seamlessly to create a sturdy network
                                                of national and global partnerships with higher education institutions,
                                                research organizations and industries. The university has undertaken many
                                                significant
                                                steps for quality enhancement in higher education and as a result of such
                                                efforts,
                                                significant achievements have also been made by the university. In the array
                                                of such steps, offering of Online Learning (OL) programmes through CDOE is a
                                                major
                                                breakthrough that will provide the opportunities to the students belonging
                                                to socially disadvantageous classes of the society and those in remote areas
                                                have very
                                                limited representation in higher education. Our mission is to reach the
                                                unreached
                                                and provide educational facilities to poorer and weaker sections of the
                                                society.
                                                Additionally, we are also eyeing on global learners, professional workers to
                                                take advantage of such OL programmes. Online Learning has been accepted as
                                                an
                                                effective way of learning and with the IT and ICT enabled facilities such as
                                                virtual class rooms, e-tutorials etc. We, at CDOE, have established online
                                                LMS for
                                                offering online programmes. We have established state of the art media lab
                                                and
                                                computer centres for offering online programmes. the provision for e-SLM,
                                                video
                                                lectures, OERs and live discussion forums will create such e-learning
                                                environment that
                                                will remain memorable for the learners of CDOE. Being the Host as Head of
                                                the
                                                University, I extend a very warm welcome to all our prospective learners of
                                                CDOE and hope that you will cherish the experiences that you will receive
                                                through
                                                CDOE during your academic programme.</p>
                                        </div>
                                        <div class="service-btn">
                                            <a href="#" class="readmore-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Third slide -->
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
                                            <p>Never denying a fact that learning at a distance through online mode is the
                                                need of the hour. The educational sector has largely got influenced by
                                                technological
                                                advancements and IT and ICT services to offer various academic programmes
                                                have become a necessity at present. The NEP-2020 calls for leveraging
                                                advantages
                                                of technology through ICT based educational initiatives to optimize its use
                                                in
                                                meeting challenges of quality education. In order to serve education at the
                                                door
                                                steps of the learners and translating the mantra of 'Learn while Earn' into
                                                reality
                                                through the use of IT and ICT facilities, the Centre for Distance and Online
                                                Education
                                                (CDOE) has been established in the Central University of Himachal Pradesh to
                                                provide
                                                learners with flexible learning opportunities. We are providing educational
                                                opportunities to the learners who wish to enhance their educational and
                                                professional
                                                qualifications. The CDOE follows choice-based credit system (CBCS) in its
                                                programmes and adopts
                                                modular approach for transacting its curriculum. The curriculum offered by
                                                CDOE competes with world class HEIs so as to make the learners competent to
                                                portray their capabilities and skills on a global platform. We at CDOE offer
                                                a blend
                                                of innovative learning and teaching techniques to enhance professional
                                                skills
                                                and competence of the learners. I invite the learners to have such global
                                                academic and professional experiences at CDOE, CUHP and enjoy your academic
                                                journey with
                                                our dedicated faculty and organization.</p>
                                        </div>
                                        <div class="service-btn">
                                            <a href="#" class="readmore-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fourth slide -->
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
                                                <h3>Prof. Suman Sharma</h3>
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

        <!-- JavaScript for Read More/Less functionality -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all read more buttons
                const readMoreBtns = document.querySelectorAll('.readmore-btn');

                // Add click event to each button
                readMoreBtns.forEach(function(btn) {
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();

                        // Get the parent testimonial item
                        const testimonialItem = this.closest('.testimonial-item');

                        // Get the paragraph in the testimonial body
                        const paragraph = testimonialItem.querySelector('.testimonial-body p');

                        // Toggle expanded class
                        paragraph.classList.toggle('expanded');

                        // Change button text based on current state
                        if (paragraph.classList.contains('expanded')) {
                            this.textContent = 'Read Less';
                        } else {
                            this.textContent = 'Read More';
                        }
                    });
                });
            });
        </script>
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
                            <img src="{{ asset('frontend/images/icons/UGC-DEB-Entitled.png') }}" alt="">
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
                            <img src="{{ asset('frontend/images/icons/NAAC-Accreditation.png') }}" alt="">
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
                            <img src="{{ asset('frontend/images/icons/UGC-Category-University.png') }}" alt="">
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
                            <img src="{{ asset('frontend/images/icons/university-ranking.png') }}" alt="">
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
