@extends('layouts.main')

@section('main-section')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>

    <!-- PDF Viewer Modal -->
    <div id="pdfModal"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;">
        <div style="background: white; margin: 2em auto; padding: 20px; width: 80%; height: 90%;">
            <button onclick="closePdfModal()"
                style="float: right; padding: 5px 10px; background: #d14bd8; color: white; border: none; cursor: pointer;">Close</button>
            <div id="pdfViewer" style="width: 100%; height: 95%; margin-top: 10px;"></div>
        </div>
    </div>

    <div class="container flex-grow-1 d-flex flex-column justify-content-start align-items-left mt-5">
        <div class="row justify-content-center">
            <!-- Left Section (Main Content) -->
            <div class="col-lg-7 col-md-8 col-sm-12 text-left">
                <div class="mt-3 text-content">
                    <div class="d-flex justify-content-between flex-wrap">

                        <!-- Video 1 -->
                        <div class="video-container" style="flex: 1; min-width: 300px; margin: 10px;">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/kVnLeDOBlHc?si=D03igwGBY0IJy1F-" title="Video 1"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                        <!-- Video 2 -->
                        <div class="video-container" style="flex: 1; min-width: 300px; margin: 10px;">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/_pSCzugigJk?si=lG1-FVfhtd-xojhV" title="Video 2"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>

                    <h3 class="index-font text-center mb-4 fw-bold mt-2">About the Book, Message From God</h3>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">Once in a while comes a Book that is
                        difficult to decide, whether it is fiction or real (Non-fiction)! One such Book, “Message From God”
                        by Pradip Mukherji, brings to the human a Message given by God, to Mr Mukherji.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">This Book reveals about someone called
                        the True God, who is revealing the Cosmic Being, and this Being is the king of the universe, who has
                        proclaimed himself to be the only one God, the highest God in all religions and wants the humans to
                        worship him, the king.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">This Book is the story of the True God
                        and the false God, who is claiming himself to be the true God. The Book reveals all kind of
                        deceptions, carefully orchestrated to deceive the humans.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">The Book reveals how the human is a
                        product of both the True God and the king, how the human is very important for both and how the
                        humans are made to suffer.</h4>

                    <h4 class="index-font text-left" style="font-weight: normal">The Book is a revelation from God to the
                        humans.</h4>
                    <h4 class="index-font text-left mb-5" style="font-weight: normal">The book reveals:</h4>

                    <h4 class="index-font text-left" style="font-weight: normal">1. Who the human is!</h4>
                    <h4 class="index-font text-left" style="font-weight: normal">2. Why there is so much of suffering in the
                        world!</h4>
                    <h4 class="index-font text-left" style="font-weight: normal">3. Why every method created to end
                        suffering has not helped humanity!</h4>
                    <h4 class="index-font text-left" style="font-weight: normal">4. How religion and spirituality are both a
                        deception, as much as the material world is and will never free humanity from their suffering!</h4>
                    <h4 class="index-font text-left" style="font-weight: normal">5. How false gods rule over the humans
                        through religion and spirituality!</h4>
                    <h4 class="index-font text-left" style="font-weight: normal">6. Who true God is!</h4>
                    <h4 class="index-font text-left mb-5" style="font-weight: normal">7. How choosing true God beyond and
                        without faith, belief, devotion, trust, worshipping, reverence and submission, can serve the human!
                    </h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">The Book presents God as a utility to
                        be used and not to be reverred or worshipped. For the author, if the reader finds God not of any
                        use, then it’s better to drop such a God. If you are bringing faith, trust, devotion, belief and
                        reverence between you and God, then you are being blindly superstitious and will not be able to
                        examine God.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">Those who are sensitive, who can feel
                        energy and those who are open, the moment they touch the Book, they feel that something precious is
                        in their hands.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">Talk to the Image on the Book cover
                        about all your pain, suffering and misery, all your negativity and your judgements, every way you
                        felt rejected, unloved, uncared and not acknowledged, you not able to forgive yourself and others,
                        all your grief and sadness from all that you have lost, all your shame and guilt that you are
                        holding deep inside you, about how you are feeling trapped and overwhelmed by the events and
                        circumstances of life.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">Talk to the Book like you talk to your
                        therapist, unburdening yourself from everything that is holding you down and not allowing you to
                        move on.</h4>

                    <h3 class="index-font text-center mb-5 fw-bold">About The Author – Pradip Mukherji</h3>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">The author is neither religious, nor
                        spiritual, nor a scholar. He has no interest in God business, but out of curiosity decided to go
                        ahead when God came to him. He has been given certain perceptual and cognitive abilities, because of
                        which he can communicate with God and with anything else that is not God.</h4>

                    <h4 class="index-font text-left mb-5" style="font-weight: normal">He followed the Will of God for 7
                        years and was engaged with freeing the Souls who got trapped in the Matrix and couldn’t go back
                        Home. That work was completed in August 2023. Since then he is bringing the Message From God to the
                        humans through the Book.</h4>

                    <h3 class="index-font text-center mb-5 fw-bold">Read Two Chapters for Free (In the Language you select)
                    </h3>

                    <div class="container mt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered text-left" style="border-color: #d14bd8;">
                                <tbody>
                                    <tr style="background: #ffffff;">
                                        <td class="p-3"><a class="text-decoration-none"
                                                style="color: #d14bd8; font-weight: bold;"
                                                href="{{ asset('assets/pdf/MOG_Free_Chapters_English.pdf') }}"
                                                onclick="openPdf(event, this.href)"> English Book
                                                – Message From GOD</a></td>
                                    </tr>
                                    <tr style="background: #f1f1f1;">
                                        <td class="p-3"><a class="text-decoration-none"
                                                href="{{ asset('assets/pdf/MOG_Free_Chapters_Hindi.pdf') }}"
                                                style="color: #d14bd8; font-weight: bold;"
                                                onclick="openPdf(event, this.href)">Hindi Book – परमात्मा का
                                                संदेश</a></td>
                                    </tr>
                                    <tr style="background: #ffffff;">
                                        <td class="p-3"><a class="text-decoration-none"
                                                href="{{ asset('assets/pdf/MOG_Free_Chapters_Telugu.pdf') }}"
                                                style="color: #d14bd8; font-weight: bold;"
                                                onclick="openPdf(event, this.href)">Telugu Book – పరమాత్ముని
                                                సందేశము</a></td>
                                    </tr>
                                    <tr style="background: #f1f1f1;">
                                        <td class="p-3"><a class="text-decoration-none"
                                                href="{{ asset('assets/pdf/MOG_Free_Chapters_Gujarati.pdf') }}"
                                                style="color: #d14bd8; font-weight: bold;"
                                                onclick="openPdf(event, this.href)"> Gujarati Book –
                                                પરમાત્માનો સંદેશ</a></td>
                                    </tr>
                                    <tr style="background: #ffffff;">
                                        <td class="p-3"><a class="text-decoration-none"
                                                href="{{ asset('assets/pdf/MOG_Free_Chapters_Marathi.pdf') }}"
                                                style="color: #d14bd8; font-weight: bold;"
                                                onclick="openPdf(event, this.href)">Marathi Book –
                                                परमात्म्याचा संदेश</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-start mt-4">
                        <a href="/Gods-Book/Order" target="_blank" class="btn btn-primary mt-2">
                            Click To Order Books
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-12 text-center d-flex flex-column align-items-center">
                @include('layouts.right_sidebar')
            </div>
        </div>
    </div>

    <script>
        function openPdf(event, url) {
            event.preventDefault();
            const modal = document.getElementById('pdfModal');
            const viewer = document.getElementById('pdfViewer');

            // Clear previous PDF
            viewer.innerHTML = '';

            // Embed new PDF
            PDFObject.embed(url, viewer, {
                fallbackLink: `<p>Your browser does not support inline PDFs. Please <a href="${url}">download the PDF</a> to view it.</p>`
            });

            // Show modal
            modal.style.display = 'block';
        }

        function closePdfModal() {
            document.getElementById('pdfModal').style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function (event) {
            const modal = document.getElementById('pdfModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>

@endsection
