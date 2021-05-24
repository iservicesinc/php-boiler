<!doctype html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <?php include_once(BASE_DIR.'/icons/favicons.html'); ?>
    <link rel="stylesheet" href="/css/bundle.css">
</head>
<body id="main" class="no-js">
    <header uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar-container uk-box-shadow-small" uk-navbar="mode: click">
            <div class="uk-navbar-left" uk-scrollspy="cls:uk-animation-fade;delay:500;">
                <ul class="uk-navbar-nav">
                    <li><a href="/" class="uk-navbar-item"><img src="/images/logo.svg" alt="I Services Logo" width="280" /></a></li>
                </ul>
            </div>
            <a id="dark-light-mode" onClick="window.dmToggle()" class="uk-position-top-right" uk-scrollspy="cls:uk-animation-fade;delay:200;" aria-label="Dark mode"></a>
        </nav>
    </header>