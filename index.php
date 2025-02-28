<?php
// Configuration variables
$page_title = "Favour Flavour Restro POS System";
$lang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'en';
$images = [
    'slideshow' => ['images/slideshow/slide1.jpg',  // Local paths instead of URLs
        'images/slideshow/slide2.jpg',
        'images/slideshow/slide3.jpg',
        'images/slideshow/slide4.jpg',
        'images/slideshow/slide5.jpg',
        'images/slideshow/slide6.jpg',
        'images/slideshow/slide7.jpg',
        'images/slideshow/slide8.jpg',
        'images/slideshow/slide9.jpg',
        'images/slideshow/slide10.jpg',
    ],
    'logos' => ['images/logos/ptn1.png',
    'images/logos/ptn2.png',
    'images/logos/ptn3.png',
    'images/logos/ptn4.png',
    'images/logos/ptn5.png',
    'images/logos/ptn6.png',
    'images/logos/ptn7.png',
    'images/logos/ptn8.png',
    ]
];
?>
<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', $lang) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $page_title ?></title>

    <!-- External Resources -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        @keyframes slide {
            0% { transform: translateX(100); }
            100% { transform: translateX(-100%); }
        }
        .slideshow {
            display: flex;
            width: 100%;
            animation: slide 20s linear infinite;
        }
        .title {
            font-size: 2.5rem;
            letter-spacing: -0.025em;
            line-height: 1;
        }
        @media (min-width: 640px) {
            .title { font-size: 5rem; }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-white">
    <div class="flex-center position-ref flex-grow">
        <div class="content text-center">
            <div class="title m-b-md mb-8">
                <h2 class="text-4xl font-bold text-gray-600 mb-4">Favour Flavour</h2>
                <div class="text-6xl font-light text-gray-600">
                    <i class="fas fa-utensils"></i> Restaurant POS
                   <h3  class="text-6xl font-light text-gray-300">pork place</h3>
                </div>
            </div>

            <!-- Login Links -->
            <div class="flex justify-center space-x-8 text-gray-500 mb-12">
                <a href="Restro/admin/" class="hover:underline px-4 py-2 border rounded-lg transition-colors duration-200 hover:bg-gray-100">
                    Admin Log In
                </a>
                <a href="Restro/cashier/" class="hover:underline px-4 py-2 border rounded-lg transition-colors duration-200 hover:bg-gray-100">
                    Cashier Log In
                </a>
                <a href="Restro/customer" class="hover:underline px-4 py-2 border rounded-lg transition-colors duration-200 hover:bg-gray-100">
                    Customer Log In
                </a>
            </div>

            <!-- Slideshow -->
            <div class="overflow-hidden w-full h-64 mb-8 mx-auto max-w-6xl">
                <div class="slideshow">
                    <?php foreach ($images['slideshow'] as $image): ?>
                        <img alt="Menu item" class="w-1/5 h-full object-cover" src="<?= $image ?>" loading="lazy">
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Collaborators -->
            <div class="text-gray-500 mb-12">
                <h2 class="text-xl mb-4">Collaborating Companies</h2>
                <div class="flex justify-center space-x-8 mb-4">
                    <?php foreach ($images['logos'] as $logo): ?>
                        <img alt="Partner logo" class="h-16" src="<?= $logo ?>" loading="lazy">
                    <?php endforeach; ?>
                </div>
                <p class="text-sm">Partnered with industry leaders in hospitality</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-gray-500 mt-auto py-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <p class="text-sm mb-1">Location: Nakuru-Nyahururu RD, Maili 10 Town</p>
            <p class= "text-sm mb-2">          : Tumsifu Plaza, Bahati, Nakuru</p>
            <p class="text-sm">Contact: (+254) 724-334441 | support@favourflavour.com</p>
        </div>
    </footer>
</body>
</html>