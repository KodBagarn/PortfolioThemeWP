<?php
function create_project_type() {
  $labels = array(
    'name'                       => _x( 'Project types', 'Taxonomy General Name', 'martin_portfoliotheme' ),
    'singular_name'              => _x( 'Project type', 'Taxonomy Singular Name', 'martin_portfoliotheme' ),
    'menu_name'                  => __( 'Project types', 'martin_portfoliotheme' ),
    'all_items'                  => __( 'All types', 'martin_portfoliotheme' ),
    'new_item_name'              => __( 'New Type Name', 'martin_portfoliotheme' ),
    'add_new_item'               => __( 'Add New Project Type', 'martin_portfoliotheme' ),
    'edit_item'                  => __( 'Edit Project Type', 'martin_portfoliotheme' ),
    'update_item'                => __( 'Update Project Type', 'martin_portfoliotheme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Types', 'martin_portfoliotheme' ),
    'popular_items'              => __( 'Popular Types', 'martin_portfoliotheme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-type',
  );
  register_taxonomy( 'project-type', array('project'), $args );
}


add_action( 'init', 'create_project_type' );

//------------------------------------------------------------------------

function create_project_skill() {
  $labels = array(
    'name'                       => _x( 'Project skills', 'Taxonomy General Name', 'martin_portfoliotheme' ),
    'singular_name'              => _x( 'Project skill', 'Taxonomy Singular Name', 'martin_portfoliotheme' ),
    'menu_name'                  => __( 'Project skills', 'martin_portfoliotheme' ),
    'all_items'                  => __( 'All skills', 'martin_portfoliotheme' ),
    'new_item_name'              => __( 'New Skill Name', 'martin_portfoliotheme' ),
    'add_new_item'               => __( 'Add New Project Skill', 'martin_portfoliotheme' ),
    'edit_item'                  => __( 'Edit Project Skill', 'martin_portfoliotheme' ),
    'update_item'                => __( 'Update Project Skill', 'martin_portfoliotheme' ),
    'add_or_remove_items'        => __( 'Add or remove Project Skills', 'martin_portfoliotheme' ),
    'popular_items'              => __( 'Popular Skills', 'martin_portfoliotheme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-skill',
  );
  register_taxonomy( 'project-skill', array('project'), $args );
}


add_action( 'init', 'create_project_skill' );

 ?>
