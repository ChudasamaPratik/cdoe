@extends('frontend.layouts.main')
@section('title', 'Sitemap')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white text-capitalize">Sitemap</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-sitemap py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sitemap-content">
                        <div class="d-flex justify-content-between align-items-center mb-4 header-controls">
                            <h3 class="site-title mb-0">Website Navigation</h3>
                            <div class="sitemap-controls">
                                <button id="expandAll" class="btn btn-sm btn-outline-primary me-2">Expand All</button>
                                <button id="collapseAll" class="btn btn-sm btn-outline-secondary">Collapse All</button>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Left Column - Main Navigation -->
                            <div class="col-md-6">
                                <div class="sitemap-section mb-5">
                                    <ul class="list-unstyled sitemap-list">
                                        <!-- Home -->
                                        <li class="file-item">
                                            <a href="{{ url('/') }}" class="d-flex align-items-center">
                                                <i class="fas fa-home me-2"></i>
                                                <span>Home</span>
                                            </a>
                                        </li>

                                        <!-- About -->
                                        <li class="folder-item">
                                            <a href="#" class="folder-toggle d-flex align-items-center">
                                                <i class="fas fa-folder me-2 folder-icon"></i>
                                                <span>About</span>
                                                <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                            </a>
                                            <ul class="list-unstyled nested-list collapse">
                                                <li>
                                                    <a href="{{ route('about-cdoe') }}" class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>About CDOE</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.cuhimachal.ac.in/" target="_blank"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>About CUHP</span>
                                                    </a>
                                                </li>
                                                <li class="folder-item">
                                                    <a href="#" class="folder-toggle d-flex align-items-center">
                                                        <i class="fas fa-folder me-2 folder-icon"></i>
                                                        <span>CDOE Authorities / Officers</span>
                                                        <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                                    </a>
                                                    <ul class="list-unstyled nested-list collapse">
                                                        <li>
                                                            <a href="{{ route('authorities.show', 'vice-chancellor') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Vice Chancellor</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('authorities.show', 'director') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Director</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('authorities.show', 'registrar') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Registrar</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('authorities.show', 'deputy-director') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Deputy Director</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('authorities.show', 'assistant-director') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Assistant Director</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('authorities.show', 'incharge-admissions-examinations') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Incharge Admissions and Examinations</span>
                                                            </a>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="{{ route('coordinators.show', 'administrative-cell') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Administrative Cell</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('coordinators.show', 'technical-it-cell') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Technical & IT Cell</span>
                                                            </a>
                                                        </li> --}}
                                                        <li>
                                                            <a href="{{ route('coordinators.show', 'program-coordinators') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Program Coordinators</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('coordinators.show', 'course-coordinators') }}"
                                                                class="d-flex align-items-center">
                                                                <i class="fas fa-file me-2"></i>
                                                                <span>Course wise Coordinators</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Programmes Offered -->
                                        <li class="folder-item">
                                            <a href="#" class="folder-toggle d-flex align-items-center">
                                                <i class="fas fa-folder me-2 folder-icon"></i>
                                                <span>Programmes Offered</span>
                                                <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                            </a>
                                            <ul class="list-unstyled nested-list collapse">
                                                <li>
                                                    <a href="{{ route('course-details.show', 'ma-history') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Master of Arts (History)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('course-details.show', 'ma-economics') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Master of Arts (Economics)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('course-details.show', 'ma-political-science') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Master of Arts (Political Science)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('course-details.show', 'mca') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Master of Computer Application (MCA)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('course-details.show', 'mba') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Master of Business Administration (MBA)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('course-details.show', 'programme-guide') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Programme Guide</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Fees Structure -->
                                        <li class="file-item">
                                            <a href="{{ route('fees.structure') }}" class="d-flex align-items-center">
                                                <i class="fas fa-file-invoice-dollar me-2"></i>
                                                <span>Fees Structure</span>
                                            </a>
                                        </li>

                                        <!-- Notifications / Circulars -->
                                        <li class="folder-item">
                                            <a href="#" class="folder-toggle d-flex align-items-center">
                                                <i class="fas fa-folder me-2 folder-icon"></i>
                                                <span>Notifications / Circulars</span>
                                                <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                            </a>
                                            <ul class="list-unstyled nested-list collapse">
                                                <li>
                                                    <a href="{{ route('notification.show', 'learner-notices') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Learner Notices</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('notification.show', 'general-circulars') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>General Circulars</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('notification.show', 'admission-notices') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Admission Notices</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('notification.show', 'examination-notices') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Examination Notices</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Approvals & Disclosures -->
                                        <li class="folder-item">
                                            <a href="#" class="folder-toggle d-flex align-items-center">
                                                <i class="fas fa-folder me-2 folder-icon"></i>
                                                <span>Approvals & Disclosures</span>
                                                <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                            </a>
                                            <ul class="list-unstyled nested-list collapse">
                                                <li>
                                                    <a href="{{ route('approval-disclosures') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>UGC-DEB Approvals Letters/Orders</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('approval-disclosures') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>University Disclosures</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('approval-disclosures') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>RTI</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Learner Support Services -->
                                        <li class="folder-item">
                                            <a href="#" class="folder-toggle d-flex align-items-center">
                                                <i class="fas fa-folder me-2 folder-icon"></i>
                                                <span>Learner Support Services</span>
                                                <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                            </a>
                                            <ul class="list-unstyled nested-list collapse">
                                                <li>
                                                    <a href="{{ route('help.desk') }}" class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Help Desk</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('faq') }}" class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>FAQ</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('grievance-guidelines') }}"
                                                        target="_blank" class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Grievance Redressal Guidelines</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('learner-guidelines') }}"
                                                        target="_blank" class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Learner Support Services Guidelines</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- CIQA -->
                                        <li class="folder-item">
                                            <a href="#" class="folder-toggle d-flex align-items-center">
                                                <i class="fas fa-folder me-2 folder-icon"></i>
                                                <span>CIQA</span>
                                                <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                            </a>
                                            <ul class="list-unstyled nested-list collapse">
                                                <li>
                                                    <a href="{{ route('CIQA.director') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Director</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('CIGA.guidelines') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Guidelines</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('CIQA.committee') }}"
                                                        class="d-flex align-items-center">
                                                        <i class="fas fa-file me-2"></i>
                                                        <span>Committee</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Right Column - Quick Links -->
                            <div class="col-md-6">
                                <div class="general-links-section">
                                    <h4 class="section-title mb-3">Quick Access Links</h4>
                                    <ul class="list-unstyled sitemap-list">
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <i class="fas fa-download me-2"></i>
                                                <span>Downloads</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <i class="fas fa-external-link-alt me-2"></i>
                                                <span>SWAYAM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sitemap') }}" class="d-flex align-items-center">
                                                <i class="fas fa-sitemap me-2"></i>
                                                <span>Sitemap</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('how-to-apply') }}" class="d-flex align-items-center">
                                                <i class="fas fa-clipboard-list me-2"></i>
                                                <span>How To Apply</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://cuhimachalcdoe.samarth.ac.in/index.php/site/login"
                                                target="_blank" class="d-flex align-items-center">
                                                <i class="fas fa-sign-in-alt me-2"></i>
                                                <span>Login</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <h4 class="section-title mt-4 mb-3">Footer Links</h4>
                                    <div class="folder-item">
                                        <a href="#" class="folder-toggle d-flex align-items-center">
                                            <i class="fas fa-folder me-2 folder-icon"></i>
                                            <span>Quick Links</span>
                                            <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                        </a>
                                        <ul class="list-unstyled nested-list collapse">
                                            <li>
                                                <a href="{{ route('about-cdoe') }}" class="d-flex align-items-center">
                                                    <i class="fas fa-file me-2"></i>
                                                    <span>About Us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('gallery') }}" class="d-flex align-items-center">
                                                    <i class="fas fa-file me-2"></i>
                                                    <span>Photo Gallery</span>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-file me-2"></i>
                                                    <span>Admissions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-file me-2"></i>
                                                    <span>Programs</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-file me-2"></i>
                                                    <span>Registration</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-file me-2"></i>
                                                    <span>Login</span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>

                                    <div class="folder-item">
                                        <a href="#" class="folder-toggle d-flex align-items-center">
                                            <i class="fas fa-folder me-2 folder-icon"></i>
                                            <span>Important Links</span>
                                            <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                        </a>
                                        <ul class="list-unstyled nested-list collapse">
                                            <li>
                                                <a href="https://www.ugc.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>UGC</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>YouTube</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.col.org/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>Common Wealth of Learning(Col)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://deb.ugc.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>UGC – DEB</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.ignou.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>Ignou</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.coursera.org/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>Coursera</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://swayam.gov.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>SAWAYAM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://swayamprabha.gov.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>SAWAYAM PRABHA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://epgp.inflibnet.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>E- PG Pathshala</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://egyankosh.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>E- Gyankosh</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://ess.inflibnet.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>E- Sindhu</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://ess.inflibnet.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>Shodh Sindhu</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://nta.ac.in/UGCNet" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>NTA NET</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.aicte-india.org/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>AICTE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://icssr.org/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>ICSSR</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.education.gov.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>MoE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.cuhimachal.ac.in/" class="d-flex align-items-center">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    <span>CUHP</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- <div class="folder-item">
                                        <a href="#" class="folder-toggle d-flex align-items-center">
                                            <i class="fas fa-folder me-2 folder-icon"></i>
                                            <span>Contact Us</span>
                                            <i class="fas fa-chevron-right ms-auto toggle-icon"></i>
                                        </a>
                                        <ul class="list-unstyled nested-list collapse">
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-map-marker-alt me-2"></i>
                                                    <span>Address</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-phone me-2"></i>
                                                    <span>Phone</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex align-items-center">
                                                    <i class="fas fa-envelope me-2"></i>
                                                    <span>Email</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Toggle individual folders
                $('.folder-toggle').click(function(e) {
                    e.preventDefault();
                    $(this).siblings('.nested-list').collapse('toggle');
                    $(this).find('.folder-icon').toggleClass('fa-folder fa-folder-open');
                    $(this).find('.toggle-icon').toggleClass('fa-chevron-right fa-chevron-down');
                });

                // Expand All functionality
                $('#expandAll').click(function(e) {
                    e.preventDefault();
                    $('.nested-list').collapse('show');
                    $('.folder-icon').removeClass('fa-folder').addClass('fa-folder-open');
                    $('.toggle-icon').removeClass('fa-chevron-right').addClass('fa-chevron-down');
                });

                // Collapse All functionality
                $('#collapseAll').click(function(e) {
                    e.preventDefault();
                    $('.nested-list').collapse('hide');
                    $('.folder-icon').removeClass('fa-folder-open').addClass('fa-folder');
                    $('.toggle-icon').removeClass('fa-chevron-down').addClass('fa-chevron-right');
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            .page-sitemap {
                background-color: #f8f9fa;
            }

            .sitemap-content {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                padding: 2rem;
            }

            .site-title {
                color: #333;
                font-weight: 600;
            }

            .section-title {
                color: #444;
                font-weight: 500;
                border-bottom: 2px solid #f0f0f0;
                padding-bottom: 10px;
            }

            .sitemap-list li {
                margin-bottom: 8px;
                transition: all 0.2s ease;
            }

            .sitemap-list li:hover {
                transform: translateX(3px);
            }

            .folder-item {
                margin-bottom: 15px;
            }

            .folder-toggle {
                color: #333;
                text-decoration: none;
                font-weight: 500;
                padding: 8px 12px;
                border-radius: 4px;
                transition: all 0.2s ease;
                background-color: #f8f9fa;
                display: block;
            }

            .folder-toggle:hover {
                background-color: #e9ecef;
                color: #0d6efd;
                text-decoration: none;
            }

            .folder-toggle .toggle-icon {
                font-size: 12px;
                transition: transform 0.2s ease;
            }

            .nested-list {
                margin-left: 1.5rem;
                padding-left: 1rem;
                border-left: 1px solid #dee2e6;
                margin-top: 5px;
                margin-bottom: 10px;
            }

            .nested-list li {
                padding: 6px 0;
            }

            .nested-list li a {
                color: #555;
                text-decoration: none;
                font-weight: normal;
                transition: all 0.2s ease;
            }

            .nested-list li a:hover {
                color: #0d6efd;
            }

            .general-links-section ul li a {
                color: #555;
                text-decoration: none;
                padding: 8px 12px;
                border-radius: 4px;
                transition: all 0.2s ease;
                display: block;
            }

            .general-links-section ul li a:hover {
                background-color: #f8f9fa;
                color: #0d6efd;
            }

            /* Modern button styles */
            .btn-outline-primary {
                color: #0d6efd;
                border-color: #0d6efd;
            }

            .btn-outline-primary:hover {
                background-color: #0d6efd;
                color: #fff;
            }

            .btn-outline-secondary {
                color: #6c757d;
                border-color: #6c757d;
            }

            .btn-outline-secondary:hover {
                background-color: #6c757d;
                color: #fff;
            }

            /* Responsive styles */
            @media (max-width: 768px) {
                .sitemap-content {
                    padding: 1rem;
                }

                .header-controls {
                    flex-direction: column;
                    align-items: flex-start !important;
                }

                .sitemap-controls {
                    margin-top: 10px;
                    width: 100%;
                    display: flex;
                }

                .sitemap-controls button {
                    flex: 1;
                }

                .nested-list {
                    margin-left: 0.75rem;
                    padding-left: 0.5rem;
                }

                .site-title {
                    font-size: 1.5rem;
                }

                .section-title {
                    font-size: 1.25rem;
                }

                .folder-toggle,
                .nested-list li a {
                    padding: 10px;
                }
            }

            /* Prevent text overflow */
            .nested-list li a span,
            .folder-toggle span {
                word-break: break-word;
            }

            /* Touch-friendly adjustments */
            @media (max-width: 576px) {

                .folder-toggle,
                .nested-list li a,
                .general-links-section ul li a {
                    padding: 12px;
                }

                .folder-icon,
                .toggle-icon {
                    font-size: 16px;
                }
            }
        </style>
    @endpush
@endsection
