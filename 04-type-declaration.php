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

#Type de Retour

function additionner(int $a, int $b): int {
    return $a + $b;
}

/*function trouverUtilisateur(int $id): ?User { // ? permet null
    return $id > 0 ? new User() : null;
}*/
function journaliser(string $msg): void { // Pas de retour
    echo $msg;
}
additionner(5, 10); // Retourne 15
journaliser("Une action a été effectuée."); // Affiche le message

# PHP 8.0+) : Types d'union
function traiterID(int|string $id): void {
    echo "Traitement : $id <br>";
}

traiterID(42);        // Fonctionne
traiterID("ABC123");  // Fonctionne aussi

#Types Nullable
function chercher1(?int $id): ?int {
    // $id peut être int ou null
    // Retourne string ou null
    return $id;
}

// Syntaxe union PHP 8.0+ (équivalent)
function chercher(int|null $id): int|null {
    // Identique ci-dessus
    return $id;
}

#Accepte n'importe quel type (mixed)
function deboguer(mixed $valeur): void {
    var_dump($valeur);
}
deboguer("Test");
deboguer(123);
deboguer([1, 2, 3]);
deboguer(null);

class Produit {
    public string $nom;
    public float $prix;
    public ?string $description = null;
    private int $stock = 0;
}

$prod = new Produit();
echo $prod->nom = "Chaise";
echo $prod->prix = 49.99;
echo $prod->description = "Une chaise confortable";