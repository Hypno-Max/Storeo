<?php 
/* Template Name: compte */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>accueil</title>
</head>
<body class="page-compte">
<div class="partie-compte">
  <div class="deja-compte">
    <h2>Déjà un compte ?</h2>
   
    <label for="nom">Votre mail :</label>
  <input type="text" id="nom" name="nom" required>
  <label for="nom">Votre mot de passe :</label>
  <input type="text" id="nom" name="nom" required>
  <a href="connexion" class="button">Se connecter</a>

  </div>
  <div class="deja-inscrit">
    <h2>Pas encore inscrit ?</h2>

    <label for="nom">Votre mail :</label>
  <input type="text" id="nom" name="nom" required>
  <label for="nom">Votre mot de passe :</label>
  <input type="text" id="nom" name="nom" required>
  <a href="profil" class="button">S'inscrire</a>

  </div>
</div>
<hr>
</body>
</html>
<?php get_footer(); ?>


