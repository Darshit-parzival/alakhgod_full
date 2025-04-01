@extends('layouts.main')

@section('main-section')

    <div class="index-bg d-flex flex-column">
        <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-center mt-5">
            <div class="row justify-content-center">
                <!-- Left Section (Main Content) -->
                <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                    <img src="{{asset('assets/img/Goddess and God.jpg')}}" alt="Main Image" class="img-fluid god-image">
                    <div class="mt-3 text-content">
                        <h3 class="index-heading">“May the Grace of Goddess & God Heal Your Pain and Suffering“</h3>
                        <h4 class="mt-5 index-font">You are welcome to the space of Goddess and God.</h4>

                        <p class="mt-4 index-font">
                            The Face of the humans you see above are the ones that I, God, am currently using to reach the Humans. I came to your universe to free my Children, the Souls. Now, that job is done.
                        </p>

                        <p class="mt-4 index-font">
                            What you have known are the deities (angels), Soul and king of this universe who created multiple deceptions in the name of God, to ensure that you won’t hear My Message.
                        </p>

                        <p class="mt-4 index-font">
                            I, God, Am not the God of any Religion or Spirituality. I never created them. I have nothing to do with them.
                        </p>

                        <p class="mt-4 index-font">
                            I, God, Am wanting the humans to choose Me, share with Me their pain & suffering for 30 days, and experience My Grace.
                        </p>

                        <p class="mt-4 index-font">
                            This website is an Invitation for you to get to Know Me and see what shows up in your life when you try the tools given by Me, God. Then make a <b> Choice if you wish to Connect with Me</b> or remain with what you are already connected with.
                        </p>
                    </div>

                </div>

                <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                    @include('layouts.right_sidebar')
                </div>

                <!-- Get to Know God Section -->
                <div class="container text-center mt-5 mb-5">
                    <h2 class="section-heading">Get to Know God and Connect With God</h2>
                    <div class="d-flex flex-wrap justify-content-center mt-4">
                        <!-- Subcontent 1 -->
                        <div class="info-box">
                            <h4>My Book</h4>
                            <p>Until August 2023, you had to attend a 3-day workshop by My Messenger, Pradip Mukherji, to get to know Me. Today, you can know Me through My Book.</p>
                            <a href="book/about/gods_book.php" class="btn btn-primary">Click Here to Know About My Book</a>
                        </div>

                        <!-- Subcontent 2 -->
                        <div class="info-box">
                            <h4>My Mantra</h4>
                            <p>My Mantra takes less than 2 mins a day to do. It is always given for FREE. While I will not give you what you want, yet I can smoothen out your life and heal you in unexpected ways. Just do it for 30 days.</p>
                            <a href="mantra/gods_mantra.php" class="btn btn-primary">Click Here To Receive My Mantra</a>
                        </div>

                        <!-- Subcontent 3 -->
                        <div class="info-box">
                            <h4>God’s Healing</h4>
                            <p>Talk to the above Photo about your suffering, pain, problems, issues, negativity, confusion, disease, neurosis, challenges, fear, etc. You will be pleasantly surprised with whatever is delivered.</p>
                            <a href="healing_photo/gods_healing_photo.php" class="btn btn-primary">Click to Receive God’s Healing through Photo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

