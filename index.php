<?php

# fonction filtre de nettoyage URL

$pagefiltre = filter_input (INPUT_GET, 'page' ,FILTER_SANITIZE_STRING);


# front controller

if (isset ($pagefiltre)) {
    if ($pagefiltre == 'cv') {
        require 'pages/cv.php';
    } else if ($pagefiltre == 'hobbie') {
        require 'pages/hobbie.php';
    } else if ($pagefiltre == 'contact') {
        require 'pages/contact.php';
    } else {
        require 'pages/404.php';
    }
} else {
    require 'pages/cv.php';
}