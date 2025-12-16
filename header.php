<<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="hamburger">&#9776;</div>
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <?php 
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo '<span class="site-title">'.get_bloginfo('name').'</span>';
            }
            ?>
        </a>
    </div>


    <nav class="main-navigation">
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url('/about'); ?>">About</a>
        <a href="<?php echo home_url('/contact'); ?>">Contact</a>
        <a href="<?php echo home_url('/products'); ?>">Products </a>

        <div class="dropdown">
            <a href="<?php echo home_url('/blog'); ?>" class="dropdown-toggle">
                Blog <span class="arrow">&#9662;</span> <!-- săgeata jos -->
            </a>
            <div class="dropdown-menu">
                <a href="<?php echo home_url('/category/reviews'); ?>">Reviews</a>
                <a href="<?php echo home_url('/category/howtouni'); ?>">HowToUni</a>
                <a href="<?php echo home_url('/category/favouriteproducts'); ?>">Favourite Products</a>
            </div>
        </div>
    </nav>
    <nav class="mobile-menu">
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url('/about'); ?>">About</a>
        <a href="<?php echo home_url('/products'); ?>">Products</a>
        <a href="<?php echo home_url('/blog'); ?>">Blog</a>
        <a href="<?php echo home_url('/contact'); ?>">Contact</a>
    </nav>
</header>
</body>