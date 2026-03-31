<?php

declare(strict_types=1);

echo '<h1>Voici du variables PHP dans une page HTML</h1>
<a href="index.php">Retour à l\'accueil</a> ';
echo "hello";


function saluer(string $nom): void
{
    echo "Bonjour, $nom !";
}

saluer("Alice"); // Fonctionne
#saluer(123);     // TypeError !

#Type de Retour

function additionner(int $a, int $b): int
{
    return $a + $b;
}

/*function trouverUtilisateur(int $id): ?User { // ? permet null
    return $id > 0 ? new User() : null;
}*/
function journaliser(string $msg): void
{ // Pas de retour
    echo $msg;
}
additionner(5, 10); // Retourne 15
journaliser("Une action a été effectuée."); // Affiche le message

# PHP 8.0+) : Types d'union
function traiterID(int|string $id): void
{
    echo "Traitement : $id <br>";
}

traiterID(42);        // Fonctionne
traiterID("ABC123");  // Fonctionne aussi

#Types Nullable
function chercher1(?int $id): ?int
{
    // $id peut être int ou null
    // Retourne string ou null
    return $id;
}

// Syntaxe union PHP 8.0+ (équivalent)
function chercher(int|null $id): int|null
{
    // Identique ci-dessus
    return $id;
}

#Accepte n'importe quel type (mixed)
function deboguer(mixed $valeur): void
{
    var_dump($valeur);
}
deboguer("Test");
deboguer(123);
deboguer([1, 2, 3]);
deboguer(null);

class Produit
{
    public string $nom;
    public float $prix;
    public ?string $description = null;
    private int $stock = 0;
}

$prod = new Produit();
echo $prod->nom = "Chaise";
echo $prod->prix = 49.99;
echo $prod->description = "Une chaise confortable";

#constantes de classe
// Constantes de configuration
const DB_HOTE = "localhost";
const DB_NOM = "mon_app";

// Constantes d'application dans une classe
class App
{
    public const VERSION = "1.0.0";
    public const ENV = "development";

    public const ENVIRONNEMENTS = [
        "development",
        "staging",
        "production"
    ];
}

echo "Version de l'App : " . App::VERSION;
echo "Connecté à : " . DB_HOTE;
?>

<?php
function somme(int ...$nombres): int
{
    return array_sum($nombres);
}

echo somme(1, 2, 3)."<br>";       // 6
echo somme(1, 2, 3, 4, 5)."<br>"; // 15

function calculerRemise(
    float $prix,
    float $pourcentageRemise = 10.0,
    float $remiseMax = 50.0
): float {
    $remise = $prix * ($pourcentageRemise / 100);

    // Plafonner la remise
    if ($remise > $remiseMax) {
        $remise = $remiseMax;
    }

    return $prix - $remise;
}

// Utilisation de la fonction
$original = 100.00;
$final = calculerRemise($original, pourcentageRemise: 15.0);

echo "Prix original : $original € <br>";
echo "Après remise : $final € <br>";
?>

<?php
$compteur = 0;

function incrementer() {
    global $compteur; // Référencer la variable globale
    $compteur++;
}

incrementer();
echo $compteur; // 1

$saluer = function(string $nom): string {
    return "Bonjour, $nom !";
};

echo $saluer("Alice"); 
// Bonjour, Alice !
echo "<br>";
$nombres = [1, 2, 3, 4, 5];

// Doubler chaque nombre
$doubles = array_map(function($n) {
    return $n * 2;
}, $nombres);

print_r($doubles); // [2, 4, 6, 8, 10]

// Filtrer les nombres pairs
$pairs = array_filter($nombres, function($n) {
    return $n % 2 === 0;
});

print_r($pairs); // [2, 4]
$multiplicateur = 3;

$multiplier = function(int $n) use ($multiplicateur): int {
    return $n * $multiplicateur;
};

echo $multiplier(5); // 15

$total = 0;

$ajouter = function(int $montant) use (&$total): void {
    $total += $montant; // Modifie la variable originale
};

$ajouter(10);
$ajouter(20);
echo $total; // 30

$utilisateur = [
    'nom'    => 'Jean Dupont',
    'email'  => 'jean@example.com',
    'age'    => 30,
    'actif'  => true,
];

echo $utilisateur['nom'];   // Jean Dupont
echo $utilisateur['email']; // jean@example.com

// Ajouter/mettre à jour
$utilisateur['telephone'] = '06 12 34 56 78';
$utilisateur['age'] = 31; // Mise à jour

$coordonnees = [10, 20, 30];
[$x, $y, $z] = $coordonnees;
echo "$x, $y, $z"; // 10, 20, 30

// Ignorer des valeurs
[, , $z] = $coordonnees;

// Avec des clés
$utilisateur = ['nom' => 'Jean', 'email' => 'jean@test.com'];
['nom' => $nom, 'email' => $email] = $utilisateur;