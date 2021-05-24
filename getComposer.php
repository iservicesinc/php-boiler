<?php
copy('https://getcomposer.org/installer', 'composer-setup.php');
if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') {
    echo 'Installer verified';
    exec('php composer-setup.php');
} else {
    echo 'Installer corrupt';
}

echo PHP_EOL;
?>