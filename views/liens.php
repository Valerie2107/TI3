<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>

    <title>Administration</title></head>
<body>
    <header>
        <h1>Liens Utiles</h1>
        <?php include "../views/include/header.inc.php"; ?>
    </header>
    <main>
        J’ai évidemment suivit des tutos en plus des cours. Voici une liste non exhaustive des sites, blogs et autres chaînes YouTube que j’ai consultés afin de m’améliorer.
        <div class="empty"></div>
        <?php foreach ($liensDB as $item) : ?>
            <h3>
                <?php $item['titre'] ?>
            </h3>
            <p>
                <?php $item['description'] ?>
            </p>
            <a href="<?php $item['url'] ?>" >lien</a>

        <?php
        endforeach;
        ?>
    </main>
    
    <?php 
        include "../views/include/footer.inc.php";
    ?>
    
</body>
</html>