<?php 
/* Template Name: accueil */
get_header(); ?>
<!DOCTYPE html>
<html>
  <!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<head>
  <title>accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">
<section class="section section1">
  <div class="content">
    <h2>Échanger pour mieux jouer</h2>
    <div class="buttons">
      <a href="catalogue" class="button">Catalogue de jeux</a>
      <a href="ajout" class="button">Ajouter un jeu</a>
    </div>
  </div>
</section>
<section class="section section2">
  <div class="content">
    <div class="block">
      <h2>Storeo c'est quoi ?</h2>
      <p>
      Storeo, c'est une plateforme innovante dédiée aux échanges de jeux vidéo. Que vous soyez un passionné de rétro gaming ou un adepte des dernières sorties, Storeo vous offre la possibilité de partager, échanger et découvrir des jeux avec d'autres joueurs. Connectez-vous, explorez notre bibliothèque de jeux, proposez des échanges et plongez dans une communauté dynamique de joueurs passionnés. Rejoignez Storeo et donnez une nouvelle vie à votre collection de jeux vidéo.</p>
      <a href="faq" class="button">FAQ</a>
    </div>
    <div class="block">
      <h2>Nous contacter</h2>
      <p>
      N'hésitez pas à nous contacter pour toute question, suggestion ou demande d'assistance. Notre équipe est là pour vous aider. Votre avis est précieux pour nous et nous sommes impatients de vous apporter toute l'aide dont vous avez besoin. Merci de choisir Storeo, votre site d'échange de jeux vidéo.
nous contacter</p>
      <a href="contact" class="button">Nous contacter</a>
    </div>
  </div>
</section>
<hr>
<section class="section section3">
  <div class="content">
    <div class="block">
      <h2>Notre catalogue</h2>
      <p>Découvrez notre vaste catalogue de jeux vidéo disponibles sur Storeo, votre plateforme d'échange ultime. Que vous soyez nostalgique des classiques rétro ou à la recherche des derniers titres populaires notre catalogue regorge de possibilités pour satisfaire tous les joueurs. Explorez des titres captivants dans toutes les catégories : action, aventure, jeux de rôle, stratégie, sport, et bien plus encore. Notre collection comprend des jeux pour toutes les plateformes, des consoles rétro aux derniers systèmes de jeu.</p>
      <a href="catalogue" class="button">Catalogue de jeux</a>
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
<hr>
<section class="section section4">
<div class="content">
    <div class="block">
      <h2>Notre équipe</h2>
      <p>
      Notre équipe chez Storeo est composée de deux passionnés du monde du jeu vidéo : Maxime et Loan. Ensemble, nous formons une équipe dévouée à offrir une expérience exceptionnelle à nos utilisateurs.
      <br>
      <br>
      Maxime, expert en jeux rétro, possède une connaissance approfondie des classiques du gaming. 
      <br>
      <br>
      Loan, quant à lui, est un passionné des dernières technologies et des jeux modernes.
      </p>
    </div>
    <div class="images">
        
  <div class="image-container">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/maxime.jpg" width="250" height="250" class="shrink-on-hover logo">
    <p class="caption">Maxime Pierrequin</p>
  </div>
  <div class="image-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/loan.png" width="250" height="250" class="shrink-on-hover logo">
    <p class="caption">Loan Brihaye</p>
  </div>
</div>
</div>
  </div>
</section>
<hr>
</div>
</body>
</html>
<?php get_footer(); ?>


