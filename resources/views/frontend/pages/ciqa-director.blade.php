@extends('frontend.layouts.main')
@section('title', 'Director')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Dr. Ram Pravesh Rai</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Director</li>
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
                                <img src="{{ asset('frontend/images/team/CIQA Director_Pic.jpg') }}" alt=""
                                    style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h4 class="text-white pb-2">Dr. Ram Pravesh Rai</h4>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Designation</h4>
                                <p>Director</p>

                                <!-- Single PDF Button -->
                                <div class="mt-3">
                                    <a href="{{ asset('documents/CIQA_Director_profile.pdf') }}" target="_blank"
                                        class="btn  w-100" style="background-color: #031c3c;color:white">View Complete
                                        Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="team-single-content">
                        <div class="team-single-entry sngle-details">
                            <p style="text-align: justify;">
                                Dr. Ram Pravesh Rai is an Associate Professor at the Department of New Media at Central
                                University of Himachal Pradesh (CUHP), Dharamshala. He currently serves as the Director of
                                both the Centre for Internal Quality Assurance (CIQA) and Public Relations at CUHP. With a
                                Ph.D. in Mass Communication and expertise in New Media Technologies and Film Studies, Dr.
                                Rai has extensive academic experience, having previously served as HOD of the Department of
                                New Media and Dean of the School of Journalism Mass Communication & New Media at CUHP. He
                                has published over 12 research papers, supervised three Ph.D. scholars, and participated in
                                international training programs. Dr. Rai can be contacted at rprai1981@hpcu.ac.in or
                                8894562222.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
