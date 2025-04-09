@extends('frontend.layouts.main')
@section('title')
    @if ($name == 'aditi')
        Dr. Aditi Sharma
    @elseif($name == 'parveen')
        Dr. Parveen Sadotra
    @elseif($name == 'jagdish')
        Dr. jagdish Parshad
    @else
        Program Coordinator
    @endif
@endsection

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">
                            @if ($name == 'aditi')
                                Dr. Aditi Sharma
                            @elseif($name == 'parveen')
                                Dr. Parveen Sadotra
                            @elseif($name == 'jagdish')
                                Dr. jagdish Parshad
                            @else
                                Program Coordinator
                            @endif
                        </h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Programme Coordinator</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @if ($name == 'aditi')
                                        Dr. Aditi Sharma
                                    @elseif($name == 'parveen')
                                        Dr. Parveen Sadotra
                                    @elseif($name == 'jagdish')
                                        Dr. jagdish Parshad
                                    @else
                                        Program Coordinator
                                    @endif
                                </li>
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
                                <img src="{{ asset(
                                    $name == 'aditi'
                                        ? 'frontend/images/team/Aditi_Pic_Programme_Coordinator_MBA.jpg'
                                        : ($name == 'parveen'
                                            ? 'frontend/images/team/Dr. Parveen Sadotra.jpg'
                                            : ($name == 'jagdish'
                                                ? 'frontend/images/team/JAGDIS_ PARSHAD.jpg'
                                                : 'frontend/images/team/default.jpg')),
                                ) }}"
                                    alt="Coordinator Photo" style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h4 class="text-white pb-2">
                                    @if ($name == 'aditi')
                                        Dr. Aditi Sharma
                                    @elseif($name == 'parveen')
                                        Dr. Parveen Sadotra
                                    @elseif($name == 'jagdish')
                                        Dr. jagdish Parshad
                                    @else
                                        Program Coordinator
                                    @endif
                                </h4>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Designation</h4>
                                <p>
                                    @if ($name == 'aditi')
                                        Assistant Professor & Programme Coordinator
                                    @elseif($name == 'parveen')
                                        Programme Coordinator
                                    @elseif($name == 'jagdish')
                                        Associate Professor & Programme Coordinator
                                    @else
                                        Programme Coordinator
                                    @endif
                                </p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Course</h4>
                                <p>
                                    @if ($name == 'aditi')
                                        Two-Year Online MBA
                                    @elseif($name == 'parveen')
                                        Two-Year Online MCA
                                    @elseif($name == 'jagdish')
                                        Department of History
                                    @else
                                        Program Course
                                    @endif
                                </p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Official Email</h4>
                                <p>
                                    @if ($name == 'aditi')
                                        pccdoe.mgmt@hpcu.ac.in
                                    @elseif($name == 'parveen')
                                        pccdoe.csc@hpcu.ac.in
                                    @elseif($name == 'jagdish')
                                        pccdoe.his@hpcu.ac.in
                                    @else
                                        example@hpcu.ac.in
                                    @endif
                                </p>

                                @if ($name == 'parveen')
                                    <hr>
                                    <h4 class="text-dark pb-2 pt-2">Contact</h4>
                                    <p>+91 7006103610</p>
                                @elseif($name == 'jagdish')
                                    <hr>
                                    <h4 class="text-dark pb-2 pt-2">Contact</h4>
                                    <p>+91 9811701650</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="team-single-content">
                        <div class="team-single-entry sngle-details">
                            <div class="mb-4">
                                <h3>
                                    @if ($name == 'aditi')
                                        Dr. Aditi Sharma
                                    @elseif($name == 'parveen')
                                        Dr. Parveen Sadotra
                                    @elseif($name == 'jagdish')
                                        Dr. jagdish Parshad
                                    @else
                                        Program Coordinator
                                    @endif
                                </h3>
                                <h5 class="text-muted">
                                    @if ($name == 'aditi')
                                        Assistant Professor & Programme Coordinator, Two-Year Online MBA
                                    @elseif($name == 'parveen')
                                        Programme Coordinator, Two-Year Online Master of Computer Applications (MCA)
                                    @elseif($name == 'jagdish')
                                        Associate Professor, Department of History
                                    @else
                                        Programme Coordinator
                                    @endif
                                </h5>
                                <h6 class="text-muted">Central University of Himachal Pradesh</h6>
                            </div>

                            <div class="coordinator-bio">
                                @if ($name == 'aditi')
                                    <p style="text-align: justify;">
                                        Dr. Aditi Sharma is an Assistant Professor in the Central University of Himachal
                                        Pradesh with more than 14 years of teaching experience. She earned her Ph.D. from
                                        Panjab University, Chandigarh, and her MBA from Himachal Pradesh University. Her
                                        long teaching experience in such specialized subjects as Leadership Development,
                                        Diversity Management, Organizational Behaviour, Human Resource Management,
                                        Industrial Relations, and the Indian Knowledge System, She brings her thorough
                                        knowledge of management theory alongside practical, real-life experience to the
                                        table, making sure that the online learning environment remains stimulating and
                                        enriching for students.
                                    </p>
                                    <p style="text-align: justify;">
                                        Dr. Sharma's scholarly background and proficiency in understanding the intricacies
                                        of contemporary education systems allow her to provide a comprehensive and
                                        student-centric methodology to the online MBA course. As Programme Coordinator,
                                        she is committed to providing a flexible, interactive, and high-standard learning
                                        experience for all learners, using her extensive teaching experience to convert
                                        course content to the online medium successfully.
                                    </p>
                                    <p style="text-align: justify;">
                                        Her dedication to academic excellence and her enthusiasm for empowering students
                                        with the abilities required to be successful professionals in the global business
                                        arena
                                        further reinforce her position as a leader in this program. Dr. Sharma's
                                        contributions
                                        go beyond instruction to explicitly influencing the curriculum and fostering the
                                        professional development of her students in the fast-paced world of management.
                                    </p>
                                @elseif($name == 'parveen')
                                    <p style="text-align: justify;">
                                        Dr. Parveen Sadotra is a dedicated and experienced Programme Coordinator, overseeing
                                        academic and administrative operations for the Two Year Online Master of Computer
                                        Applications (MCA) program. With a deep passion for technology and education, Dr.
                                        Sadotra
                                        plays a key role in curriculum design, student engagement, and faculty coordination.
                                        Known for
                                        his proactive approach and leadership skills, he ensures a seamless learning
                                        experience for
                                        students.
                                    </p>
                                @elseif($name == 'jagdish')
                                    <p style="text-align: justify;">
                                        Dr. jagdish Parshad did his M.A. (History) & M.A. (AIHC & Archaeology) from
                                        Kurukshetra University (Haryana) and Ph.D. from National Museum Institute, New
                                        Delhi. He is the author/editor of three books and editor of the Proceedings of the
                                        Haryana History Congress, since 2017. He has completed a research project
                                        sponsored by ICHR, New Delhi & currently working two projects one from ICHR and
                                        second from ICSSR, New Delhi. Thirty-five research papers have been published
                                        and fifty-four have been presented in the Conferences. Presently, working as a
                                        Associate Professor, Department of History, Central University of Himachal Pradesh,
                                        since 2023.
                                    </p>
                                @else
                                    <p style="text-align: justify;">
                                        Biographical information for this coordinator is currently being updated. Please
                                        check back later for more details.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
