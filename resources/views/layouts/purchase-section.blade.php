@php
    $language = isset($language) ? $language : 'english';
@endphp

<div class="purchase-section mt-5 w-100">
    <h3 class="text-center">Purchase Options</h3>
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>Option</th>
                <th>Price</th>
                <th style="width: 120px;">Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Domestic Shipping -->
            <tr id="{{ $language }}_domesticRow">
                <td>Printed Book - Domestic India</td>
                <td>₹200</td>
                <td>
                    <div class="input-group">
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('{{ $language }}_domesticQty', -1)">−</button>
                        <input type="number" id="{{ $language }}_domesticQty" min="1" max="5" value="1"
                            class="form-control text-center">
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('{{ $language }}_domesticQty', 1)">+</button>
                    </div>
                </td>
                <td>
                    <button class="btn btn-primary"
                        onclick="addToCart('{{ $language }} Domestic Book', 200, '{{ $language }}_domesticQty', 5, 'domesticBook')">
                        Add
                    </button>
                </td>
            </tr>

            @if ($language === 'english' || $language === 'hindi')
                <!-- International Purchase -->
                <tr id="{{ $language }}_intlRow">
                    <td>Printed Book - International Purchase</td>
                    <td id="{{ $language }}_intlPrice">₹4000</td>
                    <td>
                        <div class="input-group">
                            <button class="btn btn-secondary btn-sm"
                                onclick="changeQuantity('{{ $language }}_intlQty', -1); updateIntlPrice('{{ $language }}')">
                                −
                            </button>
                            <input type="number" id="{{ $language }}_intlQty" min="1" max="2" value="1"
                                class="form-control text-center" oninput="updateIntlPrice('{{ $language }}')">
                            <button class="btn btn-secondary btn-sm"
                                onclick="changeQuantity('{{ $language }}_intlQty', 1); updateIntlPrice('{{ $language }}')">
                                +
                            </button>

                        </div>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('{{ $language }} International Book', 4000, '{{ $language }}_intlQty', 2, 'intlBook')">
                            Add
                        </button>

                    </td>
                </tr>

                <!-- Ebook -->
                <tr>
                    <td>Ebook</td>
                    <td>₹200</td>
                    <td>
                        <input type="number" id="{{ $language }}_ebookQty" min="1" max="1" value="1"
                            class="form-control text-center" disabled>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('{{ $language }} Ebook', 200, '{{ $language }}_ebookQty', 1, 'ebook')">
                            Add
                        </button>
                    </td>
                </tr>

                <!-- POD with Amazon Links -->
                <tr>
                    <td>POD (Print on Demand) <br>for outside of India</td>
                    <td>—</td>
                    <td>—</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amazonModal">
                            POD - Amazon
                        </button>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- Amazon Modal -->
<div class="modal fade" id="amazonModal" tabindex="-1" aria-labelledby="amazonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="amazonModalLabel">Select Amazon Store</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="https://www.amazon.com/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.com (United States)
                            </a>
                            <a href="https://www.amazon.co.uk/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.co.uk (United Kingdom)
                            </a>
                            <a href="https://www.amazon.de/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.de (Germany)
                            </a>
                            <a href="https://www.amazon.fr/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.fr (France)
                            </a>
                            <a href="https://www.amazon.es/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.es (Spain)
                            </a>
                            <a href="https://www.amazon.it/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.it (Italy)
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="https://www.amazon.nl/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.nl (Netherlands)
                            </a>
                            <a href="https://www.amazon.pl/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.pl (Poland)
                            </a>
                            <a href="https://www.amazon.se/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.se (Sweden)
                            </a>
                            <a href="https://www.amazon.co.jp/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.co.jp (Japan)
                            </a>
                            <a href="https://www.amazon.ca/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.ca (Canada)
                            </a>
                            <a href="https://www.amazon.com.au/dp/9334157925" target="_blank"
                                class="list-group-item list-group-item-action">
                                Amazon.com.au (Australia)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Checkout Modal -->
<div id="checkoutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-4">
            <div class="modal-header">
                <h5 class="modal-title">Shipping Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="checkoutForm">
                    <!-- Always shown -->
                    <div class="mb-3">
                        <input type="text" id="fullName" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" id="phone" class="form-control" placeholder="Phone No." required>
                    </div>

                    <!-- Extra fields for printed items -->
                    <div id="extraFieldsContainer">
                        <div class="mb-3">
                            <input type="text" id="address1" class="form-control"
                                placeholder="Address 1 (House No, Society/Sector)" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="address2" class="form-control" placeholder="Address 2 (Landmark)">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="address3" class="form-control"
                                placeholder="Address 3 (Area, City/Village)" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="pincode" class="form-control" placeholder="Pincode/Zipcode" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <select id="countrySelect" class="form-select" required>
                                    <option value="">Select Country</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select id="stateSelect" class="form-select" required>
                                    <option value="">Select State</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit Order</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/purchase_section.js') }}"></script>
