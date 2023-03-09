<?php

//paramètre sécurité
require_once "../config.php";

//connexion DB  --> faut-il once ou pas ?
require_once "../model/sqlConnect.php";

#dependencies
require_once "../model/modelLink.php";
require_once "../model/modelWorks.php";


$dataLink = dataLien($conn);
$dataWorks = dataTravaux($conn);


// mon controleur frontal
if(isset($_GET['views'])){

    switch($_GET['views']){
        case 'accueil':
            include "../views/accueil.php";
            break;
       case 'admin':     // le lien se trouve dans le footer
            include "../views/admin.php";
            break;
        case 'contact':
            include "../views/contact.php";
            break;
        case 'cv':
            include "../views/cv.php";
            break;
        case 'liens':
            include "../views/liens.php";
            break;
        case 'projets':
            include "../views/projets.php";
            break;
        case 'travaux':
                include "../views/travaux.php";
                break;
        case 'eam':
            include "../views/eam.php";
            break;
        case 'tutos':
            include "../views/tutos.php";
            break;
        default:
            include_once "../views/accueil.php";
    }
}else{
   include_once "../views/accueil.php";
}