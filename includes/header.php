<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alakhgod</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="assets/img/cropped-God_Site_Icon-32x32.png">
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
        <a href="index.php" class="god-link-home">God</a>
    </div>
</div>
    <hr class="my-3 d-none d-md-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Pradip Sir
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="journey_to_god.php">My Journey TO God</a></li>
                            <li><a class="dropdown-item" href="journey_with_god.php">My Journey WITH God</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gods_mantra.php">God’s Mantra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gods_book.php">God’s Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gods_healing_photo.php">God’s Healing Photo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="orderBooksDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Order Books
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="orderBooksDropdown">
                            <li><a class="dropdown-item" href="order_print_book.php">Order Books</a></li>
                            <li><a class="dropdown-item" href="readBook.php">Read EBooks</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                            <li><a class="dropdown-item" href="video_messages_english.php">Video Messages - English</a></li>
                            <li><a class="dropdown-item" href="video_messages_hindi.php">Video Messages – Hindi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php">Event</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="othersDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="othersDropdown">
                            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                            <li><a class="dropdown-item" href="faq.php">FAQ (Frequently Asked Questions)</a></li>
                            <li><a class="dropdown-item" href="sign_up.php">Sign up</a></li>
                            <li><a class="dropdown-item" href="sign_in.php">Sign in</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="my-3 d-none d-md-block">
    <!-- Scroll-to-Top Button -->
    <button onclick="scrollToTop()" id="scrollBtn" title="Go to top">
    <i class="bi bi-chevron-up"></i>
    </button>
    <script>
        // Show the button after scrolling 300px
        window.onscroll = function() {
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
    </script>