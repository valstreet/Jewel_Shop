<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; 
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$loggedIn = isset($_SESSION['user_id']);
$userId = $loggedIn ? $_SESSION['user_id'] : null;
$session_id = session_id();
$cartItems = [];
$grandTotal = 0;

try {
    if ($loggedIn) {
        // Fetch cart items based on user_id
        $stmt = $conn->prepare("SELECT c.product_id, c.quantity, p.product_name, p.price FROM cart c JOIN products p ON c.product_id = p.product_id WHERE c.user_id = :user_id");
        $stmt->bindParam(':user_id', $userId);
    } else {
        // Fetch cart items based on session_id
        $stmt = $conn->prepare("SELECT c.product_id, c.quantity, p.product_name, p.price FROM cart c JOIN products p ON c.product_id = p.product_id WHERE c.session_id = :session_id");
        $stmt->bindParam(':session_id', $session_id);
    }

    $stmt->execute();
    $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($cartItems as $key => $item) {
        $total = $item['price'] * $item['quantity'];
        $cartItems[$key]['total'] = $total;
        $grandTotal += $total;
    }

    // Pass additional variables to Twig
    $variables = [
        'cart' => $cartItems,
        'grandTotal' => $grandTotal,
        'loggedIn' => $loggedIn,
        'username' => $loggedIn ? $_SESSION['username'] : 'Guest'
    ];

    echo $twig->render('cart.twig', $variables);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
