<?php

session_start();
// Include the init_twig.php file to initialize Twig
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';



$variables = [

'loggedIn' => isset($_SESSION['user_id']),
 'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
'carouseltext1' => 'Discover the exclusive touch of jewelry that echoes your inner strength. Our 3D printed pieces are more than mere accessories; they are the embodiment of precision, power, and style.',
'carouseltext2' => 'Transcend the ordinary with custom-crafted designs that celebrate your unique spirit. Every line, contour, and finish in our collection celebrates the wearer. Make a statement, showcase elegance, and ensure your aura is felt.',
'carouseltext3' => 'Embrace the innovation of 3D printing where every piece is a work of art, mirroring your most ambitious dreams. This is the art of modern jewelry for those who command with assurance and chart their own path.',
'diamondVideo' => '/assets/images/diamond.mp4',
'print3DVideo' => '/assets/images/3dPrint.mp4',
'braceletVideo' => '/assets/images/bracelet.mp4',
'shopImage' => '/assets/images/shop-ice.png',
'customJewelryImage' => '/assets/images/pendant.png',
'printingImage' => '/assets/images/custom-print.png',
'carouselImage1' => '/assets/images/ring.png',
'carouselImage2' => '/assets/images/new-pendant.png',
'carouselImage3' => '/assets/images/model.png',
'goldRingImage' => '/assets/images/gold-ring.png',
'silverNecklaceImage' => '/assets/images/silver-necklace.png',
'whiteGoldBraceletImage' => '/assets/images/white-gold-bracelet.png',
'customIcon' => '/assets/images/icon-custom.png',
'craftsmanshipIcon' => '/assets/images/icon-craftsmanship.png',
'sourcingIcon' => '/assets/images/icon-sourcing.png',
'collectionsIcon' => '/assets/images/icon-collections.png',
'clientCareIcon' => '/assets/images/icon-clientcare.png',
'jumbotronTitle' => 'New Generation Jewelry Printers',
'jumbotronSubtitle' => 'Explore the \'most personalised jewelry experience in the world\'',
'cardTitle1' => 'Shop Now',
'cardDesc1' => 'Explore our latest collections and find the perfect jewelry for you.',
'cardTitle2' => 'Get Custom Jewelry',
'cardDesc2' => 'Design your own unique piece with our customization options.',
'cardTitle3' => 'Discover Us',
'cardDesc3' => 'Experience the future of jewelry design with 3D printing through Urban Ice.',
'sectionTitle' => 'Some of our finest 3D Printed items',
'goldRingTitle' => 'Aurum Vertex',
'goldRingDesc' => 'Composed of 18-karat gold. This unique ring offers a rich hue and lasting durability.',
'silverNecklaceTitle' => 'Celestial Weave',
'silverNecklaceDesc' => 'Coated with 925 sterling silver, this necklace was made with the highest-quality craftsmanship',
'whiteGoldBraceletTitle' => 'Alabaster Orbit',
'whiteGoldBraceletDesc' => 'Made with 14-karat white gold bracelet printed to an elegant and sophisticated design',
'learnMoreLink' => '#printingSection',
'shopNowLink' => '#shopNow',
'customJewelryLink' => '#customJewelry',
'discoverUsLink' => '#discoverUs',
'customDesignLink' => '/custom-3d-pieces.html',
'testimonial1' => 'The art of jewelry has found its new renaissance with Urban Ice\'s 3D printing mastery.',
'testimonial1Author' => 'Leonardo da Vinci',
'testimonial2' => 'Innovation in form and function, Urban Ice\'s creations are the modern day marvels.',
'testimonial2Author' => 'Nikola Tesla',
'testimonial3'=> 'Such intricate designs would have been the envy of every pharaoh.',
'testimonial3Author'=> 'Cleopatra',
'testimonial4'=>'A blend of technology and artistry that even I could not have imagined.',
'testimonial4Author'=>'Albert Einstein',
'testimonial5'=> 'Urban Ice\'s jewels are the epitome of contemporary luxury.',
'testimonial5Author'=>'Coco Chanel',
'testimonial6'=>'The future of adornment is here, and it is extraordinarily brilliant.',
'testimonial6Author'=>'Marie Curie',
];

echo $twig->render('index.twig', $variables);

?>