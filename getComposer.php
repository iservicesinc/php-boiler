#!/usr/bin/env php
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
$checksum = file_get_contents('https://composer.github.io/installer.sig');
copy('https://getcomposer.org/installer', 'composer-setup.php');
if (hash_file('sha384', 'composer-setup.php') === $checksum) {
    echo 'Installer verified';
    $opt = isset($argv[1]) ? $argv[1] : null;
    if ($opt == null) exec('php composer-setup.php --filename=composer');
    if ($opt == '--global') exec('php composer-setup.php --filename=composer --install-dir=/usr/bin');
    exec('rm composer-setup.php');
} else {
    echo 'Installer corrupt';
}
echo PHP_EOL;
?>
