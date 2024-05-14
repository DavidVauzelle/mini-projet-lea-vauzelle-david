<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voici mon deuxième projet"> 
    <title>Quelque uns de mes jeux préférés</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&family=Caveat:wght@400..700&family=Ceviche+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>

        <!-- Pour récupérer la nav bar -->
        <!-- <?php include 'nav.html';?> -->

        <nav class="navbar">
            <a href="./index.php#accueil">ACCUEIL</a>
                <div class="liens-pages-jeux">
                    <a href="./pages-jeux/cyberpunk-2077.php">Cyberpunk 2077</a>
                    <a href="./pages-jeux/red-dead-redemption-2.php">Red Dead Redemption 2</a>
                    <a href="./pages-jeux/the-last-of-us-remastered.php">The Last of US Remastered</a>
                </div>
            <a href="./pages-jeux/contacts.php">Contacts</a>
        </nav>

        <h1>Sélection de mes jeux préférés</h1>
        <p>
            Vous êtes passionnés de jeux vidéo ? Alors vous êtes au bon endroit.
            Voici une sélection de mes jeux préférés.
            La liste est assez restreinte pour le moment, mais celle-ci ne demande qu'à s'agrandir !
            N'hésitez pas à parcourir la liste ci-dessous et à cliquer sur l'un des liens pour accéder à la fiche du jeu et retrouver plus d'informations concernant ce dernier.
        </p>
    </header>

    <main>
        <section class="images-accueil">
            <article>
                <a href="./pages-jeux/cyberpunk-2077.php">
                    <h2>Cyberpunk 2077</h2>    
                </a>
                <img src="./images/cyberpunk-2077.jpg" alt="Image d'illustration de Cyberpunk 2077">
            </article>
            <article>
                <a href="./pages-jeux/red-dead-redemption-2.php">
                    <h2>Red Dead Redemption 2</h2>    
                </a>
                <img src="./images/red-dead-redemption-2.jpg" alt="Image d'illustration de Red Dead Redemption 2">  
            </article>
            <article>
                <a href="./pages-jeux/the-last-of-us-remastered.php">
                    <h2>The Last of US Ramastered</h2>    
                </a>
                <img src="./images/the-last-of-us-remastered.jpg" alt="Image d'illustration de The Last of US Remastered">   
            </article>
        </section>    
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.html';?>
    
</body>
</html>
