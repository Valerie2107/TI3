<?php

function DBLink($ladb){
    $sqlLink= "SELECT*FROM liens;";
    $queryLiens=mysqli_query($ladb, $sqlLink);
    return mysqli_fetch_all($queryLiens, MYSQLI_ASSOC);
}