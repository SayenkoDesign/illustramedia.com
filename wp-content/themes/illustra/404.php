<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


	<div id="main-content" role="main">

        <h2 class="entry-title">404 Not Found</h2>
        
        <?php get_sidebar("2"); ?>        
        <div class="inner-entry">
                <p><?php _e( 'Apologies, but the page you requested could not be found.', 'twentyten' ); ?></p>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>

		</div>


</div><!-- #content -->

<?php get_footer(); ?>

					
