@extends('layouts.main')

@section('main-section')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 class="mb-4">Common Questions</h3>

                <!-- FAQ Accordion -->
                <div class="accordion" id="faqAccordion">

                    <!-- FAQ Item 1 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                What is the purpose of Alakh God?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Alakh God aims to help people connect with the divine through healing cards, spiritual messages, and guidance to relieve suffering and find peace.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                How can I contact Alakh God for guidance?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can reach out via the <a href="contact.php">Contact Us</a> page by filling out the form or using the provided email and phone number.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                Is there any membership or subscription required?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                No, there is no membership required. However, you can subscribe to our <a href="https://www.linkedin.com/newsletters/7272962487929446401/">Newsletter</a> for regular messages and updates.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                How can I donate or support Alakh God?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can support Alakh God by sharing our messages on social media or contributing through our <a href="donate.php">Donate</a> page (if applicable).
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                Can I volunteer or collaborate with Alakh God?
                            </button>
                        </h2>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! We welcome volunteers and collaborators. Please reach out through our <a href="contact.php">Contact</a> page for more details.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
