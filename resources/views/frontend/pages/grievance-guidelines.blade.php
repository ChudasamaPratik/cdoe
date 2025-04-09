@extends('frontend.layouts.main')
@section('title', 'Grievance Redressal FAQ')
@push('styles')
    <style>
        ol.roman-list {
            list-style-type: lower-roman;
            text-align: justify;
        }

        .accordion-body p {
            text-align: justify;
        }
    </style>
@endpush
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Grievance Redressal Mechanism and Guidelines</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Grievance Redressal FAQ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p style="text-align: justify;">The Central University of Himachal Pradesh (CUHP), Dharamshala has
                        adopted the University Grants
                        Commission (Grievance Redressal) Regulations, 2012. Accordingly, the Centre for Distance & Online
                        Education (CDOE), Central University of Himachal Pradesh, Dharamshala has established a
                        Responsive-cum-Proactive Grievance Redressal Mechanism to address learners' concerns promptly,
                        ensuring a supportive and responsive educational environment to its ODL and OL learners. Learners
                        may forward their grievance to the Office of the Assistant Director, CDOE who shall further refer
                        the grievance to the Students' Grievance Redressal Committee of CDOE, chaired by Assistant Director,
                        CDOE. Detailed guidelines to address the students' grievances, if any, of CDOE learners, are as
                        follows:</p>
                    <div class="faq-accordion" id="accordion">
                        <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Purpose of Students' Grievance Redressal Committee
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>CDOE has a duly constituted Grievance Redressal Committee for its learners
                                        with the aim to resolve the grievances / issues, if any, of our online and distance
                                        learners. The grievances of following type and nature are addressed by this
                                        Committee:</p>
                                    <ol>
                                        <li>1.Admission-related grievances (Registration, Enrolment, Verification etc.)</li>
                                        <li>2.Academic-related grievances (Course Registration, Course Material,
                                            Assignments, Practical work, Assignments etc.)</li>
                                        <li>3.Grievances related to Administrative Matters (Fee, Fee Refund etc.)</li>
                                        <li>4.Examination-related Grievances (Examination forms, CIA, Semester End
                                            Examination, Results, Grade Cards, Degree etc.)</li>
                                        <li>5.Any other issues and concerns of CDOE learners.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Composition of Students' Grievance Redressal Committee
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>Students' Grievance Redressal Committee of the CDOE, CUHP is chaired by
                                        Assistant Director, CDOE. The members of this committee include concerned
                                        programme coordinator and 1-2 course coordinators of concerned programme.
                                        Assistant Registrar (Online) is the member secretary of this committee.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Rights and Responsibilities of Learners
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>CDOE, CUHP makes every effort to ensure that its learners are able to
                                        pursue OL/ODL programme of study without any difficulty, but sometimes, due to
                                        lack of information and gap in communication, learners' may face problems. At
                                        CDOE, CUHP, we strongly believe that you, as learners of the CDOE, are entitled for
                                        the following:</p>
                                    <ol class="roman-list">
                                        <li>The learner has right to complain regarding any aspect related to his or her
                                            learning path including programme quality, learning resources, learner
                                            support and guidance, teaching, learning and assessment etc.</li>
                                        <li>The learner is entitled to approach the Learner Support Services (LSS) Cell
                                            and Students' Grievance Redressal Committee for submitting his or her
                                            complaint through any mode including online mode.</li>
                                        <li>The learner shall submit a formal complaint in a manner prescribed by the
                                            CDOE regarding expression of dissatisfaction with a service or the lack of a
                                            service or the quality of a service provided to them.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Responsibilities of the CDOE, CUHP
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>CDOE, CUHP assumes following responsibilities towards its learners:</p>
                                    <ol class="roman-list">
                                        <li>CDOE, CUHP works with the principles of openness, fairness, transparency and
                                            mutual coordination & collaboration.</li>
                                        <li>CDOE, CUHP is responsible for privacy and confidentiality of learner and
                                            investigating team unless disclosure is necessary to proceed in the matter.</li>
                                        <li>CDOE, CUHP strives to achieve excellence and continuously improve the services
                                            it offers for its learners. As and when a learner's grievance is received, the
                                            CDOE shall investigate it thoroughly and shall make necessary improvement(s) in
                                            its services.</li>
                                        <li>CDOE, CUHP encourages Learner Support Services (LSS) Cell to make initial
                                            attempts to address and resolve complaints as early as possible to the point of
                                            origin, and with the minimum of formalities.</li>
                                        <li>CDOE, CUHP operationalize the Grievance Redressal process through its
                                            Helpdesk-cum-LSS Cell.</li>
                                        <li>CDOE, CUHP has a mechanism to monitor the grievance redressal process through
                                            Centre for Internal Quality Assurance (CIQA) for ensuring quality of its
                                            services.</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Complaint Handling Mechanism
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>The Central University of Himachal Pradesh (CUHP), Dharamshala has adopted the
                                        University Grants Commission (Grievance Redressal) Regulations, 2012. Accordingly,
                                        the Centre for Distance & Online Education (CDOE), Central University of Himachal
                                        Pradesh, Dharamshala has established a Responsive-cum-Proactive Grievance Redressal
                                        Mechanism to address learners' concerns promptly, ensuring a supportive and
                                        responsive educational environment to its ODL and OL learners.</p>

                                    <p>For effective handling and dealing with any type of grievance/issue of CDOE learner,
                                        a dedicated Helpdesk-cum-Learner Support Services (LSS) Cell of CDOE, CUHP is
                                        working to ensure the hassle free learning experience for its learners and provide
                                        every kind of guidance and counseling as well as 24x7 support for 365 days in an
                                        year. This Helpdesk-cum-LSS Cell is a central access point for all learners to
                                        address their issues. Learners may approach the Cell for all issues related to
                                        admission counselling, e-SLM, assignments, Fee, Examinations, award of degrees,
                                        handling of online platforms (SAMARTH, SWAYAM, LMS and others) etc.</p>

                                    <p>Learners may contact this Helpdesk / Cell at the following:</p>
                                    <ul>
                                        <li>Phone No. 01892-229330</li>
                                        <li>Email: <a
                                                href="mailto:helpdeskcdue.cuhp@hpcu.ac.in">helpdeskcdue.cuhp@hpcu.ac.in</a>
                                        </li>
                                    </ul>

                                    <p>Contact Persons:</p>
                                    <ul>
                                        <li>Dr. Sudam Charan Sahu</li>
                                        <li>Ms. Aishwarya Rai</li>
                                        <li>Sh. Rohit Dhiman</li>
                                    </ul>

                                    <p>If learners are not satisfied from the response getting from Helpdesk / Cell and
                                        still have any grievance/ issue, they may approach Students' Grievance Redressal
                                        Committee. The learners' grievances / issues, if any, shall be addressed in the
                                        following manner:</p>

                                    <ol class="roman-list">
                                        <li>A student, who has any Grievance of the nature and type as mentioned above, may
                                            submit an application to the Assistant Director CDOE by Post/ e-mail (<a
                                                href="mailto:assistantdirector.cdoe@hpcu.ac.in">assistantdirector.cdoe@hpcu.ac.in</a>)
                                            or in person. A Google form has also been created and link for the same is given
                                            at the end of these guidelines to address the learners' grievances in a time
                                            bound manner.</li>
                                        <li>The Committee shall conduct a meeting and verify the facts and try to redress
                                            the grievance of the student at the earliest possible.</li>
                                        <li>The Committee shall make all efforts to resolve the student' grievance within a
                                            period of 15 days of its receipt by the office of Assistant Director, CDOE.</li>
                                        <li>While dealing with the complaint, the Committee will observe and follow law of
                                            natural justice and hear the complainant and concerned persons/officials.</li>
                                        <li>Learners with disability may submit their grievances through telephone and/or
                                            email to Helpdesk-cum-LSS Cell (Phone No. 01892-229330, Email: <a
                                                href="mailto:helpdeskcdue.cuhp@hpcu.ac.in">helpdeskcdue.cuhp@hpcu.ac.in</a>).
                                        </li>
                                        <li>Learners may withdraw grievance without prejudice at any time.</li>
                                        <li>Learner may know about the status of his or her queries or grievance on priority
                                            through phone or e-mail.</li>
                                        <li>Learners of CDOE, CUHP can submit their grievances online with regard to
                                            admission / result / fee / SLM / assignments etc. by filling the Grievance Form
                                            through following Google Form Link: <a
                                                href="https://docs.google.com/forms/d/e/1FAIpQLSfiZUtLuJjcom2Y1LWn81InHrNAxTQ7-1zGQIlXzm5_f406yg/viewform?usp=sharing"
                                                target="_blank">https://docs.google.com/forms/d/e/1FAIpQLSfiZUtLuJjcom2Y1LWn81InHrNAxTQ7-1zGQIlXzm5_f406yg/viewform?usp=sharing</a>
                                        </li>
                                    </ol>

                                    <div class="text-end mt-4">
                                        <p><strong>Prof. Vishal Sood</strong><br>Director, CDOE</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
