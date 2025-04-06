@extends('layouts.main')

@section('main-section')

    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">
            <!-- Left Section (Main Content) -->
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="mt-3 text-content">

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">Tell the Image in the Healing Card
                        that I want to remain with God 24×7..</h3>

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">You don’t need the mantra any more.
                    </h3>

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">You will remain connected with God.</h3>

                </div>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

@endsection
