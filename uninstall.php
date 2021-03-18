<?php 

/**
 * Trigger this file on Plugin Uninstall
 * 
 * @package ReplaceTextWithEmoji
 */

 if ( !defined( 'WP_UNINSTALL_PLUGIN')) {
     die('no!');
 }

 //clear post type wordpress way

 $books = get_posts( array('post_type' => 'books', 'numberposts' => -1) );

 foreach($books as $book) {
     wp_delete_post( $book->ID, true );
 }

//access the database via SQL way
 global $wpdb;
 $wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book' ");
 $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
 $wpdb->query("DELETE FROM wp_term_relationship WHERE object_id NOT IN (SELECT id FROM wp_posts)");