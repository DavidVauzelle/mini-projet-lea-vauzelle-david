<?php
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
?>