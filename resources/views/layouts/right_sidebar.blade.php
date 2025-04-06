<!-- Images -->
<a href="../book/about/gods_book.php"> <img src="{{asset('assets/img/1-1.png')}}" alt="Right Image 1"
        class="img-fluid right-image"> </a>

<!-- YouTube Videos -->
<iframe class="mt-3" width="300" height="200" src="https://www.youtube.com/embed/kVnLeDOBlHc?si=fXyjEdpY6T0AHt6x"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<div class="video-container" style="width: 300px; height: 200px">
    <video id="player" playsinline controls>
        <source src="{{ asset('assets/vid/sidebar/3_Simple_Ways For_Connecting_With_God.mp4') }}" type="video/mp4" />
    </video>
</div>

<style>
    /* Add CSS to maintain aspect ratio and proper sizing */
    .video-container {
        position: relative;
        overflow: hidden;
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Optional: Override Plyr's default controls height if needed */
    /* .plyr {
        height: 100%;
        width: 100%;
    } */
</style>

<!-- Join Us Heading -->
<h4 class="mt-5">Join on</h4>

<!-- Social Icons -->
<div class="d-flex flex-wrap justify-content-center mt-2 mb-2" style="max-width: 200px;">
    <div class="d-flex justify-content-center w-100 gap-5">
        <a href="https://www.facebook.com/AlakhGod" target="_blank"><img src="{{asset('assets/img/Facebook.png')}}"
                alt="Facebook" width="40"></a>
        <a href="https://www.youtube.com/@AlakhGod" target="_blank"><img src="{{asset('assets/img/youtube.jpeg')}}"
                alt="YouTube" width="40"></a>
        <a href="https://www.instagram.com/AlakhGod/" target="_blank"><img src="{{asset('assets/img/instagram.png')}}"
                alt="Instagram" width="40"></a>
    </div>
    <div class="d-flex justify-content-center w-100 gap-5 mt-2">
        <a href="https://www.pinterest.com/alakhgod" target="_blank"><img src="{{asset('assets/img/pinterest-1.png')}}"
                alt="Pinterest" width="40"></a>
        <a href="https://x.com/AlakhGod" target="_blank"><img src="{{asset('assets/img/X.png')}}" alt="Twitter"
                width="40"></a>
        <a href="https://www.linkedin.com/in/AlakhGod" target="_blank"><img src="{{asset('assets/img/Linkedin.png')}}"
                alt="LinkedIn" width="40"></a>
    </div>
    <div class="d-flex justify-content-center w-100 gap-3 mt-2">
        <a href="https://alakhgod.medium.com/" target="_blank"><img src="{{asset('assets/img/Medium.png')}}"
                alt="Medium" width="40"></a>
    </div>
</div>
<a href="https://www.linkedin.com/newsletters/7272962487929446401/?displayConfirmation=true" target="_blank"
    class="btn btn-primary mt-5">Subscribe to Newsletter<br />Message From God</a>
<script>
    const player = new Plyr('#player', {
        controls: [
            'play', 'progress',  'duration', 'mute', 'volume', 
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
