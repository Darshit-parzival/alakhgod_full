@extends('layouts.main')

@section('main-section')

    <div class="container py-5">
        <div class="row justify-content-center">

            <!-- Display success or error message -->
            <div class="col-lg-12">
                <div class="alert alert-success">Message sent successfully!</div>
                <div class="alert alert-danger">Failed to send message. Please try again!</div>
            </div>

            <!-- Contact Details Section -->
            <div class="col-lg-5 col-md-6 mb-4">
                <h3 class="mb-4">Get in Touch</h3>
                <div class="contact-info">
                    <p><strong>Email:</strong> <a href="mailto:contact@alakhgod.com">contact@alakhgod.com</a></p>
                    <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                    <p><strong>Address:</strong> 123 Spiritual Lane, Serenity City, SC 45678</p>
                    <div class="social-icons mt-4">
                        <a href="https://www.facebook.com/AlakhGod" target="_blank" class="me-3"><img
                                src="{{ asset('assets/img/Facebook.png')}}" alt="Facebook" width="40"></a>
                        <a href="https://www.instagram.com/AlakhGod/" target="_blank" class="me-3"><img
                                src="{{ asset('assets/img/instagram.png')}}" alt="Instagram" width="40"></a>
                        <a href="https://x.com/AlakhGod" target="_blank" class="me-3"><img
                                src="{{ asset('assets/img/X.png')}}" alt="Twitter" width="40"></a>
                        <a href="https://www.linkedin.com/in/AlakhGod" target="_blank"><img
                                src="{{ asset('assets/img/Linkedin.png')}}" alt="LinkedIn" width="40"></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="col-lg-7 col-md-6">
                <h3 class="mb-4">Send Us a Message</h3>
                <form action="contact.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="5" class="form-control" placeholder="Enter your message"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>

@endsection
