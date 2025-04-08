@extends('frontend.layouts.main')
@section('title')
    Prof. B.C. Chauhan
@endsection

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Prof. B.C. Chauhan</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Faculty</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Prof. B.C. Chauhan</li>
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
                                <img src="{{ asset('frontend/images/team/BC_Chauhan-Pic.jpg') }}"
                                    alt="Prof. B.C. Chauhan Photo" style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h4 class="text-white pb-2">Prof. B.C. Chauhan</h4>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Designation</h4>
                                <p>Professor</p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Qualification</h4>
                                <p>M.Phil., Ph.D, PDF</p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Department</h4>
                                <p>Physics & Astronomical Science</p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Official Email</h4>
                                <p>bcawake@hpcu.ac.in</p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Mobile</h4>
                                <p>+91-9418472694</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="team-single-content">
                        <div class="team-single-entry sngle-details">
                            <div class="mb-4">
                                <h3>Prof. Bhag Chand Chauhan</h3>
                                <h5 class="text-muted">Professor, Department of Physics & Astronomical Science</h5>
                                <h6 class="text-muted">Central University of Himachal Pradesh</h6>
                            </div>

                            <div class="coordinator-bio">
                                <p style="text-align: justify;">
                                    Dr. Bhag Chand Chauhan is a Professor of Physics in the CUHP. Previously, he was holding
                                    the positions of the Dean of School of Physical &amp; Material Sciences and Head of
                                    Department
                                    of Physics &amp; Astronomical Science (DPAS) in the university. Dr. Chauhan has
                                    published
                                    100+ well cited and quality research papers, preprints, and articles in magazines and
                                    newspapers. He has also published three books in Indian Knowledge Systems (IKS). Apart
                                    from excellence in academics, he has been actively involved in the corporate life of
                                    university and associated with a number of social organizations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
