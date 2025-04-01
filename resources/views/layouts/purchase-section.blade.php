<?php
$language = isset($language) ? $language : 'english';
?>

<div class="purchase-section mt-5 w-100">
    <h3 class="text-center">Purchase Options</h3>
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>Option</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Domestic Shipping -->
            <tr>
                <td>Printed Book - Domestic India</td>
                <td>₹200</td>
                <td class="d-flex justify-content-center align-items-center">
                    <input type="number" id="<?= $language ?>_domesticQty" min="1" max="5" value="1"
                        class="form-control mx-2 text-center" style="width: 60px;">
                    <button class="btn btn-secondary btn-sm me-1"
                        onclick="changeQuantity('<?= $language ?>_domesticQty', -1)">−</button>
                    <button class="btn btn-secondary btn-sm"
                        onclick="changeQuantity('<?= $language ?>_domesticQty', 1)">+</button>
                </td>
                <td>
                    <button class="btn btn-primary"
                        onclick="addToCart('<?= $language ?> Domestic Book', 200, '<?= $language ?>_domesticQty', 5)">Add</button>
                </td>
            </tr>

            <?php if ($language === 'english' || $language === 'hindi'): ?>
                <!-- International Purchase -->
                <tr>
                    <td>Printed Book - International Purchase</td>
                    <td id="<?= $language ?>_intlPrice">₹4000</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <input type="number" id="<?= $language ?>_intlQty" min="1" max="2" value="1"
                            class="form-control mx-2 text-center" style="width: 60px;"
                            oninput="updateIntlPrice('<?= $language ?>')">
                        <button class="btn btn-secondary btn-sm me-1"
                            onclick="changeQuantity('<?= $language ?>_intlQty', -1); updateIntlPrice('<?= $language ?>')">−</button>
                        <button class="btn btn-secondary btn-sm"
                            onclick="changeQuantity('<?= $language ?>_intlQty', 1); updateIntlPrice('<?= $language ?>')">+</button>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('<?= $language ?> International Book', 4000, '<?= $language ?>_intlQty', 2)">Add</button>
                    </td>
                </tr>

                <!-- Ebook -->
                <tr>
                    <td>Ebook</td>
                    <td>₹200</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <input type="number" id="<?= $language ?>_ebookQty" min="1" max="1" value="1"
                            class="form-control mx-2 text-center" style="width: 60px;" disabled>
                    </td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="addToCart('<?= $language ?> Ebook', 200, '<?= $language ?>_ebookQty', 1)">Add</button>
                    </td>
                </tr>

                <!-- POD with Amazon Links -->
                <tr>
                    <td>POD (Print on Demand) <br>for outside of India</td>
                    <td>—</td>
                    <td>—</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            POD - Amazon
                        </button>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Amazon Store</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="https://www.amazon.com/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.com (United States)
                            </a>
                            <a href="https://www.amazon.co.uk/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.co.uk (United Kingdom)
                            </a>
                            <a href="https://www.amazon.de/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.de (Germany)
                            </a>
                            <a href="https://www.amazon.fr/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.fr (France)
                            </a>
                            <a href="https://www.amazon.es/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.es (Spain)
                            </a>
                            <a href="https://www.amazon.it/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.it (Italy)
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="https://www.amazon.nl/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.nl (Netherlands)
                            </a>
                            <a href="https://www.amazon.pl/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.pl (Poland)
                            </a>
                            <a href="https://www.amazon.se/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.se (Sweden)
                            </a>
                            <a href="https://www.amazon.co.jp/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.co.jp (Japan)
                            </a>
                            <a href="https://www.amazon.ca/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
                                Amazon.ca (Canada)
                            </a>
                            <a href="https://www.amazon.com.au/dp/9334157925" target="_blank" class="list-group-item list-group-item-action">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
