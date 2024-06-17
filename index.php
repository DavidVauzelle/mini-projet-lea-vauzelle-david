<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voici mon deuxième projet"> 
    <title>Quelque uns de mes jeux préférés</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
    <?php include 'font.php';?>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/index.php#accueil">ACCUEIL</a>
                <div class="liens-pages-jeux">
                    <a href="cyberpunk-2077.php">Cyberpunk 2077</a>
                    <a href="red-dead-redemption-2.php">Red Dead Redemption 2</a>
                    <a href="the-last-of-us-remastered.php">The Last of US Remastered</a>
                </div>
            <a href="contacts.php">Contacts</a>
        </nav>

        <?php
            include 'connexion.php';
        ?>

        <?php
            $sql = "SELECT `titre`, `description` FROM `accueil` WHERE id = 1";
            $resultat = mysqli_query($connexion, $sql);

            // fetch_all --> permet de stocker les données de la requête dans un tableau
            $resultat = $resultat->fetch_all();

            // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
            if (isset($resultat[0])) {
                $contenuAccueil1 = $resultat[0];
            }
        ?>

        <?php if (isset($contenuAccueil1)) : ?>
            <h1><?php echo $contenuAccueil1[0] ?></h1>
            <p>
                <?php echo $contenuAccueil1[1] ?>
            </p>   
        <?php endif; ?>
    </header>

    <main>
        <?php
            $sql = "SELECT `titre`, `url`, `alt` FROM `images_accueil` WHERE id = 1";
            $resultat = mysqli_query($connexion, $sql);

            // fetch_all --> permet de stocker les données de la requête dans un tableau
            $resultat = $resultat->fetch_all();

            // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
            if (isset($resultat[0])) {
                $imagesAccueil1 = $resultat[0];
            }

            $sql = "SELECT `titre`, `url`, `alt` FROM `images_accueil` WHERE id = 2";
            $resultat = mysqli_query($connexion, $sql);
            $resultat = $resultat->fetch_all();

            if (isset($resultat[0])) {
                $imagesAccueil2 = $resultat[0];
            }

            $sql = "SELECT `titre`, `url`, `alt` FROM `images_accueil` WHERE id = 3";
            $resultat = mysqli_query($connexion, $sql);
            $resultat = $resultat->fetch_all();

            if (isset($resultat[0])) {
                $imagesAccueil3 = $resultat[0];
            }
        ?>
    
        <?php if (isset($imagesAccueil1)) : ?>
            <section class="images-accueil">
                <article>
                    <a href="cyberpunk-2077.php">
                        <h2><?php echo $imagesAccueil1[0] ?></h2>   
                    </a>
                    <img src="<?php echo $imagesAccueil1[1] ?>" 
                    alt="<?php echo $imagesAccueil1[2] ?>">
                </article>
                <article>
                    <a href="red-dead-redemption-2.php">
                        <h2><?php echo $imagesAccueil2[0] ?></h2>    
                    </a>
                    <img src="<?php echo $imagesAccueil2[1] ?>" 
                    alt="<?php echo $imagesAccueil2[2] ?>">  
                </article>
                <article>
                    <a href="the-last-of-us-remastered.php">
                        <h2><?php echo $imagesAccueil3[0] ?></h2>    
                    </a>
                    <img src="<?php echo $imagesAccueil3[1] ?>" 
                    alt="<?php echo $imagesAccueil3[2] ?>">   
                </article>
            </section>
        <?php endif; ?>    
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?> 
</body>
</html>
