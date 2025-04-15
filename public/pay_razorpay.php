<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>Received POST Data</h2>";

    // Define expected fields
    $fields = [
        'fullName' => 'Full Name',
        'email' => 'Email',
        'phone' => 'Phone No.',
        'address1' => 'Address 1',
        'address2' => 'Address 2',
        'address3' => 'Address 3',
        'pincode' => 'Pincode/Zipcode',
        'country' => 'Country',
        'state' => 'State'
    ];

    // Display form fields
    foreach ($fields as $key => $label) {
        $value = htmlspecialchars($_POST[$key] ?? 'N/A');
        echo "<strong>$label:</strong> $value<br>";
    }

    echo "<hr>";

    // Display cart data if provided
    if (!empty($_POST['cart'])) {
        echo "<h3>Cart Data:</h3>";
        $cart = json_decode($_POST['cart'], true);
        if ($cart) {
            echo "<pre>" . print_r($cart, true) . "</pre>";
        } else {
            echo "Invalid cart data format (not valid JSON).";
        }
    } else {
        echo "No cart data received.";
    }
} else {
    echo "Only POST requests are allowed.";
}
?>
