<?php

echo "pioupiou???";
echo "<br>";
echo $_POST["name"];
echo "<br>";
echo $_POST["mail"];
echo "<br>";
echo $_POST["txt"];
echo "<br>";



if (!isset($_POST["name"]) || !isset($_POST["mail"]) || !isset($_POST["txt"])){
    echo "cuicui";
    echo "<br>";

    die ("Merci de remplir les différents champs.");
}else{

    echo "coincoin";
}