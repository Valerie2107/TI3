<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <?php
        include "../views/include/nav.inc.php"
        ?>
    </header>
    <main>
        <form action="" method="post" name="">
            <label for="nom">
                <input type="text">
            </label>
            <label for="prénom">
                <input type="text">
            </label>
            <label for="adresse e-mail">
                <input type="email">
            </label>
            <textarea name="" id="" cols="30" rows="10">
                
            </textarea>
        </form>
    </main>
   
    <?php 
        include "../views/include/footer.inc.php";
    ?>
    
</body>
</html>