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
echo "$heredoc";

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