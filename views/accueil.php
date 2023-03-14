<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "include/avg_head.inc.php";  ?>
    <link rel="stylesheet" href="../css/accueil.css">
    <script src="../js/accordeon.js" defer ></script>
    <title>Accueil</title>
</head>
<body>
    


    <?php include "../views/include/header.inc.php"; ?>
    <main>
        <p class="accueil">
            <span id="myself">Valérie VH <br>
            Portfolio</span></p> 
             <div id="accordeon-container">
                <div class="accordeon-header">
                    Qui suis-je ?
                </div>
                    <div class="accordeon-content">Jeune web-dev toujours en cours de formation, je suis quelqu'un de positif et dynamique.</div>
                <div class="accordeon-header">
                    Pourquoi m'engager ?
                </div>
                    <div class="accordeon-content">Jamais à l'abri d'un jeu de mot facile, je suis avant tout quelqu'un de sérieux et d'investi dans son travail.</div>
                <div class="accordeon-header">
                    Quel est mon parcours ?
                </div>
                    <div class="accordeon-content">Si mon revirement vers le web-dev est récent bien que mûrement réfléchi, mon parcours professionnel commence assez tôt  et touche à tout ce qui est contact clients. <br>
                        J'ai donc beaucoup d'expériences professionnelles tant en contact direct que par call-center et comme gestionnaire de dossiers. J'ai détaillé un peu plus mes expériences dans la section curriculum, et je me ferai un plaisir de vous conter cela lors d'un entretien.</div>
                <div class="accordeon-header">
                    Comment me contacter ?
                </div>
                    <div class="accordeon-content">En suivant <a href="?views=contact">ce lien</a> ou en cliquant sur le bouton contact en bas de page.</div>
               </div>    
        </p>
    </main>
   


    <?php include "../views/include/footer.inc.php"; ?>

      
</body>
</html>