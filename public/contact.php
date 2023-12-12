<?php
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$contactInfo = [
    'title' => 'Contact Us - Urban Ice',
    'address' => '123 Mystery road, Valletta, Malta',
    'email' => 'info@urbanice.com',
    'phone' => '+356 1234 5678'
];

echo $twig->render('contact.twig', [
    'contactInfo' => $contactInfo
]);
?>
