<?php echo "Bienvenue sur ma page PHP !"; ?></h1>
    <p>Nous sommes en l'an : <?php echo date("Y-m-d"); ?></p>
    <p>Heure actuelle : <?= date("H:i:s") ?></p>
    echo '<h1>Exercices à faire </h1>
    <a href="index.php">Retour à l'accueil</a>';

<?php
    $name = "russel <br>";
    $age = 20 . '<br>';
    echo "je m'appelle $nom et j'ai $age <br>";
    $a = 10 .' <br>';
    $b = 5 .' <br>';
    $somme = $a + $b;
    $différence = $a - $b;
    $produit = $a * $b;
    $quotien = $a / $b;

    echo $somme . '<br>';
    echo $différence . '<br>';
    echo $produit . '<br>';
    echo $quotien . '<br>';

    $prix = 2500;
    define('TVA', '0.1925');
    $prix_total = $prix + ($prix * TVA);
    echo $prix_total . ' <br>';

    $texte = "Bonjour le monde";
    echo strlen($texte) .' <br>';
    echo strtoupper($texte) . ' <br>';
    echo strtolower($texte) . ' <br>';

    echo "<script>
    prenom = prompt('entrez votre prenom');
    alert('Bonjour ' + prenom + ' et bienvenu');
   </script>";

   function direbonjour (string $c): void  
   {
        echo "bonjour $c";
   }
direbonjour("russel");
function carree (int|string $n ) : void
{
    echo pow($n, 2);
}

carree(20);