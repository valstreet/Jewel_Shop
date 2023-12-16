<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';

// Check if the user is logged in
$loggedIn = isset($_SESSION['user_id']);
$userId = $loggedIn ? $_SESSION['user_id'] : null;
$sessionId = session_id();

// Determine whether to use user_id or session_id for cart operations
$cartIdentifier = $loggedIn ? 'user_id' : 'session_id';
$cartIdentifierValue = $loggedIn ? $userId : $sessionId;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Loop through each cart item and update or remove as necessary
        foreach ($_POST['cart'] as $product_id => $details) {
            if (isset($details['remove'])) {
                // Remove item
                $stmt = $conn->prepare("DELETE FROM cart WHERE $cartIdentifier = :cartIdentifier AND product_id = :product_id");
                $stmt->bindParam(':cartIdentifier', $cartIdentifierValue);
                $stmt->bindParam(':product_id', $product_id);
                $stmt->execute();
            } else if (isset($details['quantity'])) {
                // Update quantity
                $quantity = max(1, intval($details['quantity']));
                $stmt = $conn->prepare("UPDATE cart SET quantity = :quantity WHERE $cartIdentifier = :cartIdentifier AND product_id = :product_id");
                $stmt->bindParam(':quantity', $quantity);
                $stmt->bindParam(':cartIdentifier', $cartIdentifierValue);
                $stmt->bindParam(':product_id', $product_id);
                $stmt->execute();
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    header('Location: cart.php');
    exit;
}
?>
