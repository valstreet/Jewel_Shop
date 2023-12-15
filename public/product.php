<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; 
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$product_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$product_id) {
    header('Location: /public/index.php'); // Redirect if no product ID is provided
}

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id");
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();

    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        header('Location: /public/index.php'); // Redirect if product not found
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

$variables = [
    'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
    'product' => $product
];

echo $twig->render('product_detail.twig', $variables);
?>
