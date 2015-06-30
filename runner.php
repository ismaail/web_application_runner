#!/usr/bin/php

<?php

/**
 * Run a local web server on the background
 *
 * @param integer $port the port number
 *
 * @return none
 */
function run($port) {
    shell_exec('python -m SimpleHTTPServer ' . $port . ' >/dev/null 2>&1 &');
    shell_exec('google-chrome http://localhost:' . $port);
}

/**
 * Create a new port, run, save port for later use, and exit
 *
 * @param string $config_file_name where to save the port
 *
 * @return none
 */
function initiate($config_file_name) {
    $port = mt_rand(2000, 9000);

    run($port);

    file_put_contents($config_file_name, $port);
    die;
}

chdir(__DIR__);
$config_file_name = '.port';

$port = false;
if (file_exists($config_file_name)) {
    $port = (int) file_get_contents($config_file_name);
}

// there is no saved port, create a new one
if (! $port) {
    initiate($config_file_name);
}

// check if the saved port can be accessed, in case of restart
$connection = @fsockopen('127.0.0.1', $port);

// the port can be accessed, use it
if (is_resource($connection)) {
    run($port);
    die;
}

// nA, just create a new port and launch the web browser
initiate($config_file_name);
