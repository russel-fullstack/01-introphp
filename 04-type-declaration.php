<?php

declare(strict_types=1);

echo '<h1>Voici du variables PHP dans une page HTML</h1>
<a href="index.php">Retour à l\'accueil</a> ';
echo "hello";


function saluer(string $nom): void {
    echo "Bonjour, $nom !";
}

saluer("Alice"); // Fonctionne
#saluer(123);     // TypeError !