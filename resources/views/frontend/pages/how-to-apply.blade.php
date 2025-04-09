@extends('frontend.layouts.main')
@section('title', 'How to Apply')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">How to Apply</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">How to Apply</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-services bg-abt">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="text-anime-style-3" data-cursor="-opaque">Steps to Apply for Online Programs (OL)
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <ul class="timeline">

                    <!-- Item 1 -->
                    <li>
                        <div class="direction-r">
                            <div class="flag-wrapper">
                                <span class="flag">Visit the Website</span>
                                <span class="time-wrapper"><span class="time">Step 1</span></span>
                            </div>
                            <div class="desc">Go to the official website of CUHP. Click on the "Online Programs (CDOE)"
                                link located at the top of the homepage.</div>
                        </div>
                    </li>

                    <!-- Item 2 -->
                    <li>
                        <div class="direction-l">
                            <div class="flag-wrapper">
                                <span class="flag">Choose a Program</span>
                                <span class="time-wrapper"><span class="time">Step 2</span></span>
                            </div>
                            <div class="desc">Browse through the list of available programs. Select the program that
                                aligns with your academic or career goals and eligibility.</div>
                        </div>
                    </li>

                    <!-- Item 3 -->
                    <li>
                        <div class="direction-r">
                            <div class="flag-wrapper">
                                <span class="flag">Register or Sign In</span>
                                <span class="time-wrapper"><span class="time">Step 3</span></span>
                            </div>
                            <div class="desc">Click the "Apply Now" button. You will be redirected to the
                                Admission/Registration Portal of the Centre for Distance and Online Education (CDOE). If
                                you are a new user, click "New Registration." If you already have an account, log in to
                                access the application portal.</div>
                        </div>
                    </li>

                    <li>
                        <div class="direction-l">
                            <div class="flag-wrapper">
                                <span class="flag">Fill the Application Form</span>
                                <span class="time-wrapper"><span class="time">Step 4</span></span>
                            </div>
                            <div class="desc">Read Instructions Carefully</div>
                            <div class="desc">Enter your personal, educational, and contact details carefully.
                                Important: Use your active email address, as all communication will be sent to this
                                address. Ensure you have an ABC ID and DEB ID before completing the form. If not, create
                                these IDs using the following links:</div>
                            <div class="desc">Academic Bank of Credits (ABC-ID)</div>
                            <div class="desc">Distance Education Bureau (DEB-ID)</div>
                        </div>
                    </li>


                    <li>
                        <div class="direction-r">
                            <div class="flag-wrapper">
                                <span class="flag">Upload Documents</span>
                                <span class="time-wrapper"><span class="time">Step 5</span></span>
                            </div>
                            <div class="desc">Upload scanned copies of the required documents, such as academic
                                transcripts and proof of ID.</div>
                        </div>
                    </li>


                    <li>
                        <div class="direction-l">
                            <div class="flag-wrapper">
                                <span class="flag">Pay the Application Fee</span>
                                <span class="time-wrapper"><span class="time">Step 6</span></span>
                            </div>
                            <div class="desc">Pay the application fee using the secure online payment gateway.</div>
                            <div class="desc"><b>Note:</b> The registration/application fee is non-refundable.</div>
                        </div>
                    </li>

                    <li>
                        <div class="direction-r">
                            <div class="flag-wrapper">
                                <span class="flag">Submit Your Application</span>
                                <span class="time-wrapper"><span class="time">Step 7</span></span>
                            </div>
                            <div class="desc">Review the information entered in the form carefully. Once verified,
                                submit your application.</div>
                        </div>
                    </li>

                    <li>
                        <div class="direction-l">
                            <div class="flag-wrapper">
                                <span class="flag">Receive Confirmation</span>
                                <span class="time-wrapper"><span class="time">Step 8</span></span>
                            </div>
                            <div class="desc">After submission, you will receive a confirmation email with further
                                instructions on the admission process.</div>
                        </div>
                    </li>

                    <li>
                        <div class="direction-r">
                            <div class="flag-wrapper">
                                <span class="flag">Check Admission Status</span>
                                <span class="time-wrapper"><span class="time">Step 9</span></span>
                            </div>
                            <div class="desc">Log into your account periodically to monitor the status of your
                                application and view any updates. Ensure all steps are completed correctly to avoid
                                delays in the admission process.</div>
                        </div>
                    </li>

                    <li>
                        <div class="direction-l">
                            <div class="flag-wrapper">
                                <span class="flag">Send Hard Copy</span>
                                <span class="time-wrapper"><span class="time">Step 10</span></span>
                            </div>
                            <div class="desc">Send a hard copy of all self-attested documents uploaded online.</div>
                        </div>
                    </li>


                </ul>
            </div>
            <div class="col-lg-12 mt-5 text-center">
                <h4>Important Instructions</h4>
                <p>Admission is provisional and based on valid documents and the student's undertaking. It may be
                    canceled if eligibility criteria are not fulfilled.</p>
            </div>
        </div>
    </div>
@endsection
