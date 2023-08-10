<?php 
/* Template Name: profil */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Modifier le profil - Storeo</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="page-content">
    <section class="edit-profile">
      <h2>Modifier le profil</h2>
      <form>
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="text" id="username" name="username" required>

        <label for="confirm-password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <a href="connexion" class="button">Enregistrer les modifications</a>
      </form>
    </section>
  </div>
  <hr>
</body>
</html>
<?php get_footer(); ?>