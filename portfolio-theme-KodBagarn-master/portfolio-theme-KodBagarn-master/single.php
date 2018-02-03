<?php get_header(); ?>
<main>
<?php if( have_posts()): while ( have_posts()): the_post();
get_template_part('partials/content');
the_terms(get_the_ID(), 'project-skill', 'before: ','-between-',': after ');
    endwhile;
    else :
      echo "this does not work!";
endif; ?>
</main>
<?php get_footer(); ?>
