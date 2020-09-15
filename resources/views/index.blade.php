@extends('layout')
@section('content')
    <div class="row col-12 no-gutters">
        <div class="col-12 col-md-3 order-1 order-md-0">
            <img class="w-100 pb-3 pr-md-3" src="/images/naty-boh.jpg">
            <img class="w-100 pb-3 pr-md-3" src="/images/Catonsville-Homes-Custom-Home-Sykesville.jpg">
        </div>
        <div class="col-12 col-md-9 order-0 order-md-1">
            <h1 class="text-center">Welcome</h1>
            <h2 class="text-center">We bring peace of mind to the settlement table</h2>
            Purchasing a property may be the biggest investment you make. We can help make your investment with confidence. With over one billion dollars a year in title insurance on residential and commercial properties closed each year, our team has earned a reputation over three decades for providing the finest in title examination, title insurance, settlements and related services.
            <div class="row col-12 mt-5 mx-auto">
                <div class="col-12 text-center mb-4">
                <h3>Featured Links</h3>
                </div>
                <div class="col-4 text-left mb-5">
                    <a href="/titlerequest">
                        <img class="quick-button" src="/images/4.png">Order Title
                    </a>
                </div>
                <div class="col-4 text-left mb-5">
                    <a href="/commercial">
                        <img class="quick-button" src="/images/1.png">Commercial Services
                    </a>
                </div>
                <div class="col-4 text-left mb-5">
                    <a href="/residential">
                        <img class="quick-button" src="/images/2.png">Residential Services
                    </a>
                </div>
                {{--
                <div class="col-4 text-left mb-5">
                   <a href="/calculator">
                        <img class="quick-button" src="/images/3.png">Rate Calculator
                   </a>
                </div>
                --}}
            </div>
        </div>
    </div>
@endsection
