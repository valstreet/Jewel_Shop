<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; 

if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $session_id = session_id(); // Using PHP session_id as a unique identifier for the user

    try {
        // Check if product already in cart for this session
        $stmt = $conn->prepare("SELECT * FROM cart WHERE session_id = :session_id AND product_id = :product_id");
        $stmt->bindParam(':session_id', $session_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Update the existing cart item
            $update = $conn->prepare("UPDATE cart SET quantity = quantity + :quantity WHERE session_id = :session_id AND product_id = :product_id");
            $update->bindParam(':quantity', $quantity);
            $update->bindParam(':session_id', $session_id);
            $update->bindParam(':product_id', $product_id);
            $update->execute();
        } else {
            // Insert new cart item
            $insert = $conn->prepare("INSERT INTO cart (session_id, product_id, quantity) VALUES (:session_id, :product_id, :quantity)");
            $insert->bindParam(':session_id', $session_id);
            $insert->bindParam(':product_id', $product_id);
            $insert->bindParam(':quantity', $quantity);
            $insert->execute();
        }
        echo "Product added to cart successfully.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>
