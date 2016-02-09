<!DOCTYPE HTML>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/min/style.css">
</head>
<body>
<header class="siteHeader">
    <div class="container">

        <div id="logo">
            <a href="<?php bloginfo('wpurl'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="">
            </a>
        </div>
        
        <nav class="mainNav" role="navigation">
<label for="menuToggle"><i class="icon-menu"></i></label>
        <input type="checkbox" name="menuToggle" id="menuToggle">
            <div class="nav">
            <ul>
                <li><a href="#">Item 1</a>

                <ul>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                    <li><a href="#">Item 5</a></li>
                </ul>

                </li>
                <li><a href="#">Item 2</a>
                <ul>

                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>
                </ul>
                </li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>


            </ul>
            </div>
        </nav>

    </div>


</header>