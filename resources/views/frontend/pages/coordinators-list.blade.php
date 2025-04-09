@extends('frontend.layouts.main')
@section('title', 'Coordinators List')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white text-capitalize">{{ $type }} </h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $type }} </li>
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
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom text-center">Photo</th>
                                        <th scope="col" class="tbl-bottom">Name</th>
                                        <th scope="col" class="tbl-bottom">Course</th>
                                        <th scope="col" class="tbl-bottom">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center">
                                            <div class="coordinator-img-container">
                                                <img src="{{ asset('frontend/images/team/Prof. Sanjeet Singh.jpg') }}"
                                                    alt="Prof. Sanjeet Singh" class="coordinator-img">
                                            </div>
                                        </th>
                                        <td>Prof. Sanjeet Singh</td>
                                        <td>M.A Economics</td>
                                        <td>pccdoe.eco@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">
                                            <div class="coordinator-img-container">
                                                <img src="{{ asset('frontend/images/team/Prof. Jagmeet Bawa.png') }}"
                                                    alt="Prof. Jagmeet Bawa" class="coordinator-img">
                                            </div>
                                        </th>
                                        <td>Prof. Jagmeet Bawa</td>
                                        <td>M.A Political Science</td>
                                        <td>pccdoe.polsc@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">
                                            <div class="coordinator-img-container">
                                                <img src="{{ asset('frontend/images/team/Aditi_Pic_Programme_Coordinator_MBA.jpg') }}"
                                                    alt="Dr. Aditi Sharma" class="coordinator-img">
                                            </div>
                                        </th>
                                        <td>
                                            <a style="color:#f47216"
                                                href="{{ route('programCoordinator.details', 'aditi') }}">
                                                Dr. Aditi Sharma
                                            </a>
                                        </td>
                                        <td>MBA</td>
                                        <td>pccdoe.mgmt@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">
                                            <div class="coordinator-img-container">
                                                <img src="{{ asset('frontend/images/team/Dr. Parveen Sadotra.jpg') }}"
                                                    alt="Dr. Parveen Sadotra" class="coordinator-img">
                                            </div>
                                        </th>
                                        <td>
                                            <a style="color:#f47216"
                                                href="{{ route('programCoordinator.details', ['name' => 'parveen']) }}">
                                                Dr. Parveen Sadotra
                                            </a>
                                        </td>
                                        <td>MCA</td>
                                        <td>pccdoe.csc@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">
                                            <div class="coordinator-img-container">
                                                <img src="{{ asset('frontend/images/team/Dr. Jadish Parshad.jpg') }}"
                                                    alt="Dr. Jadish Parshad" class="coordinator-img">
                                            </div>
                                        </th>
                                        <td>
                                            <a href="{{ route('programCoordinator.details', ['name' => 'jagdish']) }}"
                                                style="color:#f47216">
                                                Dr. Jadish Parshad
                                            </a>
                                        </td>
                                        <td>M.A History</td>
                                        <td>pccdoe.his@hpcu.ac.in</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .coordinator-img-container {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .coordinator-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            background-color: #f8f8f8;
            border: 2px solid #f47216;
            border-radius: 50%;
            padding: 2px;
        }
    </style>
@endsection
