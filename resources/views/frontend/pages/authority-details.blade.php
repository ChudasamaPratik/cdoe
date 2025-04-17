@extends('frontend.layouts.main')
@section('title')
    @if ($role == 'assistant-director')
        Dr. Harish Kumar
    @elseif($role == 'deputy-director')
        Dr. Chaman Kashyap
    @elseif($role == 'registrar')
        Prof. Suman Sharma
    @elseif($role == 'incharge-admissions-examinations')
        Prof. Jagmeet Bawa
    @else
        Dr. Vishal Sood
    @endif
@endsection

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">
                            @if ($role == 'assistant-director')
                                Dr. Harish Kumar
                            @elseif($role == 'deputy-director')
                                Dr. Chaman Kashyap
                            @elseif($role == 'registrar')
                                Prof. Suman Sharma
                            @elseif($role == 'incharge-admissions-examinations')
                                Prof. Jagmeet Bawa
                            @else
                                Dr. Vishal Sood
                            @endif
                        </h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $role }}</li>
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
                                @if ($role == 'assistant-director')
                                    <img src="{{ asset('frontend/images/team/Dr_Harish_Kumar.jpg') }}"
                                        alt="Dr. Harish Kumar" style="transform: translate(0px, 0px);">
                                @elseif($role == 'deputy-director')
                                    <img src="{{ asset('frontend/images/team/Pic_Deputy-Director.jpg') }}"
                                        alt="Dr. Chaman Kashyap" style="transform: translate(0px, 0px);">
                                @elseif($role == 'registrar')
                                    <img src="{{ asset('frontend/images/team/registrar.jpg') }}" alt="Prof. Suman Sharma"
                                        style="transform: translate(0px, 0px);">
                                @elseif($role == 'incharge-admissions-examinations')
                                    <img src="{{ asset('frontend/images/team/Prof. Jagmeet Bawa.png') }}"
                                        alt="Prof. Jagmeet Bawa" style="transform: translate(0px, 0px);">
                                @else
                                    <img src="{{ asset('frontend/images/team/director-about.jpg') }}" alt="Dr. Vishal Sood"
                                        style="transform: translate(0px, 0px);">
                                @endif
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h4 class="text-white pb-2">
                                    @if ($role == 'assistant-director')
                                        Dr. Harish Kumar
                                    @elseif($role == 'deputy-director')
                                        Dr. Chaman Kashyap
                                    @elseif($role == 'registrar')
                                        Prof. Suman Sharma
                                    @elseif($role == 'incharge-admissions-examinations')
                                        Prof. Jagmeet Bawa
                                    @else
                                        Dr. Vishal Sood
                                    @endif
                                </h4>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Designation</h4>
                                <p>
                                    @if ($role == 'assistant-director')
                                        Assistant Director (Online Education)
                                    @elseif($role == 'deputy-director')
                                        Deputy Director (Online Education)
                                    @elseif($role == 'registrar')
                                        Registrar
                                    @elseif($role == 'incharge-admissions-examinations')
                                        Incharge, Admissions and Examination (Online Programmes)
                                    @else
                                        Director
                                    @endif
                                </p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Department</h4>
                                <p>
                                    @if ($role == 'assistant-director')
                                        School of Tourism, Travel and Hospitality Management
                                    @elseif($role == 'deputy-director')
                                        Centre for Distance and Online Education
                                    @elseif($role == 'registrar')
                                        Central University of Himachal Pradesh
                                    @elseif($role == 'incharge-admissions-examinations')
                                        Department of Political Science
                                    @else
                                        Centre for Distance and Online Education
                                    @endif
                                </p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Official Email</h4>
                                <p>
                                    @if ($role == 'assistant-director')
                                        assistantdirector.cdoe@hpcu.ac.in
                                    @elseif($role == 'deputy-director')
                                        deputydirector.cdoe@hpcu.ac.in
                                    @elseif($role == 'registrar')
                                        registrar@hpcu.ac.in
                                    @elseif($role == 'incharge-admissions-examinations')
                                        pccdoe.polsc@hpcu.ac.in
                                    @else
                                        director.cdoe@hpcu.ac.in
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="team-single-content">
                        <div class="team-single-entry sngle-details">
                            <div class="mb-4">
                                <h3>
                                    @if ($role == 'assistant-director')
                                        Dr. Harish Kumar
                                    @elseif($role == 'deputy-director')
                                        Dr. Chaman Kashyap
                                    @elseif($role == 'registrar')
                                        Prof. Suman Sharma
                                    @elseif($role == 'incharge-admissions-examinations')
                                        Prof. Jagmeet Bawa
                                    @else
                                        Dr. Vishal Sood
                                    @endif
                                </h3>
                                <h5 class="text-muted">
                                    @if ($role == 'assistant-director')
                                        Assistant Director (Online Education)
                                    @elseif($role == 'deputy-director')
                                        Deputy Director (Online Education)
                                    @elseif($role == 'registrar')
                                        Registrar
                                    @elseif($role == 'incharge-admissions-examinations')
                                        Incharge, Admissions and Examination (Online Programmes)
                                    @else
                                        Director
                                    @endif
                                </h5>
                                <h6 class="text-muted">Central University of Himachal Pradesh</h6>
                            </div>

                            <div class="authority-bio">
                                @if ($role == 'assistant-director')
                                    <p style="text-align: justify;">Dr. Harish Kumar is a distinguished academician and
                                        tourism expert, currently serving as an Assistant Professor at the School of
                                        Tourism, Travel and Hospitality Management, Central University of Himachal Pradesh.
                                        With a Ph.D. in Tourism Administration and Management H.P.U. Shimla, his research
                                        focuses on tourist shopping behavior, rural tourism, and sustainable tourism
                                        development.</p>

                                    <p style="text-align: justify;">Have experience in research and the tourism industry.
                                        Dr. Harish Kumar has held key positions, including HoD & Coordinator of MBA Tourism
                                        and Hospitality Management at Himachal Pradesh Technical University. He is also
                                        holding the position of assistant director( additional charge) at centre of distance
                                        and online education. He has also contributed significantly to research as a Member
                                        of Editorial Boards for various university publications.</p>

                                    <p style="text-align: justify;">Dr. Harish Kumar has extensive experience in conducting
                                        research on diverse tourism-related topics, including consumer behavior, sustainable
                                        tourism policies, and local artisan promotion. His scholarly work has been published
                                        in esteemed international journals, covering themes such as women's empowerment in
                                        tourism, homestay tourism in Himachal Pradesh, and tourism marketing strategies.</p>

                                    <p style="text-align: justify;">Beyond teaching and research, he has played a pivotal
                                        role in organizing capacity-building programs, national seminars, and faculty
                                        development workshops. An active contributor to policy discussions, Dr. Harish Kumar
                                        has presented papers at national and international conferences, reinforcing his
                                        status as a thought leader in tourism studies. His expertise in consumer behavior,
                                        tourism marketing, and travel agency operations makes him a respected figure in
                                        academia and industry.</p>
                                @elseif($role == 'deputy-director')
                                    <p style="text-align: justify;">Dr. Chaman Lal, presently, working as an Associate
                                        Professor, Department of
                                        Commerce, School of Commerce &amp; Management Studies, Central University of
                                        Himachal Pradesh, since 2012. Prior to this, he has served Indira Gandhi National
                                        Open University (IGNOU), New Delhi and Department of Higher Education, Govt. of
                                        Himachal Pradesh as an Assistant Professor. He holds M. Com and M.Phil. Degrees
                                        from Himachal Pradesh University (HPU), Shimla. He did Ph.D. from IGNOU, New
                                        Delhi. He also holds a Post Graduate Diploma in Distance Education (PGDDE) from
                                        IGNOU, New Delhi. He has 15 years of teaching and research experience at
                                        undergraduate, post graduate, and research levels. He has developed, edited and
                                        transformed Self-Learning Material (SLM) and workbooks for ODL learners. He has
                                        also developed various modules of courses for e-PG Pathshala. He has completed
                                        two major research projects; one sponsored by NITI, Aayog and funded by UGC,
                                        New Delhi and second by ICSSR, New Delhi. He has published research papers in
                                        Scopus &amp; WOS indexed journals of national and international repute. The Central
                                        University of Himachal Pradesh has conferred ‘Best Teacher’ award on Dr. Chaman
                                        Lal.</p>
                                @elseif($role == 'registrar')
                                    <p style="text-align: justify;">Today we are living in the era of science and
                                        technology. Every moment, we
                                        are witnessing advancement in every sphere of life. At this ever-changing point of
                                        globalization, quality becomes a dominant factor of success in every sector of the
                                        economy and this includes quality of education also. Today’s society is ‘Knowledge-
                                        led Society’ and current economy is ‘Knowledge-based Economy’. Without
                                        knowledge and education, one will find it difficult to succeed in life and a number
                                        of
                                        challenges will be in the path of success in this competitive world. In order to
                                        provide
                                        educational opportunities to all, the Central University of Himachal Pradesh has
                                        set-
                                        up Centre for Distance and Online Education (CDOE). This centre will offer such
                                        academic programmes at various levels through open and distance learning mode
                                        and online learning mode. Such programmes through ODL and OL mode can make
                                        a major contribution in enhancing the Gross Enrolment Ratio and ensuring inclusive
                                        access and equity in higher education to large sections of our country, particularly
                                        ‘reaching out the unreached’ and to meet the demands of lifelong learning for
                                        professional workers which has become more of a necessity in present knowledge
                                        society. The CDOE, CUHP shall play its role to meet the educational needs of the
                                        young aspirants including the professional workers, marginalized and the excluded
                                        youth, spread across the length and breadth of our country, to give the impetus to
                                        render the best services in the field of higher education. I am of the firm belief
                                        that
                                        learners of CDOE, CUHP will be fully equipped with knowledge and skills to meet the
                                        challenges of the global market and contribute to the growth of the nation. As
                                        Registrar of CUHP, I assure you that you will enjoy your academic journey with
                                        CDOE, CUHP. Our friendly and considerate faculty, helpdesk staff and technical staff
                                        will ever be with you to support, guide and handle your academic concerns. I request
                                        all the learners to keep your academics as your topmost priority to upgrade your
                                        knowledge, skills for your prosperous future and successful life.
                                    </p>
                                @elseif($role == 'incharge-admissions-examinations')
                                    <p style="text-align: justify;">Prof. Jagmeet Bawa is a distinguished academician
                                        serving as a Professor in the Department of Political Science at the Central
                                        University of Himachal Pradesh. He currently holds the position of Incharge,
                                        Admissions and Examination for Online Programmes, where he oversees the critical
                                        processes that ensure smooth operations of the university's online education
                                        initiatives.</p>

                                    <p style="text-align: justify;">With his extensive experience in higher education
                                        administration, Prof. Singh has implemented robust systems for managing admissions
                                        and examinations specifically tailored to the unique requirements of distance and
                                        online learning. His expertise has been instrumental in establishing transparent,
                                        efficient, and student-friendly procedures that maintain academic integrity while
                                        accommodating the diverse needs of online learners.</p>

                                    <p style="text-align: justify;">As the Incharge of Admissions and Examinations, Prof.
                                        Singh has introduced innovative assessment methodologies appropriate for the online
                                        learning environment, ensuring that evaluation standards remain rigorous and aligned
                                        with the university's academic excellence goals. His leadership has been crucial in
                                        adapting traditional examination frameworks to suit digital platforms without
                                        compromising on quality or security.</p>

                                    <p style="text-align: justify;">Prof. Singh works closely with faculty across
                                        departments to coordinate admission criteria, examination schedules, and assessment
                                        strategies. His collaborative approach has fostered greater integration between
                                        academic departments and administrative functions, resulting in a more cohesive
                                        educational experience for students enrolled in online programmes.</p>
                                @else
                                    <p style="text-align: justify;">Never denying a fact that learning at a distance through
                                        online mode is the need of the hour. The educational sector has largely got
                                        influenced by technological advancements and IT and ICT services to offer various
                                        academic programmes have become a necessity at present. The NEP-2020 calls for
                                        leveraging advantages of technology through ICT based educational initiatives to
                                        optimize its use in meeting challenges of quality education.</p>

                                    <p style="text-align: justify;">In order to serve education at the door steps of the
                                        learners and translating the mantra of 'Learn while Earn' into reality through the
                                        use of IT and ICT facilities, the Centre for Distance and Online Education (CDOE)
                                        has been established in the Central University of Himachal Pradesh to provide
                                        learners with flexible learning opportunities. We are providing educational
                                        opportunities to the learners who wish to enhance their educational and professional
                                        qualifications.</p>

                                    <p style="text-align: justify;">The CDOE follows choice-based credit system (CBCS) in
                                        its programmes and adopts modular approach for transacting its curriculum. The
                                        curriculum offered by CDOE competes with world class HEIs so as to make the learners
                                        competent to portray their capabilities and skills on a global platform.</p>

                                    <p style="text-align: justify;">We at CDOE offer a blend of innovative learning and
                                        teaching techniques to enhance professional skills and competence of the learners. I
                                        invite the learners to have such global academic and professional experiences at
                                        CDOE, CUHP and enjoy your academic journey with our dedicated faculty and
                                        organization.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
