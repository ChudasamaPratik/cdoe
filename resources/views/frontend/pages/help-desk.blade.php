@extends('frontend.layouts.main')
@section('title', 'Help Desk')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h2 class="text-white">Help Desk</h2>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Help Desk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('frontend/images/help-desk.png') }}">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-phone.svg') }}" alt="">
                        </div>

                        <div class="contact-info-content">
                            <h3>contact</h3>
                            <p>01892-229573</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icon-mail.svg') }}" alt="">
                        </div>

                        <div class="contact-info-content">
                            <h3>email</h3>
                            <p>cvc@hpcu.ac.in</p>
                            <p>pstovc@hpcu.ac.in</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
