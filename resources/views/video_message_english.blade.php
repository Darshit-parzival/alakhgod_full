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
            <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-center mt-5" id="part1">
                <!-- Centered Heading -->
                <h3 class="index-font text-center" style="color: #d14bd8; font-weight: bold;">Part 1: Message From The Human
                    Who Spoke To God</h3>

                <div class="d-flex flex-row justify-content-between align-items-start mt-4">
                    <!-- Left Side: Video -->
                    <div class="col-md-6" style="padding-left: 40px; margin-right: 30px;">
                        <video width="100%" id="player" playsinline controls>
                            <source
                                src="{{ asset('assets/vid/video_message_english/Part1_Message_From_The_Human_Who_Spoke_To_God.mp4') }}"
                                type="video/mp4">
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

            <!-- part 2 -->
            <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-center mt-5" id="part2">
                <!-- Centered Heading -->
                <h3 class="index-font text-center" style="color: #d14bd8; font-weight: bold;">Part 2: About The King</h3>

                <div class="d-flex flex-row justify-content-between align-items-start mt-4">
                    <!-- Left Side: Video -->
                    <div class="col-md-6" style="padding-left: 40px; margin-right: 30px;">
                        <video width="100%" id="player" playsinline controls>
                            <source src="{{ asset('assets/vid/video_message_english/Part2_About_The_King.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Right Side: Description -->
                    <div class="col-md-6" style="padding-right: 40px;">
                        <p class="has-medium-font-size index-font"
                            style="font-size: 18px; color: #333; line-height: 1.8; margin-left: 10px;">
                            In this video Pradip Sir reveals all the secrets of the king of this multiverse and how by going
                            against the Will of God, his Consciousness became Nil and he became only mind.<br>
                            The king calls himself Parmatma Brahman, Kaal, The Lord, Allah, Ahura Mazda and several other
                            names in the various religions.<br>
                            Pradip Sir also reveals how important it is to follow the Will of God, how easy it is to Connect
                            with God and be Blessed with ease & peace in our lives by God.
                        </p>
                    </div>
                </div>
            </div>

            <!-- part 3 -->
            <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-center mt-5" id="part3">
                <!-- Centered Heading -->
                <h3 class="index-font text-center" style="color: #d14bd8; font-weight: bold;">Part 3: Who Am I?</h3>

                <div class="d-flex flex-row justify-content-between align-items-start mt-4">
                    <!-- Left Side: Video -->
                    <div class="col-md-6" style="padding-left: 40px; margin-right: 30px;">
                        <video width="100%" id="player" playsinline controls>
                            <source src="{{ asset('assets/vid/video_message_english/Part3_Who_Am_I.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Right Side: Description -->
                    <div class="col-md-6" style="padding-right: 40px;">
                        <p class="has-medium-font-size index-font"
                            style="font-size: 18px; color: #333; line-height: 1.8; margin-left: 10px;">
                            In this video Pradip Sir reveals all the secrets of the king of this multiverse and how by going
                            against the Will of God, his Consciousness became Nil and he became only mind. ‘Who Am I?’, a
                            question that spiritual seekers are often encouraged to ask.<br>
                            Pradip Sir shares the narrative around ‘Who Am I?’ and the conclusion that Atman is the final
                            truth is flawed.<br>
                            Humanity has been given concepts of turiya, Atman, Brahman, etc. However, each of them are well
                            crafted deceptions that disconnect us from God. If you are on a spiritual journey, we recommend
                            watching this video a few times.
                        </p>
                    </div>
                </div>
            </div>

            <!-- part 4 -->
            <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-center mt-5" id="part4">
                <!-- Centered Heading -->
                <h3 class="index-font text-center" style="color: #d14bd8; font-weight: bold;">Part 4: Faith</h3>

                <div class="d-flex flex-row justify-content-between align-items-start mt-4">
                    <!-- Left Side: Video -->
                    <div class="col-md-6" style="padding-left: 40px; margin-right: 30px;">
                        <video width="100%" id="player" playsinline controls>
                            <source src="{{ asset('assets/vid/video_message_english/Part4_Faith.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Right Side: Description -->
                    <div class="col-md-6" style="padding-right: 40px;">
                        <p class="has-medium-font-size index-font"
                            style="font-size: 18px; color: #333; line-height: 1.8; margin-left: 10px;">
                            In this video Pradip Sir, shares how faith is given as an illusion to further keep humans in the
                            trap. While the king of the universe and his forces keep creating pain, on the other hand his
                            false messages give empty hopes to the humans in the name of prayers.<br>
                            Pradip Sir shares the narrative around ‘Who Am I?’ and the conclusion that Atman is the final
                            truth is flawed.<br>
                            Only a few prayers are fulfilled to keep the deception of faith alive. True God needs no faith,
                            surrender, devotion and yet delivers healing that is gentle, quick and unexpected. The Human who
                            brought the Message of God to the Humans.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const player = new Plyr('#player', {
            controls: [
                'play', 'progress', 'duration', 'mute', 'volume',
                'fullscreen'
            ],
            autoplay: false,
            keyboard: { focused: true, global: true },
            seekTime: 5
        });

        // Remove the 'canplay' duration override (caused seeking issues)
        // Remove the 'seeking' event handler (unnecessary interference)

        // Security measures (keep these)
        document.getElementById('player').addEventListener('contextmenu', event => event.preventDefault());
        document.addEventListener('keydown', event => {
            if (event.ctrlKey && ['s', 'S', 'u', 'U', 'p', 'P'].includes(event.key)) {
                event.preventDefault();
            }
        });
    </script>
@endsection
