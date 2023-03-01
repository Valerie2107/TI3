<?php

echo "pioupiou???";
echo "<br>";
echo $_POST["name"];
echo "<br>";
echo $_POST["pwd"];
echo "<br>";


if (!isset($_POST["name"]) || !isset($_POST["pwd"])){
    echo "cuicui";
    echo "<br>";

    die ("Merci de remplir les différents champs.");
}else{

    echo "coincoin";
}