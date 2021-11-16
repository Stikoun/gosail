<?php $theme_url =  get_template_directory_uri(); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="<?php echo bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo bloginfo('description') ?>">
    <title><?php echo bloginfo('name') ?> - <?php echo bloginfo('description') ?></title>

    <script src="<?php echo $theme_url;?>/assets/js/modernizr-custom.js"></script>
    <link rel="stylesheet" href="<?php echo $theme_url;?>/assets/css/app.min.css">
    <script defer src="<?php echo $theme_url;?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script defer src="<?php echo $theme_url;?>/node_modules/slick-carousel/slick/slick.min.js"></script>
    <script defer src="<?php echo $theme_url;?>/node_modules/accordionjs/accordion.min.js"></script>
    <script defer src="<?php echo $theme_url;?>/assets/js/main.js"></script>
</head>
<body>
    <header>
        <div class="navigation">
            <div class="logo-wrapper">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo $theme_url;?>/assets/images/icons/logo-gosail.svg" alt="Logo Gosail.cz">
                </a>
            </div>
            <div class="nav-mobile-btn open"></div>
            <div class="nav-wrapper">
                <nav>
                    <a href="#">Vyhledat loď</a>
                    <a href="#">Loď s kapitánem</a>
                    <a href="#">O dovolené</a>
                    <a href="#">Pojištění</a>
                </nav>
            </div>
        </div>
    </header>
    <div id="overlay">
        <div class="nav-mobile-btn close"></div>
        <nav>
            <a href="#">Vyhledat loď</a>
            <a href="#">Loď s kapitánem</a>
            <a href="#">O dovolené</a>
            <a href="#">Pojištění</a>
        </nav>
    </div>