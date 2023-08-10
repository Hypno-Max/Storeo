<?php 
/* Template Name: catalogue */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>catalogue</title>
</head>
<body>

  <div class="row">
  <div class="col-sm">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h5">Elden ring</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/catalogue/elden.png" class="card-img-top" alt="Sur mesure | service | monsite">
        <p class="card-text"></p>
        <p></p>
      </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h5">Les sables du temps</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/catalogue/pop.png" class="card-img-top" alt="Sur mesure | service | monsite">
        <p class="card-text"></p>
        <p></p>
      </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h5">Doom</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/catalogue/doom.png" class="card-img-top" alt="Sur mesure | service | monsite">
        <p class="card-text"></p>
        <p></p>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h5">Dragon's lair</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/catalogue/dragon.png" class="card-img-top" alt="Sur mesure | service | monsite">
        <p class="card-text"></p>
        <p></p>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h5">Super Mario Bros 3</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/catalogue/mario.png" class="card-img-top" alt="Sur mesure | service | monsite">
        <p class="card-text"></p>
        <p></p>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title h5">Ratchet et clank 3</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/catalogue/ratchet.png" class="card-img-top" alt="Sur mesure | service | monsite">
        <p class="card-text"></p>
        <p></p>
      </div>
    </div>
  </div>

  
<?php
  $services = new WP_Query([ // je crée une variable $services
    'post_type' => 'services', // la je précise quel post_type je veux (dans mon cas "services")
    'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
    'limit' => 10, // dans mon cas je n'en ai besoin que de trois
    'orderby' => 'date', // je les trie par date 
    'date' => true // je récupéère ma date
  ]);

  if ($services->have_posts()): // ici je vérifie que $services posède bien mes posts
?>
  <div class="row">
    <?php 
      while ($services->have_posts()): // la je lance ma boucle sur mes posts contenu dans services
      $services->the_post(); // la récupère mon post
    ?>
      <div class="col-sm">
        <div class="card">
          <img 
            src="<?php the_post_thumbnail_url(); ?>" // je vais chercher le lien de mon image
            class="card-img-top"
            alt="<?php the_title() ?> | service | <?php echo bloginfo('name'); ?>" // ici je crée un petit alt avec le titre du service et le nom du site
          >
          <div class="card-body">
            <h3 class="card-title h5"><?php the_title(); ?></h3> // j'intègre mon titre de service
            <p class="card-text"><?php the_content(); ?></p> // j'intègre mon contenu
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
      </div>
<?php else: ?>

<?php endif; ?>
</body>
</div>
<hr>
</html>
<?php get_footer(); ?>


