<?php

function ajout_custom_type_init() {

	$post_type = "evenement";
	$labels = array(
		'name'               => 'Évenement',
		'singular_name'      => 'Évenement',
		'all_items'          => 'Tous les évenement',
		'add_new'            => 'Ajouter un évenement',
		'add_new_item'       => 'Ajouter un évenement',
		'edit_item'          => "Modifier l'évenement",
		'new_item'           => 'Nouvel évenement',
		'view_item'          => "Voir l'évenement",
		'search_items'       => 'Chercher un évenement',
		'not_found'          => 'Aucun résultat',
		'not_found_in_trash' => 'Aucun résultat',
		'parent_item_colon'  => 'Évenements parents :',
		'menu_name'          => 'Évenements',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 15,
		'menu_icon'           => 'dashicons-calendar-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => $post_type )
	);

	register_post_type($post_type, $args );
}
add_action( 'init', 'ajout_custom_type_init' );
