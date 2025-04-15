@extends('layouts.main')

@section('main-section')

    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">
            <!-- Left Section (Main Content) -->
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="mt-3 text-content">

                    <div class="cart-sidebar">
                        <h2>Cart Summary</h2>
                        <div id="cart-container">
                            <div class="cart-item">
                                <span>3 x English (Print Book)</span>
                                <span>600</span>
                            </div>
                        </div>
                        <div class="total-price" id="total-price">Total: 600</div>
                    </div>

                    <div>
                        <h3>Pay with RazorPay: </h3>
                        <button id="razorpay-button" class="btn btn-primary">Pay Now</button>
                    </div>
                    <div>
                        <h3>Pay with TopMate: </h3>
                        <button id="topmate-button" class="btn btn-primary">Pay Now</button>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

@endsection
