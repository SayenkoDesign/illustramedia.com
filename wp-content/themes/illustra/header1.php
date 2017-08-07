<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" /> <?php // force ie8 to use ie7 emu ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/screen.css" media="all" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.cycle.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
	
		$("#product-slides").cycle({ fx: "fade", cleartypeNoBg: true, cleartype:true, speed:3500, timeout:6000, pause: 1});
		
		$("#main-nav > li.page_item").mouseenter(function(){
		
			$("ul.children", this).not(":visible").slideDown(250);
		
		}).mouseleave(function(){
		
			$("ul.children", this).slideUp(250);
		
		});
		
		<?php if(!is_front_page()) { ?>
			sidebarH = document.getElementById("inner-sidebar").offsetHeight;
			contentH = document.getElementById("main-content").offsetHeight;
			var contentH = contentH + 200;
			$("#main-content").css({ "height" : "" + contentH + "px" });
		<?php } ?>


	
	});

</script>

<?php wp_head(); ?>

<!--[if lte IE 8]>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/ie.css" />

<![endif]-->

</head>

<body <?php body_class(); ?> <?php if(!is_front_page()) { echo " id='inside' "; } ?>>

	<div id="top">
    
    	<div id="top-nav">
        
	        <a href="/"><img src="<?php bloginfo("template_url");?>/images/main-logo.png" alt="Illustra Media" id="main-logo"/></a>
        
            <ul id="main-nav">
            
	            <?php wp_list_pages("title_li=&include=2"); ?>	
                
                <li class="page_item"><a href="http://illustramedia.com/?page_id=29">Productions</a>
                	<ul class="children">
                    
                        <?php $productions = get_bookmarks("category=3&orderby=rating"); 
								
								foreach($productions as $link) {
								
									echo "<li><a href='{$link->link_url}' target='_blank'>{$link->link_name}</a></li>";
								
								}
						
						?>                        
                    
                    </ul>                
                </li>
                
                
                <li class="page_item"><a href="http://illustramedia.com/?page_id=29">Buy DVDs</a>
                
                	<ul class="children">
                    
                    	<?php
                        /*<li><a href="https://www.go2rpi.com/prodinfo.asp?number=2392" target="_blank">Unlocking the Mystery of Life</a></li>
                        <li><a href="https://www.go2rpi.com/prodinfo.asp?number=7498" target="_blank">The Privileged Planet</a></li> 
                        <li><a href="https://www.go2rpi.com/prodinfo.asp?number=1496" target="_blank">Where Does the Evidence Lead?</a></li>
                        <li><a href="http://www.darwinsdilemma.org/purchase.php" target="_blank">Darwin's Dilemma</a></li>
                        <li><a href="https://www.go2rpi.com/prodinfo.asp?number=1396" target="_blank">The Case for a Creator</a></li>
						*/?>
                        

                        <?php $buy_films = get_bookmarks("category=17&orderby=rating"); 
								
								foreach($buy_films as $link) {
								
									echo "<li><a href='{$link->link_url}' target='_blank'>{$link->link_name}</a></li>";
								
								}
						
						?>                        
                        
                    
                    </ul>
                
                </li>
                
   	            <?php wp_list_pages("title_li=&include=19"); ?>	
                
                <?php wp_list_pages("title_li=&include=16"); ?>	

				<?php if(!is_front_page()) { ?>                
                <li class="page_item"><a href="http://illustramedia.com">Home</a></li>
                <?php } ?>
                
                

            
            </ul>
            
            <?php if(is_front_page()) { ?>
            
				<p id="phone-number">1-800-266-7741</p>
            
            <?php } ?>
        
        </div>
        
        
    
    </div>

	<div id="main-container">
    
        	<div id="product-slides">
	
    			            
				<div class="slide">
            
	            	<div class="ie-fix"><a href="https://www.go2rpi.com/prodinfo.asp?number=2392" target="_blank"><img class="unitPng" src="<?php bloginfo("template_url");?>/images/products/utmol8.png" /></a></div>
                
                	<div class="buy-button">
                    
                    	<a href="https://www.go2rpi.com/prodinfo.asp?number=2392" target="_blank">Buy DVD</a>
                    
                    </div>
                
                </div>	
 
                <div class="slide">
            
	            	<div class="ie-fix"><img src="<?php bloginfo("template_url");?>/images/products/case8.png" /></div>
                
                	<div class="buy-button">
                    
                    	<a href="https://www.go2rpi.com/prodinfo.asp?number=1396">Buy DVD</a>
                    
                    </div>
                
                </div>	
                
                
                 <div class="slide">
            
	            	<div class="ie-fix"><a href="https://www.go2rpi.com/prodinfo.asp?number=3094" target="_blank"><img class="unitPng"  src="<?php bloginfo("template_url");?>/images/products/dillema8.png" /></a></div>
                
                	<div class="buy-button">
                    
                    	<a href="https://www.go2rpi.com/prodinfo.asp?number=3094" target="_blank">Buy DVD</a>
                    
                    </div>
                
                </div>	
                
                
                 <div class="slide">
            
	            	<div class="ie-fix"><a href="https://www.go2rpi.com/prodinfo.asp?number=7498" target="_blank"><img class="unitPng"  src="<?php bloginfo("template_url");?>/images/products/planet8.png" /></a></div>
                
                	<div class="buy-button">
                    
                    	<a href="https://www.go2rpi.com/prodinfo.asp?number=7498" target="_blank">Buy DVD</a>
                    
                    </div>
                
                </div>	
                
                
                 <div class="slide">
            
	            	<div class="ie-fix"><a href="https://www.go2rpi.com/prodinfo.asp?number=1496" target="_blank"><img class="unitPng"  src="<?php bloginfo("template_url");?>/images/products/evidence8.png" /></a></div>
                
                	<div class="buy-button">
                    
                    	<a href="https://www.go2rpi.com/prodinfo.asp?number=1496" target="_blank">Buy DVD</a>
                    
                    </div>
                
                </div>	
                
                
                 <div class="slide">
            
	            	<div class="ie-fix"><a href="https://www.go2rpi.com/prodinfo.asp?number=1095" target="_blank"><img class="unitPng"  src="<?php bloginfo("template_url");?>/images/products/trilogy8.png" /></a></div>
                
                	<div class="buy-button">
                    
                    	<a href="https://www.go2rpi.com/prodinfo.asp?number=1095" target="_blank">Buy DVD</a>
                    
                    </div>
                
                </div>	
                
                
                
                
                
            
            </div>    
    
    
    	<?php if(is_front_page()) { ?>
            <div id="intro-blurb">
    
                <?php iinclude_page(13); ?>
    
            
            </div>
    
    	<h2 class="entries">UPDATES</h2>
    		<div id="entries">        

		<?php } ?>