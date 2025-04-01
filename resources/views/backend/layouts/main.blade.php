<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        @if (trim($__env->yieldContent('title')))
            @yield('title') | CDOE | Central University of Himachal Pradesh
        @else
            CDOE | Central University of Himachal Pradesh
        @endif
    </title>
    <link href="{{ asset('backend/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('backend/img/favicon.ico') }}" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- Heder --}}
    @include('backend.includes.header')
    {{-- Sidebar --}}
    @include('backend.includes.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
    {{-- Footer  --}}
    @include('backend.includes.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
</body>

</html>
