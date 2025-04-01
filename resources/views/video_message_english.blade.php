@extends('layouts.main')

@section('main-section')
    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-start"
        style="padding-left: 60px;">
        <div class="container mt-3">
            <!-- Heading -->
            <h3 class="index-font text-left fw-bold text-decoration-underline">List of Videos</h3>

            <!-- Video Links -->
            <ul class="list-unstyled mt-3">
                <li class="mb-2">
                    <a href="path/to/part1" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 1: Message
                        From The Human Who Spoke To God</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part2" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 2: About
                        The King</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part3" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 3: Who Am
                        I?</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part4" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 4:
                        Faith</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part5" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 5: Self
                        Realisation</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part6" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 6:
                        Exclusive Interview</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part7" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 7:
                        Answering Book Readers Questions</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part8" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 8: Pradip
                        Sir’s speaking to Gen-Z Kid</a>
                </li>
                <li class="mb-2">
                    <a href="path/to/part9" style="color: #d14bd8; font-size: 18px; text-decoration: none;">Part 9: God
                        Wants You To Relax by Falguni ji and Pradip Sir with Priyadarshini School – Pune</a>
                </li>
            </ul>

            <!-- part 1 -->
            <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-center mt-5">
                <!-- Centered Heading -->
                <h3 class="index-font text-center" style="color: #d14bd8; font-weight: bold;">Part 1: Message From The Human
                    Who Spoke To God</h3>

                <div class="d-flex flex-row justify-content-between align-items-start mt-4">
                    <!-- Left Side: Video -->
                    <div class="col-md-6" style="padding-left: 40px; margin-right: 30px;">
                        <video width="100%" controls>
                            <source src="path/to/part1-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Right Side: Description -->
                    <div class="col-md-6" style="padding-right: 40px;">
                        <p class="has-medium-font-size index-font"
                            style="font-size: 18px; color: #333; line-height: 1.8; margin-left: 10px;">
                            The profound insights shared by Pradip Mukherji in <em>‘Message From The Human Who Spoke To
                                God.’</em> Dive into a thought-provoking exploration as Pradip Sir recounts his
                            extraordinary encounter with God.<br>
                            The viewer can gain unique perspectives on spirituality, existence, and the human condition in
                            this captivating conversation. Join us on a journey of introspection and enlightenment, as
                            Pradip Sir’s revelations inspire contemplation and discussion.<br>
                            Whether you seek spiritual guidance or simply crave intellectual stimulation, this video offers
                            a compelling narrative that challenges perceptions and expands consciousness.<br>
                            Embrace the opportunity to engage with profound ideas and unlock new dimensions of
                            understanding. Don’t miss out on this enlightening discourse that may forever change the way you
                            perceive the world and your place.<br>
                            Pradip Sir exposes deceptions of false gods and delivers Connection with the True God.<br>
                            His only interest in this life is to bring some relief, ease, and peace to Humanity.<br>
                            Knowing the depths of deceptions and truth, Pradip Sir knows what truly serves a human. Being a
                            simple and uncomplicated human, he is sharing simple tools to bring ease and peace to daily
                            living.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
