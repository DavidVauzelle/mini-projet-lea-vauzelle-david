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
        
        <section class="section-2-pages-jeux, section-2-tlou">
            <h3 class="titre-h3-tlou">Un lien que rien ne pourra rompre… Mais à quel prix ?</h3>     
            <div class="container-pages-jeux">
                <div class="contenu-jeux">
                    <p class="texte-section-2-pages-jeux, texte-section-2-tlou">
                        20 ans après le début d'une pandémie ayant radicalement changé la face du monde, 
                        les infectés ont perdu la raison et les survivants s'entretuent pour le contrôle des denrées, 
                        des armes et tout ce qui peut leur passer sous la main. 
                        Joel, un survivant au caractère violent, a été engagé pour extraire Ellie, 
                        une jeune fille de 14 ans, d'une zone militaire placée en quarantaine. 
                        Ce travail de routine se transforme rapidement en périple sanglant à travers les États-Unis.
                    </p>
                </div>
                <div class="contenu-jeux">
                    <iframe class="contenu-jeux-videos" width="75%" height="315" src="https://www.youtube.com/embed/JdZtkxxueYg?si=TOZtM-4_mKD0iuq3" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>    
            </div>
            <h3 class="titre-h3-tlou">The Last of US Left Behind</h3>
            <div class="container-pages-jeux">
                <div class="contenu-jeux">
                    <iframe class="contenu-jeux-videos" width="75%" height="315" src="https://www.youtube.com/embed/fkpVKUd904s?si=8TpVR5siYTqhfyeF" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
                <div class="contenu-jeux">
                    <p class="texte-section-2-pages-jeux, texte-section-2-tlou">
                        Suivez Ellie dans la zone de quarantaine de Boston auprès de Riley, sa meilleure amie de l'internat militaire. 
                        Après avoir disparu inexplicablement pendant des semaines, Riley ressurgit dans la vie d'Ellie avec une révélation surprenante.
                        Plus qu’une soirée inoubliable, c’est une soirée qui aura changé le cours de la vie de la protégée de Joel.
                    </p>      
                </div>     
            </div>   
        </section>

        <section class="galerie-tlou">
            <div class="galerie">
                <h2 class="titre-h2">Galerie</h2>
                <div class="galerie-images">
                    <div>
                        <img src="https://images.pushsquare.com/screenshots/60839/large.jpg" alt="Imgage d'une montée d'eau dans une grande ville">
                    </div>
                    <div>
                        <img src="https://www.pssurf.com/_gfx/screenshots/max/2100_PREVIEW_SCREENSHOT2_426879.jpg" alt="Image d'un combat au corps à corps">
                    </div>
                    <div>
                    <img src="https://images.pushsquare.com/screenshots/60835/large.jpg" alt="Image d'une balade à cheval à trvers le campus">
                    </div>
                    <div>
                        <img src="https://www.pssurf.com/_gfx/screenshots/max/2100_PREVIEW_SCREENSHOT1_426879.jpg" alt="Image d'une créature hideuse">
                    </div>
                    <div>
                        <img src="https://media-rockstargames-com.akamaized.net/mfe6/prod/__common/img/13d9a394b35625e065cf8bbf8e35c45b.jpg?im=Resize=1920"
                        alt="Image d'une puissante et magnifique créature">
                    </div>
                    <div>
                        <img src="https://media-rockstargames-com.akamaized.net/mfe6/prod/__common/img/77776e33ef89349ed37e4eaea67d5a7a.jpg?im=Resize=1920" 
                        alt="Image elle dépote cette arme !">
                    </div>
                </div>
            </div>
        </section>   
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
</body>
</html>