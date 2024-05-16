<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page contact">
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/footer.css">
    <?php include 'font.html';?> 
    <title>Formulaire de contact </title>
</head>
<body>

    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include '/nav.html';?>    
    </header>

    <div class="contenaire-contact">
        <div class="formulaire-contact">
            <h1>Contactez-nous</h1>
            <form action="/submit-form" method="post" enctype="multipart/form-data">
                <div>
                    <label for="name">Nom* :</label>
                    <input type="text" id="name" name="text" required>    
                </div>
                <br>
                <div>
                    <label for="first_name">Prénom* :</label>
                    <input type="text" id="first_name" name="text" required>   
                </div>
                <br>
                <div>
                    <label for="email">Email* :</label>
                    <input type="email" id="email" name="email" required> 
                </div>
                <br>
                <div>
                    <label for="contact_choice">Sujet </label>
                    <input list="liste_choice" id="contact_choice" name="contact_choice" required/>
                    <datalist id="liste_choice">
                        <option value="Jeu(x) à ajouter"></option>
                        <option value="Fonctionnalitée à ajouter"></option>
                        <option value="Autre"></option>
                    </datalist>
                </div>
                <br>
                <div>
                    <label for="message">Commentaire :*</label><br>
                    <textarea 
                        id="message" 
                        name="message"
                        placeholder="votre message ici">
                    </textarea>
                </div>
                <br>
                <div>
                    <input type="reset" value="Réinitialiser">
                    <input type="submit" value="Soumettre">
                </div>
            </form>        
        </div>
        
    </div>
    
    <!-- Pour récupérer le footer -->
    <?php include 'footer.html';?>

</body>
</html>