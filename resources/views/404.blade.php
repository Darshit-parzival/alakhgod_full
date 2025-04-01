@extends('layouts.main')

@section('main-section')

    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">
            <!-- Left Section (Main Content) -->
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="mt-3 text-content">

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">In My, God’s, Space only a few things
                        are important</h3>

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">Get to Know Me through my Book –
                        <a href="/Gods-Book/About">Message From God</a>
                    </h3>

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">Receive My, God’s Healing – <a
                            href="/Gods-Healing-Photo">Healing
                            through Photo</a></h3>

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">Connect With Me – <a
                            href="/Gods-Mantra">My, God’s Mantra</a></h3>

                    <h3 class="index-font text-left mb-5" style="font-weight: normal">Cannot Access My Book? Write to <a
                            href="mailto:alakhGod@gmail.com">AlakhGod@gmail.com</a></h3>

                </div>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

@endsection
