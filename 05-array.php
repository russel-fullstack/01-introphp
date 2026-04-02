<?php echo "Bienvenue sur ma page PHP !"; ?></h1>
    <p>Nous sommes en l'an : <?php echo date("Y-m-d"); ?></p>
    <p>Heure actuelle : <?= date("H:i:s") ?></p>
    echo '<h1>Voici les types de données PHP dans une page HTML</h1>
    <a href="index.php">Retour à l'accueil</a> !';
    <?php
    $arr = [1, 2, 3, 4, 5];
    $user = [
        "id" => 123,
        "nom" => "Alice",
        "email" => "alice@example.com"
    ];

    count($arr);                      // 5
    sizeof($arr);                     // 5 (alias)

    in_array(3, $arr);                // true - la valeur existe
    array_key_exists('nom', $user);   // vérifier si une clé existe
    echo "$user[nom]<br>"; // Affiche Alice 
    echo array_key_exists('nom', $user); // true
    echo in_array(5, $arr);       // false - la valeur n'existe pas

    $pile = [1, 2, 3];

    array_push($pile, 4, 5);  // [1,2,3,4,5] - ajouter en fin
    echo "<pre>";
   var_dump($pile);
    echo "</pre>"; // Affiche 4
    array_pop($pile);
    echo "<pre>";
    var_dump($pile);
    echo "</pre>";         // retourne 5, pile devient [1,2,3,4]

    array_unshift($pile, 0);   // [0,1,2,3,4] - ajouter en début
    echo "<pre>";
    var_dump($pile);
    echo "</pre>";
    array_shift($pile);        // retourne 0, pile devient [1,2,3,4]
    echo "<pre>";
    var_dump($pile);
    echo "</pre>";
    unset($pile[1]);           // Supprimer par clé
    echo "<pre>";
    var_dump($pile);
    echo "</pre>";

    array_slice($arr, 2);      // [3, 4, 5] - à partir de l'index 2
    echo "<pre>";
    var_dump(array_slice($arr, 2));
    echo "</pre>";
    array_slice($arr, 1, 2);   // [2, 3] - 2 éléments à partir de l'index 1
    echo "<pre>";
    var_dump(array_slice($arr, 1, 2));
    echo "</pre>";
    array_keys($arr);          // [0, 1, 2, 3, 4]
    echo "<pre>";
    var_dump(array_keys($arr));
    echo "</pre>";
    array_values($arr);        // Réindexer le tableau
    echo "<pre>";
    var_dump(array_values($arr));
    echo "</pre>";

    $a = ['x' => 1, 'y' => 2];
    $b = ['y' => 3, 'z' => 4];

    array_merge($a, $b);            // ['x'=>1, 'y'=>3, 'z'=>4]
    echo "<pre>";
    var_dump(array_merge($a, $b));
    echo "</pre>";
    array_merge_recursive($a, $b);  // Conserve les deux valeurs
    echo "<pre>";
    var_dump(array_merge_recursive($a, $b));
    echo "</pre>";

    $cles   = ['a', 'b', 'c'];
    $valeurs = [1, 2, 3];
    array_combine($cles, $valeurs); // ['a'=>1, 'b'=>2, 'c'=>3]
    echo "<pre>";
    var_dump(array_combine($cles, $valeurs));       
    echo "</pre>";