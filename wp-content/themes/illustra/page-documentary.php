<?php
/**
 * Template Name: Documentary Page
 * 
 * This page template is for a documentary stanadlone page
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="main-content" role="main">

        <h2 class="entry-title"><?php the_title(); ?></h2>
        

                       
        <div class="inner-entry">
			<?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
        </div>

<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		<div id="inner-sidebar" class="documentary-sidebar widget-area" role="complementary">

            
        <?php /*************Sidebar**************/ ?>
         <center><img src="<?php the_field('cover_image'); ?>" alt="" />      
         <?php
            $buy_dvd = get_field('buy_dvd');
            $buy_bluray = get_field('buy_blu-ray');
            if(!empty($buy_dvd) || !empty($buy_bluray)){?>
                <!--Buy the Film-->
                <div class="buy-drop"><span>Buy Now</span><div id="buy-options">
                        <ul>
                            <?php if(!empty($buy_dvd)){ ?>
                			<li><a href="<?php the_field('buy_dvd'); ?>" onclick="ga('send','event','RPI Purchase','<?php the_field('buy_dvd'); ?>')">DVD</a></li>
                <?php } ?>
                                            <?php if(!empty($buy_bluray)){ ?>
                	<li><a href="<?php the_field('buy_blu-ray'); ?>" onclick="ga('send','event','RPI Purchase','<?php the_field('buy_blu-ray'); ?>')">Blu-ray</a></li>
            <?php } ?>
                        </ul>
                    </div><br></div> 
                    <!--END Buy the Film-->
             <?php } ?>
                

 
  
         <?php
            $stream_amazon = get_field('stream_amazon');
            $stream_itunes = get_field('stream_itunes');
            $stream_on_demand = get_field('stream_on_demand');
            if(!empty($stream_amazon) || !empty($stream_itunes) || !empty($stream_on_demand)){?>		
            <!--Stream the Film-->
            <div class="stream-drop">
            	<span>Stream Now</span> 
                <div id="stream-options">
                    <ul>
					<?php if(!empty($stream_amazon)){ ?>
                		<li><a href="<?php the_field('stream_amazon'); ?>" onclick="ga('send','event','Amazon Purchase','<?php the_field('stream_amazon'); ?>')">Amazon</a></li>
                	<?php } ?>
                        
					<?php if(!empty($stream_itunes)){ ?>
                        <li><a href="<?php the_field('stream_itunes'); ?>" onclick="ga('send','event','iTunes Purchase','<?php the_field('stream_itunes'); ?>')">iTunes</a></li>
                    <?php } ?>
                    <?php if(!empty($stream_on_demand)){ ?>
                		<li><a href="<?php the_field('stream_on_demand'); ?>" onclick="ga('send','event','on Demand Purchase','<?php the_field('stream_on_demand'); ?>')">Video On Demand</a></li>
                <?php } ?>
                </ul>
                </div><br></div> 
                <!--END Steam the Film-->

                </center>
            <?php } ?>
                        		

         

         
        </div><!-- #inner-sidebar .widget-area -->
        <?php /***********END Sidebar*************/?>
<?php endwhile; ?>

<!--</div> #content One Extra Div-->

<?php get_footer(); ?>
