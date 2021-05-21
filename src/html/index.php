<?php
/*
 *  ___    ____                  _               
 * |_ _|  / ___|  ___ _ ____   _(_) ___ ___  ___ 
 *  | |   \___ \ / _ \ '__\ \ / / |/ __/ _ \/ __|
 *  | |    ___) |  __/ |   \ V /| | (_|  __/\__ \
 * |___|  |____/ \___|_|    \_/ |_|\___\___||___/
 *             ...when IT matters!				
 *                                                 
 * https://iservicesinc.com https://iservicesinc.net
 * Copyright 2021 I Services, Inc. All rights reserved.
*/
// Define base directory for project root
define('BASE_DIR', dirname(__FILE__));

// Default site meta
$title = "I Services PHP Framework";
$description = "A simple PHP framework with routing and Sass compiler using NPM and Docker for local development server.";
$keywords = "iservices, php, framework, routing, sass, npm, docker";
$author = "@iservicesinc";


$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
switch ($request_uri[0]) {
    // Home page
    case '/':
        $page = './pages/home.php';
        $title = "I Services, Inc.";
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        $page = './pages/404.php';
        break;
}

include('./components/header.php');
?>
<main class="uk-container uk-padding uk-margin">
<?php require $page; ?>
</main>
<?php
include('./components/footer.php');
?>