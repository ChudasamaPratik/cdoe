@extends('frontend.layouts.main')
@section('content')
    <style>
        p,
        ul li {
            text-align: justify;
        }
    </style>
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Vice Chancellor | Prof. Sat Prakash Bansal</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Prof. Sat Prakash Bansal</li>
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
                <div class="col-lg-3 bg-drakprime">
                    <div class="team-single-sidebar p-relative">
                        <div class="team-sidebar-image text-center vc-prof">
                            <figure class="image-anime reveal"
                                style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <img src="{{ asset('frontend/images/team/vc.png') }}" alt=""
                                    style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h4 class="text-white pb-2">Designation</h4>
                                <hr>
                                <p>Vice Chancellor</p>
                            </div>
                        </div>
                    </div>
                    <div class="align-items-start p-sb">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true"><i class="fa fa-home" aria-hidden="true"></i> Home</button>
                            <button class="nav-link" id="v-pills-about-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-about" type="button" role="tab" aria-controls="v-pills-about"
                                aria-selected="false"><i class="fa fa-user" aria-hidden="true"></i> About</button>
                            <button class="nav-link" id="v-pills-professional-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-professional" type="button" role="tab"
                                aria-controls="v-pills-professional" aria-selected="false"><i class="fa fa-id-badge"
                                    aria-hidden="true"></i> Professional Summary</button>
                            <button class="nav-link" id="v-pills-roles-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-roles" type="button" role="tab" aria-controls="v-pills-roles"
                                aria-selected="false"><i class="fa fa-book" aria-hidden="true"></i> Roles</button>
                            <button class="nav-link" id="v-pills-credentials-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-credentials" type="button" role="tab"
                                aria-controls="v-pills-credentials" aria-selected="false"><i class="fa fa-search"
                                    aria-hidden="true"></i> Research Credentials</button>
                            <button class="nav-link" id="v-pills-international-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-international" type="button" role="tab"
                                aria-controls="v-pills-international" aria-selected="false">
                                <i class="fa fa-book" aria-hidden="true"></i> International</button>
                            <button class="nav-link" id="v-pills-honors-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-honors" type="button" role="tab"
                                aria-controls="v-pills-honors" aria-selected="false">
                                <i class="fa fa-star" aria-hidden="true"></i> Honors</button>
                            <button class="nav-link" id="v-pills-gallery-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-gallery" type="button" role="tab"
                                aria-controls="v-pills-gallery" aria-selected="false"><i class="fa fa-image"
                                    aria-hidden="true"></i> Photo Gallery</button>
                            <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-contact" type="button" role="tab"
                                aria-controls="v-pills-contact" aria-selected="false"><i class="fa fa-phone"
                                    aria-hidden="true"></i> Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <img src="{{ asset('frontend/images/vc-gallery/vc_image_cuhp.jpeg') }}" class="vc-homeimg"
                                    style="height: 80vh; object-fit: cover;width:100%" alt=""
                                    style="transform: translate(0px, 0px);">
                                <div class="sidebar-cta-content text-dark">
                                    <h2 class="mt-2 text-dark vc-conthead">Prof. Sat Prakash Bansal</h2>
                                    <hr class="mt-2 mb-2">
                                    <h4 class="pb-2">Designation</h4>
                                    <p class="text-dark">Vice Chancellor</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                                aria-labelledby="v-pills-about-tab">
                                <h4 class="vc-conthead">About Us</h4>
                                <hr class="mt-2 mb-2">
                                <p class="vc-contlist">Prof. (Dr.) Sat Prakash Bansal, An Academician par Excellence and A
                                    Man of Substance, joined Central University of Himachal Pradesh, Dharamshala as Vice
                                    Chancellor on 28th July 2021. In addition to this prestigious assignment, he is
                                    currently also acting as Vice Chancellor of Himachal Pradesh University, Shimla.</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-professional" role="tabpanel"
                                aria-labelledby="v-pills-professional-tab">
                                <h4 class="vc-conthead">Professional Summary</h4>
                                <hr class="mt-2 mb-2">
                                <h5 class="mb-2">Additional and Previous Key Positions:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Holds additional charge as Vice Chancellor of Himachal Pradesh University (HPU),
                                            Shimla.</li>
                                        <li>Former Vice-Chancellor of Himachal Pradesh Technical University, Hamirpur,
                                            Himachal Pradesh.</li>
                                        <li>Served as Vice-Chancellor at Indira Gandhi State University, Rewari, Haryana.
                                        </li>
                                        <li>Undertook additional charge at Bhagat Phool Singh Mahila Vishwavidyalaya,
                                            Khanpur Kalan, Sonepat, Haryana.</li>
                                        <li>Founding Vice-Chancellor of Maharaja Agrasen University, Solan, Himachal
                                            Pradesh.</li>
                                        <li>Dean of Student Welfare, H.P. University.</li>
                                        <li>Director of the Institute of Integrated Himalayan Studies, H.P University.</li>
                                        <li>Director (Nominated) of Himachal Pradesh Tourism Development Corporation.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-roles" role="tabpanel"
                                aria-labelledby="v-pills-roles-tab">
                                <h4 class="vc-conthead">Academic and Administrative Roles</h4>
                                <hr class="mt-2 mb-2">
                                <h5 class="mb-2 mt-2">Diverse Committee Roles:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Governing Council Member of the Association of Indian Universities (AIU).</li>
                                        <li>Member of various committees at AIIMS, Bilaspur, including the Finance
                                            Committee, Selection Committee, Academic Council, and Estate Committee.</li>
                                        <li>Chairperson of the All India Board of Tourism and Hospitality Management by
                                            AICTE.</li>
                                        <li>Chancellor (Vice President) Nominee at Punjab University, Chandigarh.</li>
                                        <li>Governing Council Member of National Law University of Himachal Pradesh, Shimla.
                                        </li>
                                        <li>Visitor (President) Nominee at Central University, Tezpur, Assam.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">Board Memberships:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Member of the Board of Governors of the Indian Institute of Tourism and Travel
                                            Management (IITTM).</li>
                                        <li>Visitor (President) nominee on the Board of Governors of IIM Amritsar.</li>
                                        <li>Visitor (Ministry of Youth Affairs & Sports, GOI) nominee at Lakshmibai National
                                            Institute of Physical Education (LNIPE), Gwalior.</li>
                                        <li>Chancellor (Governor) Nominee as Court Member at Sri Aniruddhadeva Sports
                                            University, Chabua, Assam.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">Expert and Advisory Roles:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Expert Member of Maharashtra Rashtriya Uchchatar Shiksha Abhiyan (RUSA)
                                            Education Council.</li>
                                        <li>Higher Education Council Member of Himachal Pradesh.</li>
                                        <li>Chancellor (Governor) Nominee on various academic planning boards and councils
                                            across universities in Haryana and Himachal Pradesh.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">Recognition as an Institutional Builder:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Founder Chairman & Director, Institute of Vocational (Tourism) Studies, H.P.
                                            University.</li>
                                        <li>Credited as an 'Institutional Builder' in academia.</li>
                                        <li>Pioneered the establishment of the permanent campus of Central University of
                                            Himachal Pradesh.</li>
                                        <li>Key contributor to implementing recommendations of NEP-2020 across India.</li>
                                        <li>Extensive experience in assessing and accrediting HEIs as a Chairman of the NAAC
                                            peer team.</li>
                                        <li>Actively involved with top academic bodies like MOE, UGC, AICTE, NCERT, AIU, and
                                            MOT.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-credentials" role="tabpanel"
                                aria-labelledby="v-pills-credentials-tab">
                                <h4 class="vc-conthead">Research and Academic Contributions</h4>
                                <hr class="mt-2 mb-2">
                                <h5 class="mb-2 mt-2">Editorial Roles:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Chief Editor and Editor of various international and national journals of
                                            repute.</li>
                                        <li>Editor of newsletters for different universities.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">Research Projects and Authorship:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Completed 11 research projects of national importance.</li>
                                        <li>Authored 25 books.</li>
                                        <li>Principal Investigator for e-PG Pathshala in Management and Tourism and
                                            Hospitality under the National Mission on Education through ICT (NMEICT) of UGC,
                                            MHRD, GOI.</li>
                                        <li>Developed 600 and 640 modules in Management, Tourism, and Hospitality,
                                            respectively.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">Scholarly Contributions:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Written approximately 90 research papers and articles.</li>
                                        <li>Guided 21 research scholars in their Ph.D. programs.</li>
                                    </ul>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="v-pills-international" role="tabpanel"
                                aria-labelledby="v-pills-international-tab">
                                <h4 class="vc-conthead">International Exposure and Collaborations</h4>
                                <hr class="mt-2 mb-2">
                                <h5 class="mb-2 mt-2">International Academic Engagements/Global Academic Experiences:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Visited over 25 countries for various academic assignments, gaining insights
                                            into international standards of higher education.</li>
                                        <li>Instrumental in facilitating Memorandums of Understanding (MOUs) with
                                            international universities, including Atai State Agarian University (Russia),
                                            Leicester University (UK), Ghana Technical University (Ghana), Auburn University
                                            (USA), and Indiana University (USA).</li>
                                        <li>Serves as an advisor and Visiting Professor at the University of European
                                            Tourism (UET) Italia, Milan, Europe.</li>
                                        <li>Engaged as an expert member in various national and international universities
                                            and higher education institutions.</li>
                                        <li>Gained insights into international standards of excellence and best practices in
                                            higher education.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">International Collaborations and MOUs:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Played a pivotal role in facilitating Memorandums of Understanding (MOUs) with
                                            several international universities to promote global understanding.</li>
                                        <li>Key collaborations include Atai State Agarian University, Russia; Atai State
                                            Technical University, Russia; Leicester University, UK; Ghana Technical
                                            University, Ghana; Auburn University, USA; Indiana University, Pennsylvania,
                                            USA.</li>
                                    </ul>
                                </div>
                                <h5 class="mb-2 mt-2">Advisory and Teaching Roles:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Serves as an advisor and Visiting Professor at the University of European
                                            Tourism (UET) in Milan, Italy.</li>
                                        <li>Engaged as an expert member in various national and international universities
                                            and higher education institutions.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-honors" role="tabpanel"
                                aria-labelledby="v-pills-honors-tab">
                                <h4 class="vc-conthead">Honors and Recognition</h4>
                                <hr class="mt-2 mb-2">
                                <h5 class="mb-2 mt-2">Awards and Distinctions:</h5>
                                <div class="cdoe-chups-tab-content vc-contlist">
                                    <ul>
                                        <li>Malviya Pragya Samman-2022: Bestowed by Banaras Hindu University (BHU),
                                            Varanasi.</li>
                                        <li>Most Iconic Vice Chancellor Award-2021: A prestigious recognition for his role
                                            as Vice Chancellor.</li>
                                        <li>Global Excellence Award for Outstanding Academic Leaders-2021: Awarded by the
                                            Global Chamber of Consumer Rights.</li>
                                        <li>Best Educationist Award-2020: Awarded by Himotkarsh Parishad, Himachal Pradesh.
                                        </li>
                                        <li>Life Time Achievement Award -2015 in Tourism Education Excellence: Presented by
                                            Lyceum of Philippines University, Manila.</li>
                                        <li>PCMA Award of Excellence in Education-2015: Honored for outstanding
                                            contributions in commerce, tourism, and management by the Punjab Commerce and
                                            Management Association. Also received a Citation in Honour -2015 from the
                                            University of Rajasthan, Jaipur, for his contributions to tourism education and
                                            research.</li>
                                        <li>Life Time Achievement Award-2013: Awarded by the Himachal Pradesh Commerce and
                                            Management Association for excellence in management.</li>
                                        <li>Letter of Appreciation from the Governor of Himachal Pradesh: Acknowledged for
                                            preparing the HPU Vision Document-2020 and promoting international
                                            understanding.</li>
                                        <li>Best Teacher Award of HPU-2012: Recognized for his exceptional teaching at
                                            Himachal Pradesh University.</li>
                                        <li>Golden AIM Award: Presented by Synergic Business Solutions (Year Not Specified).
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-gallery" role="tabpanel"
                                aria-labelledby="v-pills-gallery-tab">
                                <h4 class="vc-conthead">Photo Gallery</h4>
                                <hr class="mt-2 mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="client-item wow fadeInUp"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="client-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/vc-gallery/20240626_154124.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="client-body">
                                                <div class="client--content">
                                                    <h3>Convocation Ceremony 2024</h3>
                                                    <p>धर्मशाला : केन्द्रीय विश्वविद्यालय हिमाचल प्रदेश का सातवां दीक्षांत
                                                        समारोह सोमवार (06 मई) को मनाया गया।</p>
                                                </div>
                                                <div class="client-btn">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/images/arrow-accent.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="client-item wow fadeInUp" data-wow-delay="0.2s"
                                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            <div class="client-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/vc-gallery/20240904_124105.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="client-body">
                                                <div class="client--content">
                                                    <h3>38th Academic Council Meeting</h3>
                                                    <p>हिमाचल प्रदेश केंद्रीय विश्वविद्यालय की अकादमिक परिषद की 38वीं बैठक
                                                    </p>
                                                </div>
                                                <div class="client-btn">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/images/arrow-accent.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="client-item wow fadeInUp" data-wow-delay="0.4s"
                                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                            <div class="client-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('frontend/images/vc-gallery/20240904_135401.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="client-body">
                                                <div class="client--content">
                                                    <h3>Faculty Development Program 2024</h3>
                                                    <p>धर्मशाला। हिमाचल प्रदेश केंद्रीय विश्वविद्यालय में संकाय विकास
                                                        कार्यक्रम 2024 का आयोजन हुआ, जिसमें कुलपति प्रो. सत प्रकाश बंसल और
                                                        अन्य विशिष्ट वक्ता शामिल हुए।</p>
                                                </div>
                                                <div class="client-btn">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/images/arrow-accent.svg') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-contact" role="tabpanel"
                                aria-labelledby="v-pills-contact-tab">
                                <h4 class="vc-conthead">Contact</h4>
                                <hr class="mt-2 mb-2">
                                <div class="page-contact-us pt-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s"
                                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                    <div class="icon-box">
                                                        <img src="{{ asset('frontend/images/icon-location.svg') }}"
                                                            alt="">
                                                    </div>

                                                    <div class="contact-info-content">
                                                        <h3>address</h3>
                                                        <p>Vice Chancellor Secretariat, Central University of Himachal
                                                            Pradesh, Near HPCA Stadium, Dharamshala, Distt Kangra, Himachal
                                                            Pradesh – 176215</p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4 col-md-6">
                                                <div class="contact-info-item wow fadeInUp"
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="icon-box">
                                                        <img src="{{ asset('frontend/images/icon-phone.svg') }}"
                                                            alt="">
                                                    </div>

                                                    <div class="contact-info-content">
                                                        <h3>contact</h3>
                                                        <p>+91-9874-635-458</p>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="col-lg-4 col-md-6">
                                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s"
                                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                    <div class="icon-box">
                                                        <img src="{{ asset('frontend/images/icon-mail.svg') }}"
                                                            alt="">
                                                    </div>

                                                    <div class="contact-info-content">
                                                        <h3>email</h3>
                                                        <p>vc@hpcu.ac.in</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
