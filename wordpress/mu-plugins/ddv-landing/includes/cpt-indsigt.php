<?php
/**
 * Custom post type "Indsigt" + tilhørende kategori-taksonomi.
 *
 * Holdt adskilt fra det indbyggede Indlæg (Post), som allerede er i brug til
 * andet indhold på sitet - så "Indsigt"-artikler får deres eget menupunkt,
 * egen kategoriliste og egen URL-struktur (/indsigt/artikel-slug/).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ddv_landing_register_indsigt_post_type() {
	register_post_type(
		'indsigt',
		array(
			'labels'       => array(
				'name'               => __( 'Indsigt', 'ddv-landing' ),
				'singular_name'      => __( 'Indsigt', 'ddv-landing' ),
				'add_new'            => __( 'Tilføj ny', 'ddv-landing' ),
				'add_new_item'       => __( 'Tilføj ny Indsigt-artikel', 'ddv-landing' ),
				'edit_item'          => __( 'Redigér Indsigt-artikel', 'ddv-landing' ),
				'new_item'           => __( 'Ny Indsigt-artikel', 'ddv-landing' ),
				'view_item'          => __( 'Vis Indsigt-artikel', 'ddv-landing' ),
				'view_items'         => __( 'Vis Indsigt-artikler', 'ddv-landing' ),
				'search_items'       => __( 'Søg i Indsigt-artikler', 'ddv-landing' ),
				'not_found'          => __( 'Ingen Indsigt-artikler fundet', 'ddv-landing' ),
				'not_found_in_trash' => __( 'Ingen Indsigt-artikler i papirkurven', 'ddv-landing' ),
				'all_items'          => __( 'Alle artikler', 'ddv-landing' ),
				'menu_name'          => __( 'Indsigt', 'ddv-landing' ),
			),
			'public'        => true,
			'show_in_rest'  => true, // Krævet for block-editoren og Query Loop-blokken.
			'menu_icon'     => 'dashicons-lightbulb',
			'menu_position' => 21, // Lige under "Indlæg" i admin-menuen.
			'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
			'has_archive'   => 'indsigt',
			'rewrite'       => array( 'slug' => 'indsigt', 'with_front' => false ),
		)
	);
}
add_action( 'init', 'ddv_landing_register_indsigt_post_type' );

function ddv_landing_register_indsigt_taxonomy() {
	register_taxonomy(
		'indsigt_kategori',
		array( 'indsigt' ),
		array(
			'labels'            => array(
				'name'          => __( 'Indsigt-kategorier', 'ddv-landing' ),
				'singular_name' => __( 'Indsigt-kategori', 'ddv-landing' ),
				'search_items'  => __( 'Søg kategorier', 'ddv-landing' ),
				'all_items'     => __( 'Alle kategorier', 'ddv-landing' ),
				'edit_item'     => __( 'Redigér kategori', 'ddv-landing' ),
				'add_new_item'  => __( 'Tilføj ny kategori', 'ddv-landing' ),
				'menu_name'     => __( 'Kategorier', 'ddv-landing' ),
			),
			'hierarchical'      => true, // Opfører sig som almindelige kategorier, ikke tags.
			'public'            => true,
			'show_in_rest'      => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'indsigt-kategori' ),
		)
	);
}
add_action( 'init', 'ddv_landing_register_indsigt_taxonomy' );
