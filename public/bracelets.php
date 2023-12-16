<?php
session_start(); // Start the session at the beginning

require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category = 'Bracelet'");
    $stmt->execute();

    $bracelets = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetching bracelet data
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit; // Exit the script if a database error occurs
}

$variables = [
    'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
    'bracelets' => $bracelets // Include bracelets data in the variables array
];

echo $twig->render('bracelets.twig', $variables); // Pass the correct variables array
?>
