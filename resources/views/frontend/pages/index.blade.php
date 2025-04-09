@extends('frontend.layouts.main')
@push('styles')
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
    </style>
@endpush
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
        <marquee class="marqe-scroll" onmouseover="this.stop();" onmouseout="this.start();"><span>Approval from UGC DEB is
                awaited.</span></marquee>
    </div>




    <div class="our-testimonial">
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
                                            <a href="#" class="readmore-btn message_read_more">Read More</a>
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
                                            <a href="#" class="readmore-btn message_read_more">Read More</a>
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
                                                <h3>Dr. Vishal Sood</h3>
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
                                            <a href="#" class="readmore-btn message_read_more">Read More</a>
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
                                            <a href="#" class="readmore-btn message_read_more">Read More</a>
                                        </div>
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
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify">The Centre for
                                Distance and Online Education
                                (CDOE) is committed to providing high-quality, flexible learning opportunities to students
                                worldwide. Our innovative approach combines cutting-edge technology with expert instruction
                                to deliver an unparalleled educational experience.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify">At CDOE, we believe
                                that education should be
                                accessible to all, regardless of geographical location or personal circumstances. Our
                                programs are designed to accommodate diverse learning needs and schedules, enabling students
                                to pursue their academic goals while balancing work and personal commitments.</p>
                            <div class="service-btn">
                                <a href="{{ route('about-cdoe') }}" class="readmore-btn">Read More</a>
                            </div>
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

                <div class="col-lg-3 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
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
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
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
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/bca.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF COMPUTER APPLICATIONS (MCA)</h3>
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
                            <img src="{{ asset('frontend/images/icons/BACHELOR-OF-COMMERCE.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3>MASTER OF BUSINESS ADMINISTRATION (MBA)</h3>
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

    <div class="about-us bg-abt">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="text-anime-style-3" data-cursor="-opaque">Notifications</h3>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="tab-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link announc-tab active" id="v-pills-announcement-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-announcement" type="button"
                                role="tab" aria-controls="v-pills-announcement"
                                aria-selected="true">Learner
                                Notices</button>
                            <button class="nav-link announc-tab" id="v-pills-upcoming-event-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-upcoming-event" type="button" role="tab"
                                aria-controls="v-pills-upcoming-event" aria-selected="false">General
                                Circulars</button>
                            <button class="nav-link announc-tab" id="v-pills-office-notice-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-office-notice" type="button" role="tab"
                                aria-controls="v-pills-office-notice" aria-selected="false">Admission
                                Notices</button>
                            <button class="nav-link announc-tab" id="v-pills-student-notice-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-student-notice" type="button" role="tab"
                                aria-controls="v-pills-student-notice" aria-selected="false">Examination
                                Notices</button>
                           
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane tab-cont fade show active" id="v-pills-announcement" role="tabpanel"
                                aria-labelledby="v-pills-announcement-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Learner
                                            Noticess</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('notification.show', 'learner-notices') }}" class="btn-default f-right">View All</a>
                                    </div>
                                </div>
                                <marquee direction="up" width="100%" scrollamount="2" height="250"
                                    onmouseover="this.stop();" onmouseout="this.start();">
                                    <ul class="latest-news-ul slider">
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/2025040813285918b603ee91.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                List of Candidates called for Interview for the post of Controller of
                                                Examination</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachalnt.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2025 dated
                                                    04.04.2025</span>
                                                Apply online for the post of Finance Officer (Last Date: 04.05.2025)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202504031715095a6c4d6a89.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                List of candidates shortlisted for written test for the posts of (1)
                                                Medical Officer (Male) &amp; (2) Medical Officer (Female)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202504031439202d32752124.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2025 dated
                                                    04.04.2025</span>
                                                Important Notice No. 001/2025 dated 04.04.2025 for the post of Finance
                                                Officer</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250328114137f73e8efefa.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                List of Candidates called for Interview for the post of Professor,
                                                Department of Chemistry and Chemical Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250327092153fe7d3f0fca.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                List of Candidates called for Interview for various teaching positions
                                                (Phase-2): Revised Schedule</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250324162128df24e0551d.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Assistant and Field Investigators
                                                in ICSSR sponsored research project, Department of Sociology and Social
                                                Anthropology</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/2025032015501823ea6eddd7.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Important Notice dated 20.03.2025 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202503191845180690645233.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Important Notice dated 19.03.2025 for various Teaching Positions.</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/2025031818592475d54ec7ab.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                Status of Applications for the post of Controller of Examination</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250318185829badb5b8428.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Important Notice dated 18.03.2025 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503181752425036b28566.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Tender dated 18.03.2025 for providing Bus Services in the University</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025031716121516265591f3.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ for the Battery dispose off at CUHP</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503111656036b57b6af6d.jpg"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Result for the post of Research Assistant and Field Investigator, Centre
                                                for Promotion of Ecological Adventure Health and Cultural Tourism</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503111650094be715186d.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ for construction of approach road to parking ground with
                                                Interlocking Pavers near Dhauladhar Parisar-II, CUHP, Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025030820085860f001ad49.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Tender dated 08.03.2025 for providing Bus Services in the University</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250308110123353183d92f.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Tender dated 08.03.2025 for providing of Canteen Services in the
                                                University</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250306112202f976d4dbde.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                Status of Applications for the posts of (1) Medical Officer (Male) &amp;
                                                (2) Medical Officer (Female)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025030511403516fda3072b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding Online application for admission in Graduate &amp;
                                                Certificate Programs of Study for the Academic Session 2025-26</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250225212637493e693ea9.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notification dated 25.02.2025 for the Academic Calendar 2025-26</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502251849383ca4318e24.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Office Order regarding declaration of holiday on 26.02.2025 (Wednesday)
                                                in all University Campuses on the occasion of Shivaratri</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/2025022810374907eafeaf5d.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                List of Candidates called for Interview for various teaching positions
                                                (Phase-1)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502201155547bc79e59ec.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for recruitment of purely temporary/ lecture basis
                                                resource person in Centre for Tribal Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025021915551953dd363a01.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for recruitment of purely temporary/ lecture basis
                                                resource person in Department of Political Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250219123215b3cd9ccdee.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Retender dated 19.02.2025 for Providing Canteen Services</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/2025021414033109a7b2d969.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Important Notice dated 14.02.2025 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025020721135718142e1b1e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ for Installation and Commissioning of CCTV at Central University of
                                                Himachal Pradesh, Dehra Campuses and Devi Pitambra Women Hostel</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250207165745e438a9fbec.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Assistant (01) &amp; Field
                                                Investigator (02) in ICSSR sponsored major research project, Centre for
                                                Promotion for Ecological, Adventure, Health &amp; Cultural Tourism</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025020715502880d2ba19f7.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Special lecture organized by Centre for Deendayal Upadhyay Studies on
                                                the occasion of the Nirvana (Death Anniversary) of Pandit Deendayal
                                                Upadhyay Ji</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250206165616513c0fc341.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                Important Information: Syllabus of Written Exam for various Non-Teaching
                                                Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025020516542059757952ef.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Retender for "Providing Tent House Related Services and Ancillary Items
                                                on rental basis during All India Inter Zonal Weight Lifting (Women)
                                                Championship 2025", at Central University Of Himachal Pradesh,
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501281613339b01bfb160.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Corrigendum for "Providing Tent House Related Services and Ancillary
                                                Items on rental basis during All India Inter Zonal Weight Lifting
                                                (Women) Championship 2025", at Central University Of Himachal Pradesh,
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025012414475563b09191a3.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice for students absent in coaching course DACE</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250124144359649988793f.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Provisional Final Selection List for admission to coaching course DACE,
                                                Academic Session 2024-2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025012414432376ac17707b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Provisional Third Selection List for admission to coaching course DACE,
                                                Academic Session 2024-2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501241442598ea3c46372.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Provisional Second Selection List for admission to coaching course DACE,
                                                Academic Session 2024-2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501221611580e3d5cb709.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Important notice dated 22.01.2025 regarding DACE admissions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501221547483a570ff183.jpg"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Result for the post of Field Investigator (01) in ICSSR sponsored minor
                                                research project, Centre for Deen Dayal Upadhyay Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025012215452127c8dc02c0.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Corrigendum regarding NIQ for Fabrication of Office Cabin behind pantry
                                                at VC Secretariat and P&amp;F PVC Panelling in classroom of Dept. of
                                                English at Dhauladhar Parisar-1, CUHP, Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501201716304d68867230.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice Inviting Tender for Hiring of Boarding &amp; Lodging Facilities
                                                for 400 Students / Sportswomen &amp; Team Manager on Temporary Basis by
                                                Central University of Himachal Pradesh</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501181519397274d190fc.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIT for Providing Tent House Related Services and Ancillary Items on
                                                rental basis during All India Inter Zonal Weight Lifting (Women)
                                                Championship 2025, at Central University Of Himachal Pradesh,
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025011512433048302722a7.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Important notice dated 15.01.2025 regarding DACE admissions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501131649196ba21669d0.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding Revised Selection List for DACE 2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025011316463402b3326763.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding Regular Coaching Classes for DACE 2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250113112428ec44aa3f06.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                Important Information dated 13.01.2025 for the post of Deputy
                                                Registrar</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250110203107c463c33036.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIT for Providing of catering service during "All India Inter Zonal
                                                Weight Lifting (Women) Championship 2025” to be organised from February
                                                14-17, 2025 at Central University of Himachal Pradesh, Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501101417458668a71c65.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ for Fabrication of Office Cabin behind pantry at VC Secretariat and
                                                P&amp;F PVC Panelling in classroom of Dept. of English at Dhauladhar
                                                Parisar-1, CUHP, Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250110122937d21c851b3c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Provisional Selection List for admission to coaching course DACE,
                                                Academic Session 2024-2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250106114405191fd084a5.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding Online application for admission in PG Programmes, PG
                                                Diploma and Certificate Programs of Study for the Academic Session
                                                2025-26</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501031425513e6d9c97a6.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice for Document Verification of the candidates of Dr. Ambedkar
                                                Centre of Excellence</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501031425171a01de35d9.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Score/Result of Dr. Ambedkar Center of Excellence (DACE) Entrance Test
                                                2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025010311164020a67a07a7.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Score/Result of Ph.D Entrance Test- 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20250102164442f099e0ebe5.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Important Information dated 02.01.2025 regarding submission of hard copy
                                                of application form for various teaching positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241231195201b7bf9badab.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Circular regarding rescheduling the All India Inter Zonal Weightlifting
                                                (Women) Championship-2025 to be held in the University</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241231105208734266d27b.jpg"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Re-advertisement for the post of Field Investigator (01) in ICSSR
                                                sponsored minor research project, Centre for Deen Dayal Upadhyay
                                                Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024123015564238a8a92e23.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding the award of Gold Medal (Academic Session 2022-24)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412291219342b5add6057.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Answer Keys for DACE Examination- 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024122616341808b13337c8.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Revised answer Key for Ph.D. Entrance Test-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachaldaceadmission.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Download Admit Card for DACE-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20241224093949424f0f6ab5.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                FAQ of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202412240937251a48a234fe.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                User Manual of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://curec.samarth.ac.in/index.php/search/site/index"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Apply Online</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20241224093304922be7ee21.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 003/2024 dated
                                                    24.12.2024</span>
                                                Important Notice No. 003/2024 dated 24.12.2024 for various Teaching
                                                Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412221352467669481adb.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice for objection to Answer Keys for Ph.D. Entrance Test-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024122213521473a01c8b6b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Answer Keys for Ph.D. Entrance Test-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241217160041099f52fe82.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                GeM Bid for procurement of Entry and Mid Level Desktop Computer</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412171559573e86ce2b2a.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                GeM Bid for procurement of High End Desktop Computer</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241212124613a9c783376d.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Department of Economics Organizing Ten Days Workshop on “Research
                                                Methodology Course in Social Sciences” on Jan 03-12, 2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412061722144789cde786.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Walk-in-Interview for ICSSR sponsored major research project, Department
                                                of Commerce</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411291357252089c0b126.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Important Notice for DACE Admission 2024-25</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachalnt.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                Apply online for Non-Teaching Recruitment (Last Date: 22.12.2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411221544287a2b2ce6dd.jpg"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notification for Two months Internship Programme under DST-SERB-SSR
                                                (Project), Department of Plant Sciences.</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20241121151610c373d7894d.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002/2024 dated
                                                    22.11.2024</span>
                                                Employment Notice No. 002/2024 dated 22.11.2024 for various Non-Teaching
                                                Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241114120149ade33b10d9.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Associate (01), Research
                                                Assistant (01) and Field Investigator (03) in ICSSR sponsored major
                                                research project, Department of Commerce</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411280903492c79fb7820.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Admission notice for UPSC/SPSC Coaching (2024-25) by Dr. Ambedkar Center
                                                of Excellence</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024110617195632f108ed8c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Examination result of Himachal Pradesh Kendriya Vishvvidyalaya Shodh
                                                Patrata Priksha (HPKVSPP-2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241029185725687ea11521.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Revised Answer Keys-Himachal Pradesh Kendriya Vishwavidyalaya Shodh
                                                Patrata Pariksha (HPKVSPP-2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241027134052654aa36d65.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice Regarding Objection to Answer Keys (HPKVSPP 2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024102713392929b4bcc4fb.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Answer Keys-Himachal Pradesh Kendriya Vishwavidyalaya Shodh Patrata
                                                Pariksha (HPKVSPP-2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241025113342dbcafab48a.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Walk-in-Interview for the post of Project Assistant in Himachal Pradesh
                                                Forest Department, funded research project, Department of Animal
                                                Science</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachaladm.samarth.edu.in/hpkvspp/index.php/site/login"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Click Here to Download Admit Card for HPKVSPP-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202410211314067b4c526bb4.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Circular regarding postponement of the 8th Convocation of Central
                                                University of Himachal Pradesh</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241001123250b9d0990329.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Re-advertisement for the post of Project Assistant in Himachal Pradesh
                                                State Biodiversity Board Shimla, funded research project, Department of
                                                Animal Science</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240927181651c6d0e1eb04.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 27.09.2024 regarding Final Select List of
                                                Candidates for Group 'B' &amp; Group 'C' Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240921125011ce591c051c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 21.09.2024 regarding list of Candidates
                                                called for Document Verification for the posts (1) Security Officer and
                                                (2) Security Inspector</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240918164730f1dbc63b61.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 18.09.2024 regarding list of Candidates
                                                called for Document Verification for the post of Laboratory
                                                Assistant</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240919123101b8b5de1a58.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Special Online lecture series on the occasion of the birth anniversary
                                                of Pandit Deendayal Upadhyay (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240917183447d43a5248b0.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 17.09.2024 regarding list of Candidates
                                                called for Document Verification for the post of Upper Division Clerk
                                                and Lower Division Clerk</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202409131429246f45afb63b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 13.09.2024 regarding clarification for Skill
                                                Test (Driving Test) for the post of (1) Security Officer &amp; (2)
                                                Security Inspector</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240912154705092a5d459e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 12.09.2024 regarding list of Candidates
                                                called for Document Verification for various Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202409101546099efbb26f37.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 10.09.2024 regarding list of Candidates
                                                called for Skill Test (Driving Test) for the post of (1) Security
                                                Officer &amp; (2) Security Inspector</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240906185355cea06a8304.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                List of Candidates called for Interview for various teaching positions
                                                (Phase-3)</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202409051800552d3696eb5b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Information dated 05.09.2024 regarding list of Candidates
                                                called for Skill Test for various Non-Teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024083016420600616d9bbe.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Assistant &amp; Field
                                                Investigator in ICSSR sponsored major research project, Centre for
                                                Kashmir Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240830104531460c1d1339.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Monthly Online Lecture Series, Centre for Deendayal Upadhyaya Studies,
                                                Dated: 30.08.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202408291747554b82db1cdb.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding fill the vacant seats for admission in UG,
                                                Postgraduate, Postgraduate Diploma &amp; Certificate level (Academic
                                                Session 2024-25), Dated: 29.08.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240823104323b964e4e352.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Students' Grievance Redressal Committee</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024082212000253bc5c820e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Interview call letter for the post of Senior Research Fellow (01) and
                                                Field Assistant (02) under NMHS project, Department of Environmental
                                                Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202408161106535ccfd3f9b9.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Important Notice dated 16.08.2024 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024081311372593cc74f26e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ regarding Electrical works at CUHP, Parisar- Shahpur</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240813103024f4bab12e20.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Field Investigator (01) in ICSSR sponsored
                                                minor research project, Centre for Deen Dayal Upadhyay Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240808115110de5de09db1.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding filling the vacant seats for admission in Postgraduate,
                                                Postgraduate Diploma &amp; Certificate level, Academic Session 2024-25,
                                                Dated 08.08.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240807163818455f65882f.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Result for the Post of Field Investigator (02) under ICSSR funded Major
                                                Research Project, Department of Education</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024073117401692654142ea.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ for Repair of old toilets and rooms allotted to CUHP by Govt. Boys
                                                School near Dhauladhar Parisar-II, Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240730160004e8b0850ccb.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding Hostel Admission (Academic Batch 2024-25)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240716172520cc1728e081.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Important Information dated 16.07.2024 regarding extension of validity
                                                of Employment Notice No. 001/2024 dated 17.01.2024</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202407101934128aee56eaa6.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Revised Notice regarding Walk-in Interview for the Post of Field
                                                Investigator (02) under ICSSR funded Major Research Project, Department
                                                of Education</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240704213612fa6314cc17.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Walk-in Interview for the Post of Field Investigator (02) under ICSSR
                                                funded Major Research Project, Department of Education</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240628185330d770fff5e4.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Personal Interview for the Post of Research Associate under ICSSR funded
                                                Research Project, Department of Sociology and Social Anthropology</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240626111722cb108da6c6.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Associate in ICSSR Sponsored
                                                minor research project, Centre for Yoga Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202406251259229ad76b020e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                List of Candidates called for Interview for various teaching positions
                                                (Phase-2)</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240625125857f7096e706f.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Final Status of Applications for (1) Department of Library and
                                                Information Sciences and (2) Department of Punjabi and Dogri</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024062811092484fd14d717.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Personal Interview for the Post of Research Assistant (01) and Field
                                                Investigator (02) under ICSSR funded Research Project, Department of
                                                Economics (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240613134316dcabf25561.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Senior Research Fellow and Field Assistant
                                                NMHS-funded Small Grant (SG) project, Department of Environmental
                                                Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240613093111c1c5f521bb.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Associate in ICSSR Sponsored
                                                minor research project, Department of Sociology and Social
                                                Anthropology</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240612183406ef5bc43ea1.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Walk-in Interview for the Post of Field Investigator under ICSSR funded
                                                Minor Research Project (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240610173215440e7fa952.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Important Notice dated 10.06.2024 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202406101509027ee0366601.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding willing to take admission in Postgraduate, Postgraduate
                                                Diploma &amp; Certificate level Programmes (Academic Session 2024-25)
                                                Dated: 10.06.2024</a>
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachalcuet.samarth.edu.in/pg/" target="_blank"
                                                role="link">
                                                <font color="red">
                                                    Click here for Registration </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240607104820bebb44cd79.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Associate in the ICSSR Project
                                                under the Department of Library and Information Science</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202406041736455880c09be2.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice regarding admission to Under Graduate, Post Graduate, Post
                                                Graduate Diploma and Certificate Programmes of Study (Non CUET),
                                                Academic Session 2024-25</a>
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachaladm.samarth.edu.in/index.php/site/index"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    Click here for Registration </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240531125519288698c98c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                ICSSR-NWRC Sponsored Two Days National Seminar on Commerce &amp;
                                                Technology in 21st Century: Nurturing Sustainable Business (26-27
                                                June)</a>
                                            <!-- For Sub content data -->
                                            <a href="https://forms.gle/WR9Jew6MKnRjAUvh6" target="_blank"
                                                role="link">
                                                <font color="red">
                                                    Click here for Registration </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024052216053925a562d21c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Revised Dates to Remember for PG, PG Diploma and Certificate Programmes
                                                (Academic Session 2024-25), Dated; 22.05.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024052116432973c21e5546.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Prospectus for admission to UG/ PG/ PhD/ PG Diploma/ Certificate
                                                Programmes of Study for Academic Session 2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202405201557112d20192229.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                National Conference on Frontiers in Chemical and Biological Sciences
                                                (FCBS-2024), Department of Chemistry &amp; Chemical Sciences</a>
                                            <!-- For Sub content data -->
                                            <a href="https://sites.google.com/view/fcbs-2024/" target="_blank"
                                                role="link">
                                                <font color="red">
                                                    Click here to visit microsite for National Conference, FCBS-2024
                                                    (Dated: 29th &amp; 30th May, 2024) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240509155127a88647325b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                National Confrence on Modern Society-Direction and Challenges : Aspiring
                                                Responses from Swami Vivekananda, Department of Sociology and Social
                                                Anthropology</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024041914480895bbf34746.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Online Short Term Course on “Research Methodology for Social Sciences”
                                                Dated 10-06-2024 to 15-06-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240404133252f816fb208e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notification of the Academic Calendar 2024-25 dated 04.04.2024</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240326181656308279d9f3.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                One day national seminar on Padmashree Prof. Harmohinder Singh Bedi's
                                                autobiography 'लेखे आवे भाग', Department of Punjabi &amp; Dogri</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240311140828fa901130f9.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                A two-day (18-19 March 2024) national seminar is being organized by
                                                Centre for Deen Dayal Upadhyay Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240311134359b7f39d419c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Himachal Pradesh Science Congress ( HPSC ) on 'Role of Science,
                                                Technology &amp; Innovation in achieving Sustainable Development
                                                Goals'</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024030815574865cd3f5db4.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Project Assistant in Himachal Pradesh
                                                State Biodiversity Board Shimla, funded research project, Department of
                                                Animal Science</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202403021037447eab3c64d5.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Revised Advertisement for the post of one Research Assistant and two
                                                Field Investigator (purely on temporary/ contract basis) in ICSSR
                                                Sponsored Research Project, Department of Economics</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://exams.nta.ac.in/CUREC/images/Syllabus_Stage2_Notice_CURE2023-24.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Syllabus for Stage-II (Descriptive Type) paper for Central University
                                                Recruitment examination 2023-24 (CURE-2023-24) and tentative schedule of
                                                exam</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202402161457590d16843462.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                List of Candidates called for Interview for various teaching positions
                                                (Phase-1)</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024021516512853c0620555.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Project Assistant under Himalayan Life
                                                Science Society, Department of Animal Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202402131736163d477ad34a.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Important Notice dated 13.02.2024 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://nta.ac.in/Download/Notice/Notice_20240202163052.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Display of Provisional Answer Key(s) and Question Papers with Recorded
                                                Responses for Inviting Challenges to the Provisional Answer Key(s) for
                                                CURE 2023 (Non-Teaching Group B &amp; Group C Posts) conducted on 25
                                                January 2024</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202401301447294fc74c9130.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Corrigendum/ Addendum for Extension in last date of bid submission for
                                                Tender no. SD/1-1/CUHP/2024/NIT-2</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240130094331adaec3ddb6.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                GeM bid for Furniture Purchase</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240125101605ca3de0e346.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Addendum/Corrigendum dated 24.01.2024 for various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240127145400dfc22d00bb.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">EOI 001/2024 dated 24.01.2024</span>
                                                EOI No. 001/2024 dated 24.01.2024 for Engagement of Eminent
                                                Professor</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240122161313e4bee11a3c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice Inviting Tender for "Providing of catering service during All
                                                India Inter Zonal Weight Lifting (Women) Championship” to be organised
                                                from February 7-9, 2024 at Central University of Himachal Pradesh,
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240119165253c507119955.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Notice Inviting Tender for Hiring of Boarding &amp; Lodging Facilities
                                                for 420 Students / Sportswomen &amp; Team Manager / Contingent Incharges
                                                on Temporary Basis by Central University of Himachal Pradesh</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024011916474476ff3f0121.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIT for " Providing Tent House Related Services and Ancillary Items
                                                during All India Inter Zonal Weight Lifting (Women) Championship at
                                                Central University Of Himachal Pradesh, Dharamshala"</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240117170454f3fecc5f00.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Important Notice for Non-Teaching Recruitment in Central University of
                                                Himachal Pradesh through NTA</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://curec.samarth.ac.in/index.php/search/site/index"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Apply Online</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20240116155700ab464e4ac5.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2024</span>
                                                Employment Notice No. 001/2024 dated 17.01.2024 for various Teaching
                                                Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240111175632975fcc401c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                NIQ for Fabrication of Aluminium cabin for HoD, Dept. of Computer
                                                Science and Informatics at Shahpur Parisar of CUHP</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202401101532251387d64d26.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                GeM Bid for procurement of Desktops, External Webcam, Monochrome
                                                Laserjet Printers, Monochrome MFP and Oflline UPS 600VA Dated
                                                10.01.2024"</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240108165856cd25c6dc4b.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Advertisement for the post of Research Assistant (purely on temporary/
                                                contract basis) in ICSSR sponsored research project, Department of
                                                Himachal Pradesh Kendriya Vishwavidyalaya Business School</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>
                                        <li>
                                            <a href="https://exams.nta.ac.in/CUREC/images/HPCU-IB.pdf" target="_blank"
                                                role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 002</span>
                                                Employment Notice No.002/2023 for various Non-Teaching positions through
                                                NTA</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2023120422461548812148c1.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Tender for Hiring of Bus Services on GeM Portal</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2023120417164189020f58a4.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                Tender for hiring of Housekeeping &amp; General Services on GeM
                                                Portal</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20230904133317abf26d1776.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2023 dated
                                                    15.06.2023</span>
                                                List of Candidates called for Interview for various teaching positions
                                                (Phase-2)</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20230824170032d9ccd9aa48.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2023 dated
                                                    15.06.2023</span>
                                                List of Candidates called for Interview for various teaching
                                                positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/2023081818414838b140ab3e.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2023 dated
                                                    15.06.2023</span>
                                                Important Notice dated 18.08.2023 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202308082331340c6f0fc8b5.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2023 dated
                                                    15.06.2023</span>
                                                Important Information dated 08.08.2023 for various teaching
                                                positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/20230717194432ce8ed8557c.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2023 dated
                                                    15.06.2023</span>
                                                Addendum regarding addition in qualification for the posts advertised in
                                                (1) Centre for Kashmir Studies</a>
                                            <!-- For Sub content data -->
                                        </li>
                                        <li>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/job/202302241457339645af9d26.pdf"
                                                target="_blank" role="link">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                <!-- Display advertisement_no here in red -->
                                                <span style="color:red;">Employment Notice No. 001/2023 Dated:
                                                    (03.02.2023)</span>
                                                Office order regarding withdrawal of advertisement for various
                                                Non-Teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>
                                    </ul>


                                </marquee>
                            </div>
                            <div class="tab-pane fade tab-cont" id="v-pills-upcoming-event" role="tabpanel"
                                aria-labelledby="v-pills-upcoming-event-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>General
                                            Circulars</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('notification.show', 'general-circulars') }}" class="btn-default f-right">View All</a>
                                    </div>
                                </div>
                                <marquee direction="up" width="100%" scrollamount="2" height="250"
                                    onmouseover="this.stop();" onmouseout="this.start();">
                                    <ul class="latest-news-ul nostyle">
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025020715502880d2ba19f7.pdf"
                                                target="_blank" role="link">Special lecture organized by Centre for
                                                Deendayal Upadhyay Studies on the occasion of the Nirvana (Death
                                                Anniversary) of Pandit Deendayal Upadhyay Ji</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250123213056356c65b4ce.pdf"
                                                target="_blank" role="link">Special lecture is being organized by
                                                Center
                                                for Deendayal Upadhyay Study on the occasion of University
                                                Foundation</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025012316542017cd5acf9a.jpeg"
                                                target="_blank" role="link">Centre for Yoga Studies organize a
                                                workshop
                                                on the occasion of University Foundation Day on 24.01.2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250120101415d90451d602.jpeg"
                                                target="_blank" role="link">Special lecture organized by Center for
                                                Deendayal Upadhyay Study on the occasion of University Foundation
                                                Day</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241231195201b7bf9badab.pdf"
                                                target="_blank" role="link">Circular regarding rescheduling the All
                                                India Inter Zonal Weightlifting (Women) Championship-2025 to be held in
                                                the University</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241212124613a9c783376d.pdf"
                                                target="_blank" role="link">Department of Economics Organizing Ten
                                                Days
                                                Workshop on “Research Methodology Course in Social Sciences” on Jan
                                                03-12, 2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411271633361366046f68.pdf"
                                                target="_blank" role="link">Notice regarding guest lecture organized
                                                by
                                                Srinivasa Ramanujan Mathematics Department on 29.11.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240919123101b8b5de1a58.pdf"
                                                target="_blank" role="link">Special Online lecture series on the
                                                occasion of the birth anniversary of Pandit Deendayal Upadhyay
                                                (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240830104531460c1d1339.pdf"
                                                target="_blank" role="link">Monthly Online Lecture Series, Centre for
                                                Deendayal Upadhyaya Studies, Dated: 30.08.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240531125519288698c98c.pdf"
                                                target="_blank" role="link">ICSSR-NWRC Sponsored Two Days National
                                                Seminar on Commerce &amp; Technology in 21st Century: Nurturing
                                                Sustainable Business (26-27 June)</a>
                                            <!-- For Sub content data -->
                                            <a href="https://forms.gle/WR9Jew6MKnRjAUvh6" target="_blank"
                                                role="link">
                                                <font color="red">
                                                    Click here for Registration </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202405201557112d20192229.pdf"
                                                target="_blank" role="link">National Conference on Frontiers in
                                                Chemical
                                                and Biological Sciences (FCBS-2024), Department of Chemistry &amp;
                                                Chemical Sciences</a>
                                            <!-- For Sub content data -->
                                            <a href="https://sites.google.com/view/fcbs-2024/" target="_blank"
                                                role="link">
                                                <font color="red">
                                                    Click here to visit microsite for National Conference, FCBS-2024
                                                    (Dated: 29th &amp; 30th May, 2024) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240509155127a88647325b.pdf"
                                                target="_blank" role="link">National Confrence on Modern
                                                Society-Direction and Challenges : Aspiring Responses from Swami
                                                Vivekananda, Department of Sociology and Social Anthropology</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240426110107b87c64e680.pdf"
                                                target="_blank" role="link">Organization of the 7th convocation of
                                                the
                                                university dated 06.05.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024041914480895bbf34746.pdf"
                                                target="_blank" role="link">Online Short Term Course on “Research
                                                Methodology for Social Sciences” Dated 10-06-2024 to 15-06-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240326181656308279d9f3.pdf"
                                                target="_blank" role="link">One day national seminar on Padmashree
                                                Prof.
                                                Harmohinder Singh Bedi's autobiography 'लेखे आवे भाग', Department of
                                                Punjabi &amp; Dogri</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240311140828fa901130f9.pdf"
                                                target="_blank" role="link">A two-day (18-19 March 2024) national
                                                seminar is being organized by Centre for Deen Dayal Upadhyay Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240311134359b7f39d419c.pdf"
                                                target="_blank" role="link">Himachal Pradesh Science Congress ( HPSC
                                                )
                                                on 'Role of Science, Technology &amp; Innovation in achieving
                                                Sustainable Development Goals'</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024020514022166b9038aa0.pdf"
                                                target="_blank" role="link">Notice regarding ICSSR-sponsored two-day
                                                National Seminar on "Gilgit-Baltistan: Excavating Roots, Exploring
                                                Routes" on 15-16 March 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                    </ul>
                                </marquee>
                            </div>
                            <div class="tab-pane fade tab-cont" id="v-pills-office-notice" role="tabpanel"
                                aria-labelledby="v-pills-office-notice-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Admission
                                            Notices</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('notification.show', 'admission-notices') }}" class="btn-default f-right">View All</a>
                                    </div>
                                </div>
                                <marquee direction="up" width="100%" scrollamount="2" height="250"
                                    onmouseover="this.stop();" onmouseout="this.start();">
                                    <ul class="latest-news-ul nostyle">
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202504021436022db1dabf03.pdf"
                                                target="_blank" role="link">Important information regarding
                                                implementation of committee for PM-Vidyalakshmi Scheme</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250318115030741be7552d.pdf"
                                                target="_blank" role="link">Office order related to implementation of
                                                various modules of SAMARTH Portal in the university</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250225212637493e693ea9.pdf"
                                                target="_blank" role="link">Notification dated 25.02.2025 for the
                                                Academic Calendar 2025-26</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502251849383ca4318e24.pdf"
                                                target="_blank" role="link">Office Order regarding declaration of
                                                holiday on 26.02.2025 (Wednesday) in all University Campuses on the
                                                occasion of Shivaratri</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502201155547bc79e59ec.pdf"
                                                target="_blank" role="link">Advertisement for recruitment of purely
                                                temporary/ lecture basis resource person in Centre for Tribal
                                                Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025021915551953dd363a01.pdf"
                                                target="_blank" role="link">Advertisement for recruitment of purely
                                                temporary/ lecture basis resource person in Department of Political
                                                Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250115113727bab66c5922.pdf"
                                                target="_blank" role="link">Notice regarding change in local holiday
                                                in
                                                Dehra subdivision of Kangra district</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025011315143306c98b12a0.pdf"
                                                target="_blank" role="link">Office order regarding the local holidays
                                                to
                                                be celebrated in the Central University of Himachal Pradesh during the
                                                year 2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241231194816e6537f70fe.pdf"
                                                target="_blank" role="link">Office order regarding the formation of a
                                                committee for celebrating the Foundation Week in the University from 20
                                                January 2025 to 26 January 2025 and for its successful and smooth
                                                organization</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412311242518e04a144d4.pdf"
                                                target="_blank" role="link">Office Order regarding the appointment of
                                                Honorary Director of the Publication Center for academic level books and
                                                other publishing works of the University</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412191641543fec0757a2.pdf"
                                                target="_blank" role="link">Notice regarding holidays to be observed
                                                in
                                                University during the year 2025</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412112020045fd2f8455c.pdf"
                                                target="_blank" role="link">Regarding Combined Institutional
                                                Membership
                                                of AIMA</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241122172009ca3cab04ef.pdf"
                                                target="_blank" role="link">Employment Notice No. 002/2024 dated
                                                22.11.2024 for various Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachalnt.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    Apply online for Non-Teaching Recruitment (Last Date: 22.12.2024)
                                                </font>
                                            </a>
                                            |
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024052116432973c21e5546.pdf"
                                                target="_blank" role="link">Prospectus for admission to UG/ PG/ PhD/
                                                PG
                                                Diploma/ Certificate Programmes of Study for Academic Session
                                                2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240404133252f816fb208e.pdf"
                                                target="_blank" role="link">Notification of the Academic Calendar
                                                2024-25 dated 04.04.2024</a>
                                            <!-- For Sub content data -->
                                        </li>

                                    </ul>
                                </marquee>

                            </div>
                            <div class="tab-pane fade tab-cont" id="v-pills-student-notice" role="tabpanel"
                                aria-labelledby="v-pills-student-notice-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Examination
                                            Notices</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="{{ route('notification.show', 'examination-notices') }}" class="btn-default f-right">View All</a>
                                    </div>
                                </div>
                                <marquee direction="up" width="100%" scrollamount="2" height="250"
                                    onmouseover="this.stop();" onmouseout="this.start();">
                                    <ul class="latest-news-ul nostyle">
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250404125136f6d042caa2.pdf"
                                                target="_blank" role="link">Provisional Fourth Selection List of PG,
                                                Second Semester Academic Batch (2024-2025) for Mehar Chand Mahajan Men's
                                                Hostel</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202504021655418dd0bce900.pdf"
                                                target="_blank" role="link">Notice regarding collection of bus fare
                                                for
                                                the month of April, 2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202504021436022db1dabf03.pdf"
                                                target="_blank" role="link">Important information regarding
                                                implementation of committee for PM-Vidyalakshmi Scheme</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202504021003243a73b66f66.pdf"
                                                target="_blank" role="link">Notice regarding filling of F-grade form
                                                for
                                                end semester examination June 2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250401203205d51f43a566.pdf"
                                                target="_blank" role="link">Notice for providing free-ship/fee
                                                exemption
                                                for the year 2024-25, School of Life Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025032811435397b1c89450.pdf"
                                                target="_blank" role="link">Important information regarding Bus Time
                                                table during Mid Term Exam (01st April to 10th April 2025)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250319115900fb7e9ec705.pdf"
                                                target="_blank" role="link">Notice regarding the bus fares to be
                                                charged
                                                from 16 January to 31 March 2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250313114836be0f9ffa74.pdf"
                                                target="_blank" role="link">Provisional second selection list of PhD
                                                (Academic Batch 2024-2025), for Mehar Chand Mahajan Mens' Hostel,
                                                Kangra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250312123359fb5dc7f764.pdf"
                                                target="_blank" role="link">Notice regarding Mid Semester Examination
                                                of
                                                Academic Year 2024-25 Spring Semester of PhD Pedagogy of Teaching
                                                Learning Process (PTLP)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503121233042af551403b.pdf"
                                                target="_blank" role="link">Notice regarding Mid Semester Examination
                                                of
                                                Academic Year 2024-25 Spring Semester 2,4,6 &amp; 8 IDC &amp; IKS</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503121230289567343076.pdf"
                                                target="_blank" role="link">Notice regarding Mid Semester Exam of
                                                Academic Year 2024-25 Spring Semester 2,4,6,8 &amp; PhD Course Work</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025031116593606093640aa.pdf"
                                                target="_blank" role="link">Notice for providing free-ship/fee
                                                exemption
                                                for the year 2024-25, School of Journalism &amp; Mass Communication</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250310211607fe99bac345.pdf"
                                                target="_blank" role="link">Notice for providing free-ship/fee
                                                exemption
                                                for the year 2024-25, School of Languages</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250310195427cbafd2cbc2.pdf"
                                                target="_blank" role="link">Information dated 10.03.2025 regarding
                                                payment of fees of spring semester (January to June, 2025) of students
                                                and research scholars through online mode</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025030616060653f75a9b6b.pdf"
                                                target="_blank" role="link">Provisional Third selection list of PG
                                                Second Semester (Academic Batch 2024-2025) for Sharda Girls' Hostel
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503031352170748fdbc2f.pdf"
                                                target="_blank" role="link">Notice for Hostel fees, Spring semester
                                                (January to June, 2025)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250228152050f7b8ee72fc.pdf"
                                                target="_blank" role="link">Revised List of Courses offered to PhD
                                                Mathematics, 1st semester (Course Work), Spring Semester-2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250228124729f462a26423.pdf"
                                                target="_blank" role="link">Provisional Third selection list of PG
                                                (Academic Batch 2024-2025) for Mehar Chand Mahajan Mens' Hostel,
                                                Kangra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250225212637493e693ea9.pdf"
                                                target="_blank" role="link">Notification dated 25.02.2025 for the
                                                Academic Calendar 2025-26</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502251849383ca4318e24.pdf"
                                                target="_blank" role="link">Office Order regarding declaration of
                                                holiday on 26.02.2025 (Wednesday) in all University Campuses on the
                                                occasion of Shivaratri</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250225161220d6d8b4e477.pdf"
                                                target="_blank" role="link">Provisional Second selection list of PG
                                                (Academic Batch 2024-2025) for Mehar Chand Mahajan Mens' Hostel,
                                                Kangra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250220171132433549913f.pdf"
                                                target="_blank" role="link">Provisional First selection list of PG
                                                (Academic Batch 2024-2025) for Mehar Chand Mahajan Mens' Hostel,
                                                Kangra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502201708500406030a27.pdf"
                                                target="_blank" role="link">Provisional First selection list of PhD
                                                (Academic Batch 2024-2025) for Mehar Chand Mahajan Mens' Hostel,
                                                Kangra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502201707434dfb23ce5b.pdf"
                                                target="_blank" role="link">Provisional First selection list of PhD
                                                (Academic Batch 2024-2025) for Devi Pitambara Girls' Hostel, Dehra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250220170558a7dad7d368.pdf"
                                                target="_blank" role="link">Provisional First selection list of
                                                PhD(Academic Batch 2024-2025) for Sharda Girls' Hostel Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502191553293cabc13bec.pdf"
                                                target="_blank" role="link">List of Pre Ph.D. Courses offered for
                                                Ph.D.
                                                batch-2024, Department of Plant Sciences,</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025021912375657334c01a7.pdf"
                                                target="_blank" role="link">Office order regarding submission of
                                                academic certificate, Centre for Computational Biology &amp;
                                                Bioinformatics</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025021814203332e54c710e.pdf"
                                                target="_blank" role="link">Provisional Second selection list of PG
                                                Second Semester (Academic Batch 2024-2025) for Sharda Girls' Hostel
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250218113652624fe500dd.pdf"
                                                target="_blank" role="link">Notice regarding F-Grade for PhD SWAYAM
                                                courses</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502181132426e1423a022.pdf"
                                                target="_blank" role="link">Information regarding starting of course
                                                work for PhD scholars (Batch 2024), Centre for Deendayal Upadhyay
                                                Studies</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202502131037247148a57a55.pdf"
                                                target="_blank" role="link">Hostel Admission for Newly admitted
                                                Research
                                                Scholars' Academic Batch (2024-2025)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025021112102841402af66c.pdf"
                                                target="_blank" role="link">List of Courses offered to Ph.D. Computer
                                                Science and Informatics, 1st semester (Course Work), 2024 batch for the
                                                Spring Semester</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250211102426a095232169.pdf"
                                                target="_blank" role="link">Provisional First selection list of PG
                                                Second Semester (Academic Batch 2024-2025) for Devi Pitambara Girls'
                                                Hostel Dehra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250210151537a4fa94408e.pdf"
                                                target="_blank" role="link">Provisional First selection list of PG
                                                Second Semester (Academic Batch 2024-2025) for Sharda Girls' Hostel
                                                Dharamshala</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250207203035940307a432.pdf"
                                                target="_blank" role="link">List of Courses offered to PhD
                                                Mathematics,
                                                1st semester (Course Work), Spring Semester-2025</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250131133346ff224daab8.pdf"
                                                target="_blank" role="link">Notice for Hostel Admission Academic
                                                Batch
                                                (2024-2025) for Sharda Girls' Hostel and Devi Pitambara Girls'
                                                Hostel</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025012714294864f3256600.pdf"
                                                target="_blank" role="link">List of Interdisciplinary Courses offered
                                                to
                                                M.Sc. Chemistry (2nd Semester), Batch-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025012414475563b09191a3.pdf"
                                                target="_blank" role="link">Notice for students absent in coaching
                                                course DACE</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501201014511e460525ba.jpeg"
                                                target="_blank" role="link">Special lecture organized by Center for
                                                Deendayal Upadhyay Study on the occasion of University Foundation
                                                Day</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250117201813cd9cf0509a.pdf"
                                                target="_blank" role="link">List of Interdisciplinary Courses offered
                                                to
                                                M.Sc. Plant Sciences (2nd Semester), Batch-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501172014045533161c03.pdf"
                                                target="_blank" role="link">List of Courses offered to M.Sc. Plant
                                                Sciences (4th Semester), Batch-2023</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250117201233886592066b.pdf"
                                                target="_blank" role="link">List of Courses offered to M.Sc. Plant
                                                Sciences (2nd Semester), Batch-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501161631037734dd1327.pdf"
                                                target="_blank" role="link">Notice regarding Celebration of the
                                                Foundation Week of CUHP and National Mathematics Day - 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501161203114bb5550f95.pdf"
                                                target="_blank" role="link">List of Courses offered to M.Sc.
                                                Mathematics
                                                (4th Semester), Batch-2023 (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250116120130a336c9603c.pdf"
                                                target="_blank" role="link">List of Courses offered to M.Sc.
                                                Mathematics
                                                (2nd semester), Batch-2024 (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202501131649196ba21669d0.pdf"
                                                target="_blank" role="link">Notice regarding Revised Selection List
                                                for
                                                DACE 2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025011316463402b3326763.pdf"
                                                target="_blank" role="link">Notice regarding Regular Coaching Classes
                                                for DACE 2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025010915433637a8ac3752.pdf"
                                                target="_blank" role="link">Notice regarding submission of
                                                proofs/certificates/letters of delivered lectures/presentations for the
                                                Course Code: CVMS 104, Certificate Course in Vedic Mathematics</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025010915411564f23c1829.pdf"
                                                target="_blank" role="link">List of Courses offered to M.Sc.
                                                Mathematics
                                                (4th Semester), Batch-2023</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024123015564238a8a92e23.pdf"
                                                target="_blank" role="link">Notice regarding the award of Gold Medal
                                                (Academic Session 2022-24)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241224164114132805f053.pdf"
                                                target="_blank" role="link">List of Courses offered to MCA (4th
                                                semester), Batch-2023</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412241639395ce556d284.pdf"
                                                target="_blank" role="link">List of Courses offered to MCA (2nd
                                                semester), Batch-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024122416385438fe41e164.pdf"
                                                target="_blank" role="link">List of Courses offered to M.Sc.
                                                Mathematics
                                                (2nd semester), Batch-2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412191641543fec0757a2.pdf"
                                                target="_blank" role="link">Notice regarding holidays to be observed
                                                in
                                                University during the year 2025</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024120412550391902a50ba.pdf"
                                                target="_blank" role="link">Notice regarding Bus Time Table during
                                                End
                                                Term exam (05th December to 21st December 2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241129171231d909ce0c3c.pdf"
                                                target="_blank" role="link">Circular regarding Golden Chance Dated
                                                26.11.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241128164847ae8ed84d2a.pdf"
                                                target="_blank" role="link">Important Notice regarding Golden Chance
                                                Dated 28.11.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241128145838c2fa3aace8.pdf"
                                                target="_blank" role="link">Viva Voce Examination MCA (3rd Semester),
                                                December 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241128145633c1a12225e7.pdf"
                                                target="_blank" role="link">Viva Voce Examination MCA (1st Semester),
                                                December 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024112716335276de1fb444.pdf"
                                                target="_blank" role="link">Notice regarding guest lecture organized
                                                by
                                                Srinivasa Ramanujan Mathematics Department on 29.11.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024112716273416f8476f4e.pdf"
                                                target="_blank" role="link">Viva Voce Examination M.Sc. Mathematics
                                                (3rd
                                                Semester), November 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241127155348e0c3ff94ac.pdf"
                                                target="_blank" role="link">Important Notice regarding F-Grade
                                                Examination, December 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241126115422cdc196b01b.pdf"
                                                target="_blank" role="link">Notice regarding End Term Examination of
                                                Monsoon Semester, December 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411182018187b19d81b6d.pdf"
                                                target="_blank" role="link">Notification regarding Golden Chance,
                                                Dated:
                                                18.11.2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411280903492c79fb7820.pdf"
                                                target="_blank" role="link">Admission notice for UPSC/SPSC Coaching
                                                (2024-25) by Dr. Ambedkar Center of Excellence</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202411041426423f67287511.pdf"
                                                target="_blank" role="link">Notice regarding Yog Trials for AIU
                                                Games</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241025110207000dfb8100.pdf"
                                                target="_blank" role="link">Notice regarding extension of two days
                                                (from
                                                28 October 2024 to 29 October 2024) for filling F-Grade Examination</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202410221429140959b2bf5e.jpg"
                                                target="_blank" role="link">Notice regarding Sports Activities</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202410211314067b4c526bb4.pdf"
                                                target="_blank" role="link">Circular regarding postponement of the
                                                8th
                                                Convocation of Central University of Himachal Pradesh</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024101416463698ff706100.pdf"
                                                target="_blank" role="link">Notice of Registration for 8th
                                                Convocation
                                                of CUHP to be held on 11th &amp; 12th November, 2024</a>
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachal.samarth.edu.in/convocation" target="_blank"
                                                role="link">
                                                <font color="red">
                                                    Click here for Registration (Last Date: 25.10.2024) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024100413050922907cf885.pdf"
                                                target="_blank" role="link">Notice regarding Mid Semester Examination
                                                of
                                                Academic Year 2024- 25, Monsoon First, Third, Fifth &amp; Seventh
                                                Semester</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240923164250ce364cd423.pdf"
                                                target="_blank" role="link">Notice regarding filling of F-grade form
                                                for
                                                end semester examination December 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024092015420206a365de22.pdf"
                                                target="_blank" role="link">Corrigendum regarding Anti Ragging Squad
                                                for
                                                the academic session (2024-25)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024091812084692cea50183.pdf"
                                                target="_blank" role="link">Notice for Hostel fees Winter semester
                                                (August to December, 2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202409241129420061b0f9bd.pdf"
                                                target="_blank" role="link">Information dated 17.09.2024 regarding
                                                payment of fees of monsoon semester (July to December, 2024) of students
                                                and research scholars through online mode (Revised)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202409091720219d64beec45.pdf"
                                                target="_blank" role="link">Provisional First selection list of PG
                                                Third
                                                Semester for Mehar Chand Mahajan Mens' Hostel Kangra</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024090311425113f0e8bee5.pdf"
                                                target="_blank" role="link">Notice regarding charging bus fees from
                                                September to December, 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240823104323b964e4e352.pdf"
                                                target="_blank" role="link">Students' Grievance Redressal
                                                Committee</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202408141649051d5e9bd344.pdf"
                                                target="_blank" role="link">Notice regarding Bus Fees UG (3rd &amp;
                                                5th
                                                Semester), PG (3rd Semester) and PhD Scholars' for August to December
                                                2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Courses offered by Department of Computer Science &amp; Informatics,
                                            Academic Session 2024-25 <!-- For Sub content data -->
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240805112009ed911680fc.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    MCA (3rd Semester) </font>
                                            </a>
                                            | <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240805111911423375982b.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    MCA (1st Semester) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Courses offered by Department of Plant Sciences, Academic Session 2024-25
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202408021324414ee65a5e82.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    Interdisciplinary Course </font>
                                            </a>
                                            | <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202408021324412c439d552a.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    M.Sc. Plant Science (3rd Semester) </font>
                                            </a>
                                            | <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240802132441822b47a13c.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    M.Sc. Plant Science (1st Semester) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Courses offered by Srinivasa Ramanujan Department of Mathematics, Academic
                                            Session 2024-25 <!-- For Sub content data -->
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024080213202422803302bd.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    M.Sc. Mathematics (3rd Semester) </font>
                                            </a>
                                            | <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202408021320246464d09719.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    M.Sc. Mathematics (1st Semester) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Courses offered by Department of Animal Sciences, Academic Session 2024-25
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240802131816b665ffd988.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    Interdisciplinary Course </font>
                                            </a>
                                            | <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240802131716bdf4be6d38.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    M.Sc. Zoology (3rd Semester) </font>
                                            </a>
                                            | <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240802131716df793526c8.pdf"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    M.Sc. Zoology (1st Semester) </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240731204052ed4c04c5b3.pdf"
                                                target="_blank" role="link">Anti Ragging Committee 2024</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240730160004e8b0850ccb.pdf"
                                                target="_blank" role="link">Notice regarding Hostel Admission
                                                (Academic
                                                Batch 2024-25)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202406101506517c5bf22f66.pdf"
                                                target="_blank" role="link">Notice regarding Hostel Admission for
                                                newly
                                                admitted PG Students (Academic session 2024-25)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202406041736455880c09be2.pdf"
                                                target="_blank" role="link">Notice regarding admission to Under
                                                Graduate, Post Graduate, Post Graduate Diploma and Certificate
                                                Programmes of Study (Non CUET), Academic Session 2024-25</a>
                                            <!-- For Sub content data -->
                                            <a href="https://cuhimachaladm.samarth.edu.in/index.php/site/index"
                                                target="_blank" role="link">
                                                <font color="red">
                                                    Click here for Registration </font>
                                            </a>
                                            | <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024052116432973c21e5546.pdf"
                                                target="_blank" role="link">Prospectus for admission to UG/ PG/ PhD/
                                                PG
                                                Diploma/ Certificate Programmes of Study for Academic Session
                                                2024-25</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240404133252f816fb208e.pdf"
                                                target="_blank" role="link">Notification of the Academic Calendar
                                                2024-25 dated 04.04.2024</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025040813285918b603ee91.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                the post of Controller of Examination</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachalnt.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">Apply online for the post of Finance
                                                Officer
                                                (Last Date: 04.05.2025)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202504031715095a6c4d6a89.pdf"
                                                target="_blank" role="link">List of candidates shortlisted for
                                                written
                                                test for the posts of (1) Medical Officer (Male) &amp; (2) Medical
                                                Officer (Female)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202504031439202d32752124.pdf"
                                                target="_blank" role="link">Important Notice No. 001/2025 dated
                                                04.04.2025 for the post of Finance Officer</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250328114137f73e8efefa.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                the post of Professor, Department of Chemistry and Chemical Sciences</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250327092153fe7d3f0fca.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions (Phase-2): Revised Schedule</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025032015501823ea6eddd7.pdf"
                                                target="_blank" role="link">Important Notice dated 20.03.2025 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202503191845180690645233.pdf"
                                                target="_blank" role="link">Important Notice dated 19.03.2025 for
                                                various Teaching Positions.</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025031818592475d54ec7ab.pdf"
                                                target="_blank" role="link">Status of Applications for the post of
                                                Controller of Examination</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250318185829badb5b8428.pdf"
                                                target="_blank" role="link">Important Notice dated 18.03.2025 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250306112202f976d4dbde.pdf"
                                                target="_blank" role="link">Status of Applications for the posts of
                                                (1)
                                                Medical Officer (Male) &amp; (2) Medical Officer (Female)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025022810374907eafeaf5d.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions (Phase-1)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2025021414033109a7b2d969.pdf"
                                                target="_blank" role="link">Important Notice dated 14.02.2025 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250206165616513c0fc341.pdf"
                                                target="_blank" role="link">Important Information: Syllabus of
                                                Written
                                                Exam for various Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250113112428ec44aa3f06.pdf"
                                                target="_blank" role="link">Important Information dated 13.01.2025
                                                for
                                                the post of Deputy Registrar</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20250102164442f099e0ebe5.pdf"
                                                target="_blank" role="link">Important Information dated 02.01.2025
                                                regarding submission of hard copy of application form for various
                                                teaching positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241224093949424f0f6ab5.pdf"
                                                target="_blank" role="link">FAQ of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202412240937251a48a234fe.pdf"
                                                target="_blank" role="link">User Manual of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://curec.samarth.ac.in/index.php/search/site/index"
                                                target="_blank" role="link">Apply Online</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241224093304922be7ee21.pdf"
                                                target="_blank" role="link">Important Notice No. 003/2024 dated
                                                24.12.2024 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachalnt.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">Apply online for Non-Teaching Recruitment
                                                (Last Date: 22.12.2024)</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20241121151610c373d7894d.pdf"
                                                target="_blank" role="link">Employment Notice No. 002/2024 dated
                                                22.11.2024 for various Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                            <img class="padding-none border-none"
                                                src="https://cuhimachal.ac.in/asset/images/new1.gif" height="11"
                                                width="26">
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240927181651c6d0e1eb04.pdf"
                                                target="_blank" role="link">Important Information dated 27.09.2024
                                                regarding Final Select List of Candidates for Group 'B' &amp; Group 'C'
                                                Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240921125011ce591c051c.pdf"
                                                target="_blank" role="link">Important Information dated 21.09.2024
                                                regarding list of Candidates called for Document Verification for the
                                                posts (1) Security Officer and (2) Security Inspector</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240918164730f1dbc63b61.pdf"
                                                target="_blank" role="link">Important Information dated 18.09.2024
                                                regarding list of Candidates called for Document Verification for the
                                                post of Laboratory Assistant</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240917183447d43a5248b0.pdf"
                                                target="_blank" role="link">Important Information dated 17.09.2024
                                                regarding list of Candidates called for Document Verification for the
                                                post of Upper Division Clerk and Lower Division Clerk</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202409131429246f45afb63b.pdf"
                                                target="_blank" role="link">Important Information dated 13.09.2024
                                                regarding clarification for Skill Test (Driving Test) for the post of
                                                (1) Security Officer &amp; (2) Security Inspector</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240912154705092a5d459e.pdf"
                                                target="_blank" role="link">Important Information dated 12.09.2024
                                                regarding list of Candidates called for Document Verification for
                                                various Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202409101546099efbb26f37.pdf"
                                                target="_blank" role="link">Important Information dated 10.09.2024
                                                regarding list of Candidates called for Skill Test (Driving Test) for
                                                the post of (1) Security Officer &amp; (2) Security Inspector</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240906185355cea06a8304.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions (Phase-3)</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202409051800552d3696eb5b.pdf"
                                                target="_blank" role="link">Important Information dated 05.09.2024
                                                regarding list of Candidates called for Skill Test for various
                                                Non-Teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202408161106535ccfd3f9b9.pdf"
                                                target="_blank" role="link">Important Notice dated 16.08.2024 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240716172520cc1728e081.pdf"
                                                target="_blank" role="link">Important Information dated 16.07.2024
                                                regarding extension of validity of Employment Notice No. 001/2024 dated
                                                17.01.2024</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202406251259229ad76b020e.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions (Phase-2)</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240625125857f7096e706f.pdf"
                                                target="_blank" role="link">Final Status of Applications for (1)
                                                Department of Library and Information Sciences and (2) Department of
                                                Punjabi and Dogri</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240610173215440e7fa952.pdf"
                                                target="_blank" role="link">Important Notice dated 10.06.2024 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://exams.nta.ac.in/CUREC/images/Syllabus_Stage2_Notice_CURE2023-24.pdf"
                                                target="_blank" role="link">Syllabus for Stage-II (Descriptive Type)
                                                paper for Central University Recruitment examination 2023-24
                                                (CURE-2023-24) and tentative schedule of exam</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202402161457590d16843462.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions (Phase-1)</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202402131736163d477ad34a.pdf"
                                                target="_blank" role="link">Important Notice dated 13.02.2024 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://nta.ac.in/Download/Notice/Notice_20240202163052.pdf"
                                                target="_blank" role="link">Display of Provisional Answer Key(s) and
                                                Question Papers with Recorded Responses for Inviting Challenges to the
                                                Provisional Answer Key(s) for CURE 2023 (Non-Teaching Group B &amp;
                                                Group C Posts) conducted on 25 January 2024</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240125101605ca3de0e346.pdf"
                                                target="_blank" role="link">Addendum/Corrigendum dated 24.01.2024 for
                                                various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240127145400dfc22d00bb.pdf"
                                                target="_blank" role="link">EOI No. 001/2024 dated 24.01.2024 for
                                                Engagement of Eminent Professor</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240117170454f3fecc5f00.pdf"
                                                target="_blank" role="link">Important Notice for Non-Teaching
                                                Recruitment in Central University of Himachal Pradesh through NTA</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2024011616320145b903159d.pdf"
                                                target="_blank" role="link">FAQ of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240116163144946185a5b0.pdf"
                                                target="_blank" role="link">User Manual of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://curec.samarth.ac.in/index.php/search/site/index"
                                                target="_blank" role="link">Apply Online</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20240116155700ab464e4ac5.pdf"
                                                target="_blank" role="link">Employment Notice No. 001/2024 dated
                                                17.01.2024 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://exams.nta.ac.in/CUREC/images/HPCU-IB.pdf" target="_blank"
                                                role="link">Employment Notice No.002/2023 for various Non-Teaching
                                                positions through NTA</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230904133317abf26d1776.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions (Phase-2)</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230824170032d9ccd9aa48.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2023081818414838b140ab3e.pdf"
                                                target="_blank" role="link">Important Notice dated 18.08.2023 for
                                                various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202308082331340c6f0fc8b5.pdf"
                                                target="_blank" role="link">Important Information dated 08.08.2023
                                                for
                                                various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230717194432ce8ed8557c.pdf"
                                                target="_blank" role="link">Addendum regarding addition in
                                                qualification
                                                for the posts advertised in (1) Centre for Kashmir Studies</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202307072110365d31559af4.pdf"
                                                target="_blank" role="link">Corrigendum regarding addition in
                                                qualification for the posts advertised in (1) Centre for Deen Dayal
                                                Upadhyay Studies, (2) Centre for Ambedkar Studies &amp; (3) Centre for
                                                Kashmir Studies</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2023070620291319ee27cabf.pdf"
                                                target="_blank" role="link">Corrigendum dated 06.07.2023 regarding
                                                extension of last date of receipt of applications for various teaching
                                                positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230704172649882b2a906d.pdf"
                                                target="_blank" role="link">Important Information regarding extension
                                                of
                                                last date of receipt of applications for various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://curec.samarth.ac.in/index.php/search/site/index"
                                                target="_blank" role="link">Apply Online</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230615203710dd1aa59010.pdf"
                                                target="_blank" role="link">FAQ of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230615203530d83cdd6c3a.pdf"
                                                target="_blank" role="link">User Manual of CU Chayan Portal</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230616130006e24a318eea.pdf"
                                                target="_blank" role="link">Employment Notice No. 001/2023 dated
                                                15.06.2023 for various Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230509171610abdd44630f.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                the post of Assistant Professor, Department of Computer Science and
                                                Informatics</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230428102838c63c237161.pdf"
                                                target="_blank" role="link">Important information dated 28.04.2023
                                                for
                                                the post of Assistant Professor, Department of Computer Science and
                                                Informatics</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202302241457339645af9d26.pdf"
                                                target="_blank" role="link">Office order regarding withdrawal of
                                                advertisement for various Non-Teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachalnt.samarth.edu.in/index.php/site/login"
                                                target="_blank" role="link">Submit online application for
                                                Non-Teaching
                                                Recruitment (Last Date: 09.03.2022)</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/202302061539367d8c69e292.pdf"
                                                target="_blank" role="link">Employment Notice No. 001/2023 dated
                                                03.02.2023 for various Non-Teaching Positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230116151401f4f0884956.pdf"
                                                target="_blank" role="link">Important Notice dated 16.01.2023
                                                regarding
                                                teaching recruitment-2022</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/2023011217012929c57de999.pdf"
                                                target="_blank" role="link">Important information dated
                                                12.01.2023&nbsp;for the post of Professor &amp; Associate Professor,
                                                Department of HPKV Business School</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230105150752a03a256914.pdf"
                                                target="_blank" role="link">List of Candidates called for Interview
                                                for
                                                various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/20230105150401dd32c5b9d0.pdf"
                                                target="_blank" role="link">Important information dated
                                                20.12.2022&nbsp;for&nbsp;various teaching positions</a>
                                            <!-- For Sub content data -->
                                        </li>

                                    </ul>
                                </marquee>

                            </div>
                            <div class="tab-pane fade tab-cont" id="v-pills-news-letter" role="tabpanel"
                                aria-labelledby="v-pills-news-letter-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>News Letter</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" class="btn-default f-right">View All</a>
                                    </div>
                                </div>
                                <marquee direction="up" width="100%" scrollamount="2" height="250"
                                    onmouseover="this.stop();" onmouseout="this.start();">
                                    <ul class="latest-news-ul nostyle">

                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/Newsletter_Volume_VIII_1.pdf"
                                                target="_blank" role="link">धौलाधार संदेश त्रैमासिक | अंक : 8 | जनवरी
                                                -
                                                मई 2024
                                            </a>

                                        </li>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/Newsletter_Volume_IX.pdf"
                                                target="_blank" role="link">Dhauladhar Sandesh News Letter | Volume :
                                                9
                                                | June - September 2024</a>
                                        </li>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            <a href="https://cuhimachal.ac.in/admin/assets/uploads/docs/Newsletter_Volume_X.pdf"
                                                target="_blank" role="link">Dhauladhar Sandesh News Letter | Volume :
                                                10
                                                | October - December 2024</a>
                                        </li>

                                    </ul>
                                </marquee>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- JavaScript for Read More/Less functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all read more buttons
            const readMoreBtns = document.querySelectorAll('.message_read_more');

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
@endpush
