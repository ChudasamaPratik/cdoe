@extends('frontend.layouts.main')
@section('title', 'Course Details')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Bachelor of Commerce (HONS) (B.Com. Hons.)</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bachelor of Commerce (HONS) (B.Com.
                                    Hons.)</li>
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
                                <img src="{{ asset('frontend/images/team/registrar.jpg') }}" alt=""
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
                                <div class="section-title">
                                    <h3>Program Coordinator</h3>
                                </div>
                            </div>
                            <div class="team-member-body wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="team-contact-box">
                                    <h4>Name</h4>
                                    <p>Dr. Amrendra Kumar</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Designation</h4>
                                    <p>Associate Professor</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Mobile</h4>
                                    <p>+91-8840180390</p>
                                </div>
                                <div class="team-contact-box">
                                    <h4>Email</h4>
                                    <p>amrendrakumar84@gmail.com</p>
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
                                                <img src="{{ asset('frontend/images/team/BT_sir.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Prof. Brajesh Tiwari</h3>
                                            <hr>
                                            <p class="team-contact">brajeshtiwari65@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item team-single team-shadow bg-white wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/Prof._A.K._Saxena.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Prof. Amit Kumar Saxena</h3>
                                            <hr>
                                            <p class="team-contact">amitsaxena65@rediffmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item team-single team-shadow bg-white wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/team/Dr._Anupama_Saxena.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Prof. Anupama Saxena</h3>
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
                                                <img src="{{ asset('frontend/images/team/Praveen-kumar.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="service-content text-center">
                                            <h3>Prof. Pravin Kumar Mishra</h3>
                                            <hr>
                                            <p class="team-contact">praveenmishra02010@gmail.com</p>
                                        </div>
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
                                <a href="#" class="btn-default">Download Syllabus</a>
                                <a href="#" class="btn-default">Apply Now</a>
                            </div>
                        </div>

                        <div class="team-contact-form">
                            <div class="team-member-header">
                                <div class="section-title">
                                    <h3>Semester Wise</h3>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Sr No.</th>
                                        <th scope="col" class="tbl-bottom">Title of Course</th>
                                        <th scope="col" class="tbl-bottom">Course Credit</th>
                                        <th scope="col" class="tbl-bottom">Course Coordinator Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Master of Computer Application</td>
                                        <td>A+</td>
                                        <td>Prof. Brajesh Tiwari</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Master of Computer Application</td>
                                        <td>A+</td>
                                        <td>Prof. Brajesh Tiwari</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Master of Computer Application</td>
                                        <td>A+</td>
                                        <td>Prof. Brajesh Tiwari</td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Master of Computer Application</td>
                                        <td>A+</td>
                                        <td>Prof. Brajesh Tiwari</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Master of Computer Application</td>
                                        <td>A+</td>
                                        <td>Prof. Brajesh Tiwari</td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Master of Computer Application</td>
                                        <td>A+</td>
                                        <td>Prof. Brajesh Tiwari</td>
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
                                        <td>16700 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 2</th>
                                        <td>12500 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 3</th>
                                        <td>13500 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 4</th>
                                        <td>12500 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 5</th>
                                        <td>13500 INR</td>
                                    </tr>
                                    <tr>
                                        <th>Semester 6</th>
                                        <td>12500 INR</td>
                                    </tr>
                                    <tr>
                                        <th class="tbl-bottom">Total Fees</th>
                                        <td class="tbl-bottom">81200 INR</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn-default">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
