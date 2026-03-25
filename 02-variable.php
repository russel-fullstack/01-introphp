<?php

echo '<h1>Voici du variables PHP dans une page HTML</h1>
<a href="index.php">Retour à l\'accueil</a> ';
echo $nom = "Jean"; ;      // Chaîne de caractères (String)

$age = 25;           // Entier (Integer)

$prix = 19.99;       // Nombre à virgule (Float)

$estActif = true;    // Booléen (Boolean)

$message = "Bonjour";        // Assigne une valeur
$message = "Au revoir";      // Réassigne (écrase la valeur précédente)

$a = $b = $c = 10; 

$nomVar = "salutation";
$$nomVar = "Bonjour !";  // Crée la variable $salutation

echo $salutation;  // Affiche : Bonjour !          // Assignation multiple