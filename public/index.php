<?php

//paramètre sécurité
require_once "../config.php";

//connexion DB  --> faut-il once ou pas ?
require_once "../model/sqlConnect.php";



// mon controleur frontal
if(isset($_GET['vue'])){

    switch($_GET['vue']){
        case 'accueil':
            include "views/accueil.php";
            break;
        case 'admin':
            include "views/admin.php";
            break;
        case 'contact':
            include "views/contact.php";
            break;
        case 'cv':
            include "views/cv.php";
            break;
        case 'liens':
            include "views/liens.php";
            break;
        case 'projets':
            include "views/projets.php";
            break;
        case 'travaux':
                include "views/travaux.php";
                break;
        case 'tutos':
            include "views/tutos.php";
            break;
        default:
            include_once "views/accueil.php";
    }
}else{
        include_once "views/accueil.php";
    }

?>