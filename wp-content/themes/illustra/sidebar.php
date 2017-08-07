<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<div id="sidebar" class="widget-area" role="complementary">

	<h2>Featured Products</h2>
    <div class="sidebar-wrapper">
      <div class="featured-item">
        <?php $image = get_field('graphic', 13); ?>
        <img src="<?php echo $image['url']; ?>" alt="" /><br />
        
        <?php 
        $purchase = get_field('purchase_link', 13);
        if(!empty($purchase)){?>
            <center><a class="btn" href="<?php the_field('purchase_link', 13); ?>">BUY NOW</a></center>
        <?php } ?>
        
        <h3 class="widget-title"><?php the_field('title', 13); ?></h3>
        <p><?php the_field('description', 13); ?></p>
      </div>
      <div class="featured-item">
        <?php $image = get_field('graphic2', 13); ?>
        <img src="<?php echo $image['url']; ?>" alt="" /><br />
        
        <?php 
        $purchase2 = get_field('purchase_link2', 13);
        if(!empty($purchase2)){?>
        <center><a class="btn" href="<?php the_field('purchase_link2', 13); ?>">BUY NOW</a></center>
        <?php } ?>
        <h3 class="widget-title"><?php the_field('title2', 13); ?></h3>
        <p><?php the_field('description2', 13); ?></p>
      </div>
    </div><!--END sidebar-wrapper-->

		</div><!-- #primary .widget-area -->
<div class="clear"></div>
<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
