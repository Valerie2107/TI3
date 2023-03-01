
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <title>Administration</title>
</head>
<body>
    <header>
        <?php   include "../views/include/nav.inc.php" ?>
        
    </header>
    <main>
        <form method="post" action="../model/formAdmin.php" name="login"><br>
            <label for="name">Login*: </label><input type="texte" name="name" id="name" required><br>
            <label for="pwd">Mot de passe*: </label><input type="password" name="pwd" id="pwd" required><br>
            <input type="submit" value="Connexion">
        </form>
    </main>
    
    <?php  include "../views/include/footer.inc.php"; ?>
    
</body>
</html>