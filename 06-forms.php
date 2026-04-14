<?php echo "Bienvenue sur ma page PHP !"; ?></h1>
    <p>Nous sommes en l'an : <?php echo date("Y-m-d"); ?></p>
    <p>Heure actuelle : <?= date("H:i:s") ?></p>
    echo '<h1>Voici les types de données PHP dans une page HTML</h1>
    <a href="index.php">Retour à l'accueil</a> !';

    <!-- contact.html -->
<form action="traitement.php" method="POST">
  <input type="text" name="nom"  />
  <input type="email" name="email"  />
  <textarea name="message"></textarea>
  <button type="submit " name="soumettre">Envoyer</button>
</form>