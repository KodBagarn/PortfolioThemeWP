  <?php get_template_part('partials/sitehead');  ?>
<body>
  <header>
    <h1 id="hometitle">  <a href="<?php  echo home_url();?>"> <?php bloginfo('name')  ?> </a> </h1>
    <?php get_sidebar(); ?>
    <?php wp_nav_menu(array('theme_location' => 'header-nav')); ?>

  </header>
