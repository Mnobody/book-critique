<?php

/*
Plugin Name: Book Critique
Plugin URI: https://github.com/Mnobody/book-critique
Description: Custom post type
Version: 1.0.0
License: GPLv2 or later
Text Domain: book-critique
*/

function create_book_critique() {
    register_post_type( 'book-critique', array(
        'labels' => array(
            'name' => 'Book Critique',
            'singular_name' => 'Book Critique',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Book Critique',
            'edit' => 'Edit',
            'edit_item' => 'Edit Book Critique',
            'new_item' => 'New Book Critique',
            'view' => 'View',
            'view_item' => 'View Book Critique',
            'search_items' => 'Search Book Critique',
            'not_found' => 'No Book Critique found',
            'not_found_in_trash' => 'No Book Critique found in Trash',
            'parent' => 'Parent Book Critique'
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( '' ),
    ));
}

add_action( 'init', 'create_book_critique' );