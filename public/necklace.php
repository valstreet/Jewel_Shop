<?php
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; // Ensure this path is correct
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category = 'Necklaces'");
    $stmt->execute();

    $necklaces = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit; // Exit the script if a database error occurs
}

$variables = [
    'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
    'necklaces' => $necklaces // Include necklaces data in the variables array
];

echo $twig->render('necklace.twig', $variables);
?>
