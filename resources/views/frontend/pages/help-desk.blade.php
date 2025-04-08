@extends('frontend.layouts.main')
@section('title', 'Help Desk')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Help Desk</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Help Desk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('frontend/images/help-desk.png') }}">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-phone.svg') }}" alt="">
                        </div>

                        <div class="contact-info-content">
                            <h3>contact</h3>
                            <p>01892-229330</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-mail.svg') }}" alt="">
                        </div>

                        <div class="contact-info-content">
                            <h3>email</h3>
                            <p>helpdeskcdoe.cuhp@hpcu.ac.in</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="helpdesk-details wow fadeInUp">
                        <h3 class="mb-4">Helpdesk Details</h3>
                        
                        <div class="helpdesk-item mb-4">
                            <h4>(1) Incharge Helpdesk</h4>
                            <p>Dr. Sudam Charan Sahu, Assistant Professor, Deptt. Of Library &amp; Information Sciences</p>
                        </div>
                        
                        <div class="helpdesk-item mb-4">
                            <h4>(2) Pre-Admission/Admission/SLM related matters and Fees, Examination/Assessment and SWAYAM Platform related matters</h4>
                            <ul class="pl-4 mt-2">
                                <li>(i) Ms. Aishwarya Rai, LDC, VC Secretariat</li>
                                <li>(ii) Sh Rohit Dhiman, Lab Assistant, Computer Centre</li>
                            </ul>
                        </div>
                        
                        <div class="helpdesk-contact mb-4">
                            <p>The learners may contact above Helpdesk/Cell on following phone number/e-mail for Resolving/Redressal of their any kind of query/grievance related to online programmes:</p>
                            <ul class="pl-4 mt-2">
                                <li>(1) Phone No. - 01892-229330</li>
                                <li>(2) Email: - helpdeskcdoe.cuhp@hpcu.ac.in</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .helpdesk-details {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        
        .helpdesk-details h3 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        
        .helpdesk-item h4, 
        .helpdesk-contact h4 {
            color: #007bff;
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .helpdesk-item ul, 
        .helpdesk-contact ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        .helpdesk-item li, 
        .helpdesk-contact li {
            margin-bottom: 8px;
        }
    </style>
@endsection