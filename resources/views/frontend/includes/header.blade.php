<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="topbar-contact-info">
                    <ul>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">SWAYAM</a></li>
                        <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                        <li><a href="{{ route('how-to-apply') }}">How To Apply</a></li>
                        <li><a href="https://cuhimachalcdoe.samarth.ac.in/index.php/site/login" target="_blank">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-latest-news-form">
                    <form>
                        <div class="form-group">
                            <input type="text" name="text" class="form-control ptop-srcf" id="search"
                                placeholder="Search Here" required="">
                            <button type="submit" class="latestnews-btn"><img
                                    src="{{ asset('frontend/images/arrow-accent.svg') }}" alt=""></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/images/cuhp-logo.png') }}" alt="Logo">
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/images/cuhp-logo-right.png') }}" alt="Logo">
                </a>
            </div>
        </nav>
    </div>
</header>
<header class="main-header header-bg">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">About</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about-cdoe') }}">About
                                            CDOE</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="https://www.cuhimachal.ac.in/"
                                            target="_blank">About CUHP</a></li>
                                    {{-- <li class="nav-item"><a class="nav-link" href="team.html" target="_blank">Who is
                                            Who</a></li> --}}
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="team.html.html" role="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                            CDOE Authorities / Officers
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('vice.chancellor') }}">Vice
                                                    Chancellor
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('authorities.show', 'director') }}">Director
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('authorities.show', 'registrar') }}">Registrar </a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('authorities.show', 'deputy-director') }}">Deputy
                                                    Director
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('authorities.show', 'assistant-director') }}">Assistant
                                                    Director
                                                </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('authorities.show', 'incharge-admissions-examinations') }}">Incharge
                                                    Admissions
                                                    and Examinations </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('coordinators.show', 'administrative-cell') }}">Administrative
                                                    Cell</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('coordinators.show', 'technical-it-cell') }}">Technical
                                                    & IT Cell</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('coordinators.show', 'program-coordinators') }}">Program
                                                    Coordinators</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('coordinators.show', 'course-coordinators') }}">Course
                                                    wise Coordinators</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item submenu"><a class="nav-link" href="#">Programmes Offered</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('course-details.show', 'ma-history') }}">Master of Arts
                                            (History)</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('course-details.show', 'ma-economics') }}">Master of Arts
                                            (Economics)</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('course-details.show', 'ma-political-science') }}">Master of
                                            Arts (Political Science)</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('course-details.show', 'mca') }}">Master of Computer
                                            Application (MCA)</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('course-details.show', 'mba') }}">Master of Business
                                            Administration (MBA)</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('course-details.show', 'programme-guide') }}">Programme
                                            Guide</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('fees.structure') }}">Fees
                                    Structure</a></li>

                            <li class="nav-item submenu"><a class="nav-link" href="#">Notifications /
                                    Circulars</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('notification.show', 'learner-notices') }}">Learner
                                            Notices</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('notification.show', 'general-circulars') }}">General
                                            Circulars</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('notification.show', 'admission-notices') }}">Admission
                                            Notices</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('notification.show', 'examination-notices') }}">Examination
                                            Notices</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Approvals &amp;
                                    Disclosures</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('approval-disclosures') }}">UGC-DEB
                                            Approvals Letters/
                                            Orders</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('approval-disclosures') }}">University Disclosures</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('approval-disclosures') }}">RTI</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Learner
                                    Support
                                    Services</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('help.desk') }}">Help
                                            Desk </a></li>
                                    <li class="nav-item"><a class="nav-link" target="_blank"
                                            href="{{ asset('documents/Grievance Redressal Guidelines CDOE.pdf') }}">Grievance
                                            Redressal Guidelines</a></li>

                                </ul>

                            </li>

                            <li class="nav-item submenu"><a class="nav-link" href="#">CIQA</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('CIQA.director') }}">Director</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('CIGA.guidelines') }}">Guidelines</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('CIQA.committee') }}">Committee</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item submenu"><a class="nav-link" href="#">Programs</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="cdoe-programs.html">Online Learing (OL)</a></li>
                                    <li class="nav-item"><a class="nav-link" href="odl.html">Online Learing (OL)</a></li>
                                </ul>
                            </li> -->
                            {{-- <li class="nav-item"><a class="nav-link" href="{{ route('how-to-apply') }}">How to
                                    Apply</a></li>
                            <div class="hero-btn">
                                <a href="https://cuhimachalcdoe.samarth.ac.in/index.php/site/login" target="_blank"
                                    class="btn-default">Login</a>
                            </div> --}}
                        </ul>
                    </div>
                </div>
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
