<?php get_header();




 $terms = get_terms(array(
'taxonomy' => 'project-type',
'hide_empty' => true ));
?> <main>


<span> <a class="all" href="/">All</a></span>
<?php foreach ($terms as $value) { ?>
<span><a  class="types" href="/project-type/<?php echo $value->slug ?>">
<?php echo $value->name ?>
</a></span>
<?php }

if(have_posts()): while ( have_posts()) :
        the_post();
        get_template_part('partials/postgrid');
    endwhile;
endif;

?></main><?php
get_footer();
 ?>
