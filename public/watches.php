<?php
session_start(); // Start the session at the beginning

require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; // Path to config file
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php'; // Path to Twig initialization file

try {
    // Prepare and execute the query to select watches
    $stmt = $conn->prepare("SELECT * FROM products WHERE category LIKE '%Watch%'");
    $stmt->execute();

    // Fetch all watches
    $watches = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit; // Exit the script if a database error occurs
}

$variables = [
    'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
    'watches' => $watches // Include watches data in the variables array
];

// Render the watches.twig template, passing the combined variables array
echo $twig->render('watches.twig', $variables);
?>
