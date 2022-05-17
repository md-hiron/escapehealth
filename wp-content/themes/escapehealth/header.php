<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php escapehealth_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="site-wrapper">
        <header class="site-header">
            <div class="container">
                <div class="header-wrap d-flex justify-content-between align-items-center">
                    <div class="site-logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="mid-nav">
                        <ul class="main-menu d-none d-lg-flex">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">How it works </a></li>
                        </ul>
                    </div>
                    <div class="right-nav">
                        <ul class="main-menu d-none d-lg-flex">
                            <li class="nav-btn"><a href="#" class="upload-popup">Upload</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                    <div class="navigation d-lg-none">
                        <ul class="main-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Login</a></li>
                            <li class="nav-btn"><a href="#" class="upload-popup">Upload</a></li>
                        </ul>
                    </div>
                    <div class="menu-toggle d-lg-none">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>
        </header>