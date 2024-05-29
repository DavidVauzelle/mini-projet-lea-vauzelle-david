<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voici mon deuxième projet"> 
    <title>Fiche de : The Last of US Remastered.</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/pages-jeux.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
    <?php include 'font.php';?>
</head>

<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include 'nav.php';?>    
    </header>

    <main>
        <?php
            include 'connexion.php';
        ?>
        <section class="section-1-tlou">	
            <div class="description-background-tlou">
                <h2>Jusqu'où irez-vous pour survivre ?</h2>    
                <p>
                    The Last of Us, c’est l’histoire d’un voyage qui transcende deux individus que tout oppose pour les unir… à condition d’être prêt à prendre les risques que cela implique.
                    Vivez l’aventure de Joel, un quadragénaire endurci par les épreuves de la vie, et d’Ellie, une adolescente née après l’Apocalypse qui a causé la chute de l’humanité. 
                    Ensemble, ils vont devoir traverser le pays pour une cause qui les dépasse...
                </p>    
            </div>
            <div class="informations-background-tlou">
                <ul>
                    <li>Plateforme : PS4</li>
                    <li>Sortie : 30/07/2014</li>
                    <li>Editeur : Sony Interactive Entertainment Europe</li>
                    <li>Genres : Action, Aventure</li>
                    <li>Note : 4.81/5</li>    
                </ul>    
            </div>    
        </section>

        <?php
            $sql = "SELECT * FROM `contenu` WHERE id_jeux = 3";
            $resultat = mysqli_query($connexion, $sql);

            // fetch_all --> permet de stocker les données de la requête dans un tableau
            $resultat = $resultat->fetch_all();

            // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
            if (isset($resultat[0])) {
                $contenu1 = $resultat[0];
            }

            // Si résultat dans le tableau 1, on stock les données du tableau dans une variable
            if (isset($resultat[1])) {
                $contenu2 = $resultat[1];
            }
        ?>

        <section class="section-2-pages-jeux, section-2-tlou">
            <?php if (isset($contenu1)) : ?>
                <h3 class="titre-h3-tlou"><?php echo $contenu1[1] ?></h3>     
                <div class="container-pages-jeux">
                    <div class="contenu-jeux">
                        <p class="texte-section-2-pages-jeux, texte-section-2-tlou"><?php echo $contenu1[2] ?></p>
                    </div>
                    <div class="contenu-jeux">
                        <iframe class="contenu-jeux-videos" width="75%" height="315" src="<?php echo $contenu1[3] ?>" 
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                            picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>    
                </div>
            <?php endif; ?>
            <h3 class="titre-h3-tlou"><?php echo $contenu2[1] ?></h3>
            <div class="container-pages-jeux">
                <div class="contenu-jeux">
                    <iframe class="contenu-jeux-videos" width="75%" height="315" src="<?php echo $contenu2[3] ?>" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
                <div class="contenu-jeux">
                    <p class="texte-section-2-pages-jeux, texte-section-2-tlou"><?php echo $contenu2[2] ?></p>    
                </div>     
            </div>
            <?php
            ?>
        </section>

        <section class="galerie-tlou">
            <div class="galerie">
                <h2 class="titre-h2">Galerie</h2>
                <!-- Récupération des images depuis le bdd et affichages de celles-ci dans la galerie -->
                <?php

                    $sql = "SELECT * FROM `images` WHERE id_jeux = 3";
                    $resultat = mysqli_query($connexion, $sql);

                    if (mysqli_num_rows($resultat) > 0) {
                        echo '<div class="galerie-images">';
                        foreach($resultat as $images) { 
                            echo '<div>';
                            echo '<img src='. $images['url'] . ' alt="' . $images['alt'] . '"><br>';
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Aucune image trouvé: " . mysqli_error($connexion); 
                    }

                    mysqli_close($connexion);
                ?>
            </div>
        </section>   
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
</body>
</html>