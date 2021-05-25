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
if (file_exists('../vendor/autoload.php')) 
    require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('visits');
$log->pushHandler(new StreamHandler('visits.log', Logger::INFO));
$visit = array($_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
$log->info('new visit from', $visit);
$Parsedown = new Parsedown();


// Define base directory for project root
define('BASE_DIR', dirname(__FILE__));

// Default site meta
$title = "I Services PHP Boilerplate";
$description = "A simple PHP boilerplate with routing and Sass compiler using NPM and Docker for local development server.";
$keywords = "iservices, php, boilerplate, routing, sass, npm, docker";
$author = "@iservicesinc";

require_once(BASE_DIR.'/router.php');

include(BASE_DIR.'/components/header.php');
?>
<main class="uk-container uk-padding uk-margin">
<?php require $page; ?>
</main>
<?php
include(BASE_DIR.'/components/footer.html');
?>