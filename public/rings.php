<?php
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; // Ensure this path is correct
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category = 'Rings'");
    $stmt->execute();

    $rings = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo $twig->render('rings.twig', ['rings' => $rings]);
?>
