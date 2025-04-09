@extends('frontend.layouts.main')
@section('title', 'Approval & Disclosures')
@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Approval & Disclosures</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Approval & Disclosures</li>
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
                        <h3 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">Approval &
                            Disclosures</h3>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <h4 class="mb-2">UGC/DEB Approval Letter/Order</h4>
                <div class="col-lg-12">
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">S.No</th>
                                        <th scope="col" class="tbl-bottom">Reference Number</th>
                                        <th scope="col" class="tbl-bottom">Description</th>
                                        <th scope="col" class="tbl-bottom">Issue Date</th>
                                        <th scope="col" class="tbl-bottom">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>UGC-DEB/2024/APR-0138</td>
                                        <td>Approval for ADL Programs 2024-25</td>
                                        <td>15-Jan-2024</td>
                                        <td><a href="#" class="btn-default">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>UGC-DEB/2024/APR-0138</td>
                                        <td>Approval for ADL Programs 2024-25</td>
                                        <td>15-Jan-2024</td>
                                        <td><a href="#" class="btn-default">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>UGC-DEB/2024/APR-0138</td>
                                        <td>Approval for ADL Programs 2024-25</td>
                                        <td>15-Jan-2024</td>
                                        <td><a href="#" class="btn-default">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>UGC-DEB/2024/APR-0138</td>
                                        <td>Approval for ADL Programs 2024-25</td>
                                        <td>15-Jan-2024</td>
                                        <td><a href="#" class="btn-default">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>UGC-DEB/2024/APR-0138</td>
                                        <td>Approval for ADL Programs 2024-25</td>
                                        <td>15-Jan-2024</td>
                                        <td><a href="#" class="btn-default">Download</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{asset('frontend/images/Financial-Disclosures.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Financial Disclosures</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{asset('frontend/images/Academic-Disclosures.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Academic Disclosures</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{asset('frontend/images/Infrastructure-Disclosures.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Infrastructure Disclosures</h3>
                            <p>A visa is a conditional authorization granted by a country to a foreign national,
                                allowing them to enter and stay for specific purposes.</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{asset('frontend/images/Faculty-Development.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Faculty Disclosures</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{asset('frontend/images/Mandatory-Disclosures.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Mandatory Disclosures</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="features-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{asset('frontend/images/Annual-Report.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h3>Annual Reports</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="features-btn">
                            <a href="#" class="readmore-btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-4">
                <h4 class="mb-2">Right to Information (RTI)</h4>
                <div class="col-lg-12">
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Designation</th>
                                        <th scope="col" class="tbl-bottom">Name</th>
                                        <th scope="col" class="tbl-bottom">Contact</th>
                                        <th scope="col" class="tbl-bottom">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Public Information Officer (PIO)</th>
                                        <td>Dr. Dinesh Singh</td>
                                        <td>+91-1234567890</td>
                                        <td>pio@university.edu</td>
                                    </tr>
                                    <tr>
                                        <th>Public Information Officer (PIO)</th>
                                        <td>Dr. Dinesh Singh</td>
                                        <td>+91-1234567890</td>
                                        <td>pio@university.edu</td>
                                    </tr>
                                    <tr>
                                        <th>Public Information Officer (PIO)</th>
                                        <td>Dr. Dinesh Singh</td>
                                        <td>+91-1234567890</td>
                                        <td>pio@university.edu</td>
                                    </tr>
                                    <tr>
                                        <th>Public Information Officer (PIO)</th>
                                        <td>Dr. Dinesh Singh</td>
                                        <td>+91-1234567890</td>
                                        <td>pio@university.edu</td>
                                    </tr>
                                    <tr>
                                        <th>Public Information Officer (PIO)</th>
                                        <td>Dr. Dinesh Singh</td>
                                        <td>+91-1234567890</td>
                                        <td>pio@university.edu</td>
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
