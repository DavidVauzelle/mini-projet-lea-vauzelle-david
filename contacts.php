<?php
include 'connexion.php';

// $_POST est t'il vide ?
if (isset($_POST['envoyer'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];   

    // Vérifier si aucun champ du formulaire est vide

    if (empty($nom) || empty($prenom) || empty($email) || empty($sujet) || empty($message)) {
        echo 'Le formulaire n\'est pas saisi correctement';
    } else {
        $sql = "INSERT INTO contacts (nom, prenom, email, sujet, message) VALUES ('$nom', '$prenom', '$email', '$sujet', '$message')";
        $resultat = mysqli_query($connexion, $sql);  
    }
    // Rediriger vers la page index lorsque le formulaire est envoyé avec succès
    // Vérifier si la requête a réussi
    if ($resultat) {
        header('Location: index.php');
    } else {
        echo "Erreur d'insertion des données dans la base de données" . mysqli_error($connexion);
    }
    // Fermer la connexion
    mysqli_close($connexion);
}
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
            <form class="formulaire-contact" action="contacts.php" method="post">
                <h1>Contactez-nous</h1>
                <div class="champs-formulaire">
                    <label for="name">Nom* : </label>
                    <input type="text" id="name" name="nom" placeholder="Dupont" required>     
                </div>
                <div class="champs-formulaire">
                    <label for="first_name">Prénom* : </label>
                    <input type="text" id="first_name" name="prenom" placeholder="Nicolas" required> 
                </div>  
                <div class="champs-formulaire">
                    <label for="email">Email* : </label>
                    <input type="email" id="email" name="email" placeholder="nicolas.duppont@exemple.fr"required> 
                </div>
                <div class="champs-formulaire">
                    <label for="contact_choice">Sujet* : </label>
                        <select id="contact-choice" name="sujet">
                            <option value="Jeu">Jeu(x) à ajouter</option>
                            <option value="Fonctionnalitee">Fonctionnalitée à ajouter</option>
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
                    <input class="input-button-formulaire" type="submit" name="envoyer" value="Envoyer">
                    <input class="input-button-formulaire" type="reset" value="Réinitialiser">
                </div>
                <div>
                    
                </div>
            </form>        
        </div>   
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
</body>
</html>