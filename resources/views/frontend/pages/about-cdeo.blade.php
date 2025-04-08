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
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">About</a></li>
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
                            <figure>
                                <img src="{{ asset('frontend/images/about-himachal.jpg') }}" alt="CDOE Campus"
                                    class="img-fluid">
                            </figure>
                        </div>
                        <div class="about-img-2">
                            <figure>
                                <img src="{{ asset('frontend/images/about-himachal-1.jpg') }}" alt="CDOE Activities"
                                    class="img-fluid">
                            </figure>
                        </div>
                        <div class="success-rating-box">
                            <div class="Success-rating-content">
                                <h2><span>A+</span> Grade</h2>
                                <p>NAAC Accreditation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">About CDOE</h2>
                            <div class="about-content wow fadeInUp" data-wow-delay="0.2s">
                                <p>The Centre for Distance and Online Education (CDOE) is an integral part of the Central
                                    University of Himachal Pradesh (CUHP), Dharamshala (HP)-INDIA established by Government
                                    of India under Central Universities Act 2009.</p>

                                <p>The CDOE was established in the year 2025 with the main aim of improving inclusive access
                                    and equity in the field of higher education as has been enunciated in the Constitution
                                    of India. The CDOE is headed by the Director with fully dedicated administrative team
                                    for its smooth functioning.</p>

                                <h3>Our Approvals & Recognition</h3>
                                <p>The CDOE has approval from University Grants Commission-Distance Education Bureau
                                    (UGC-DEB) to offer academic programmes through online learning (OL) mode.</p>

                                <h3>Our Mission</h3>
                                <p>The CDOE emphasizes on providing quality higher education at the doorsteps of those who
                                    have either been traditionally deprived of such opportunities due to socio-economic
                                    reasons or were not able to complete their higher education due to professional and
                                    personal engagements.</p>
                                <p>The CDOE attempts to provide flexible and innovative modes of education to ensure
                                    'independent learning' to anyone, anytime and anywhere at their own pace and
                                    convenience, and promotes the principle of 'Learn while Earn' as has been emphasized in
                                    National Education Policy (NEP)-2020.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="about-content wow fadeInUp" data-wow-delay="0.2s">
                        <h3>Academic Programs</h3>
                        <p>The Centre is presently offering Online Learning (OL) programmes at Post Graduate level.
                            These OL programmes have been tailored to meet the learning requirements of knowledge
                            seekers, professionals and socio-economically deprived individuals who wish to upgrade
                            their educational status.</p>

                        <p>The CDOE follows the same curriculum which is being offered in face-to-face academic
                            programmes of CUHP. The CDOE offers a wide range of courses which will help in enhancing
                            the skills of the learners.</p>

                        <h3>Innovative Curriculum</h3>
                        <p>For this purpose, skill-oriented courses, practical-based courses, market-oriented
                            courses, profession-based courses, industry-driven courses, research-oriented courses
                            and internship/field work have been made integral components of different programmes.
                        </p>

                        <p>The CDOE also offers courses on Bhartiya (Indian) Knowledge System (IKS) and
                            value-oriented courses to imbibe the learners with different values and pride in being a
                            'Bhartiya' by spirit, thoughts, intellect and deeds.</p>

                        <h3>Affordability & Teaching Methodology</h3>
                        <p>The OL programmes offered by the CDOE are affordable for the aspirants both in terms of
                            finance and time required to be invested for completing the studies.</p>

                        <p>The CDOE adopts a diversity of instructional strategies ranging from e-self learning
                            material (e-SLM), video lectures, Audio podcasts, live discussion forums, interactive
                            sessions, e-tutorials to use of open educational resources (OERs), online lectures and
                            seminars by field experts etc.</p>

                        <h3>Facilities & Support Services</h3>
                        <p>The CDOE has fully equipped ICT laboratory and state of the art computer centre to offer
                            online programmes of highest quality.</p>

                        <p>The CDOE has a fully dedicated academic team comprising of programme coordinators, course
                            coordinators, course mentors and dedicated faculty members for providing academic
                            support services to the learners.</p>

                        <p>An exclusive technical team has been constituted by CDOE for providing learner support
                            services from pre-admission stage to the stage of final award of degree to the learners.
                        </p>

                        <h3>Degree Equivalence & Vision</h3>
                        <p>The degrees/diplomas awarded by CDOE through OL mode are equivalent to the degrees
                            offered through conventional mode.</p>

                        <p>The CDOE is fully committed to provide the learners with such learning experiences and
                            exposure that will improve their personal and professional life in a manner which will
                            help them in contributing towards the vision of "Viksit Bharat@2047".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-process section-padding">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Our Recognitions & Achievements</h2>
                <p>CDOE is proud to be recognized by various educational authorities</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="process-step-no">
                            <img src="{{ asset('frontend/images/icons/UGC-DEB-Entitled.png') }}" alt="UGC DEB Icon">
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
                            <img src="{{ asset('frontend/images/icons/NAAC-Accreditation.png') }}" alt="NAAC Icon">
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
                            <img src="{{ asset('frontend/images/icons/UGC-Category-University.png') }}"
                                alt="UGC Category Icon">
                        </div>
                        <div class="process-step-content">
                            <h3>UGC Category 2 University</h3>
                            <p>Recognized by UGC for academic autonomy and excellence.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="process-step-no">
                            <img src="{{ asset('frontend/images/icons/university-ranking.png') }}"
                                alt="University Ranking Icon">
                        </div>
                        <div class="process-step-content">
                            <h3>University Rankings</h3>
                            <p>The university holds numerous national and international rankings, showcasing its excellence
                                and reputation globally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
