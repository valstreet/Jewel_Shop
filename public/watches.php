<?php
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; // Path to config file
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php'; // Path to Twig initialization file

try {
    // Prepare and execute the query to select watches
    $stmt = $conn->prepare("SELECT * FROM products WHERE category LIKE '%Watch%'");
    $stmt->execute();

    // Fetch all watches
    $watches = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Render the watches.twig template, passing the watches data
echo $twig->render('watches.twig', ['watches' => $watches]);
?>
