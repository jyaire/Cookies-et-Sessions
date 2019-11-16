<?php
require 'inc/head.php';
require 'inc/data/products.php';
session_destroy();
foreach($_COOKIE as $cookie) {
    setcookie($cookie, NULL, -1);
}
header('Location: login.php');