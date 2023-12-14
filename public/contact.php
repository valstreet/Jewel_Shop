<?php
session_start();

require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$contactInfo = [
    'title' => 'Contact Us - Urban Ice',
    'address' => '123 Mystery road, Valletta, Malta',
    'email' => 'info@urbanice.com',
    'phone' => '+356 1234 5678'
];

$variables = [
    'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
];

// Merge the $variables array with the $contactInfo array
$allVariables = array_merge($variables, ['contactInfo' => $contactInfo]);

echo $twig->render('contact.twig', $allVariables);
?>
