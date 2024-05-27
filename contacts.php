<?php

// 5) Connexion à la base
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$nomBaseDeDonnees = "mini_projet_lea_vauzelle_david";
 
// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $nomBaseDeDonnees);
 
if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}
// echo 'connexion bdd réussie';

// 6) Vérification de la soumission du formulaire
print_r ($_POST);

// $_POST est t'il vide ?
if (isset($_POST['Envoyer'])) {
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prénom'];
    $email = $_POST['Email'];
    $sujet = $_POST['Sujet'];
    $message = $_POST['Commentaire'];
} 
// else if (empty($_POST)) {
//     echo 'Le formulaire n\'a pas été soumis correctement';
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page contact">
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
    <link rel="stylesheet" href="./style/contacts.css">
    <?php include 'font.php';?> 
    <title>Formulaire de contact </title>
</head>
<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include 'nav.php';?>    
    </header>

    <main>   
        <div class="contenaire-contact">
            <form class="formulaire-contact" action="contacts.php" method="post" enctype="multipart/form-data">
                <h1>Contactez-nous</h1>
                <div class="champs-formulaire">
                    <label for="name">Nom* : </label>
                    <input type="text" id="name" name="text" placeholder="Dupont" required>     
                </div> 
                <div class="champs-formulaire">
                    <label for="first_name">Prénom* : </label>
                    <input type="text" id="first_name" name="text" placeholder="Nicolas" required> 
                </div>  
                <div class="champs-formulaire">
                    <label for="email">Email* : </label>
                    <input type="email" id="email" name="email" placeholder="nicolas.duppont@exemple.fr"required> 
                </div>
                <div class="champs-formulaire">
                    <label for="contact_choice">Sujet* : </label>
                        <select id="contact-choice">
                            <option value="Jeu(x) à ajouter">Jeu(x) à ajouter</option>
                            <option value="Fonctionnalitée à ajouter">Fonctionnalitée à ajouter</option>
                            <option value="Autre">Autre</option>
                        </select>
                </div>   
                <div class="champ-message-formulaire">
                    <label for="message">Commentaire* : </label><br>
                    <textarea class="textarea-formulaire-contact"
                        id="message" 
                        name="message"
                        placeholder="votre message ici"
                        rows="5"
                        maxlength="500" 
                        required></textarea>      
                </div>
                <div class="button-contact">
                    <input class="input-button-formulaire" type="submit" value="Envoyer">
                    <input class="input-button-formulaire" type="reset" value="Réinitialiser">
                </div>
            </form>        
        </div>   
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
</body>
</html>