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
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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
                                        <th class="text-center"><img
                                                src="{{ asset('frontend/images/team/Prof. Sanjeet Singh.jpg') }}"
                                                alt="" class="pctab-img img-fluid h-auto">
                                        </th>
                                        <td>Prof. Sanjeet Singh</td>
                                        <td>M.A Economics</td>
                                        <td>pccdoe.eco@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center"><img
                                                src="{{ asset('frontend/images/team/Prof. Jagmeet Bawa.png') }}"
                                                alt="" class="pctab-img img-fluid h-auto">
                                        </th>
                                        <td>Prof. Jagmeet Bawa</td>
                                        <td>M.A Political Science</td>
                                        <td>pccdoe.polsc@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center"><img
                                                src="{{ asset('frontend/images/team/Aditi_Pic_Programme_Coordinator_MBA.jpg') }}"
                                                alt="" class="pctab-img img-fluid h-auto">
                                        </th>
                                        <td><a style="color:#f47216"
                                                href="{{ route('programCoordinator.details', 'aditi') }}">Dr. Aditi
                                                Sharma</a>
                                        </td>
                                        <td>MBA</td>
                                        <td>pccdoe.mgmt@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center"><img
                                                src="{{ asset('frontend/images/team/Dr. Parveen Sadotra.jpg') }}"
                                                alt="" class="pctab-img">
                                        </th>
                                        <td><a style="color:#f47216"
                                                href="{{ route('programCoordinator.details', ['name' => 'parveen']) }}">Dr.
                                                Parveen Sadotra</a>
                                        </td>
                                        <td>MCA</td>
                                        <td>pccdoe.csc@hpcu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center"><img
                                                src="{{ asset('frontend/images/team/Dr. Jadish Parshad.jpg') }}"
                                                alt="" class="pctab-img">
                                        </th>
                                        <td><a href="{{ route('programCoordinator.details', ['name' => 'jagdish']) }}"
                                                style="color:#f47216">Dr. Jadish Parshad</a></td>
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

@endsection
