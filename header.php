<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/searchbar.css" ?>">
    
    <!--Theme CSS -->
    <?php
    wp_head();
    ?>
</head>

<body>
    <!-- This section is the navbar :)-->
    
    <nav class="navbar navbar-expand-lg navbar-light background-nav mb-3">
        <div class="container-fluid nav-content">
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/logo.svg"?>"
                    alt="Brothers In Gaming" width="270" height="120"
                    class="d-inline-block align-text-top img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-list" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  color-me" aria-current="page" href="/blogs/" id="gaming">Gaming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-me" href="/tag/guide/" id="guides">Guides</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-me" href="/category/product/" id="gear">Gear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-me" href="/category/review/" id="reviews">Reviews</a>
                    </li>
                    
                </ul>
                <div class="navbar-nav ms-auto mb-2">
                    <form class="d-flex">
                        <?php get_search_form() ?>
                    </form>
                </div>

            </div>

        </div>
    </nav>