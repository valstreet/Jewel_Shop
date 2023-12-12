<?php


require_once 'C:\xampp\htdocs\Jewel_Shop\vendor\autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
 'cache' => __DIR__ . '/cache', 
]);
?> 
