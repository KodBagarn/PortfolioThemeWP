  <?php get_template_part('partials/sitehead');  ?>
<body>
  <header>
    <p>this is a header</p>
    <img src="img/My logo (for white background).png" alt="logo">  <a href="<?php  echo home_url();?>"> <?php bloginfo('name');  ?> </a> </h1> </img>
    <?php //get_sidebar(); ?>
    <?php wp_nav_menu(array('theme_location' => 'header-nav')); ?>

  </header>
