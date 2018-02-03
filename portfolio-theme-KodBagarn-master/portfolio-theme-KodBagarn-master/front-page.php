<?php
get_header();



$terms = get_terms(array(
'taxonomy' => 'project-type',
'hide_empty' => true ));
?> <main>


<span> <a class="all" href="/">All</a></span>
<?php foreach ($terms as $value) { ?>
<span><a class="types" href="/project-type/<?php echo $value->slug ?>">
<?php echo $value->name ?>
</a></span>
<?php }


?><hr> <?php


$args = array(
  	'post_type'  => 'project',
  	'post_per_page' => -1,
);

$my_query = new WP_Query($args);

if( $my_query->have_posts()): while ( $my_query->have_posts()): $my_query->the_post();
get_template_part('partials/postgrid');
    endwhile;
    else :
      echo "this does not work!";
endif;
?></main><?php
get_footer();

 ?>
