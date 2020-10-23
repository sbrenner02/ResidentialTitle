@extends('layout')
@section('content')
    <div class="row col-12 no-gutters">
        {{--
        <div class="col-12 col-md-3 order-1 order-md-0">
            <img class="w-100 pb-3 pr-md-3" src="/images/naty-boh.jpg">
            <img class="w-100 pb-3 pr-md-3" src="/images/Catonsville-Homes-Custom-Home-Sykesville.jpg">
        </div>
        --}}
        <div class="col-12 col-md-12 order-0 order-md-1">
            <div id="carouselControls" class="carousel slide col-12 mb-5 p-0 gallery mx-auto" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/slideshow/11.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/5.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/6.jpg" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/7.jpg" alt="Seventh slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/8.jpg" alt="Eighth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/9.jpg" alt="Ninth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slideshow/10.jpg" alt="Tenth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h1 class="text-center">Welcome</h1>
            <h2 class="text-center">We bring peace of mind to the settlement table</h2>
            Purchasing a property may be the biggest investment you make. We can help make your investment with confidence. With over one billion dollars a year in title insurance on residential and commercial properties closed each year, our team has earned a reputation over three decades for providing the finest in title examination, title insurance, settlements and related services.
            <div class="row col-12 my-5 mx-auto blue-border">
                <div class="col-12 text-center">
                {{--<h3 class="blue-text">Featured Links</h3>--}}
                </div>
                <div class="col-12 row no-gutters justify-content-center">
                    <div class="col-sm-12 col-md-4 text-center my-3">
                            <a href="/titlerequest">
                                <img class="quick-button" src="/images/4.png">Order Title
                            </a>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center my-3">
                            <a href="/commercial">
                                <img class="quick-button" src="/images/1.png">Commercial Services
                            </a>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center my-3">
                            <a href="/residential">
                                <img class="quick-button" src="/images/2.png">Residential Services
                            </a>
                    </div>
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
