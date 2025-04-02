<?php

/**
 * le router est chargé d'écouter les
 *  requetes http provenant du client web 
 * puis d'y repondre avec le contenu approprié
 */

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        echo "page d'acceuil";
        break;
    case '/about':
        echo "page de presentation";
        break;
    case '/skills':
        echo "page de compétence";
        break;
    case '/projects':
        echo "page de projets";
        break;
    case '/contact':
        include './templates/contact.php';
        break;
    default:
        echo "page 404, introuvable";
        break;
}
