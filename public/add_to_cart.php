<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';

// Determine if the user is logged in and get the user ID or session ID
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$sessionId = session_id();

// Use user_id if logged in, otherwise use session_id
$cartIdentifier = $userId ? 'user_id' : 'session_id';
$cartIdentifierValue = $userId ?: $sessionId;

if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    try {
        // Check if product already in cart for this user or session
        $stmt = $conn->prepare("SELECT * FROM cart WHERE $cartIdentifier = :cartIdentifier AND product_id = :product_id");
        $stmt->bindParam(':cartIdentifier', $cartIdentifierValue);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Update the existing cart item
            $update = $conn->prepare("UPDATE cart SET quantity = quantity + :quantity WHERE $cartIdentifier = :cartIdentifier AND product_id = :product_id");
            $update->bindParam(':quantity', $quantity);
            $update->bindParam(':cartIdentifier', $cartIdentifierValue);
            $update->bindParam(':product_id', $product_id);
            $update->execute();
        } else {
            // Insert new cart item
            $insert = $conn->prepare("INSERT INTO cart ($cartIdentifier, product_id, quantity) VALUES (:cartIdentifier, :product_id, :quantity)");
            $insert->bindParam(':cartIdentifier', $cartIdentifierValue);
            $insert->bindParam(':product_id', $product_id);
            $insert->bindParam(':quantity', $quantity);
            $insert->execute();
        }
        header('Location: cart.php'); // Redirect to the cart page
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
