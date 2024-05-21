<?php
session_start();

// Check if the cart session variable exists, if not, create it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Get product details from POST request
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];

// Add product to cart
$_SESSION['cart'][] = [
    'id' => $product_id,
    'name' => $product_name,
    'price' => $product_price,
];

// Redirect back to the product page or cart page
header('Location: cart.php');
exit;
?>
