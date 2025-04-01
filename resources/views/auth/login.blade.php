@extends('frontend.layouts.main')
@section('title', 'Login')


@section('content')
    <div class="cta-box bg-abt">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('frontend/images/login.png') }}">
                </div>
                <div class="col-lg-6">
                    <div class="contact-form cta-form">
                        <div class="cta-box-title">
                            <h2>Login</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}" id="loginForm" class="wow fadeInUp"
                            data-wow-delay="0.25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- CAPTCHA Section -->
                                <div class="row align-items-center mt-3 mb-3">
                                    <!-- Captcha Image -->
                                    <div class="col col-xl-5">
                                        <div class="captcha-container capth_img">
                                            <img src="{{ captcha_src('math') }}" class="img-fluid rounded shadow-sm"
                                                data-refresh-config="math" alt="Captcha">
                                        </div>
                                    </div>

                                    <!-- Refresh Button -->
                                    <div class="col-2 col-xl-1 d-flex justify-content-center">
                                        <a href="#" class="captcha-img captcha-refresh text-dark"
                                            aria-label="Refresh Captcha">
                                            <i class="fas fa-sync-alt fs-2 "></i>
                                        </a>
                                    </div>

                                    <!-- Captcha Input -->
                                    <div class="col-12 col-xl-6">
                                        <input type="text" name="captcha" class="form-control" id="captcha"
                                            placeholder="Enter CAPTCHA">
                                        @error('captcha')
                                            <span
                                                class="invalid-feedback d-block mt-1"><strong>{{ $message }}</strong></span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default" id="loginButton">Login</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                                {{-- <div class="post-tags wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <span class="tag-links">
                                        <a href="{{ route('register') }}">New Registration</a>
                                        <a href="{{ route('password.request') }}">Reset Password</a>
                                    </span>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#loginForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    captcha: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    password: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    captcha: {
                        required: "Please enter the CAPTCHA code"
                    }
                },
                errorElement: 'span',
                errorClass: 'text-danger',
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {
                    $('#loginButton').addClass('disabled').prop('disabled', true);
                    form.submit();
                }
            });
        });
    </script>
@endpush
