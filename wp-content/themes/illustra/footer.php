

		<?php if(is_front_page()) { ?>
        
        
        	<!--<h3 id="archives"><a href="/<?php //echo date("Y"); ?>">Archives</a></h3>-->
        
        </div>
    
    	
        


			<?php get_sidebar(); ?>   
            
        <?php } ?> 
    
</div><!-- END content-wrapper-->
<div id="footer">

<p>Copyright 2002-<?php echo date("Y"); ?> Illustra Media</p>

            <ul>
            
            	<li><a href="/about">About</a></li>
                <li><a href="/productions">Productions</a></li>
                <li><a href="/productions">Buy DVDs</a></li>
                <li><a href="/donate">Donate</a></li>
                <li><a href="/contact">Contact</a></li>
                
            
            </ul>

</div>


<?php wp_footer(); ?>

</div>

</body>
</html>