<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

// Define keywords and corresponding redirects
$keywordRedirects = [
    'contact' => '/public/contact.php',
    'about' => '/public/about.php',
    'shop' => '/public/shop.php',
    'login' => '/public/Loginpage.php',
    'signup' => '/public/Loginpage.php', // signup is part of the login page
    'rings' => '/public/rings.php',
    'necklaces' => '/public/necklace.php',
    'bracelets' => '/public/bracelets.php',
    'watches' => '/public/watches.php',
    'diamonds' => '/public/diamonds.php',
];

$searchInput = $_GET['q'] ?? '';

// Check if the search input matches any predefined keywords
if (array_key_exists(strtolower($searchInput), $keywordRedirects)) {
    header('Location: ' . $keywordRedirects[strtolower($searchInput)]);
    exit;
}

if (!empty($searchInput)) {
    $searchInput = filter_var($searchInput, FILTER_SANITIZE_STRING);
    $likeSearchInput = '%' . $searchInput . '%';

    try {
        $stmt = $conn->prepare("SELECT * FROM products WHERE LOWER(product_name) LIKE LOWER(:searchInput) OR LOWER(description) LIKE LOWER(:searchInput)");
        $stmt->bindParam(':searchInput', $likeSearchInput, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "An error occurred. Please try again later.";
        error_log("Search Error: " . $e->getMessage());
        exit;
    }
} else {
    $results = [];
}

echo $twig->render('search_results.twig', ['results' => $results]);
?>
