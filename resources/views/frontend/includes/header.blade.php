<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="topbar-contact-info">
                    <ul>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Important Links</a></li>
                        <li><a href="#">Important Announcement</a></li>
                        <li><a href="#">Admission Brochure 2025</a></li>
                    </ul>
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
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">About</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="about-cdoe.html">About CDOE</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="https://www.cuhimachal.ac.in/"
                                            target="_blank">About CUHP</a></li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="team.html.html" role="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                            Who is Who
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Nav 1</a></li>
                                            <li><a class="dropdown-item" href="#">Nav 2</a></li>
                                            <li><a class="dropdown-item" href="#">Nav 3</a></li>
                                            <li><a class="dropdown-item" href="#">Nav 4</a></li>
                                            <li><a class="dropdown-item" href="#">Nav 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Programs</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="cdoe-programs.html">Online
                                            Learing (OL)</a></li>
                                    <li class="nav-item"><a class="nav-link" href="odl.html">Online Learing (OL)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="how-to-apply.html">How to Apply</a></li>
                            <div class="hero-btn">
                                <a href="#" class="btn-default">Apply Now</a>
                                <a href="{{ route('login') }}" class="btn-default">Login</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
