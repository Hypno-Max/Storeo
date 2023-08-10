<?php 
/* Template Name: contact */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>compte</title>
</head>
<body class="page-contact">
  <div class="contact">
<form action="traitement.php" method="POST">
  <h2>Une Question ?</h2>
  <hr>
  <p>Si vous avez besoin d'aide envoyer nous un message et nous vous répondrons dans plusieurs brefs délais.</p>
  <label for="nom">Votre nom :</label>
  <input type="text" id="nom" name="nom" required>

  <label for="nom">Votre mail :</label>
  <input type="text" id="nom" name="nom" required>

  <label for="message">Votre message:</label>
  <textarea id="message" name="message" rows="4" cols="50"></textarea>
  
  <input type="submit" value="Envoyer">
</form>
</div>
<hr>
</body>
</html>
<?php get_footer(); ?>


