@extends('frontend.layouts.main')
@section('title', 'CIQA Committee')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">CIQA Committee</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CIQA Committee</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CIQA Committee Page -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="committee-content">
                        <div class="mb-4 border-bottom pb-3">
                            <h2>CIQA Committee</h2>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">S.No</th>
                                        <th scope="col" class="tbl-bottom">Name</th>
                                        <th scope="col" class="tbl-bottom">Designation</th>
                                        <th scope="col" class="tbl-bottom">Role in Committee</th>
                                        <th scope="col" class="tbl-bottom">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Prof. Rajesh Kumar</td>
                                        <td>Professor, Department of Education</td>
                                        <td>Chairperson</td>
                                        <td>rajesh.kumar@example.edu</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Meena Sharma</td>
                                        <td>Associate Professor, Department of Commerce</td>
                                        <td>Coordinator</td>
                                        <td>meena.sharma@example.edu</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Sunil Verma</td>
                                        <td>Assistant Professor, Department of Science</td>
                                        <td>Member</td>
                                        <td>sunil.verma@example.edu</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Prof. Nandini Joshi</td>
                                        <td>Professor, Department of Arts</td>
                                        <td>Member</td>
                                        <td>nandini.joshi@example.edu</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Amit Patel</td>
                                        <td>Associate Professor, Department of Management</td>
                                        <td>Member</td>
                                        <td>amit.patel@example.edu</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Ms. Priya Singh</td>
                                        <td>Administrative Officer</td>
                                        <td>Member</td>
                                        <td>priya.singh@example.edu</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mr. Ravi Desai</td>
                                        <td>Industry Representative, ABC Corp.</td>
                                        <td>External Member</td>
                                        <td>ravi.desai@abccorp.com</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Sonali Mishra</td>
                                        <td>Quality Assurance Specialist</td>
                                        <td>Member Secretary</td>
                                        <td>sonali.mishra@example.edu</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Committee Terms of Reference -->
                        <div class="mt-5">
                            <h4 class="mb-3">Committee Terms of Reference</h4>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <ul class="mb-0">
                                        <li>Development and implementation of quality benchmarks for various academic
                                            and administrative activities.</li>
                                        <li>Facilitation of learner-centric environment for quality education.</li>
                                        <li>Arrangement for feedback responses from students, parents, and other
                                            stakeholders on quality-related institutional processes.</li>
                                        <li>Dissemination of information on quality aspects among all stakeholders.</li>
                                        <li>Organization of institutional workshops and seminars on quality-related
                                            themes.</li>
                                        <li>Preparation of Annual Quality Assurance Report (AQAR) for submission to
                                            relevant authorities.</li>
                                        <li>Coordination of quality-related activities, including adoption and
                                            dissemination of best practices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
