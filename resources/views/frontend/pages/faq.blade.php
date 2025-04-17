@extends('frontend.layouts.main')
@section('title', 'FAQ')
@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Frequently Asked Question</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Frequently Asked Question</li>
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
                    <div class="faq-accordion" id="accordion">
                        <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. What is CDOE?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>‘CDOE’ stands for "Centre for Distance and Online Education". The Centre for
                                        Distance and Online Education (CDOE) is an integral constituent of the Central
                                        University of Himachal Pradesh (CUHP), Dharamshala (HP) - INDIA established by
                                        Government of India under Central Universities Act 2009. The CDOE was
                                        established in the year 2025 with the main aim of improving inclusive access and
                                        equity in the field of higher education as has been enunciated in the Constitution
                                        of
                                        India. The CDOE is headed by the Director with fully dedicated administrative team
                                        for its smooth functioning. The CDOE has its approval from University Grants
                                        Commission - Distance Education Bureau (UGC-DEB) to offer academic
                                        programmes through open and distance learning (ODL) and online learning (OL)
                                        mode.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. What is Online Learning (OL)?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>Online learning refers to education delivered through a virtual environment
                                        using internet and a computer device / smart phone. It offers a flexible and

                                        convenient way to pursue higher education through online learning materials (e-
                                        SLM), video lectures, interactive sessions, e-library resources, OERs, online

                                        assessments etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. What is learning through Open and Distance Learning (ODL) mode?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>ODL refers to a flexible mode of education where learners learn
                                        independently, without daily in-person class attendance, utilizing materials (SLM),
                                        personal contact programmes (PCPs), physical or online counselling sessions,
                                        practical sessions, library access, other physical and web resources etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. Is learning through ODL and online learning mode effective?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>Yes, ODL and online learning programmes of CDOE, CUHP are effective as
                                        these programmes / courses are offered in a well-structured manner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    5. What are the benefits of ODL and Online learning (OL)?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="heading5"
                                data-bs-parent="#accordion" style="">
                                <div class="accordion-body">
                                    <p>Open and distance learning (ODL) and Online learning (OL) offers flexibility,
                                        convenience, and the opportunity to collaborate with classmates at a distance
                                        either through conventional means or through virtual tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    6. What types of programmes are available online?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Online learning (OL) programmes offered by CDOE, CUHP include Master's and
                                        Undergraduate Degree, PG Diploma, and certificate programmes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.2s">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    7. Are degrees offered through ODL and OL mode recognized?
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, degrees through ODL and OL mode offered by CDOE, CUHP are recognized as
                                        equivalent to traditional degrees.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.4s">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    8. How can I verify the recognition status of CDOE, CUHP offering ODL and online
                                    learning (OL) programmes?
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>You may check the status with the University Grants Commission - Distance Education
                                        Bureau (UGC-DEB) on its website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.6s">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    9. When can I apply for admission in ODL and OL programmes?
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Admission to ODL and Online Learning (OL) Programmes of CDOE are done twice a year
                                        (July and January Sessions) as per calendar issued by UGC-DEB.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.8s">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    10. How can I apply for admission in ODL and OL programmes?
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>To know the admission process in detail, you may visit the Admission Process tab on
                                        CDOE website. (<a href="http://www.cdoe.cuhimachal.ac.in"
                                            target="_blank">www.cdoe.cuhimachal.ac.in</a>)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2s">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    11. What are the eligibility criteria for taking admission in ODL and Online Learning
                                    Programmes?
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>To know the basic eligibility for ODL and online learning (OL) programmes, please
                                        visit the Programmes Offered tab on CDOE website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.2s">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    12. Is any experience required to pursue ODL/OL Programmes?
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>No. Any person who fulfils the minimum eligibility conditions can take admission in
                                        ODL/OL programmes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.4s">
                            <h2 class="accordion-header" id="heading13">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    13. Can a candidate take a job while pursuing a programme from CDOE?
                                </button>
                            </h2>
                            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes. He/she can hold a job while taking a programme from CDOE.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.6s">
                            <h2 class="accordion-header" id="heading14">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                    14. What is duration of the ODL and OL Programmes?
                                </button>
                            </h2>
                            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The duration of programmes shall be in accordance with the guidelines of UGC. For
                                        minimum and maximum duration of different programmes of studies offered through ODL
                                        and OL mode by CDOE, CUHP, please see programme guide given under Programmes Offered
                                        Tab on website of CDOE.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.8s">
                            <h2 class="accordion-header" id="heading15">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                    15. What are the technical requirements for an online learning programme?
                                </button>
                            </h2>
                            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>All online programmes require an internet connection. Although there may be different
                                        technical requirements, most online programmes are offered through a Learning
                                        Management System (LMS). At CDOE, we offer these programmes through SWAYAM. You’ll
                                        interact with the Programme Coordinator, Course Coordinator, and support staff via
                                        email, forums, video sessions, and phone.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="3s">
                            <h2 class="accordion-header" id="heading16">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                    16. To whom should I contact for help or assistance related to various aspects of ODL or
                                    OL programmes?
                                </button>
                            </h2>
                            <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Helpdesk-cum-LSS Cell of the CDOE, CUHP functions as a multi-mode response center.
                                        You may contact this desk via the Helpdesk tab on CDOE website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.2s">
                            <h2 class="accordion-header" id="heading17">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    17. What should I do if I need technical assistance?
                                </button>
                            </h2>
                            <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>If you are having any technical issues, your first contact should be the
                                        Helpdesk-cum-Learner Support Services (LSS) Cell. In most cases, they will be able
                                        to resolve your issues. If the issue remains unresolved, they will connect you with
                                        the appropriate personnel. The technical staff can also assist in directing you to
                                        the correct support resource if needed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.4s">
                            <h2 class="accordion-header" id="heading18">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                    18. How do I get access to the course materials?
                                </button>
                            </h2>
                            <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The course materials (e-SLM) will be provided to you in the form of weblinks
                                        separately for each course prescribed in an OL programme of study. You shall be
                                        able to access the material through SWAYAM (LMS) of CDOE, CUHP. In case of
                                        ODL programme, its hard copy will be provided to you through post / courier. Once
                                        you receive your registration-cum-enrolment number from CDOE, you may contact
                                        course coordinator who is teaching and managing the course over phone and email.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.6s">
                            <h2 class="accordion-header" id="heading19">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                    19. How much does an ODL or online learning programme cost?
                                </button>
                            </h2>
                            <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>To know about the cost and fee structure of the programmes offered by CDOE, CUHP,
                                        please visit the "Programmes Offered" and "Fee" tabs on the official website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.8s">
                            <h2 class="accordion-header" id="heading20">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                    20. What teaching methods are used in ODL and OL programmes?
                                </button>
                            </h2>
                            <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>To offer ODL and OL programmes, CDOE, CUHP strictly follows the UGC-
                                        DEB regulations and guidelines. To deliver the online learning programme, we follow
                                        4-quadrant approach of SWAYAM.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.0s">
                            <h2 class="accordion-header" id="heading21">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                    21. What is the Medium of Instruction in ODL and OL Programmes?
                                </button>
                            </h2>
                            <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Study Material (SLM and e-SLM) will be provided in English and e-tutorials
                                        (video lectures), discussion forum, live sessions etc shall be in bilingual (Hindi
                                        and
                                        English medium both).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.2s">
                            <h2 class="accordion-header" id="heading22">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    22. Is the ODL degree and online learning degree offered by CDOE, CUHP recognized?
                                </button>
                            </h2>
                            <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, the CDOE, CUHP is recognised by the Distance Education Bureau,
                                        University Grants Commission (UGC) to offer ODL and/or OL degree programmes.
                                        You may check the status with the University Grants Commission - Distance
                                        Education Bureau (UGC-DEB) on its website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.4s">
                            <h2 class="accordion-header" id="heading23">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                    23. Do distance learning programmes and regular programmes offer the same value?
                                </button>
                            </h2>
                            <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes. The students obtaining degrees under distance education are given the
                                        same level of recognition and value as offered under regular programmes of the
                                        universities. In fact, no one can discriminate between students enrolled in distance
                                        learning/online learning programmes and those enrolled in regular programmes as
                                        per UGC guidelines.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.6s">
                            <h2 class="accordion-header" id="heading24">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                    24. How can I take the examination?
                                </button>
                            </h2>
                            <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Proctored examinations will be conducted. The examinations for Continuous
                                        Internal Assessment (CIA) and End-Semester Examinations (ESE) for various ODL
                                        and OL programme of studies of CDOE shall be conducted through
                                        physical/online/proctored mode/technology-enabled online tests or any other mode
                                        as decided by the university from time to time. The university shall follow
                                        guidelines
                                        issued by the UGC-DEB from time to time for conduct of examinations through
                                        physical/online/proctored mode/technology-enabled online tests or any other mode
                                        as decided by the university from time to time.
                                        You may see the programme guide of respective programme for knowing
                                        more about the examination system/pattern followed in different programmes offered
                                        through ODL and OL mode by the CDOE, CUHP. The programme guide is available
                                        at Programme Offered tab on CDOE website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="2.8s">
                            <h2 class="accordion-header" id="heading25">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    25. Is attendance for ODL and online learning (OL) programmes mandatory?
                                </button>
                            </h2>
                            <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>You are required to follow the timelines for submission of assignments, CIA and
                                        examination. The learner in any programme through ODL mode shall be required to
                                        have minimum attendance of 75 percent in programme specific personal contact
                                        programme (excluding counselling sessions) and laboratory component of the
                                        programme. In case of OL programmes, the learner in any OL programme is
                                        required to have minimum participation of 75 percent in all the activities of online
                                        programmes organized prior to end-semester examination.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="3.0s">
                            <h2 class="accordion-header" id="heading26">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                    26. Are the OL programmes offered by CDOE entirely online and do we have downloadable
                                    learning material?
                                </button>
                            </h2>
                            <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes. Everything from application to certification will be online and you can
                                        access the self-learning material from SWAYAM-Learning Management System after
                                        getting registered on completion of admission formalities. You can download the e-
                                        Self Learning Material (e-SLM) as well.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="3.2s">
                            <h2 class="accordion-header" id="heading27">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                    27. How can I access my course material in OL programmes?
                                </button>
                            </h2>
                            <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>CDOE, CUHP uses SWAYAM as a Learning Management System (LMS) and
                                        employs it for transactional delivery. On confirmation of the admission, the learner
                                        will get the access to the SWAYAM (LMS) through the SAMARTH account itself.
                                        Once the SWAYAM (LMS) access button will get active, the learners can access the
                                        learning material in the form of e-SLM.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="3.4s">
                            <h2 class="accordion-header" id="heading28">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                    28. Do I need to purchase textbooks or any software?
                                </button>
                            </h2>
                            <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>No, every study material is available in SWAYAM (LMS) in the form of e-SLM
                                        on learner’s registered account. You are required to have desktop
                                        computer/laptop/smartphone for using SWAYAM portal for undertaking OL
                                        programme of studies.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="3.6s">
                            <h2 class="accordion-header" id="heading29">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                    29. Do I get any support to complete my registration or admission process?
                                </button>
                            </h2>
                            <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, we have a dedicated Helpdesk-cum-LSS cell for your assistance and
                                        you may contact this desk/cell by visiting the Helpdesk tab on CDOE website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="3.8s">
                            <h2 class="accordion-header" id="heading30">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                    30. What is the process of Admission to ODL and OL programmes?
                                </button>
                            </h2>
                            <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>You may employ following steps for admission to ODL and OL programme of
                                        studies:</p>
                                    <ul>
                                        <li>Register on SAMARTH portal of CDOE, CUHP</li>
                                        <li>Fill out the application form online</li>
                                        <li>Pay the Prescribed Programme Fee digitally</li>
                                        <li>Upload required documents and submit</li>
                                        <li>Documents are verified by CDOE</li>
                                        <li>University enrolment number is issued</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="4.0s">
                            <h2 class="accordion-header" id="heading31">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                    31. What should I do after the completion of admission formalities?
                                </button>
                            </h2>
                            <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>After completing the admission formalities, you will receive registration ID.
                                        You will also receive academic calendar and counselling schedule. You will get
                                        access to the e-SLM. You are advised to follow the information available on our
                                        website. Once registered, you will also start receiving the notifications through
                                        your
                                        SWAYAM account.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="4.2s">
                            <h2 class="accordion-header" id="heading32">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                    32. What is the cost of application for ODL/ OL admission?
                                </button>
                            </h2>
                            <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>To know about the cost of application, please visit our website:
                                        <a href="https://www.cdoe.cuhimachal.ac.in"
                                            target="_blank">www.cdoe.cuhimachal.ac.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="4.4s">
                            <h2 class="accordion-header" id="heading33">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                    33. What are different modes of fee payment?
                                </button>
                            </h2>
                            <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Payment Gateway options provided by CDOE, CUHP are Credit/Debit Card
                                        (ATM), Net Banking / UPI. Status of Fee paid by learner through Online Mode will be
                                        updated within 72 hours. In case of any fee deposit related clarification/details,
                                        write
                                        an email to <a
                                            href="mailto:helpdeskcdoe.cuhp@hpcu.ac.in">helpdeskcdoe.cuhp@hpcu.ac.in</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="4.6s">
                            <h2 class="accordion-header" id="heading34">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                    34. Are there any extra charges that I have to pay?
                                </button>
                            </h2>
                            <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>All details related to programme fee and any other charges shall be displayed
                                        prior by CDOE on its website and admission prospectus (handbook of information).
                                        No extra charges shall be applicable other than those mentioned at the time of
                                        applying for admission to ODL and OL programmes of CDOE, CUHP.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="4.8s">
                            <h2 class="accordion-header" id="heading35">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                    35. What sort of information is available on LMS (SWAYAM)?
                                </button>
                            </h2>
                            <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>SWAYAM is your Learning Management System in your pocket. You will get access to your
                                        course material, Recorded Lectures, Live Sessions, Assignments, Discussion forums,
                                        Academic Calendar, etc. You will get all information/notifications on the dashboard.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="5.0s">
                            <h2 class="accordion-header" id="heading36">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                    36. Are there any training sessions on how to use SWAYAM (LMS)?
                                </button>
                            </h2>
                            <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, we conduct periodic orientation sessions on how to make use of SWAYAM (LMS)
                                        platform by the learners for OL programmes of studies.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="5.2s">
                            <h2 class="accordion-header" id="heading37">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                    37. Can I access the course material on my mobile phone?
                                </button>
                            </h2>
                            <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, our SWAYAM (LMS) is accessible on mobile, Laptops, PCs, and tablets. You can
                                        access it anytime, anywhere at your convenience.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="5.4s">
                            <h2 class="accordion-header" id="heading38">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                    38. Is there any provision of live sessions for courses?
                                </button>
                            </h2>
                            <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, as per SWAYAM 4-quadrant approach of transactional delivery mechanism, one of
                                        the essential quadrants is Discussion Forum. We organise live discussion sessions
                                        periodically under each course to address the issues of our learners.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="5.6s">
                            <h2 class="accordion-header" id="heading39">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                    39. How can I interact with my peers?
                                </button>
                            </h2>
                            <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The discussion forum is the medium through which you can connect with your course
                                        coordinator and peers. The CDOE, CUHP has made adequate arrangements for peer
                                        interaction through online mode. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="5.8s">
                            <h2 class="accordion-header" id="heading40">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                    40. Can I reach faculty members other than weekend live classes?
                                </button>
                            </h2>
                            <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, you can post your queries through your learning portal and e-mail (of Helpdesk),
                                        and the faculty will respond in a time bound manner to your queries. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="6.0s">
                            <h2 class="accordion-header" id="heading41">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                    41. What are the assessment components for online learning programmes?
                                </button>
                            </h2>
                            <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Examination for a particular semester in each course will consist of two components:
                                    </p>
                                    <ul>
                                        <li><strong>End Semester Examination (ESE):</strong> 70% weightage</li>
                                        <li><strong>Continuous Internal Assessment (CIA):</strong> 30% weightage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="6.2s">
                            <h2 class="accordion-header" id="heading42">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                    42. Do ODL and online learning (OL) programmes have projects/dissertation component?
                                </button>
                            </h2>
                            <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes. ODL and OL learning programmes have projects / dissertation as an integral
                                        component to give field exposure. Certain programmes have practical
                                        laboratory components also. You may see the programme guide which is available at
                                        Programme Offered tab on CDOE website.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="6.4s">
                            <h2 class="accordion-header" id="heading43">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                    43. From where do I access the course structure and detailed syllabus of ODL and OL
                                    programmes?
                                </button>
                            </h2>
                            <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The detailed semester-wise and course-wise credit distribution along with detailed
                                        syllabus of various programmes of studies offered through ODL and OL mode is
                                        available at CDOE website under programme offered tab. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="6.6s">
                            <h2 class="accordion-header" id="heading44">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                    44. Is the curriculum aligned with the industry?
                                </button>
                            </h2>
                            <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes. Curriculum of ODL and OL programmes of studies is designed in way to suit the
                                        present and future requirements of Industry and community. The curriculum has also
                                        designed in consonance with the stipulations of National Education Policy 2020. The
                                        CDOE has a provision of regular up-dation of prescribed curriculum in accordance
                                        with emerging needs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="6.8s">
                            <h2 class="accordion-header" id="heading45">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                    45. Will the mode of learning be mentioned on my final certificate/degree?
                                </button>
                            </h2>
                            <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, as per the guidelines of UGC, the mode of delivery shall be printed on the final
                                        certificate/degree to be issued by CDOE, CUHP.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="7.0s">
                            <h2 class="accordion-header" id="heading46">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                    46. What is ABC-ID?
                                </button>
                            </h2>
                            <div id="collapse46" class="accordion-collapse collapse" aria-labelledby="heading46"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The Academic Bank of Credit ID (ABC-ID) is a unique identification assigned to
                                        learners under India’s Academic Bank of Credit system. It facilitates digital
                                        storage, transfer, and accumulation of academic credits earned across multiple
                                        institutions, supporting flexible learning pathways and enabling credit transfer for
                                        degree completion as per the National Education Policy-2020.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="7.2s">
                            <h2 class="accordion-header" id="heading47">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                    47. Is it mandatory to have an ABC-ID?
                                </button>
                            </h2>
                            <div id="collapse47" class="accordion-collapse collapse" aria-labelledby="heading47"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, according to NEP-2020 and as per the rules and regulations of CUHP, Academic
                                        Bank of Credit ID (ABC-ID) is mandatory for all learners. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="7.4s">
                            <h2 class="accordion-header" id="heading48">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                    48. How can a candidate create ABC-ID?
                                </button>
                            </h2>
                            <div id="collapse48" class="accordion-collapse collapse" aria-labelledby="heading48"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>All the students are advised to create their ABC-ID through Digi Locker before taking
                                        admission in the CDOE, CUHP. Students can create their ABC-ID through the
                                        link
                                        <a href="https://www.abc.gov.in/" target="_blank">(https://www.abc.gov.in/)</a>.
                                        Before creation of ABC-ID, the mobile no. of the student must be linked with Aadhaar
                                        (mandatory).
                                        The YouTube Link to know how to create ABC-IDs <a
                                            href="https://www.youtube.com/watch?v=Gw3DUHaJg1c"
                                            target="_blank">https://www.youtube.com/watch?v=Gw3DUHaJg1c</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="7.6s">
                            <h2 class="accordion-header" id="heading49">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                    49. What is DEB-ID?
                                </button>
                            </h2>
                            <div id="collapse49" class="accordion-collapse collapse" aria-labelledby="heading49"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>DEB-ID is a unique identifier assigned to learner enrolled in programmes under the
                                        Distance Education Bureau (DEB) of the University Grants Commission (UGC) in India.
                                        The DEB-ID ensures proper enrolment, facilitates academic credit tracking, and helps
                                        maintain compliance with UGC-DEB guidelines for recognized programmes. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="7.8s">
                            <h2 class="accordion-header" id="heading50">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                    50. Is it mandatory for learners to have a DEB-ID during admission?
                                </button>
                            </h2>
                            <div id="collapse50" class="accordion-collapse collapse" aria-labelledby="heading50"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, having a DEB-ID is mandatory for admission to distance education or online
                                        courses regulated by the UGC-Distance Education Bureau (DEB), Govt. of India. The
                                        University Grants Commission has decided to standardize the admission process for
                                        learners enrolling in ODL and/or OL programmes to safeguard their academic future
                                        and career opportunities. Accordingly, it was made mandatory for learners to
                                        register on UGC-DEB web portal with his/her Academic Bank of Credit (ABC)-ID to
                                        generate a unique DEB-ID to enrol in ODL/Online programmes offered by CDOE, CUHP.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item 51 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="8.0s">
                            <h2 class="accordion-header" id="heading51">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                    51. What is the provision in CDOE, CUHP for transfer/mobility of credits earned through
                                    ODL and OL programme of studies?
                                </button>
                            </h2>
                            <div id="collapse51" class="accordion-collapse collapse" aria-labelledby="heading51"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The University shall have provision for transfer of credits earned by its students
                                        (either through different face-to face programme of studies or various ODL/OL
                                        programme of studies) to other Universities / educational institutions. Any learner
                                        enrolled in ODL or OL programme of study in CDOE, CUHP shall be eligible for
                                        mobility from ODL and / or OL mode of learning to physical mode (face to face mode)
                                        of learning within this university as per the UGC-DEB guidelines and as per the
                                        provisions stipulated under the University Act/Statutes/Ordinances and with the
                                        approval of the statutory authorities of the university. The university shall have
                                        the provision for transfer of the credits earned by students after successful
                                        completion of
                                        a programme of study through ODL / OL mode from CDOE, CUHP as per UGC-DEB guidelines
                                        issued from time to time and adopted by the university accordingly. A student of the
                                        University seeking transfer of credit to other Universities/ institutions shall
                                        submit a request, along with the fee as prescribed by the university from time to
                                        time, to the Controller of Examinations through Director, CDOE. The onus of
                                        accepting the transferred credits (either all credits or specified percentage of
                                        credits) by other universities / institutions shall be the entire discretion of the
                                        university / institution where the credits shall be transferred. The transferring
                                        university/CDOE, CUHP shall not have any role in this context.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 52 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="8.2s">
                            <h2 class="accordion-header" id="heading52">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                    52. Can I shift to regular mode during my ongoing programme of study in ODL / OL mode?
                                </button>
                            </h2>
                            <div id="collapse52" class="accordion-collapse collapse" aria-labelledby="heading52"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes. You can shift to regular mode from ODL / OL mode. However, this will depend upon
                                        the institution/university where you wish to shift that whether that
                                        institution/university has availability of seat/s in concerned regular programme in
                                        respective semester and the provisions for credit transfer. Such shifting shall be
                                        allowed only in accordance with the guidelines of UGC.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 53 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="8.4s">
                            <h2 class="accordion-header" id="heading53">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                    53. Can I shift to ODL / OL mode from regular mode during the ongoing regular programme
                                    of studies?
                                </button>
                            </h2>
                            <div id="collapse53" class="accordion-collapse collapse" aria-labelledby="heading53"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>The admissions to ODL / OL programme of studies are made in accordance with the
                                        guidelines and academic calendar of UGC-DEB. This shift of admission to ODL / OL
                                        mode from regular mode shall entirely depend on UGC-DEB guidelines and academic
                                        calendar as well as provisions for credit transfer/ mobility of accepting
                                        institution.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 54 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="8.6s">
                            <h2 class="accordion-header" id="heading54">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                    54. Can a candidate pursue two degrees at same period of time?
                                </button>
                            </h2>
                            <div id="collapse54" class="accordion-collapse collapse" aria-labelledby="heading54"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Any individual can pursue two degrees simultaneously in accordance with the existing
                                        guidelines, rules and regulations of UGC.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 55 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="8.8s">
                            <h2 class="accordion-header" id="heading55">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                    55. Are foreign nationals eligible to apply for ODL and OL programmes?
                                </button>
                            </h2>
                            <div id="collapse55" class="accordion-collapse collapse" aria-labelledby="heading55"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>foreign nationals are also eligible to apply.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 56 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="9.0s">
                            <h2 class="accordion-header" id="heading56">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                    56. What is the territorial jurisdiction of CDOE, CUHP for offering ODL and/or Online
                                    programmes?
                                </button>
                            </h2>
                            <div id="collapse56" class="accordion-collapse collapse" aria-labelledby="heading56"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>As per UGC-DEB guidelines and in accordance with its Act, CUHP is authorized to offer
                                        ODL and Online programs across India and the world. The university complies with UGC
                                        regulations, allowing learners from any part of the world to enrol in its
                                        programmes. </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 57 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="9.2s">
                            <h2 class="accordion-header" id="heading57">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                    57. What if I want more information about programmes of CDOE, CUHP?
                                </button>
                            </h2>
                            <div id="collapse57" class="accordion-collapse collapse" aria-labelledby="heading57"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>visit our website <a href="https://www.cdoe.cuhimachal.ac.in"
                                            target="_blank">https://www.cdoe.cuhimachal.ac.in</a> for more details.<br>
                                        <strong>Address for Communication:</strong><br>
                                        Centre for Distance and Online Education (CDOE),<br>
                                        Central University of Himachal Pradesh (CUHP),<br>
                                        Dharamshala, Distt. Kangra (HP) – 176215 (INDIA)<br>
                                        <strong>Email:</strong> <a
                                            href="cdoe.office@hpcu.ac.in">cdoe.office@hpcu.ac.in</a><br>
                                        <strong>Director:</strong> Prof. Vishal Sood
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
