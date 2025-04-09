@extends('frontend.layouts.main')
@section('title', 'Course Coordinators')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white text-capitalize">Course Coordinators</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Course Coordinators</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-team-single">
        <div class="container">
            <!-- Master of Arts (History) Section -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h3 class="mb-4 pb-2 border-bottom text-primary">Master of Arts (History)</h3>

                    <!-- 1st Semester -->
                    <h4 class="mb-3">1st Semester</h4>
                    <div class="team-single-content mb-4">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HIS-451</td>
                                        <td>Political and Economic History of India up to 8th CE</td>
                                        <td>Dr. Rajeev Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-452</td>
                                        <td>Political and Economic History of India up-to 8th c. CE to 16th c. CE</td>
                                        <td>Dr. Rajeev Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-453</td>
                                        <td>Society, Culture and Dharma in India up to early medieval Period</td>
                                        <td>Dr. Thuktan Negi</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-456</td>
                                        <td>Outline of Historical Tourism</td>
                                        <td>Prof. Kanwar Chanderdeep Singh</td>
                                    </tr>
                                    <tr>
                                        <td>IKS</td>
                                        <td>Indian Knowledge System</td>
                                        <td>Prof. Bhag Chand Chauhan</td>
                                    </tr>
                                    <tr>
                                        <td>Pol-448</td>
                                        <td>Ancient Indian Political Institutions</td>
                                        <td>Prof. Jagmeet Singh</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2nd Semester -->
                    <h4 class="mb-3">2nd Semester</h4>
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HIS-461</td>
                                        <td>Political and Economic History of India during 16th-17th Centuries</td>
                                        <td>Dr. Raghvendra Yadav</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-462</td>
                                        <td>National Movement of India-I: 1757 to 1857</td>
                                        <td>Dr. Raghvendra Yadav</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-463</td>
                                        <td>National Movement of India-II: 1858 to 1947</td>
                                        <td>Prof. Kanwar Chanderdeep Singh</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-467</td>
                                        <td>Understanding Archaeology</td>
                                        <td>Dr. Jagdish Parsad</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-468</td>
                                        <td>Science and Technology in Ancient India(IKS)</td>
                                        <td>Dr. Rajeev Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-465</td>
                                        <td>Contemporary Issues in Indian Economy - II</td>
                                        <td>Dr. Vinod Naik</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-475</td>
                                        <td>Society, Culture and Dharma in India during the Medieval Times</td>
                                        <td>Dr. Thuktan Negi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Master of Arts (Economics) Section -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h3 class="mb-4 pb-2 border-bottom text-primary">Master of Arts (Economics)</h3>

                    <!-- 1st Semester -->
                    <h4 class="mb-3">1st Semester</h4>
                    <div class="team-single-content mb-4">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ECN-405</td>
                                        <td>Microeconomic Theory</td>
                                        <td>Dr. Kamal Singh</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-404</td>
                                        <td>Mathematics for Economists</td>
                                        <td>Dr. Amit Kumar Basantaray</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-464</td>
                                        <td>Contemporary issues in Indian Economics-I</td>
                                        <td>Dr. Vinod Naik</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-403</td>
                                        <td>Statistical Methods</td>
                                        <td>Dr. Indervir Singh</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-406</td>
                                        <td>Basics of Macro Economics</td>
                                        <td>Dr. Kamal Singh</td>
                                    </tr>
                                    <tr>
                                        <td>IKS</td>
                                        <td>Indian Knowledge System</td>
                                        <td>Prof. Bhag Chand Chauhan</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-469</td>
                                        <td>Foundation of Indian Culture (IDC)</td>
                                        <td>Dr. Pravat Ranjan Sethi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2nd Semester -->
                    <h4 class="mb-3">2nd Semester</h4>
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ECN-402</td>
                                        <td>Macroeconomic Theory</td>
                                        <td>Dr. Kamal Singh</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-453</td>
                                        <td>Development Economics</td>
                                        <td>Dr. Amit Kumar Basantaray</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-423</td>
                                        <td>International Economics</td>
                                        <td>Dr. Babburu Venkateshwarlu</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-463</td>
                                        <td>Introductory Econometrics</td>
                                        <td>Dr. Narendra Nath Dalei</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-459</td>
                                        <td>Indian Economic Thought (IKS)</td>
                                        <td>Dr. Kamal Singh</td>
                                    </tr>
                                    <tr>
                                        <td>ECN-465</td>
                                        <td>Contemporary Issues in Indian Economy-II</td>
                                        <td>Dr. Vinod Naik</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-473</td>
                                        <td>Cultural Heritage of Bharat (IDC)</td>
                                        <td>Dr. Pravat Ranjan Sethi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Master of Arts (Political Science) Section -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h3 class="mb-4 pb-2 border-bottom text-primary">Master of Arts (Political Science)</h3>

                    <!-- 1st Semester -->
                    <h4 class="mb-3">1st Semester</h4>
                    <div class="team-single-content mb-4">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>POL-421</td>
                                        <td>Indian Political System</td>
                                        <td>Prof. Mridula Sharda</td>
                                    </tr>
                                    <tr>
                                        <td>POL-423</td>
                                        <td>Comparative Politics</td>
                                        <td>Dr. Jyoti</td>
                                    </tr>
                                    <tr>
                                        <td>POL-424</td>
                                        <td>Public Administration</td>
                                        <td>Dr. Vimal Kumar Kashyap</td>
                                    </tr>
                                    <tr>
                                        <td>POL-426</td>
                                        <td>Western Political Thought</td>
                                        <td>Ms. Aaradhana Singh</td>
                                    </tr>
                                    <tr>
                                        <td>IKS</td>
                                        <td>Indian Knowledge System</td>
                                        <td>Prof. Bhag Chand Chauhan</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-469</td>
                                        <td>Foundation of Indian Culture (IDC)</td>
                                        <td>Dr. Pravat Ranjan Sethi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2nd Semester -->
                    <h4 class="mb-3">2nd Semester</h4>
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>POL-422</td>
                                        <td>Political Theory</td>
                                        <td>Ms. Aaradhana Singh</td>
                                    </tr>
                                    <tr>
                                        <td>POL-435</td>
                                        <td>Indian Political Thought</td>
                                        <td>Prof. Jagmeet Singh</td>
                                    </tr>
                                    <tr>
                                        <td>POL-437</td>
                                        <td>International Relations</td>
                                        <td>Dr. Vimal Kumar Kashyap</td>
                                    </tr>
                                    <tr>
                                        <td>POL-442</td>
                                        <td>Federalism in India</td>
                                        <td>Prof. Mridula Sharda</td>
                                    </tr>
                                    <tr>
                                        <td>POL-447</td>
                                        <td>Political Sociology</td>
                                        <td>Dr. Jyoti</td>
                                    </tr>
                                    <tr>
                                        <td>POL-448</td>
                                        <td>Ancient Indian Political Institutions</td>
                                        <td>Prof. Jagmeet Singh</td>
                                    </tr>
                                    <tr>
                                        <td>HIS-473</td>
                                        <td>Cultural Heritage of Bharat (IDC)</td>
                                        <td>Dr. Pravat Ranjan Sethi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Master of Business Administration (MBA) Section -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h3 class="mb-4 pb-2 border-bottom text-primary">Master of Business Administration (MBA)</h3>

                    <!-- 1st Semester -->
                    <h4 class="mb-3">1st Semester</h4>
                    <div class="team-single-content mb-4">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MGT-115A</td>
                                        <td>Marketing Management</td>
                                        <td>Prof. Surya Rashmi Rawat</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-116A</td>
                                        <td>Organisational Behaviour</td>
                                        <td>Dr. Bhawana Bhardwaj</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-528</td>
                                        <td>Business Communication Skills</td>
                                        <td>Dr. Aditi Sharma</td>
                                    </tr>
                                    <tr>
                                        <td>MCO-101</td>
                                        <td>Accounting for Managerial Decisions (IDC)</td>
                                        <td>Dr. Manpreet Arora</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-130</td>
                                        <td>Managerial Economics</td>
                                        <td>Dr. Devesh Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-584/IKS</td>
                                        <td>Indian Knowledge System</td>
                                        <td>Prof. Bhag Chand Chauhan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2nd Semester -->
                    <h4 class="mb-3">2nd Semester</h4>
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MGT-221</td>
                                        <td>Consumer Behaviour</td>
                                        <td>Dr. Sarvesh Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-223</td>
                                        <td>Human Resource Management</td>
                                        <td>Dr. Rita Devi</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-213</td>
                                        <td>Financial Management</td>
                                        <td>Dr. Manpreet Arora</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-343*</td>
                                        <td>Retail Management*</td>
                                        <td>Dr. Ruchi Sharma</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-323*</td>
                                        <td>Indian Financial System*</td>
                                        <td>Dr. Manpreet Arora</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-457*</td>
                                        <td>Conflict Management & Negotiation Skills*</td>
                                        <td>Dr. Bhawana Bhardwaj</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-450</td>
                                        <td>Business Research Methods</td>
                                        <td>Dr. Devesh Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-593</td>
                                        <td>Indian Ethos and Business ethics(IKS)</td>
                                        <td>Prof. Surya Rashmi Rawat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Master of Computer Applications (MCA) Section -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h3 class="mb-4 pb-2 border-bottom text-primary">Master of Computer Applications (MCA)</h3>

                    <!-- 1st Semester -->
                    <h4 class="mb-3">1st Semester</h4>
                    <div class="team-single-content mb-4">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MCA-501</td>
                                        <td>Data Structures</td>
                                        <td>Mr. Ajay Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-502</td>
                                        <td>Data Structures-Lab</td>
                                        <td>Mr. Ajay Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-503</td>
                                        <td>Operating System</td>
                                        <td>Dr. Parveen Sadotra</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-521</td>
                                        <td>Software Engineering</td>
                                        <td>Dr. Pankaj kumar s/o Late. Sh. Maniram</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-534</td>
                                        <td>Object Oriented Programming</td>
                                        <td>Mr. Manoj Dhiman</td>
                                    </tr>
                                    <tr>
                                        <td>MCA IKS</td>
                                        <td>Indian Knowledge System</td>
                                        <td>Prof. Bhag Chand Chouhan</td>
                                    </tr>
                                    <tr>
                                        <td>MGT-528</td>
                                        <td>Business Communication Skills</td>
                                        <td>Dr. Aditi Sharma</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-403*</td>
                                        <td>Fundamentals of Computers and Programming in C*(Bridge Course)</td>
                                        <td>Dr. Parveen Sadotra</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2nd Semester -->
                    <!-- 2nd Semester -->
                    <h4 class="mb-3">2nd Semester</h4>
                    <div class="team-single-content">
                        <div class="team-contact-form">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tbl-bottom">Course Code</th>
                                        <th scope="col" class="tbl-bottom">Name of the Course</th>
                                        <th scope="col" class="tbl-bottom">Name of Course Coordinator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MCA-504</td>
                                        <td>Theory of Computation</td>
                                        <td>Mr. Mayank Chopra</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-505</td>
                                        <td>Database Management System</td>
                                        <td>Mr. Manoj Dhiman</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-506</td>
                                        <td>Database Management System-Lab</td>
                                        <td>Mr. Manoj Dhiman</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-507</td>
                                        <td>Design & Analysis of algorithms</td>
                                        <td>Mr. Ajay Kumar</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-522</td>
                                        <td>Software Testing</td>
                                        <td>Dr. Pankaj kumar s/o Late. Sh. Maniram</td>
                                    </tr>
                                    <tr>
                                        <td>MCA-527</td>
                                        <td>Python Programming</td>
                                        <td>Mr. Mayank Chopra</td>
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
