<!-- Made by https://michaelt.uk/ -->
<?php
include('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $website_title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= $website_icon ?>">
    <meta name="title" content="<?= $website_title ?>">
    <meta name="description" content="<?= $website_description ?>">
    <meta name="theme-color" coontent="<?= $website_color ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $website_url ?>">
    <meta property="og:title" content="<?= $website_title ?>">
    <meta property="og:description" content="<?= $website_description ?>">
    <meta property="og:image" content="<?= $website_banner ?>">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $website_url ?>">
    <meta property="twitter:title" content="<?= $website_title ?>">
    <meta property="twitter:description" content="<?= $website_description ?>">
    <meta property="twitter:image" content="<?= $website_banner ?>">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/particles.min.js"></script>
    <script src="https://cdn.sellix.io/static/js/embed.js"></script>
    <link href="https://cdn.sellix.io/static/css/embed.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<body>
    <header style="margin-bottom: 50px;">
        <div id="dots"></div>
        <nav class="navbar navbar-dark navbar-expand-lg" data-aos="fade-up">
            <div class="container d-flex">
                <a class="navbar-brand" href="#">

                    <!-- Navigation Logoo -->
                    <img alt="Company logo" src="<?= $logo ?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto text-center">

                        <!-- Navigation Links -->
                        <?php 
                        foreach($navlinks as $link => $location):
                        ?>
                        <li class="nav-links">
                            <a href="<?= $location ?>"><?= $link ?></a>
                        </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center header-content" data-aos="fade-up">

                    <h1>Terms Of Service</h1>
                    <p class="mb-5 term-desc">Use of this website signifies agreement to our Terms of Service and all relevant laws. Disagreement with these terms prohibits site access. Content is subject to copyright and trademark protections.</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php foreach($terms as $term): ?>
                        <p data-aos="fade-up" class="term"><?= $term ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>
<!-- Made by https://michaelt.uk/ -->