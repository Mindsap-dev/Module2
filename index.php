<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];



if ($uri === '/module2/index.php'){
    require 'controllers/index.php';
} else if ($uri === '/module2/about.php') {
    require 'controllers/about.php';
}

