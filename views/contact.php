<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <title>Admin</title>
</head>
<body>
    <header>
    <?php
        include "../views/include/nav.inc.php"
        ?>
    </header>
    <main>
        <form method="post" action="" name="form1">
            <!--champ de texte avec son label. Le for du label doit avoir la même valeur que l'id de l'élément du formulaire, ne pas faire un for "name" pour un id "mail" -->
            <label for="nom">Nom: </label><input type="text" name="nom" id="nom" placeholder="Entrez ici votre nom"> 
            <br>
            <label for="prenom">Prénom: </label><input type="text" name="prenom" id="prenom" placeholder="Entrez ici votre prénom">
            <br>
            <label for="mail">E-mail: </label><input type="email" name="mail" id="mail" placeholder="Entrez votre adresse e-mail">
            <br>
            <textarea name="" id="" cols="80" rows="10" placeholder="Raison de votre message"></textarea>
            <br>
            <input type="submit" value="Envoyer"> 
        </form>
    </main>
   
    <?php include "../views/include/footer.inc.php"; ?>
    
</body>
</html>