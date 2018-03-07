<?php

add_action( 'init', 'create_evenement_tax' );

function create_evenement_tax() {
	register_taxonomy(
		'categorie',
		'evenement',
		array(
			'label' => __( 'Catégorie' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}