<?php

if (isset($_GET['page'])) {
    if ($_GET ['page'] == 'cv') {
        require 'pages/cv.php';
    } else if ($_GET ['page'] == 'hobbie') {
        require 'pages/hobbie.php';
    } else if ($_GET ['page'] == 'contact') {
        require 'pages/contact.php';
    } else {
        require 'pages/404.php';
    }
} else {
    require 'pages/cv.php';
}
