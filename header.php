<header>

  <div class="partie-a">
    <div class="logostoreo">
    <a href="<?php echo home_url('/'); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/header/logo.png" alt="Logo de votre site">
    </a>
    </div>
  </div>

  <div class="partie-b">
  <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav me-auto'
                    ]); ?>
</div>

<div class="partie-c">
  <ul class="side-menu">

  <li><a href="partie_historique/historique/"><img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/header/sell.png" alt="Image" class="button"></a></li>

  <li><a href="compte"><img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/header/person.png" alt="Image" class="button"></a></li>
  </ul>
</div>
</header>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

