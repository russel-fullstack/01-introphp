<?php 
    echo "Bienvenue sur ma page PHP !";
    
    if(isset($_POST['soumettre'])){
        echo "soumettre";
    }

    // traitement.php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom     = $_POST['nom']     ?? '';
    $email   = $_POST['email']   ?? '';
    $message = $_POST['message'] ?? '';

    echo "<br> Nom de l'utilisateur : $nom <br>";
    echo "Email : $email <br>";
    echo "Message : $message <br>";
    }

