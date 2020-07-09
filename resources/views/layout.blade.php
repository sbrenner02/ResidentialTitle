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
<div class="container no-gutters justify-content-center content">
    <div class="row justify-content-center col-12 no-gutters">
        <div class="col-1 text-center">

        </div>
        <div class="col-10">
            @yield('content')
        </div>
        <div class="col-1 text-center">

        </div>

    </div>
</div>
@include('includes/testimonials')
@include('includes/footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
