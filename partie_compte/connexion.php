<?php 
/* Template Name: connexion */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
</head>
<body>
<div class="container">
<section class="section section1-connexion">
  <div class="profile">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/avatar.jpg" width="250" height="250" class="shrink-on-hover logo">
  </div>
  <div class="text">
    <p>Bienvenue Billy Jones</p><h4>Membre depuis Avril 2023 (niveaux 03)</h4>
  </div>
  <div class="buttons">
    <a href="profil" class="button">Modifier le profil</a>
    <a href="compte" class="button">Déconnexion</a>
  </div>
</section>
<section class="section section2">
<div class="content">
    <div class="block">
      <h2>Vos jeux</h2>
      <p>
      Voici la liste complète de vos jeux que vous avez déposés en ligne. Nous vous encourageons vivement à prendre le temps de vérifier régulièrement vos messages, car ils vous permettront de rester informé(e) sur les diverses opportunités d'échange et d'interaction avec les autres utilisateurs de Storeo. Ne manquez pas cette chance de tirer le meilleur parti de votre expérience de jeu en ligne en restant connecté(e) et en participant activement à cette communauté dynamique.</p>
      <a href="ajout" class="button">Ajoutez un jeu</a>
    </div>
    <div class="slider-container slider-1">
    <div class="slider">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/doom.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/darksouls.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/dragon.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/mario.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/doom.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/darksouls.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/dragon.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/mario.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/doom.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/darksouls.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/dragon.png" width="300" height="300" class="shrink-on-hover logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/carousel/mario.png" width="300" height="300" class="shrink-on-hover logo">
    </div>
  </div>

  </div>
</section>
<section class="section section3-connexion">
  <div class="block">
    <h2>Vos messages</h2>
    <div class="message-cadre" id="message-cadre">
      <!-- Contenu du message ici -->
    </div>
    <div class="navigation-messages">
      <button class="precedent" onclick="afficherMessagePrecedent()">Message précédent</button>
      <button class="suivant" onclick="afficherMessageSuivant()">Message suivant</button>
    </div>
  </div>
</section>

<script>
  const messages = [
    "Bonjour, j'aimerais savoir si votre 'jeu DOOM(PC)'est encore disponible pour l'échange.",
    "Bonjour, j'aimerais savoir si votre 'jeu Elden Ring(PC)' est encore disponible pour l'échange.",
    "Bonjour, j'aimerais savoir si votre 'Prince of persia - les sables du temps(PS2)' est encore disponible pour l'échange.",
    "Bonjour, j'aimerais savoir si votre 'Ratchet et clank 3(PS2)' est encore disponible pour l'échange.",
    "Bonjour, j'aimerais savoir si votre 'Dragon's lair(NES)' est encore disponible pour l'échange.",
    "Bonjour, j'aimerais savoir si votre 'Super mario world(SNES)' est encore disponible pour l'échange.",
    "Bonjour, j'aimerais savoir si votre 'Dark Souls(PC)' est encore disponible pour l'échange.",
    // Ajoutez plus de messages ici
  ];

  let messageIndex = 0;

  function afficherMessage(index) {
    const messageCadre = document.getElementById("message-cadre");
    messageCadre.innerHTML = `
      <p>${messages[index]}</p>
      <div class="boutons-message">
        <button class="accepter">Accepter l'échange</button>
        <button class="refuser" onclick="effacerMessage()">Refuser l'échange</button>
      </div>`;
  }

  function effacerMessage() {
    const messageCadre = document.getElementById("message-cadre");
    messageCadre.innerHTML = ''; // Effacer le contenu du message-cadre
  }

  function afficherMessageSuivant() {
    messageIndex = (messageIndex + 1) % messages.length;
    afficherMessage(messageIndex);
  }

  function afficherMessagePrecedent() {
    messageIndex = (messageIndex - 1 + messages.length) % messages.length;
    afficherMessage(messageIndex);
  }

  // Afficher le premier message au chargement de la page
  afficherMessage(messageIndex);
</script>

<hr>
<section class="section section4">
<div class="block">
      <h2>Vos succès</h2>
      <div class="succes-images">
        <div class="succes-item">
          <h3>NOVICE</h3>  
          <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/succes/succes1.png">
          <p>Échanger un jeu</p>
        </div>
        <div class="succes-item">
          <h3>TRANSFERT</h3>  
          <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/succes/succes2.png">
          <p>Échange réussi</p>
        </div>
        <div class="succes-item">
          <h3>L'ACTIVISTE</h3>  
          <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/succes/succes3.png">
          <p>Forte activité</p>
        </div>
        <div class="succes-item">
          <h3>SON STYLE</h3>  
          <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/succes/succes4.png">
          <p>Trouver un jeu FPS</p>
        </div>
        <div class="succes-item">
          <h3>MESSAGER</h3>  
          <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/succes/succes5.png">
          <p>Contacter deux personne</p>
        </div>
      </div>
    </section>
  </div>
    </section>
</section>
<hr>
</div>
</body>
</html>
<?php get_footer(); ?>


