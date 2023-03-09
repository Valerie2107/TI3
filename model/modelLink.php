<?php


function dataLien($uneDb){

    /* requête SQL, recuperation donnée Table DB*/
    $dataLinksql="SELECT * FROM `liens`";

    try{

        /*Variable connexion DB + recuperation requête SQL*/
        $querydataLink=mysqli_query($uneDb, $dataLinksql);
    }catch(Exception $e){

        die($e -> getMessage());

    }

        /*recuperation requête en table + conversion tableau assiociatif*/
    return mysqli_fetch_all($querydataLink, MYSQLI_ASSOC);
}



