@extends('frontend.layouts.main')
@section('title',
    'Administrative
    and Technical staff')
    @push('styles')
        <style>
            .section-header {
                border-top: #d38312 5px solid;
            }
        </style>
    @endpush
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white text-capitalize">Administrative
                            and Technical staff</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Administrative
                                    and Technical staff</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-team-single">
        <div class="container">
            <!-- Honorable Vice Chancellor Section -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="section-header"
                        style="background: linear-gradient(to right, #283c86, #a81c07, #d38312); color: white; padding: 10px 0;">
                        <h3 class="text-center text-white m-0">HONORABLE VICE CHANCELLOR</h3>
                    </div>
                    <div class="vc-info text-center py-3" style="background: #f9f9f9;">
                        <h4 class="text-primary">Prof. Sat Prakash Bansal</h4>
                    </div>
                </div>
            </div>

            <!-- Statutory Officers Section -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="section-header" style="background: #172b4d; color: white; padding: 10px 0;">
                        <h3 class="text-center text-white m-0">STATUTORY OFFICERS</h3>
                    </div>
                    <div class="statutory-officers">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Registrar</td>
                                    <td>Prof. Suman Sharma</td>
                                </tr>
                                <tr>
                                    <td>Director</td>
                                    <td>Dr. Vishal Sood</td>
                                </tr>
                                <tr>
                                    <td>Deputy Director</td>
                                    <td>Dr. Chaman Kashyap</td>
                                </tr>
                                <tr>
                                    <td>Assistant Director</td>
                                    <td>Dr. Harish Kumar
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Administrative and Technical Staff Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header" style="background: #172b4d; color: white; padding: 10px 0;">
                        <h3 class="text-center text-white m-0">ADMINISTRATIVE AND TECHNICAL STAFF</h3>
                    </div>
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Section officer (Online Education)</td>
                                        <td>Sh. Rakesh Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>Technical Manager (LMS/SWAYAM & Data Management)</td>
                                        <td>Dr. Girish Sharma</td>
                                    </tr>
                                    <tr>
                                        <td>Technical Assistant (LMS/SWAYAM & Data Management)</td>
                                        <td>Sh. Ajay Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>Technical Manager (Administration & Examination, Result)</td>
                                        <td>Sh. Hind Bhushan</td>
                                    </tr>
                                    <tr>
                                        <td>Technical Assistant (Administration & Examination, Result)</td>
                                        <td>Md. Suaib Khan</td>
                                    </tr>
                                    <tr>
                                        <td>Technical Associate (Audio, Video Editing & Recording)</td>
                                        <td>Sh. Rohit Dhiman</td>
                                    </tr>
                                    <tr>
                                        <td>Technical Assistant (Audio, Video Editing & Recording)</td>
                                        <td>Sh. Vivek Pathania</td>
                                    </tr>
                                    <tr>
                                        <td>Upper Division Clerk</td>
                                        <td>Sh. Manish Kumar Sharma</td>
                                    </tr>
                                    <tr>
                                        <td>Clerk</td>
                                        <td>Sh. Kamlesh Taprial</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Operator/Attendant</td>
                                        <td>Sh. Rajat</td>
                                    </tr>
                                    <tr>
                                        <td>Peon/Operational Staff</td>
                                        <td>Sh. Vineet Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>Peon/Operational Staff</td>
                                        <td>Sh. Kuldeep</td>
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
