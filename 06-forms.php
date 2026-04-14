<?php echo "Bienvenue sur ma page PHP !"; ?></h1>
<p>Nous sommes en l'an : <?php echo date("Y-m-d"); ?></p>
<p>Heure actuelle : <?= date("H:i:s") ?></p>
echo '<h1>Voici les types de données PHP dans une page HTML</h1>
<a href="index.php">Retour à l'accueil</a> !';

<?php

  $success = false;
  $erreurs = [];

  if(isset($_POST['soumettre'])){
    $nom = $_POST['nom'] ;
    $email = $_POST['email'] ;
    $motdepasse = $_POST['motdepasse'] ;
    $age = $_POST['age'] ;
  // Champ requis
  if (empty($nom)) {
    $erreurs['nom'] = 'Le nom est requis';
  } elseif (strlen($nom) < 2 || strlen($nom) > 9) {
    $erreurs['nom'] = 'Le nom doit contenir entre 2 et 9 caractères';
  }

  // Validation d'email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs['email'] = 'Adresse email invalide';
  }

  // Robustesse du mot de passe
  // if (strlen($data['motdepasse']) < 8) {
  //   $erreurs['motdepasse'] = 'Le mot de passe doit contenir au moins 8 caractères';
  // }

  // Plage numérique
  // $age = filter_var($data['age'], FILTER_VALIDATE_INT);
  // if ($age === false || $age < 18 || $age > 120) {
  //   $erreurs['age'] = "L'âge doit être compris entre 18 et 120";
  // }
}
  
 ?>

<!-- contact.html -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <form action="traitement.php" method="POST">
    <input type="text" name="nom" />
    <input type="email" name="email" />
    <textarea name="message"></textarea>
    <button type="submit " name="soumettre">Envoyer</button>
  </form> -->
  <?php if ($succes): ?>
    <p class="success">Merci pour votre message !</p>
  <?php else: ?>
    <form method="POST">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" value=""> <br>
      <?php if (isset($erreurs['nom'])): 
        echo '<p style="color: red;">' . $erreurs['nom'] . '</p>';
      endif;
        ?>
      <br>
      <label for="email">Email :</label>
      <input name="email" value=""> <br>
      <?php if (isset($erreurs['email'])): 
        echo '<p style="color: red;">' . $erreurs['email'] . '</p>';
      endif;
        ?>
      <br>
      <label for="motdepasse">Mot de passe :</label>
      <input type="password" name="motdepasse" value=""> <br><br>
      <label for="message">Message :</label>
      <textarea name="message"></textarea> <br><br>
      <label for="age">Âge :</label>
      <input type="number" name="age" value=""> <br><br>
      <button type="submit" name="soumettre">Envoyer</button>
    </form>
  <?php endif; ?>
</body>

</html>