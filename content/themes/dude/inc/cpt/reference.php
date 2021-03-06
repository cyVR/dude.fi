<?php

$labels = array(
	'name'               => _x( 'Työt', 'post type general name', 'dude' ),
	'singular_name'      => _x( 'Työ', 'post type singular name', 'dude' ),
	'menu_name'          => _x( 'Työt', 'admin menu', 'dude' ),
	'name_admin_bar'     => _x( 'Työ', 'add new on admin bar', 'dude' ),
	'add_new'            => _x( 'Lisää uusi', 'example', 'dude' ),
	'add_new_item'       => __( 'Lisää uusi työ', 'dude' ),
	'new_item'           => __( 'Uusi työ', 'dude' ),
	'edit_item'          => __( 'Muokkaa työtä', 'dude' ),
	'view_item'          => __( 'Katsele työtä', 'dude' ),
	'all_items'          => __( 'Kaikki työt', 'dude' ),
	'search_items'       => __( 'Etsi töitä', 'dude' ),
	'parent_item_colon'  => __( 'Työn isäntä:', 'dude' ),
	'not_found'          => __( 'Töitä ei löytynyt.', 'dude' ),
	'not_found_in_trash' => __( 'Töitä ei löytynyt roskista.', 'dude' ),
);

$args = array(
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
  'menu_icon'          => 'dashicons-portfolio',
	'supports'           => array( 'title', 'wps_subtitle', 'editor', 'thumbnail' ),
);

register_post_type( 'reference', $args );

$labels = array(
	'name'                       => _x( 'Palvelut', 'taxonomy general name', 'dude' ),
	'singular_name'              => _x( 'Palvelu', 'taxonomy singular name', 'dude' ),
	'search_items'               => __( 'Etsi palveluita', 'dude' ),
	'popular_items'              => __( 'Suositut palvelut', 'dude' ),
	'all_items'                  => __( 'Kaikki palvelut', 'dude' ),
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  => __( 'Muokkaa palvelua', 'dude' ),
	'update_item'                => __( 'Päivitä palvelua', 'dude' ),
	'add_new_item'               => __( 'Lisää uusi palvelu', 'dude' ),
	'new_item_name'              => __( 'Lisää uusi palvelu', 'dude' ),
	'separate_items_with_commas' => __( 'Erottele palvelut pilkuin', 'dude' ),
	'add_or_remove_items'        => __( 'Lisää tai poista palveluita', 'dude' ),
	'choose_from_most_used'      => __( 'Valitse useimmiten käytetyistä palveluista', 'dude' ),
	'not_found'                  => __( 'Palveluita ei löytynyt.', 'dude' ),
	'menu_name'                  => __( 'Palvelut', 'dude' ),
);

$args = array(
	'hierarchical'          => true,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	'query_var'             => false,
  'public'                => false
);

register_taxonomy( 'service', 'reference', $args );
