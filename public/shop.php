<?php
session_start();

require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$regularSizeProducts = [
    [
        'title' => 'Rings',
        'description' => 'Bold and nice.',
        'image' => '/assets/shop-images/shop-products/manRing.png',
        'alt' => 'Man Ring',
        'link' => 'rings.php' 

    ],
    [
        'title' => 'Necklaces',
        'description' => 'Sophisticated elegance.',
        'image' => '/assets/shop-images/shop-products/womanNecklace.png',
        'alt' => 'Woman Necklace',
        'link' => 'necklace.php' 
    ]
];

$wideSizeProducts = [
    [
        'title' => 'Watches',
        'description' => 'Elegant and timeless.',
        'image' => '/assets/shop-images/shop-products/femaleWatch.png',
        'alt' => 'Female Watch',
        'link' => 'watches.php'
    ],
    [
        'title' => 'Bracelets',
        'description' => 'Stylish and modern.',
        'image' => '/assets/shop-images/shop-products/womanBracelet.png',
        'alt' => 'Woman Bracelet',
        'link' => 'bracelets.php' 
    ]
];

$diamondCollection = [
    [
        'title' => 'Round Diamond',
        'description' => 'Weight: 0.90Ct, Color: Fancy Purplish Red, Shape: Round, Clarity: I3, Intensity: Fancy, Fluorescence: Faint, Polish: Excellent, Symmetry: Fair, Stones: 1, Measurements: 6.04-6.02x3.83',
        'images' => ['/assets/shop-images/shop-products/roundDiamond.png', '/assets/shop-images/shop-products/roundDiamond2.png'],
        'link' => '/diamonds.php'
    ],
    [
        'title' => 'Emerald Cut Diamond',
        'description' => 'Weight: 1.32Ct, Color: Fancy Purplish Red, Argyle Color: 1PR, Shape: Radiant, Clarity: I1, Intensity: Fancy, Stones: 1, Measurements: 7.14x5.64x3.73',
        'images' => ['/assets/shop-images/shop-products/emeraldCutDiamond.png', '/assets/shop-images/shop-products/emeraldCutDiamond2.png'],
        'link' => '/diamonds.php'
    ],
    [
        'title' => 'Radiant Diamond',
        'description' => 'Weight: 0.43Ct, Color: Fancy Red, Shape: Radiant, Clarity: VS2, Intensity: Fancy, Fluorescence: Faint, Polish: Good, Symmetry: Good, Stones: 1, Measurements: 4.76x4.25x2.31',
        'images' => ['/assets/shop-images/shop-products/radiantDiamond.png', '/assets/shop-images/shop-products/radiantDiamond2.png'],
        'link' => '/diamonds.php'
    ],
    [
        'title' => 'Oval Diamond',
        'description' => 'Weight: 0.50Ct, Color: Fancy Red, Argyle Color: Argyle, Shape: Oval, Clarity: SI2, Intensity: Fancy, Fluorescence: Faint, Polish: Very Good, Symmetry: Good, Stones: 1, Measurements: 6.04x4.26x2.77',
        'images' => ['/assets/shop-images/shop-products/ovalDiamond.png', '/assets/shop-images/shop-products/ovalDiamond2.png'],
        'link' => '/diamonds.php'
    ]
];

 $variables = 
 ['loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'
];
echo $twig->render('shop.twig', [
    'regularSizeProducts' => $regularSizeProducts,
    'wideSizeProducts' => $wideSizeProducts,
    'diamondCollection' => $diamondCollection
] + $variables);

?>