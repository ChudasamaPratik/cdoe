@extends('frontend.layouts.main')
@section('title', 'CIQA Director Details')
@section('content')
<style>
    p{
        text-align: justify;
    }
</style>
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Dr. Ram Pravesh Rai</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dr. Ram Pravesh Rai</li>
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
                                <img src="{{ asset('frontend/images/team/CIQA Director_Pic.jpg') }}"
                                    alt="Dr. Ram Pravesh Rai" style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <div class="sidebar-cta-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="sidebar-cta-content">
                                <h4 class="text-white pb-2">Dr. Ram Pravesh Rai, Ph.D.</h4>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Designation</h4>
                                <p>Associate Professor, Department of New Media</p>
                                <p>Director, Centre for Internal Quality Assurance (CIQA)</p>
                                <p>Director, Public Relations, CUHP</p>
                                <hr>
                                <h4 class="text-dark pb-2 pt-2">Contact</h4>
                                <p>Email: rprai1981@hpcu.ac.in</p>
                                <p>Mobile: 8894562222</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="team-single-content">
                        <div class="faq-accordion" id="accordion">
                            <div class="accordion-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Profile Details
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>Dr. Ram Pravesh Rai joined the Central University of Himachal Pradesh in the year
                                            2013 as an Assistant Professor in the Department of New Media, prior to that he
                                            served as:</p>
                                        <ul>
                                            <li>Assistant Professor at U.P. Rajarshi Tandon Open University, Allahabad
                                                (Prayagraj)</li>
                                            <li>Assistant Regional Director at Indira Gandhi National Open University
                                                (IGNOU)</li>
                                            <li>Ex-HOD, Department of New Media</li>
                                            <li>Ex-Dean, School of Journalism Mass Communication & New Media at Central
                                                University of Himachal Pradesh, Dharamshala</li>
                                        </ul>
                                        <p><strong>At present:</strong></p>
                                        <ul>
                                            <li>Associate Professor, Department of New Media, CUHP</li>
                                            <li>Director, Centre for Internal Quality Assurance, CDOE, CUHP</li>
                                            <li>Director, Public Relations, CUHP</li>
                                        </ul>
                                        <p><strong>Qualifications:</strong></p>
                                        <p>Dr. Rai is NET and Ph.D. in Mass Communication and M.A. Hindi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Research, Training, Conferences and Publications
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>Dr. Rai has presented more than 12 papers in the international and national
                                            seminars. He has delivered talk at IGNOU, Regional Centre Lucknow, Central Hindi
                                            Directorate's conference Chennai, Dainik Jagran newspaper and Kendriya Hindi
                                            Sansthan, Agra on various topics. He has completed 'Train the Trainer programme,
                                            jointly organised by IGNOU and DW Akademie, Deutsche Wele, Germany.</p>
                                        <p>Three scholars have been awarded PhD degree under his supervision.</p>
                                        <p>He has more than 12 research papers published in reputed journals, contributed
                                            many chapters in the national level books and has prepared many study materials
                                            for Antarrashtriy Hindi Vishwavidyalay, Wardha and U.P. Rajarshi Tandon Open
                                            University, Allahabad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Recent Publications
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>His recent and popular articles are:</p>
                                        <ol>
                                            <li>"Buyer's Right and Product Information: A Study On Displaying SAR Value of
                                                Budget Smart Phones"</li>
                                            <li>"The Bechdel Test and Hindi Cinema: An Analysis of Women Empowerment
                                                Delineation" (2021)</li>
                                            <li>"Persuading Voters through Aristotelian Rhetoric in Indian Lok Sabha
                                                Election 2019: A Content Analysis of Official Youtube Campaigns" (2022)</li>
                                        </ol>
                                        <p>He was also the Technical Reviewer under Massive Open Online Courses (MOOCs)
                                            program "Society and Media" launched on 15th July, 2019.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Areas of Interest
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>He is actively involved in teaching and research in the areas of:</p>
                                        <ul>
                                            <li>New Media Technologies</li>
                                            <li>Film Studies</li>
                                            <li>Mass Communication Theories</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s"
                                style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Contact Information
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p><strong>Postal Address:</strong></p>
                                        <p>School of Journalism Mass Communication & New Media<br>
                                            Central University of Himachal Pradesh,<br>
                                            Campus-I, near HPCA Cricket Stadium,<br>
                                            Dharamshala, H.P.-176215</p>

                                        <p><strong>Email:</strong> rprai1981@hpcu.ac.in</p>
                                        <p><strong>Mobile:</strong> 8894562222</p>
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
