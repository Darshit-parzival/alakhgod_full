<?php include 'includes/header.php'; ?>

<div class="index-bg d-flex flex-column">

    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-items-center responsive-container">
            <div class="header-container w-100">
                <h1>Events</h1>
            </div>

            <div class="breadcrumb-container w-100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <hr class="my-3">

    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">

            <!-- Left Section - Event with Language Switching -->
            <div class="col-lg-7 col-md-8 col-sm-12">
                <div class="text-center mb-4">
                    <button class="btn btn-primary mx-2" onclick="showEvent('gujarati')">Gujarati</button>
                    <button class="btn btn-primary mx-2" onclick="showEvent('english')">English</button>
                    <button class="btn btn-primary mx-2" onclick="showEvent('hindi')">Hindi</button>
                </div>

                <div id="event-gujarati" class="event-content index-font">
                    <h2 class="text-center">ગુજરાતી ઇવેન્ટ</h2>
                    <div class="d-flex align-items-center mt-4">
                        <img src="assets/img/2-1.png" alt="Gujarati Event" class="img-fluid" style="max-width: 300px; margin-right: 20px;">
                        <p>આ ઇવેન્ટ એક મહત્વપૂર્ણ પ્રસંગ છે, જેમાં ધર્મ અને સંસ્કૃતિની વાત કરવામાં આવશે. અમે તમને આમંત્રિત કરીએ છીએ.</p>
                    </div>
                    <p class="mt-4">વિસ્તૃત વર્ણન: આ ઇવેન્ટમાં ધર્મના વિવિધ પાસાઓ, પ્રાચીન ગ્રંથો અને આધુનિક જીવનમાં તેના મહત્વની ચર્ચા કરવામાં આવશે.</p>
                    <p><strong>તારીખ:</strong> 15 એપ્રિલ, 2025</p>
                    <p><strong>સમય:</strong> સવારે 10:00 થી બપોરે 1:00</p>
                    <p><strong>સ્થળ:</strong> અમદાવાદ, ગુજરાત</p>
                </div>

                <div id="event-english" class="event-content d-none index-font">
                    <h2 class="text-center">English Event</h2>
                    <div class="d-flex align-items-center mt-4">
                        <img src="assets/img/event-english.jpg" alt="English Event" class="img-fluid" style="max-width: 300px; margin-right: 20px;">
                        <p>This event focuses on spirituality, faith, and its relevance in modern life. Join us for a profound experience.</p>
                    </div>
                    <p class="mt-4">Detailed Description: The event will cover ancient scriptures, religious practices, and their impact on contemporary society.</p>
                    <p><strong>Date:</strong> April 15, 2025</p>
                    <p><strong>Time:</strong> 10:00 AM to 1:00 PM</p>
                    <p><strong>Venue:</strong> Ahmedabad, Gujarat</p>
                </div>

                <div id="event-hindi" class="event-content d-none index-font">
                    <h2 class="text-center">हिंदी इवेंट</h2>
                    <div class="d-flex align-items-center mt-4">
                        <img src="assets/img/event-hindi.jpg" alt="Hindi Event" class="img-fluid" style="max-width: 300px; margin-right: 20px;">
                        <p>यह इवेंट धर्म, संस्कृति और आधुनिक जीवन में उनके महत्व पर केंद्रित है। हम आपका स्वागत करते हैं।</p>
                    </div>
                    <p class="mt-4">विस्तृत विवरण: इस कार्यक्रम में धर्म के विभिन्न पहलुओं, प्राचीन ग्रंथों और आधुनिक जीवन में उनके महत्व पर चर्चा होगी।</p>
                    <p><strong>तारीख:</strong> 15 अप्रैल, 2025</p>
                    <p><strong>समय:</strong> सुबह 10:00 से दोपहर 1:00</p>
                    <p><strong>स्थान:</strong> अहमदाबाद, गुजरात</p>
                </div>
            </div>

            <!-- Right Section - Images, Videos, and Social Links -->
            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                <!-- Images -->
                <img src="assets/img/1-1.png" alt="Right Image 1" class="img-fluid right-image">
                <img src="assets/img/2-1.png" alt="Right Image 2" class="img-fluid right-image">

                <!-- YouTube Videos -->
                <iframe class="mt-3" width="300" height="200" src="https://www.youtube.com/embed/kVnLeDOBlHc?si=fXyjEdpY6T0AHt6x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe class="mt-3" width="300" height="200" src="https://www.youtube.com/embed/kVnLeDOBlHc?si=fXyjEdpY6T0AHt6x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <!-- Join Us Heading -->
                <h4 class="mt-5">Join on</h4>

                <!-- Social Icons -->
                <div class="d-flex flex-wrap justify-content-center mt-2 mb-2" style="max-width: 200px;">
                    <div class="d-flex justify-content-center w-100 gap-5">
                        <a href="https://www.facebook.com/AlakhGod" target="_blank"><img src="assets/img/Facebook.png" alt="Facebook" width="40"></a>
                        <a href="https://www.youtube.com/@AlakhGod" target="_blank"><img src="assets/img/youtube.jpeg" alt="YouTube" width="40"></a>
                        <a href="https://www.instagram.com/AlakhGod/" target="_blank"><img src="assets/img/instagram.png" alt="Instagram" width="40"></a>
                    </div>
                </div>
                <a href="https://www.linkedin.com/newsletters/7272962487929446401/?displayConfirmation=true" target="_blank" class="btn btn-primary mt-5">Subscribe to Newsletter<br />Message From God</a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

<script>
    // JavaScript to switch between language screens
    function showEvent(lang) {
        document.querySelectorAll('.event-content').forEach(e => e.classList.add('d-none'));
        document.getElementById(`event-${lang}`).classList.remove('d-none');
    }
</script>
