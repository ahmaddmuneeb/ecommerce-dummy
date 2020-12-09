@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('content')

<br>
<br>

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                .
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                .
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h1><b>Shipping Information</b></h1>
                <form action="/thankyou">

                    <div class="form-group">
                      <label style="" for="Name"><b>Name</b></label>
                      <input type="text" name="Name" id="Name" class="form-control" placeholder="Name" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                      <label style="" for="Email"><b>Email</b></label>
                      <input type="Email" name="" id="Email" class="form-control" placeholder="Email" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                      <label style="" for="Phone No."><b>Phone No.</b></label>
                      <input type="Phone No." name="" id="Phone No." class="form-control" placeholder="Phone No." aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                      <label for="address"><b>Street Address</b></label>
                      <input type="address" name="" id="address" class="form-control" placeholder="Address" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                      <label style="" for="City"><b>City</b></label>
                      <input type="City" name="" id="City" class="form-control" placeholder="City" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label style="" for="Payment"><b>Payment Option</b></label>
                        <select class="browser-default custom-select">
                            <option selected>Cash on Delivery</option>
                            <option value="1">Stripe</option>
                            <option value="2">Paypal</option>
                            <option value="3">Cash on delivery</option>
                          </select>
                    </div>

                </form>
            </div>

            <div class="col-md-6">
                <div>
                    <h1><b>Order Information</b></h1>
                </div>
                <div class="mt-2 mb-2">
                    <h2>Hikvision 1MP 720p Full HD Dome CCTV Network Camera Price</h2>
                    <img class="w-25" src="{{ asset('images/p2.jpg') }}" alt="error-image">
                    <h4 class="mt-2 mb-2">
                        <b>$200</b>
                    </h4>
                    <h6 class="mt-2 mb-2">QTY: x1</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem expedita quibusdam accusamus natus! Nostrum, blanditiis. Omnis a eos amet corrupti cum eaque veniam ipsam vitae numquam quis inventore, optio provident!</p>
                    <div class="form-group mt-2 mb-2">
                        <a href="/thankyou" class="btn btn-danger">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
