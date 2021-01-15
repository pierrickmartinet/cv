<?php
// Création d'un fichier avec date

date_default_timezone_set('Europe/Paris'); // Configuration de l'horloge du site

// démarrage de la session sur toutes les pages

session_start();
if (!isset($_SESSION['dateFirstVisit'])) { // Si c'est la première visite donc si la variable globale $S_SESSION ['dateFirstVisit'] n'éxiste pas
    $_SESSION ['dateFirstVisit'] = date("Y-m-d-H-i-s");
}

// Compteur de pages vues (passe à chaque fois par l'index

$_SESSION ['countViewPage'] = $_SESSION ['countViewPage'] + 1;

// fonction filtre de nettoyage URL

$pagefiltre = filter_input (INPUT_GET, 'page' ,FILTER_SANITIZE_STRING);


// front controller

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