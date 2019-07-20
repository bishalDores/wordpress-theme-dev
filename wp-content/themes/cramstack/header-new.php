<!doctype html>
<html lang="en">

<?php wp_head(); ?>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140420149-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-140420149-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter Card data -->

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://www.cramstack.com">
    <meta name="twitter:title" content="Analytics Platform With Virtually No Learning Curve">
    <meta name="twitter:description" content="A natural language driven search interface to analyze and visualize data">
    <meta name="twitter:image" content="https://cramstack.com/assets/images/meta-image.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Analytics Platform With Virtually No Learning Curve" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content=" https://www.cramstack.com" />
    <meta property="og:image" content="https://cramstack.com/assets/images/meta-image.png" />
    <meta property="og:description" content="A natural language driven search interface to analyze and visualize data" />
    <meta property="og:site_name" content="Cramstack" />



    <title>Cramstack</title>
    <!-- Place favicon.ico in the root directory -->
    <!--    <link rel="icon" href="assets/images/favicon-2.png" type="image">-->
    <!-- Bootstrap CSS -->
    <!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->
    <!--carousel slider css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1:400,600,700,800|Nunito+Sans:200,300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1:400,700,800,900" rel="stylesheet">
    <!-- Default CSS -->
    <!--    <link rel="stylesheet" href="assets/css/default.css">-->
    <!-- Main style CSS -->
    <!--    <link rel="stylesheet" href="assets/css/style.css">-->
    <!-- Responsive CSS -->
    <!--    <link rel="stylesheet" href="assets/css/media.css">-->

</head>

<body>

    <div class="navbar-container pt-2 pb-2 fixed-top">
        <div class="container custom-container">
            <nav class="navbar navbar-expand-lg navbar-light" style="padding-left: 0; padding-right:0;">
                <a class="navbar-brand" href="<?php wp_redirect("template.php") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cramstack_logo_1.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav ml-auto text-uppercase',
                ))?>
                <!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                <!--                    <ul class="navbar-nav ml-auto text-uppercase">-->
                <!--                        <li class="nav-item active">-->
                <!--                            <a class="nav-link  white-color px-xl-5 px-lg-4" href="#product-container">Product <span-->
                <!--                                        class="sr-only">(current)</span></a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item active">-->
                <!--                            <a class="nav-link  white-color px-xl-5 px-lg-4" href="#service-container">Services <span-->
                <!--                                        class="sr-only">(current)</span></a>-->
                <!--                        </li>-->
                <!---->
                <!--                        <li class="nav-item">-->
                <!--                            <a class="nav-link  white-color pl-xl-5 pl-lg-4" href="#contact" style="padding-right: 0">Contact</a>-->
                <!--                        </li>-->
                <!--                        <li class="nav-item">-->
                <!--                            <a class="nav-link  white-color px-xl-5 px-lg-4" href="#">Resources</a>-->
                <!--                        </li>-->
                <!--<li class="nav-item">-->
                <!--<a class="text-uppercase nav-link white-color"-->
                <!--href="/enterprise-register/enterprise-register.html">Start Trial</a>-->
                <!--</li>-->
                <!--                    </ul>-->
                <!--                </div>-->
            </nav>
        </div>
    </div><!--navbar ends here-->