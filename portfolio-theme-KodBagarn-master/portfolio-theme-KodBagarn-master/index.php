
<?php
get_header();
?>
<main>

  <h1><?php the_title(); ?></h1>
  <p>detta är index.php</p>
  <p>
  <?php
  if(have_posts()): while ( have_posts()) :
          the_post();
          the_content();
          the_post_thumbnail('single_large');
      endwhile;
  endif; ?>
</p>
<?php
 $terms = get_terms(array(
 'taxonomy' => 'project-skill',
 'hide_empty' => true ));
 ?>
 <?php foreach ($terms as $value) { ?>
 <span><a href="/project-skill/<?php echo $value->slug ?>">
 <?php echo $value->name ?>
 </a></span>
<?php }
?>
</main>
<?php get_footer(); ?>
