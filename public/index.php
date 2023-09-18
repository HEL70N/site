<?php
require __DIR__ . '/../vendor/autoload.php';

$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);
var_dump($url);