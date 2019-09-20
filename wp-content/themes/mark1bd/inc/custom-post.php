<?php 


/**
****Team custom post ****
**/

function team_post_type() {
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Team' ),
        'singular_name' => __( 'Team' )
      ),
      'public' => true,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

    )
  );
}
add_action( 'init', 'team_post_type' );


add_action( 'init', 'client_taxonomy', 0 );
 
function client_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Team', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'popular_items' => __( 'Popular Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate topics with commas' ),
    'add_or_remove_items' => __( 'Add or remove topics' ),
    'choose_from_most_used' => __( 'Choose from the most used topics' ),
    'menu_name' => __( 'Categories' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('team-category','team',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'team' ),
  ));
}



/***
*Client custom post
***/

function client_post_type() {
  register_post_type( 'client',
    array(
      'labels' => array(
        'name' => __( 'Clients' ),
        'singular_name' => __( 'Client' )
      ),
      'public' => true,
      'supports'           => array( 'title', 'editor', 'thumbnail'),

    )
  );
}
add_action( 'init', 'client_post_type' );

add_action( 'init', 'team_taxonomy', 0 );
 
function team_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Client', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'popular_items' => __( 'Popular Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate client with commas' ),
    'add_or_remove_items' => __( 'Add or remove client' ),
    'choose_from_most_used' => __( 'Choose from the most used client' ),
    'menu_name' => __( 'Categories' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('client-category','client',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'client' ),
  ));
}

/*=============client texonomy end========*/


/***
*portfolio custom post
***/

function project_post_type() {
  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Project' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'supports'           => array( 'title', 'editor', 'thumbnail'),

    )
  );
}
add_action( 'init', 'project_post_type' );

add_action( 'init', 'project_taxonomy', 0 );
 
function project_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Project', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'popular_items' => __( 'Popular Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate project with commas' ),
    'add_or_remove_items' => __( 'Add or remove project' ),
    'choose_from_most_used' => __( 'Choose from the most used project' ),
    'menu_name' => __( 'Categories' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('project-category','project',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'project' ),
  ));
}

// add_action( 'init', 'project_tag_taxonomies', 0 );

// //create two taxonomies, genres and tags for the post type "tag"
// function project_tag_taxonomies() 
// {
//   // Add new taxonomy, NOT hierarchical (like tags)
//   $labels = array(
//     'name' => _x( 'Tags', 'taxonomy general name' ),
//     'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Tags' ),
//     'popular_items' => __( 'Popular Tags' ),
//     'all_items' => __( 'All Tags' ),
//     'parent_item' => null,
//     'parent_item_colon' => null,
//     'edit_item' => __( 'Edit Tag' ), 
//     'update_item' => __( 'Update Tag' ),
//     'add_new_item' => __( 'Add New Tag' ),
//     'new_item_name' => __( 'New Tag Name' ),
//     'separate_items_with_commas' => __( 'Separate tags with commas' ),
//     'add_or_remove_items' => __( 'Add or remove tags' ),
//     'choose_from_most_used' => __( 'Choose from the most used tags' ),
//     'menu_name' => __( 'Tags' ),
//   ); 

//   register_taxonomy('tag','project',array(
//     'hierarchical' => false,
//     'labels' => $labels,
//     'show_ui' => true,
//     'update_count_callback' => '_update_post_term_count',
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'project' ),
//   ));
// }



