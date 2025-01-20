<?php
if (!defined('_DIR_ROOT')) {
    define('_DIR_ROOT', dirname(__FILE__));
}

// handle http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}

$lastPart = basename(_DIR_ROOT);
$web_root = $web_root.'/'.$lastPart;

if (!defined('_WEB_ROOT')) {
    define('_WEB_ROOT', $web_root);
}

require_once _DIR_ROOT . '/configs/routes.php';
require_once _DIR_ROOT . '/core/Route.php';
require_once _DIR_ROOT . '/core/Controller.php';
require_once _DIR_ROOT . '/app/App.php';
