
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <link rel="stylesheet" href="../public/css/form.css">
    <title>Administration</title>
</head>
<body>
    <header>
        <h1>Admin</h1>
    
        <?php include "../views/include/header.inc.php"; ?>


    </header>
    <main>
        <form method="post" action="../model/formAdmin.php" name="login"><br>
            <div class="contact">
                <label for="name">Login*: </label><input class="padding" type="texte" name="name" id="name" required>
            </div>
            <br>
            <div class="contact">
                <label for="pwd">Mot de passe*: </label><input class="padding" type="password" name="pwd" id="pwd" required>
            </div>
            <br>
            <div class="center_input">
                <input class="align" type="submit" value="Connexion">
            </div>
        </form>
    </main>
    
    <?php  include "../views/include/footer.inc.php"; ?>
    
</body>
</html>