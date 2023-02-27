<?php
//connexion à la DB 
// les Paramètres de connexion sont dans config



try {
    // Création de la connexion
    $conn = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT, DB_CHARSET);
    mysqli_set_charset($conn,DB_CHARSET);
    
    // Vérification de la connexion
    if (!$conn) {
        throw new Exception("La connexion à la base de données a échoué.");
    }
    //var_dump($conn);
  //  echo "Connected successfully";
} catch (Exception $e) {
    // Gestion des erreurs
    die("Erreur : " . $e->getMessage());
}


?>
