<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <link rel="stylesheet" href="../public/css/form.css">
    <title>Admin</title>
</head>
<body>
    <header>
        <h1>Contact</h1>
        
            <?php include "../views/include/nav.inc.php" ?>

        
    </header>
    <main>
        <form method="post" action="../model/formContact.php" name="contact_form">
            <label for="name">Nom*: </label><input type="text" name="name" id="name" placeholder="Indiquez ici votre nom" required> 
            <br>
            <label for="first_name">Prénom: </label><input type="text" name="first_name" id="first_name" placeholder="Indiquez ici votre prénom">
            <br>
            <label for="mail">E-mail*: </label><input type="email" name="mail" id="mail" placeholder="Indiquez votre e-mail" required>
            <br>
            <label for="text">Raison de votre message*: </label><br>
            <textarea name="txt" id="txt" cols="80" rows="10" placeholder="Message" required></textarea>
            <br>
            <input type="submit" value="Envoyer"> 
            <div class="empty"></div>
            <p class="star">*Ces champs sont nécessaires afin que je puisse vous répondre au mieux le cas échéant.</p>
        </form>
    </main>
   
    <?php include "../views/include/footer.inc.php"; ?>
    
</body>
</html>