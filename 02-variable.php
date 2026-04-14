<?php

echo '<h1>Voici du variables PHP dans une page HTML</h1>
<a href="index.php">Retour à l\'accueil</a> ';
echo $nom = "Jean paul le montier";       // Chaîne de caractères (String)

$age = 25;           // Entier (Integer)

$prix = 19.99;       // Nombre à virgule (Float)

$estActif = true;    // Booléen (Boolean)

$message = "Bonjour";        // Assigne une valeur
$message = "Au revoir";      // Réassigne (écrase la valeur précédente)

$a = $b = $c = 10; 

$nomVar = "salutation";

$$nomVar = "Bonjour !";  // Crée la variable $salutation


echo $salutation . '<br>';  // Affiche : Bonjour !          // Assignation multiple

#string others various

#fonctions avancées associés aux strings
 $number = 20;

 echo str_WORD_COUNT($nom). '<br>';
 echo str_pad($number, 8, 8, STR_PAD_LEFT). '<br>';
 echo str_pad($number, 8, 0, STR_PAD_RIGHT). '<br>';
 echo trim($nom). '<br>';
 echo strlen($nom). '<br>';
 echo lcfirst($nom). '<br>';
 echo ucfirst($nom). '<br>';
 echo strtoupper($nom). '<br>';
 echo strtolower($nom). '<br>';
 echo ucwords($nom). '<br>';
 echo ltrim($nom). '<br>';
 echo rtrim($nom). '<br>';

$longText = "
Hello, my name is eva
I am <b>27</b>,
I love my daughter
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';
echo "3 - Avec htmlentities : " . htmlentities($longText) . '<br>';
$name = null;
$displayName = $name ?? 'Eva';
echo $displayName;