<?php
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category = 'Bracelet'");
    $stmt->execute();

    $bracelets = $stmt->fetchAll(PDO::FETCH_ASSOC); //  variable name
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo $twig->render('bracelets.twig', ['bracelets' => $bracelets]); // array key
?>