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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="main-content" role="main">

        <h2 class="entry-title"><?php the_title(); ?></h2>
        
        <?php get_sidebar("2"); ?>        
               
        <div class="inner-entry">
        		<p class="post-date">Posted on <?php the_time("F dS, Y"); ?></p>
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
				

<?php endwhile; ?>

<!--</div> #content One too many Div's -->

<?php get_footer(); ?>
