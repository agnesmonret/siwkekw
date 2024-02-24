<?php

// MAKE SURE YOU READ "README.MD" BEFORE EDITING

// Meta Information
$website_url = 'https://michaelt.uk/';
$website_title = 'Michael T.';
$website_description = 'Michael T.';
$website_icon = 'https://michaelt.uk/assets/img/branding/logo.webp';
$website_banner = 'https://michaelt.uk/assets/img/branding/logo.webp';
$website_color = '#FFFFFF';


// Navbar
$logo = './assets/img/logo.png';
$navlinks = [
    'Home' => 'index.php',
    'Vouches' => 'vouches.php',
    'Terms' => 'terms.php',
];

// Header
$alert = 'The Ultimate Store On The Web';
$h1 = 'The One Stop & Shop - <span>Ultimate Store</span>';
$description = 'Discover one of the top-rated stores in the market, known for its affordable prices, swift customer support, and rapid delivery times. Start shopping today!';

// Features
$enable_features = true;
$features_title = 'Why choose us?';
$features_description = 'Why are we the number one shop on the entire web?';

$features = [
    [
        'icon' => './assets/img/icons/chart.png',
        'title' => 'Highest Quality',
        'description' => 'We are dedicated to providing the highest quality products for our customers. We have years of experience doing this.        '
    ],
    [
        'icon' => './assets/img/icons/chart.png',
        'title' => 'Highest Quality',
        'description' => 'We are dedicated to providing the highest quality products for our customers. We have years of experience doing this.        '
    ],
    [
        'icon' => './assets/img/icons/chart.png',
        'title' => 'Highest Quality',
        'description' => 'We are dedicated to providing the highest quality products for our customers. We have years of experience doing this.        '
    ],
    [
        'icon' => './assets/img/icons/chart.png',
        'title' => 'Highest Quality',
        'description' => 'We are dedicated to providing the highest quality products for our customers. We have years of experience doing this.        '
    ],
    [
        'icon' => './assets/img/icons/chart.png',
        'title' => 'Highest Quality',
        'description' => 'We are dedicated to providing the highest quality products for our customers. We have years of experience doing this.        '
    ],
    [
        'icon' => './assets/img/icons/chart.png',
        'title' => 'Highest Quality',
        'description' => 'We are dedicated to providing the highest quality products for our customers. We have years of experience doing this.        '
    ],
];


// Products
$sellix_api_key = '70RBmZih4GUeyUFDZTmIixegE4pRm9xWbJgpo24Rgc47hmTeHAk6oO9kAoxql5Qy';
$sellix_store_link = '';

$displayUnlisted = true;

// YOUR SHOPS NAME ONLY
$merchant_name = 'michaelt';
$currency = '$';

// Vouches
$vouches = [
    [
        'picture' => './assets/img/picture.png',
        'name' => 'Sovsza',
        'review' => 'This is the best shop ever',
    ],
];

// Terms 
$terms = [
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
];








// IGNORE THIS PART
// IGNORE THIS PART
// IGNORE THIS PART
// IGNORE THIS PART
// IGNORE THIS PART
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://dev.sellix.io/v1/products");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $sellix_api_key",
    "X-Sellix-Merchant: $merchant_name", 
    'Content-Type: application/json'
]);
$response = curl_exec($ch);
curl_close($ch);
$products = json_decode($response, true);