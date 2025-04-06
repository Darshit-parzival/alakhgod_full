<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alakhgod</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="{{asset('assets/img/cropped-God_Site_Icon-32x32.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <!-- Plyr JS -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
</head>

<body>
    <!-- Header Content -->
    <div class="container-fluid d-flex justify-content-between align-items-center mt-3 mb-3">
        <!-- Left Side: Toggler -->
        <div class="d-lg-none">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list" style="font-size: 24px;"></i>
            </button>
        </div>

        <!-- Center: God Link -->
        <div class="text-center flex-grow-1">
            <a href="/" class="god-link-home">God</a>
        </div>
    </div>
    <hr class="my-3 d-none d-md-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/" data-path="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Pradip Sir
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/About-Pradip-Sir/Journey-To-God/"
                                    data-path="/About-Pradip-Sir/Journey-To-God/">My Journey TO God</a></li>
                            <li><a class="dropdown-item" href="/About-Pradip-Sir/Journey-With-God/"
                                    data-path="/About-Pradip-Sir/Journey-With-God/">My Journey WITH God</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Gods-Mantra" data-path="/Gods-Mantra">God’s Mantra</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="bookDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            God’s Book
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Gods-Book/About" data-path="/Gods-Book/About">About God's Book</a>
                            </li>
                            <li><a class="dropdown-item" href="/Gods-Book/Order" data-path="/Gods-Book/Order">Order God's Book</a>
                            </li>
                            <li><a class="dropdown-item" href="/Gods-Book/Read" data-path="/Gods-Book/Read">Read God's Book</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Gods-Healing-Photo" data-path="/Gods-Healing-Photo">God’s Healing
                            Photo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php" data-path="/event.php">Event</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                            <li><a class="dropdown-item" href="/Resources/Video-Message-English">Video Messages -
                                    English</a></li>
                            <li><a class="dropdown-item" href="/Resources/Video-Message-Hindi">Video Messages –
                                    Hindi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="othersDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Others/Contact" data-path="/Others/Contact">Contact
                                    Us</a></li>
                            <li><a class="dropdown-item" href="/Others/FAQ" data-path="/Others/FAQ">FAQ (Frequently
                                    Asked Questions)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <hr class="my-3 d-none d-md-block">

    @include('layouts.breadcrumb')

    <!-- Scroll-to-Top Button -->
    <button onclick="scrollToTop()" id="scrollBtn" title="Go to top">
        <i class="bi bi-chevron-up"></i>
    </button>
    <script>
        // Show the button after scrolling 300px
        window.onscroll = function () {
            let scrollBtn = document.getElementById("scrollBtn");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        };

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            const currentPath = window.location.pathname; // Get current URL path

            document.querySelectorAll(".navbar-nav .nav-link, .navbar-nav .dropdown-item").forEach(link => {
                const linkPath = link.getAttribute("data-path"); // Get custom path

                if (currentPath === linkPath) {
                    link.classList.add("active"); // Add active class to the link

                    // Check if the link is inside a dropdown
                    const parentDropdown = link.closest(".dropdown-menu");
                    if (parentDropdown) {
                        const dropdownToggle = parentDropdown.previousElementSibling;
                        if (dropdownToggle) {
                            dropdownToggle.classList.add("active"); // Make dropdown parent active
                        }

                        const parentNavItem = parentDropdown.closest(".nav-item");
                        if (parentNavItem) {
                            parentNavItem.classList.add("active"); // Highlight parent nav item
                        }
                    }
                }
            });
        });
    </script>
