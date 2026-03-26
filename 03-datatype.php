<?php

echo '<h1>Voici les types de données PHP dans une page HTML</h1>
<a href="index.php">Retour à l\'accueil</a> !';

; #1. String (Chaîne de caractères)
$nom = "Jean";      // Chaîne de caractères (String)
$simpleQuote = 'Bonjour';              // Guillemets simples (littéral)
$doubleQuote = "Bonjour, $nom";       // Guillemets doubles (interpolation)
$heredoc = <<<EOT
Chaîne sur
plusieurs lignes
EOT;

echo "$simpleQuote<br>";
echo "$doubleQuote<br>";
echo "$heredoc<br>";

;#2. Integer (Entier)
$decimal = 42;           // Décimal
$negatif = -17;          // Négatif
$octal = 0755;           // Octal (commence par 0)
$hex = 0xFF;             // Hexadécimal (commence par 0x)
$binaire = 0b1010;       // Binaire (commence par 0b)
$lisible = 1_000_000;    // PHP 7.4+ : séparateur de milliers
echo "$decimal<br>";
echo "$negatif<br>";
echo "$octal<br>";
echo "$hex<br>";
echo "$binaire<br>";
echo "$lisible<br>";

#3. Float (Nombre à virgule flottante)
$prix = 19.99;
$scientifique = 1.2e3;  // 1200
$negatif = -0.5;
echo "$prix<br>";
echo "$scientifique<br>";
echo "$negatif<br>";

#4. Boolean (Booléen)
$estActif = true;    // Vrai
$estInactif = false; // Faux
echo "$estActif<br>";   // Affiche 1
echo "$estInactif<br>"; // Affiche rien (équivalent à 0)


#5. Array (Tableau)
$indexe = [1, 2, 3];
$associatif = ["nom" => "Jean", "age" => 30];
echo "$indexe[0]<br>"; // Affiche 1
echo "$associatif[nom]<br>"; // Affiche Jean

$var = "M. Klaude";       // Valeur nulle (absence de valeur)
gettype($var);      // Retourne le type sous forme de chaîne
is_string($var);    // Vérification booléenne
is_int($var);
is_float($var);
is_bool($var);
is_array($var);
is_null($var);

echo gettype($var) . "<br>"; // Affiche "string"
echo is_string($var) ? "C'est une chaîne" : "Ce n'est pas une chaîne"; // Affiche "C'est une chaîne"    
echo "<br>";
echo is_int($var) ? "C'est un entier" : "Ce n'est pas un entier"; // Affiche "Ce n'est pas un entier"    
echo "<br>";
echo is_float($var) ? "C'est un float" : "Ce n'est pas un float"; // Affiche "Ce n'est pas un float"    
echo "<br>";
echo is_bool($var) ? "C'est un booléen" : "Ce n'est pas un booléen"; // Affiche "Ce n'est pas un booléen"    
echo "<br>";
echo is_array($var) ? "C'est un tableau" : "Ce n'est pas un tableau"; // Affiche "Ce n'est pas un tableau"    
echo "<br>";
echo is_null($var) ? "C'est une valeur nulle" : "Ce n'est pas une valeur nulle"; // Affiche "Ce n'est pas une valeur nulle"


$valeurs = [
    "Bonjour",
    42,
    3.14,
    true,
    [1, 2, 3],
    null
];

foreach ($valeurs as $valeur) {
    echo gettype($valeur) . " : ";
    var_dump($valeur);
    echo "\n";
}


echo "<pre>";
print_r($associatif);
echo "</pre>";