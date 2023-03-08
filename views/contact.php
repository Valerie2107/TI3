<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <link rel="stylesheet" href="../css/form.css">
    <title>Contact</title>
</head>
<body>
    <header>
        <h1>Contact</h1>
        
        <?php include "../views/include/header.inc.php"; ?>

        
    </header>
    <main>
        <form method="post" action="../model/formContact.php" name="contact_form">
           <div class="contact">
                <label for="name">Nom*: </label>
                <input class="padding" type="text" name="name" id="name" placeholder="Indiquez ici votre nom" required>
            </div>
            <br>
            <div class="contact"><label for="first_name">Prénom: </label><input class="padding" type="text" name="first_name" id="first_name" placeholder="Indiquez ici votre prénom"></div>
            <br>
            <div class="contact"><label for="mail">E-mail*: </label><input class="padding" type="email" name="mail" id="mail" placeholder="Indiquez votre e-mail" required></div>
            <br>
            <div class="contact"><label for="text">Raison de votre message*: </label><textarea class="padding" name="txt" id="txt" cols="80" rows="10" placeholder="Message" required></textarea></div>
            <br>
            <div class="center_input">
            <input  class="align" type="submit" value="Envoyer"> 
                <div class="empty"></div>
                <p class="star align">*Ces champs sont nécessaires afin que, le cas échéant, je puisse vous répondre au mieux.</p>
            </div>
        </form>
    </main>
   
    <?php include "../views/include/footer.inc.php"; ?>
    
</body>
</html>