<?php
session_start();
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';

$variables = 
[
    'pageTitle' => 'About Us - Urban Ice',
    'aboutUsSection' => [
        'title' => 'About Us',
        'paragraphs' => [
            'Based in Malta, our company has been a pivotal force in the jewelry industry for decades. Our globally sourced precious metals and jewels not only embody beauty but also the enigmatic depths of their origins.',
            'Our journey began under the veil of night, with a vision to not just dominate the Maltese jewel market, but to extend our reach across the globe and beyond, into the uncharted realms of the solar system. We\'ve thrived in shadows, weaving a tapestry of influence and power, driven by the relentless pursuit of becoming a jewel monopoly.',
            'The vibrant red hues of our \'blood diamonds\', mined in the heart of the Congo, symbolize our relentless drive and the silent battles fought to claim supremacy in this glittering world. Each gem we offer is not just a piece of jewelry; it\'s a testament to our unyielding ambition.',
            'Despite our dark and mysterious origins, we are committed to ethical sourcing and supporting sustainable and fair practices. We understand the weight of our legacy and strive to maintain a balance between ambition and responsibility.'
        ]
    ],
    'printingInnovationSection' => [
        'title' => 'Our 3D Printing Innovation',
        'paragraphs' => [
            'At the forefront of technological advancement in jewelry design, we specialize in 3D printed jewelry pieces. Our state-of-the-art 3D printing process allows for intricate and precise designs, turning your imagination into reality. From bespoke, personalized items to avant-garde fashion statements, our 3D printing technology paves the way for limitless creativity.',
            'Using eco-friendly materials and sustainable practices, we are not only creating art but also preserving our planet. Every 3D printed piece is a blend of innovation, craftsmanship, and environmental consciousness.'
        ]
    ],

    'faqs' => 
    [
        [
            'question' => 'What is the origin of your precious metals and jewels?',
            'answer' => 'Our metals and jewels are sourced globally, with a significant portion coming from the mines of Congo. Each piece has a unique story of origin, reflecting our commitment to ethical sourcing and sustainability.'],
            ['question' =>'How do you ensure ethical sourcing of your materials?',
            'answer' => 'We rigorously vet all our suppliers and prioritize those who adhere to responsible mining practices. Our commitment to ethical sourcing involves regular site visits and ensuring fair labor practices are upheld.'],
            ['question' =>'Can you provide details about the \'blood diamonds\' in your collection?',
            'answer' => 'Our \'blood diamonds\' are a stark reminder of the harsh realities of diamond mining. We aim to raise awareness and contribute a portion of these sales to humanitarian efforts in the mining regions.'],
            ['question' => 'How do you maintain the quality of your jewelry products?',
            'answer' => 'Quality is paramount. We employ skilled artisans and use state-of-the-art technology to ensure each piece meets our high standards.'],
            ['question' => 'What makes your 3D printed jewelry unique?',
            'answer' => 'Our 3D printed jewelry stands out due to its customizability and precision. Each piece can be tailored to the specific desires of our clients, offering a level of personalization that traditional methods cannot match.'],

        ['question' => 'What are your shipping policies?',
            'answer' => 'We offer worldwide shipping with several options to meet your needs. Shipping times and costs vary depending on your location and selected shipping method. All orders are processed within 1-2 business days, and you will receive a tracking number once your order is dispatched.'
        ],
        
         ['question' => 'How do I return or exchange an item?',
            'answer' => 'We want you to be completely satisfied with your purchase. If you need to return or exchange an item, please do so within 30 days of receipt. Items must be in their original condition. Please contact our customer service team for a return authorization and detailed instructions.'
        ],
        
        ['question' => 'How do you ensure secure payment transactions?',
            'answer' => 'Your security is our top priority. We use industry-standard encryption and secure payment gateways to protect your personal and payment information. We accept various payment methods, including credit cards and digital wallets, ensuring a safe and hassle-free checkout process.'
        ],

            ['question' => 'How does your company contribute to environmental sustainability?',
            'answer' => 'We are deeply committed to sustainability. Our processes, including 3D printing, are designed to minimize environmental impact. We use recycled materials wherever possible and continuously strive to reduce our carbon footprint.'
        ],
        
    ],
    'contactInfo' =>
     [
        'address' => '123 Mystery road, Valletta, Malta',
        'phone' => '+356 1234 5678',
        'email' => 'info@urbanice.com'
    ],

 'loggedIn' => isset($_SESSION['user_id']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest',
];



echo $twig->render('about.twig', $variables);
?>
