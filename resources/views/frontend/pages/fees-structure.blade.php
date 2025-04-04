@extends('frontend.layouts.main')
@section('title', 'Fees Structure')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Fees Structure </h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Fees Structure</li>
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
                <div class="col-lg-12">
                    <div class="team-single-content">
                        <h3 class="section-title">Programme-wise Fee Structure</h3>
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Programme</th>
                                        <th scope="col" class="tbl-bottom">Duration</th>
                                        <th scope="col" class="tbl-bottom">Semester I</th>
                                        <th scope="col" class="tbl-bottom">Semester II</th>
                                        <th scope="col" class="tbl-bottom">Semester III</th>
                                        <th scope="col" class="tbl-bottom">Semester IV</th>
                                        <th scope="col" class="tbl-bottom">Total Fees</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Master of Arts (History)</td>
                                        <td>2 Years</td>
                                        <td>₹15,000</td>
                                        <td>₹14,500</td>
                                        <td>₹14,500</td>
                                        <td>₹14,000</td>
                                        <td>₹58,000</td>
                                    </tr>
                                    <tr>
                                        <td>Master of Arts (Economics)</td>
                                        <td>2 Years</td>
                                        <td>₹16,500</td>
                                        <td>₹16,000</td>
                                        <td>₹16,000</td>
                                        <td>₹15,500</td>
                                        <td>₹64,000</td>
                                    </tr>
                                    <tr>
                                        <td>Master of Arts (Political Science)</td>
                                        <td>2 Years</td>
                                        <td>₹15,500</td>
                                        <td>₹15,000</td>
                                        <td>₹15,000</td>
                                        <td>₹14,500</td>
                                        <td>₹60,000</td>
                                    </tr>
                                    <tr>
                                        <td>Master of Computer Application (MCA)</td>
                                        <td>2 Years</td>
                                        <td>₹35,000</td>
                                        <td>₹34,000</td>
                                        <td>₹34,000</td>
                                        <td>₹33,000</td>
                                        <td>₹136,000</td>
                                    </tr>
                                    <tr>
                                        <td>Master of Business Administration (MBA)</td>
                                        <td>2 Years</td>
                                        <td>₹40,000</td>
                                        <td>₹38,000</td>
                                        <td>₹38,000</td>
                                        <td>₹37,000</td>
                                        <td>₹153,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="fee-notes">
                                <p><strong>Note:</strong></p>
                                <ul>
                                    <li>All fees are in Indian Rupees (₹)</li>
                                    <li>Fees include tuition, examination, and library charges</li>
                                    <li>Additional charges may apply for hostel accommodation and transportation</li>
                                    <li>A one-time registration fee of ₹2,000 is applicable for all programmes</li>
                                    <li>Scholarships available for meritorious students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
