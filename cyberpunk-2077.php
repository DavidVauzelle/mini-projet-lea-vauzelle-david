<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voici mon deuxième projet"> 
    <title>Fiche de : Cyberpunk 2077.</title>
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
        <section class="section-1-cyberpunk">	
            <div class="description-background-cyberpunk">
               <h2>VOTRE LÉGENDE COMMENCE ICI</h2>    
                <p>
                    Préparez le coup du siècle : volez un implant unique qui est la clé de l'immortalité, et forgez votre légende dans le vaste mode ouvert qu'est Night City. 
                    Ici, les choix que vous faites changeront le cours de l'histoire et les relations avec les personnages qui vous entourent. 
                    Complétez des missions diverses et variées pour vous faire un nom, et passez de simple mercenaire à cyberpunk de légende. 
                    Au fil de l'aventure, vous lèverez également le voile sur le mystère qui plane autour de ce fameux implant que tout le monde vous envie.    
                </p>    
            </div>
            <div class="informations-background-cyberpunk">
                <ul>
                    <li>Plateforme : PS4, PS5</li>
                    <li>Sortie : 10/12/2020</li>
                    <li>Editeur : CD PROJECT</li>
                    <li>Genres : RPG, Spécifiques</li>
                    <li>Note : 4.33/5</li>    
                </ul>    
            </div>    
        </section>

        <?php
            $sql = "SELECT * FROM `contenu` WHERE id_jeux = 1";
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

        <section class="section-2-pages-jeux">
            <?php if (isset($contenu1)) : ?>
                <h3 class="titre-h3"><?php echo $contenu1[1] ?></h3>
                <div class="container-pages-jeux">
                    <div class="contenu-jeux">
                        <p class="texte-section-2-pages-jeux"><?php echo $contenu1[2] ?></p>
                    </div>
                    <div class="contenu-jeux">
                        <iframe class="contenu-jeux-videos" width="75%" height="315" src="<?php echo $contenu1[3] ?>" title="YouTube video player" 
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                            web-share" referrerpolicy="strict-origin-when-cross-origin"allowfullscreen>
                        </iframe>
                    </div>    
                </div>
            <?php endif; ?>
            <?php if (isset($contenu2)) : ?>      
                <h3 class="titre-h3"><?php echo $contenu2[1] ?></h3>
                <div class="container-pages-jeux">
                    <div class="contenu-jeux">
                        <iframe class="contenu-jeux-videos" width="75%" height="315" src="<?php echo $contenu2[3] ?>" title="YouTube video player" 
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                            web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="contenu-jeux">
                        <p class="texte-section-2-pages-jeux"><?php echo $contenu2[2] ?></p>      
                    </div>     
                </div>
            <?php endif; ?>  
        </section>

        <section class="galerie-cyberpunk">
            <div class="galerie">
                <h2>Galerie</h2>
                <!-- Récupération des images depuis le bdd et affichages de celles-ci dans la galerie -->
                <?php

                $sql = "SELECT * FROM `images` WHERE id_jeux = 1";
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