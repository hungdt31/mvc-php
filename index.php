<?php
session_start();
$_SESSION['username'] = 'JohnDoe';
require_once "bootstrap.php";
$app = new App();