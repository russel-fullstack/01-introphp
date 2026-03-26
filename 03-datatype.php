<?php

echo '<h1>Voici les types de données PHP dans une page HTML</h1>
<a href="index.php">Retour à l\'accueil</a> !';

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