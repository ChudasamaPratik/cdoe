@extends('frontend.layouts.main')
@section('title', 'Learner Support Services')
@push('styles')
    <style>
        .circle li {
            list-style-type: circle;
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
                        <h2 class="text-white">Provisions for Learner Support Services</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Learner Support Services</li>
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
                    <p style="text-align: justify">The Centre for Distance & Online Education (CDOE), Central University of Himachal Pradesh has
                        an inbuilt mechanism to ensure robust learner support services and to facilitate the
                        teaching-learning experiences by the learner enrolled in Online Programmes. Detailed guidelines
                        are designed to enhance the quality of education and provide necessary assistance to learners
                        throughout their academic journey. Following are the main objectives of the Learner Support
                        Services (LSS) of the CDOE, CUHP:</p>

                    <ul class="circle">
                        <li>To help learners successfully complete their courses and programs.</li>
                        <li>To address the academic, administrative, and social needs of online learners.</li>
                        <li>To ensure timely delivery of e-SLM and prompt responses to queries.</li>
                        <li>To promote feedback mechanisms through continuous assessment of learners' progress.</li>
                        <li>To enable learners to sense the presence of the teacher in the teaching-learning process.</li>
                        <li>To take care of human interaction in the teaching-learning process during self-study, live
                            counselling sessions, and discussion forums.</li>
                    </ul>

                    <p>The Centre for Distance & Online Eduction (CDOE), CUHP provides the following Support
                        Services to its learners for delivering quality education through distance & online mode:</p>

                    <div class="faq-accordion" id="accordion">
                        <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Pre-Admission Counselling Services
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Recognition by UGC-DEB:</strong> The CDOE, CUHP comes under the entitled
                                            list of the
                                            institutions notified by the UGC-DEB to offer programmes under Online Mode. This
                                            information is accessible on the UGC-DEB website: <a
                                                href="https://deb.ugc.ac.in/" target="_blank">https://deb.ugc.ac.in/</a>.
                                            Further, learners
                                            can access the requisite disclosures pertaining to the Online Programmes through
                                            CDOE
                                            website (<a href="https://cdoe.cuhimachal.ac.in"
                                                target="_blank">https://cdoe.cuhimachal.ac.in</a>).</li>

                                        <li><strong>Program Approval Confirmation:</strong> Programmes offered by the CDOE,
                                            CUHP under online
                                            mode are duly approved by the UGC-DEB. Notification regarding the same can be
                                            accessed at <a href="https://cdoe.cuhimachal.ac.in"
                                                target="_blank">https://cdoe.cuhimachal.ac.in</a>.</li>

                                        <li><strong>Dedicated Helpdesk-cum-Learner Support Services (LSS) Cell:</strong> A
                                            dedicated
                                            Helpdesk-cum-Learner Support Services (LSS) Cell of CDOE, CUHP is working to
                                            ensure
                                            the hassle free learning experience to its learners and provide every kind of
                                            guidance and
                                            support 24x7 for 365 days in an year.</li>

                                        <li><strong>Central Access Point:</strong> Helpdesk-cum-LSS Cell is a central access
                                            point for all learners to
                                            address their issues. Learners may approach the Cell for all activities related
                                            to Counseling,
                                            admission, e-SLM, assignments, Examinations, award of degrees etc.</li>

                                        <li><strong>LSS Cell as Multi-mode Response Centre:</strong> Helpdesk-cum-LSS Cell
                                            of the CDOE, CUHP
                                            functions as a multi-mode response center, using different communication methods
                                            to
                                            address learner queries. Learners may contact this desk/cell through following
                                            means:
                                            <ul class="circle">
                                                <li>Phone No. 01892-229330</li>
                                                <li>Email: <a
                                                        href="mailto:helpdeskcdoe.cuhp@hpcu.ac.in">helpdeskcdoe.cuhp@hpcu.ac.in</a>
                                                </li>
                                                <li>Contact Persons:
                                                    <ul class="circle">
                                                        <li>Dr. Sudam Charan Sahu</li>
                                                        <li>Ms. Aishwarya Rai</li>
                                                        <li>Sh. Rohit Dhiman</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Support for Admission Process
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Dedicated Admission Portal:</strong> The admission to ODL & OL
                                            programmes in CDOE, CUHP
                                            are made through Samarth portal. CDOE has a dedicated admission and examination
                                            team
                                            headed by I/c, Admission & Exam to provide support to its learners.</li>

                                        <li><strong>DEB-ID Registration:</strong> For taking admission to any of the Online
                                            Programme offered by
                                            CDOE, CUHP, learners shall be required to register on the UGC-DEB portal using
                                            their
                                            Academic Bank of Credit (ABC) ID to generate a unique DEB-ID. Helpdesk-cum-LSS
                                            Cell
                                            provides support for this purpose.</li>

                                        <li><strong>How to Apply:</strong> CDOE, CUHP has designed a process for admission
                                            and specified steps to
                                            be followed while applying for admission. This process can be accessed through
                                            the
                                            website; <a href="https://cdoe.cuhimachal.ac.in"
                                                target="_blank">https://cdoe.cuhimachal.ac.in</a>. Awareness sessions are
                                            also organised by CDOE
                                            through online mode for prospective learners to familiarise them with the
                                            admission
                                            process. Recorded videos of these awareness sessions are available on CDOE
                                            website as
                                            well as on facebook page of the centre.</li>

                                        <li><strong>Separate Prospectus:</strong> CDOE, CUHP has its separate prospectus/
                                            handbook of
                                            information for admission to Online Programmes mentioning the eligibility
                                            criteria, process
                                            of application submission, admission and teaching-learning process.</li>

                                        <li><strong>Programme Guide:</strong> Programme Guide for individual programme
                                            offered under online
                                            mode is also available and can be accessed at <a
                                                href="https://cdoe.cuhimachal.ac.in"
                                                target="_blank">https://cdoe.cuhimachal.ac.in</a> by the
                                            learners to take informed and judicious decision regarding different aspects of
                                            online
                                            programmes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Academic Support for Learners
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>E-Self-Learning Material (e-SLM):</strong> CDOE, CUHP has developed
                                            high-quality, self-learning
                                            materials in digital form following four-quadrant approach of SWAYAM for online
                                            programmes by ensuring clarity, comprehensiveness, interactivity, to facilitate
                                            online
                                            learning. Details about e-SLM of all the online programmes is also available on
                                            the website
                                            of the CDOE, CUHP.</li>

                                        <li><strong>Learning Management System (SWAYAM):</strong> CDOE, CUHP has access to
                                            SWAYAM
                                            platform for instructional delivery to online learners. e- SLM, recorded
                                            e-tutorials (video
                                            lectures), discussion forum, and continuous assessment related components are
                                            offered
                                            through SWAYAM. The admitted students can access the SWAYAM platform through
                                            their
                                            registered login ID & password issued by CDOE,CUHP.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Support for Learner Engagement and Participation
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Regular Interaction:</strong> Regular live interactive sessions for
                                            resolving learners' issues and
                                            queries are ensured by the CDOE, CUHP through live discussion forum on SWAYAM
                                            platform. To ensure learners' active participation, activites such as; virtual
                                            discussions and
                                            live query resolution sessions are organised by CDOE, CUHP through online mode.
                                            The
                                            learners can also approach their Programme Coordinator/ Course Coordinator and
                                            Mentors
                                            through phone, email or whatsapp for regular interaction on any outstanding
                                            academic
                                            issues.</li>

                                        <li><strong>Live Discussion Forums:</strong> To promote the collaborative learning,
                                            CDOE, CUHP has an
                                            active live discussion forum through which learner can interact with the peers
                                            (for
                                            peer-learning), Course Coordinators, and Course Mentors to discuss course-
                                            related topics
                                            to enhance their domain knowledge and understanding.</li>

                                        <li><strong>Accessibility to Additional Learning Resources:</strong> For the
                                            comprehensive coverage of the
                                            course contents and holistic development of the learners, CDOE, CUHP provides
                                            additional
                                            learning resources in the form of e-books, e-resources and facility of digital
                                            library. Remote
                                            access to all the digital resources of the library to online learners,
                                            single-point access to
                                            available OERs like; e-PG Pathshala, SWAYAM, Coursera, and Youtube resources etc
                                            are
                                            also provided to the learners through its website.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Mentoring and Counseling Services
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Academic Counseling:</strong> CDOE, CUHP offers academic counselling to
                                            its distance and
                                            online learners to assist them during their entire learning cycle. Learners are
                                            assisted in
                                            course selection, study planning, and addressing their academic challenges.</li>

                                        <li><strong>Mentorship Programme:</strong> CDOE, CUHP has also a provision for
                                            academic councellor
                                            (Mentor) for a fixed set of learners to provide them with customized services
                                            and address
                                            the learners' issues in a time bound manner.</li>

                                        <li><strong>Training of Faculty & Staff:</strong> CDOE, CUHP organises FDPs and
                                            train its Programme
                                            Coordinators, Course Coordinators, Course Mentors, dedicated faculty, academic
                                            counselors and all other administrative and technical staff to sensitize them
                                            about learners'
                                            specific academic needs and issues.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.0s"
                            style="visibility: visible; animation-delay: 1.0s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Technical Support Services/IT Services
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Technical Guidance:</strong> CDOE, CUHP has a dedicated technical
                                            support team for its
                                            distance and online learners to resolve issues related to accessing and using
                                            various online
                                            resources, navigation through LMS (SWAYAM), and other digital tools essential
                                            for online
                                            learning programmes. Learners can reach the technical support team of the CDOE,
                                            CUHP
                                            through website <a href="https://cdoe.cuhimachal.ac.in"
                                                target="_blank">https://cdoe.cuhimachal.ac.in</a> for any kind of technical
                                            issues related to use
                                            of Samarth portal as well as SWAYAM portal.</li>

                                        <li><strong>Convenient Resource Accessibility:</strong> CDOE, CUHP ensures that all
                                            online learning
                                            resources such as e-SLM, e-tutorials, OERs, discussion forum etc are accessible
                                            across
                                            various devices and platforms, accommodating diverse technological capabilities
                                            among
                                            learners.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.2s"
                            style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Support for Assessment, Evaluation and Feedback
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Continuous Internal Assessment (CIA):</strong> To ensure smooth learning
                                            experience and
                                            monitor the progress of the learners, CDOE, CUHP has a system of continuous
                                            internal
                                            assessment (CIA). Timely feedback is provided to the learners, aiding in the
                                            identification of
                                            hardspots needing improvement for timely completion of the online programme.
                                        </li>

                                        <li><strong>Transparent Evaluation and Grading:</strong> CDOE, CUHP provides clear
                                            criteria for evaluation
                                            and grading to the learners at the outset of each course, ensuring transparency
                                            and
                                            fairness in its assessments. These criteria are mentioned in prescribed
                                            curriculum of each
                                            online programme.</li>

                                        <li><strong>Course and Exam Registration on Samarth portal:</strong> CDOE, CUHP
                                            provides support to its
                                            online learners for course as well as exam registration. Programme Coordinators/
                                            Course
                                            Coordinators/ Course Mentors/ Technical Team assists online learners to register
                                            for
                                            courses as well as for examination.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.4s"
                            style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    Grievance Redressal Mechanism
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li><strong>Support Services:</strong> CDOE, CUHP has established a
                                            responsive-cum-proactive grievance
                                            redressal mechanism to address learners' concerns promptly, ensuring a
                                            supportive and
                                            responsive educational environment to its learners. The CDOE, CUHP has issued
                                            detailed
                                            grievance redressal guidelines and mechanism for grievance redressal. Learners
                                            may
                                            access these at CDOE, CUHP website and they may forward their grievance to the
                                            Office
                                            of the Assistant Director, CDOE who shall further refer the grievance to the
                                            Students'
                                            Grievance Redressal Committee of CDOE.</li>

                                        <li><strong>Stakeholders Feedback:</strong> CDOE, CUHP obtains feedback from its
                                            learners, alumni, and
                                            academic faculty for continuous improvement in its endevour of ensuring quality
                                            online
                                            education to its learners.</li>

                                        <li><strong>Exclusive Help Desk:</strong> CDOE, CUHP has an exclusive helpdesk to
                                            assist its learners
                                            during the entire learning cycle. Learners may approach helpdesk at
                                            <a href="mailto:helpdeskcdoe.cuhp@hpcu.ac.in">helpdeskcdoe.cuhp@hpcu.ac.in</a>,
                                            Ph. 01892229330.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.6s"
                            style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    Other Support Services for Learners
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <ul class="circle">
                                        <li>The CDOE, CUHP provides customized services to its distance and online learners
                                            through
                                            whatsapp also. To provide instant support to all its learners, a common whatsapp
                                            account
                                            has been created by CDOE.</li>

                                        <li>CDOE, CUHP facilitates its learners to resolve their common doubts and issues
                                            through
                                            Frequently Asked Questions (FAQs) tab/section on its website.</li>

                                        <li>To ensure one point access to most of the academic organisations and learning
                                            resources,
                                            CDOE provides quick links of various websites such as; Ministry of Education,
                                            UGC,
                                            UGC-DEB, SWAYAM, e-PG Pathshala etc on its website.</li>

                                        <li>CDOE, CUHP offers regular support through Programme Coordinators, Course
                                            Coordinators and Course Mentors to its learners to undertake the practical work
                                            in various
                                            courses and carry out research and project work. Detailed practical manuals and
                                            research/project/dissertation guidelines are provided to learners for timely
                                            completion of the
                                            course.</li>

                                        <li>CDOE, CUHP in its endavour to ensure the quality learning experience provides
                                            post
                                            programme support to all its learners. Services like security refund,
                                            declaration of results,
                                            and issuing of the marksheets and degree are also facilitated by the CDOE, CUHP.
                                        </li>
                                    </ul>

                                    <p>Through these provisions, CDOE, CUHP provides a structured and supportive learning
                                        environment that caters to the diverse needs of online learners, thereby upholding
                                        the quality and
                                        credibility of online programmes.</p>

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
