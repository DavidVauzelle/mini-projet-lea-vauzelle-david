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
    <?php include 'font.html';?>
</head>

<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include 'nav.html';?> 
    </header>

    <main>
        <section class="cyberpunk-section-1">	
            <div class="cyberpunk-description-background">
               <h2>VOTRE LÉGENDE COMMENCE ICI</h2>    
                <p>
                    Incarnez V, un mercenaire cyberpunk, et faites tout ce qui est en votre pouvoir 
                    pour vous faire un nom à Night City : une mégapole où les seules choses qui 
                    comptent sont le pouvoir, le glamour et les modifications corporelles. 
                    C'est ici que les légendes s'écrivent. À quoi ressemblera la vôtre ?    
                </p>    
            </div>
            <div class="cyberpunk-informations-background">
                <h2>Cyberpunk 2077</h2>    
                <ul>
                    <li>Plateforme : PS4, PS5</li>
                    <li>Sortie : 10/12/2020</li>
                    <li>Editeur : CD PROJECT</li>
                    <li>Genres : RPG, Spécifiques</li>
                    <li>Note : 4.33/5</li>    
                </ul>    
            </div>    
        </section>

        <section class="section-cyberpunk-2">
            <div class="night-city">
                <h3 class="titre-section-cyberpunk-2">NIGHT CITY</h3>    
                <p class="texte-section-cyberpunk-2">
                    Night City regorge de choses à faire, d'endroits à voir et de gens à rencontrer. 
                    Et vous êtes libre d'aller où vous voulez, quand vous voulez, comme vous voulez. 
                    Des quartiers chics de Corpo Plaza aux vastes étendues sauvages des Badlands, 
                    Night City foisonne de secrets qui ne demandent qu'à être découverts.
                </p>
            </div>    
            <div class="video-1">
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Y4x_FjuwV4M?si=nFP0qZ_Cof6KSqd7" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                web-share" referrerpolicy="strict-origin-when-cross-origin"allowfullscreen>
                </iframe>
            </div>    
            <div class="nouveautes">
                <h3 class="titre-section-cyberpunk-2">NOUVEAUTÉS</h3>    
                <p class="texte-section-cyberpunk-2">
                    Découvrez Cyberpunk 2077 sous un nouveau jour : montez à bord du système de métro entièrement fonctionnel NCART, 
                    écoutez des morceaux premios en explorant les rues grâce au Radioport,  
                    ou invitez votre partenaire à l'appartement de V pour passer un peu de temps ensemble.  
                    Toutes ces fonctionnalités et bien d'autres vous attendent dans Night City ! 
                </p>      
            </div> 
            <div class="video-2">
                <!-- <iframe width="560" -->
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/7B4r1jbpS2A?si=D1eoqZvUwjJXBUKm" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div> 
        </section>

        <section class="galerie-cyberpunk-3">
            <div class="galerie">
                <h2>Galerie</h2>
                <div class="galerie-images">
                    <div>
                        <img src="./images/pages-jeux/cyberpunk-2077/galerie/v-masculin.jpg" alt="Photo de V fumant en extérieur">
                    </div>
                    <div>
                        <img src="./images/pages-jeux/cyberpunk-2077/galerie/fight-2.jpg" alt="Photo ou la tension est au maximum">
                    </div>
                    <div>
                        <img src="./images/pages-jeux/cyberpunk-2077/galerie/judy.jpg" alt="Photo de la belle Judy">
                    </div>
                    <div>
                        <img src="./images/pages-jeux/cyberpunk-2077/galerie/ville-2.jpg" alt="Photo d'un batiment de la ville">
                    </div>
                    <div>
                        <img src="./images/pages-jeux/cyberpunk-2077/galerie/fight-1.jpg" alt="Photo d'un fight ou la lame est proche">
                    </div>
                    <div>
                        <img src="./images/pages-jeux/cyberpunk-2077/galerie/ville-1.jpg" alt="Photo d'un plan de la ville depuis la voie rapide">
                    </div>
                </div>
            </div>
        </section>   
    </main>
    
    <!-- Pour récupérer le footer -->
     <?php include './footer.html';?>
    
</body>
</html>