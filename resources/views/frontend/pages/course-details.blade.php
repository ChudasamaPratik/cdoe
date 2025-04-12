@extends('frontend.layouts.main')
@section('title', 'Course Details')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Master of Arts (History)</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Master of Arts (History)</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-single-sidebar">
                        <div class="team-sidebar-image">
                            <figure class="image-anime reveal"
                                style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <img src="{{ asset('frontend/images/team/JAGDIS_ PARSHAD.jpg') }}" alt=""
                                    style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h3>Note</h3>
                                <hr>
                                <p>For international students, the fees mentioned above will be calculated in U.S. dollars
                                    based on the conversion rate of Indian Rupees at the time of admission or registration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="team-single-content">
                        <div class="team-single-entry sngle-details">
                            <div class="team-member-header">
                                <div class="section-title d-flex justify-content-between">
                                    <h3>Program Coordinator</h3>
                                    <a href="{{ route('programCoordinator.details', ['name' => 'jagdish']) }}"
                                        class="btn-default">Brief Details</a>
                                </div>
                            </div>
                            <div class="team-member-body wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="team-contact-box">
                                    <h4>Name</h4>
                                    <p>Dr. Jagdish Parshad</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Designation</h4>
                                    <p>Associate Professor</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Mobile</h4>
                                    <p>+91-9811701650</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Email</h4>
                                    <p>raojprasad@hpcu.ac.in </p>
                                </div>
                            </div>
                        </div>



                        <div class="container">
                            <h2 class="text-anime-style-3 team-heading" data-cursor="-opaque">Course Coordinator</h2>
                            <div class="row justify-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item team-single team-shadow bg-white wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/Dr_Rajeev_Kumar.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Dr. Rajeev Kumar</h3>
                                            <hr>
                                            <p class="team-contact">rajeev@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item team-single team-shadow bg-white wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/Dr_Thuktan_Negi.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Dr. Thuktan Negi</h3>
                                            <hr>
                                            <p class="team-contact">thuktan@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item team-single team-shadow bg-white wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/Prof_Kanwar_Chanderdeep_Singh.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Prof. Kanwar Chanderdeep Singh</h3>
                                            <hr>
                                            <p class="team-contact">anupama66@rediffmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item team-single bg-white team-shadow wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/BC_Chauhan-Pic.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <a href="{{ route('course.coordinator.details') }}">
                                            <div class="service-content text-center">
                                                <h3>Prof. Bhag Chand Chauhan</h3>
                                                <hr>
                                                <p class="team-contact">bcawake@hpcu.ac.in </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="team-single-entry bg-abt p-4">
                            <div class="team-member-header">
                                <div class="section-title">
                                    <h3>Course Details</h3>
                                </div>
                            </div>
                            <div class="team-member-body wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="team-contact-box">
                                    <h4>Level of Program</h4>
                                    <p>Undergraduate</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Duration</h4>
                                    <p>4 Years (6 Semesters)</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Qualification Required</h4>
                                    <p>Minimum 50% aggregate at 10+2 level from any recognized board or equivalent</p>
                                </div>
                            </div>
                            <div class="hero-btn">
                                <a href="{{ asset('documents/syallbus/Detailed Syllabus MA History.pdf') }}"
                                    class="btn-default" download>Download Syllabus</a>
                                <a href="https://cuhimachalcdoe.samarth.ac.in/index.php/site/login" target="_blank"
                                    class="btn-default">Apply Now</a>
                            </div>
                        </div>

                        <!-- First Semester Table -->
                        <div class="team-contact-form mt-4">
                            <div class="team-member-header">
                                <div class="section-title">
                                    <h3>Name of Online Academic Programme - Master of Arts (History) 1<sup>st</sup> Semester
                                    </h3>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>HIS-451</th>
                                        <td>Political and Economic History of India up to 8th CE</td>
                                        <td>Dr. Rajeev Kumar</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-452</th>
                                        <td>Political and Economic History of India up-to 8th-16th CE</td>
                                        <td>Dr. Rajeev Kumar</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-453</th>
                                        <td>Society, Culture and Dharma in India up to early medieval Period</td>
                                        <td>Dr. Thuktan Negi</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-456</th>
                                        <td>Outline of Historical Tourism</td>
                                        <td>Prof. Kanwar Chanderdeep Singh</td>
                                    </tr>
                                    <tr>
                                        <th>IKS</th>
                                        <td>Indian Knowledge System</td>
                                        <td>Prof. Bhag Chand Chauhan</td>
                                    </tr>
                                    <tr>
                                        <th>Pol-448</th>
                                        <td>Ancient Indian Political Institutions</td>
                                        <td>Prof. Jagmeet Bawa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Second Semester Table -->
                        <div class="team-contact-form mt-4">
                            <div class="team-member-header">
                                <div class="section-title">
                                    <h3>Name of Online Academic Programme - Master of Arts (History) 2<sup>nd</sup> Semester
                                    </h3>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>HIS-461</th>
                                        <td>Political and Economic History of India during 16<sup>th</sup>-17<sup>th</sup>
                                            Centuries</td>
                                        <td>Dr. Raghvendra Yadav</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-462</th>
                                        <td>National Movement of India-I: 1757 to 1857</td>
                                        <td>Dr. Raghvendra Yadav</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-463</th>
                                        <td>National Movement of India-II: 1858 to 1947</td>
                                        <td>Prof. Kanwar Chanderdeep Singh</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-467</th>
                                        <td>Understanding Archaeology</td>
                                        <td>Dr. Jagdish Parsad</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-468</th>
                                        <td>Science and Technology in Ancient India(IKS)</td>
                                        <td>Dr. Rajeev Kumar</td>
                                    </tr>
                                    <tr>
                                        <th>ECN-465</th>
                                        <td>Contemporary Issues in Indian Economy - II</td>
                                        <td>Dr. Vinod Naik</td>
                                    </tr>
                                    <tr>
                                        <th>HIS-475</th>
                                        <td>Society, Culture and Dharma in India during the Medieval Times</td>
                                        <td>Dr. Thuktan Negi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="team-contact-form mt-4">
                            <div class="team-member-header">
                                <div class="section-title">
                                    <h3>Fees Structure (INR)</h3>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Semester 1</th>
                                        <td>27000 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 2</th>
                                        <td>19500 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 3</th>
                                        <td>24000 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 4</th>
                                        <td>19500 INR</td>
                                    </tr>
                                    <tr>
                                        <th class="tbl-bottom">Total Fees</th>
                                        <td class="tbl-bottom">90000 INR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
