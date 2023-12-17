<?php
// Start session and include necessary files
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $description = $_POST['description'] ?? '';

    // Validation (basic example, expand as needed)
    if (!empty($name) && !empty($email) && !empty($description)) {
        // Process the request, e.g., save to database or send email

        // Redirect or inform the user
        echo "<script>alert('Thank you for your request. We will contact you soon.'); window.location.href='/public/index.php';</script>";
    } else {
        echo "<script>alert('Please fill all required fields.'); window.location.href='/public/custom3D.php';</script>";
    }
}

// Render the Twig template
echo $twig->render('custom3D.twig');
?>
