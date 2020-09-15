@extends('layout')
@section('content')
    <div class="row col-12 justify-content-center mb-5 no-gutters">
        <div class="row col-12 no-gutters justify-content-center">
            <h1 class>Contact Us</h1>
        </div>
    @if(session('confirm_message'))<div class="mb-5"><h2 class="text-center">{{ session('confirm_message') }}</h2></div>
    @else
        <div class="text-center">
            <h6 class="mb-3">Please fill out the form with as many details as you can provide and we'll be in touch with you as soon as we can!</h6>
            <br>
        </div>
        <div class="container mb-5">
            @if ($errors->any())
                <div class="row alert alert-danger col-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" name="contact_form" action="/contact/contact">
                @csrf
                <div class="row form-row justify-content-center">
                    <div class="col-lg-4 form-group"><label>Name</label><input type="text" name="name" class="w-100 form-control" required></div>
                    <div class="col-lg-4 form-group"><label>Phone</label><input type="tel" name="phone" class="w-100 form-control" required></div>
                    <div class="col-lg-4 form-group"><label>Email</label><input type="email" name="email" class="w-100 form-control" required></div>
                </div>
                <div class="row form-row">
                    <div class="col-12 form-group"><label>Message</label><textarea name="message" rows="12" required class="form-control w-100 font-weight-bold"></textarea></div>
                </div>
                <div class="row form-row text-right d-block">
                    <button type="submit" class="btn btn-outline-primary float-right">Send Message</button>
                </div>
            </form>
        </div>
        <div class="row col-12 no-gutters justify-content-center">
            <h1>Our Offices</h1>
        </div>
        <div class="row no-gutters justify-content-between">
            <div class="col-lg-3 col-12 row no-gutters text-center pb-3">
                <div class="col-12"><b>Corporate Office in Owings Mills, MD</b></div>
                <div class="col-12">100 Painters Mill Road<br>
                    Suite 200<br>
                    Owings Mills, MD 21117<br>
                    Phone 410-653-3400<br>
                    Fax 410-653-3621</div>
            </div>
            <div class="col-lg-3 col-12 row no-gutters text-center pb-3">
                <div class="col-12"><b>Bel Air Office</b></div>
                <div class="col-12">
                    2105 Laurel Bush Road<br>
                    Suite 102<br>
                    Bel Air, MD 21015</div>
            </div>
            <div class="col-lg-3 col-12 row no-gutters text-center pb-3">
                <div class="col-12"><b>Milford, Delaware Office<br>(Moore & Rutt, P.A.)</b></div>
                <div class="col-12">
                    830 S Dupont Blv<br>
                    Milford, DE 19963-2233</div>
            </div>
            <div class="col-lg-3 col-12 row no-gutters text-center pb-3">
                <div class="col-12"><b>Bowie, MD</b></div>
                <div class="col-12">
                    16701 Melford Blvd.<br>
                    Suite 400<br>
                    Bowie, MD 20715</div>
            </div>
        </div>
    </div>

    @endif
@endsection
