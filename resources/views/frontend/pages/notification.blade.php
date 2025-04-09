@extends('frontend.layouts.main')
@section('title', 'Notification')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white text-capitalize">{{ $type }}</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $type }}</li>
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
                    <div class="notifications-content">
                        <div class="notifications-section">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Date</th>
                                        <th scope="col" class="tbl-bottom">Title</th>
                                        <th scope="col" class="tbl-bottom">Program</th>
                                        <th scope="col" class="tbl-bottom">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Notification with sub-points -->
                                    <tr>
                                        <td>15-Mar-2025</td>
                                        <td>
                                            <p class="mb-1 fw-medium">Academic Calendar for Spring Semester 2025</p>
                                            <ul class="list-unstyled ms-3 small text-secondary">
                                                <li>• Updated exam schedule</li>
                                                <li>• Revised holiday list</li>
                                                <li>• New faculty orientation dates</li>
                                            </ul>
                                        </td>
                                        <td>Academic Affairs</td>
                                        <td><a href="documents/academic-calendar-2025.pdf" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-download"></i>
                                                Download</a></td>
                                    </tr>

                                    <!-- Notification without sub-points -->
                                    <tr>
                                        <td>12-Mar-2025</td>
                                        <td>Library Hours Update During Exam Period</td>
                                        <td>Library Services</td>
                                        <td><a href="documents/library-hours-2025.pdf" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-download"></i> Download</a></td>
                                    </tr>

                                    <!-- Notification with sub-points -->
                                    <tr>
                                        <td>10-Mar-2025</td>
                                        <td>
                                            <p class="mb-1 fw-medium">Revised Schedule for Mid-Term Assignments</p>
                                            <ul class="list-unstyled ms-3 small text-secondary">
                                                <li>• Deadline extensions for science courses</li>
                                                <li>• Special considerations for senior projects</li>
                                            </ul>
                                        </td>
                                        <td>Examination Cell</td>
                                        <td><a href="documents/midterm-schedule-2025.pdf" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-download"></i>
                                                Download</a></td>
                                    </tr>

                                    <!-- Notification without sub-points -->
                                    <tr>
                                        <td>08-Mar-2025</td>
                                        <td>Campus WiFi Maintenance Schedule</td>
                                        <td>IT Department</td>
                                        <td><a href="documents/wifi-maintenance.pdf" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-download"></i> Download</a></td>
                                    </tr>

                                    <!-- Notification with sub-points -->
                                    <tr>
                                        <td>05-Mar-2025</td>
                                        <td>
                                            <p class="mb-1 fw-medium">Guest Lecture Series - Economics Department</p>
                                            <ul class="list-unstyled ms-3 small text-secondary">
                                                <li>• Schedule of upcoming speakers</li>
                                                <li>• Registration requirements for attendance</li>
                                                <li>• Credit allocation for participating students</li>
                                            </ul>
                                        </td>
                                        <td>MA Economics</td>
                                        <td><a href="documents/guest-lecture-economics.pdf"
                                                class="btn btn-sm btn-primary"><i class="fa fa-download"></i>
                                                Download</a></td>
                                    </tr>

                                    <!-- Notification without sub-points -->
                                    <tr>
                                        <td>01-Mar-2025</td>
                                        <td>Student Council Election Dates</td>
                                        <td>Student Affairs</td>
                                        <td><a href="documents/elections-2025.pdf" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-download"></i> Download</a></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Archive Button -->
                            <div class="text-end mt-4">
                                <a href="notifications-archive.html" class="btn btn-secondary">
                                    <i class="fa fa-archive"></i> View Archive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
