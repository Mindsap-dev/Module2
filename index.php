<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];



if ($uri === '/index.php'){
    require 'controllers/index.php';
} else if ($uri === '/about.php') {
    require 'controllers/about.php';
}  else if ($uri === '/contact.php') {
    require 'controllers/contact.php';
}  else if ($uri === '/ourmission.php') {
    require 'controllers/ourmission.php';
}

