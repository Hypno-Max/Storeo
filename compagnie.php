<?php 
/* Template Name: compagnie */
get_header(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil de ma compagnie</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="page-content">
    <section class="about-us">
    <h2>A propos de nous</h2>
      <p>
      Storeo, c'est une plateforme innovante dédiée aux échanges de jeux vidéo. Que vous soyez un passionné de rétro gaming ou un adepte des dernières sorties, Storeo vous offre la possibilité de partager, échanger et découvrir des jeux avec d'autres joueurs. Connectez-vous, explorez notre bibliothèque de jeux, proposez des échanges et plongez dans une communauté de joueurs passionnés. Rejoignez Storeo et donnez une nouvelle vie à votre collection de jeux vidéo.      
    </p>
    </section>

    <section class="our-services">
      <h2>Nos services</h2>
      <div class="service-images">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/services/service1.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/services/service2.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/services/service3.png">
      </div>
    </section>

    <section class="privacy-policy">
      <h2>Politique de confidentialité</h2>
      <p>Chez Storeo, nous accordons une grande importance à la confidentialité et à la sécurité de vos données personnelles. Nous collectons uniquement les informations nécessaires pour vous fournir nos services et améliorer votre expérience sur notre site. Vos données ne seront jamais vendues ou partagées avec des tiers sans votre consentement. Nous utilisons des mesures de sécurité avancées pour protéger vos informations contre tout accès non autorisé. Si vous avez des questions concernant notre politique de confidentialité, n'hésitez pas à nous contacter.</p>
    </section>
  </div>

</body>
</html>

<hr>
<?php get_footer(); ?>