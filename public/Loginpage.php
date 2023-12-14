<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$variables = [
    'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'
];

echo $twig->render('Loginpage.twig', $variables);
?>
