@php
    $path = Request::path();
    $titles = [
        '/' => 'Home',
        'About-Pradip-Sir/Journey-To-God' => 'Journey TO God',
        'About-Pradip-Sir/Journey-With-God' => 'Journey WITH God',
        'Gods-Mantra' => 'God’s Mantra',
        'Gods-Book/About' => 'God’s Book',
        'Gods-Book/Order' => 'God’s Book Purchase',
        'Gods-Book/Read' => 'Read EBook',
        'Gods-Healing-Photo' => 'God’s Healing Photo',
        'Resources/Video-Message-English' => 'Video Message - English',
        'Resources/Video-Message-Hindi' => 'Video Message - Hindi',
        'Others/Contact' => 'Contact Us',
        'Others/FAQ' => 'FAQs',
    ];

    if (!array_key_exists($path, $titles)) {
        $title = 'Are you lost?';
        $subtitle = '404: Page Not Found';
    } else {
        $title = $titles[$path];
        $subtitle = null; // No subtitle needed for valid pages
    }
@endphp



<div class="index-bg d-flex flex-column">

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center responsive-container">
            <div class="header-container w-100">
                <h1>{{ $title }}</h1>
            </div>

            <div class="breadcrumb-container w-100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        @if(isset($subtitle))
                            <li class="breadcrumb-item active" aria-current="page">{{ $subtitle }}</li>
                        @else
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <hr class="my-3">
