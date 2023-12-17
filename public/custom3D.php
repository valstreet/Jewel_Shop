<?php
// Start session and include necessary files
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';



// Render the Twig template
echo $twig->render('custom3D.twig');
?>
