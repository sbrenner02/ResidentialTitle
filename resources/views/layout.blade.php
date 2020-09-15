<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <title>Residential Title</title>
</head>
<body>
@include('includes/header')
<div class="container-fluid no-gutters justify-content-center content col-12 p-0" id="content">
    <div class="row justify-content-center col-12 no-gutters">
        <div class="col-xl-9 col-12 p-md-4 content-bg">
            @yield('content')
        </div>
    </div>
</div>
@include('includes/testimonials')
@include('includes/footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</html>
