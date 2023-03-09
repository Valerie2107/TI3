<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <title>Accueil</title>
</head>
<body>
    


    <?php include "../views/include/header.inc.php"; ?>
    <main>
        ceci est la page accueil.php
    </main>
    
    <?php
        foreach ($dataLink as $contenu)
    ?>

    <img src="<?=$contenu['image']?>" alt="">

    <p><?=$contenu['description']?> </p>


    <?php include "../views/include/footer.inc.php"; ?>

      
</body>
</html>