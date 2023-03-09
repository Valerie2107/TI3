<?php


function dataTravaux($uneDB){

/* requête SQL, recuperation donnée Table DB*/
$dataWorksSQL="SELECT * FROM `liens`";

try{

    /*Variable connexion DB + recuperation requête SQL*/
    $querydataWorks=mysqli_query($uneDB, $dataWorksSQL);
}catch(Exception $e){

    die($e -> getMessage());

}

    /*recuperation requête en table + conversion tableau assiociatif*/
return mysqli_fetch_all($querydataWorks, MYSQLI_ASSOC);
}
