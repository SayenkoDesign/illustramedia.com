<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Welcome to Illustra Media - creator of the world's premiere Intelligent Design movies - exploring scientific clues to solve the mysteries of creation" />
<meta name="keywords" content="Intelligent Design, Apologetics, Inteligent Design, Creationist, Evolution Theory, What is Intelligent Design, What is Apologetics, case for a creator, lee strobel, Darwins Dilemma, Unlocking the Mystery of Life, The Privileged Planet, Flight the genius of birds, metamorphosis, Where does the evidence lead, illustra media, discovery institute, cri, Christian research journal" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <?php // force ie8 to use ie7 emu ?>
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

	
	});

</script>

<?php //Updated Google Tracking Code ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4162094-2', 'auto');
  ga('send', 'pageview');

	//tracking outbound links
	var trackOutboundLink = function(url) {
	   ga('send', 'event', 'rpiPurchase', 'click', url, {'hitCallback':
		 function () {
		 document.location = url;
		 }
	   });
	}
	
</script>
<?php //OLD CODE Google tracking code ?>
<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4162094-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

<script type="text/javascript">
	<!--
$(function()
{
	 $(".buy-drop, #buy-options").mouseenter(function(){
	   $("#buy-options").slideDown("fast");
	  });
	  $(".buy-drop").mouseleave(function(){
		$("#buy-options").slideUp("fast");
	  });
	 
	 $(".stream-drop, #stream-options").mouseenter(function(){
	   $("#stream-options").slideDown("fast");
	  });
	  $(".stream-drop").mouseleave(function(){
		$("#stream-options").slideUp("fast");
	  });

	$('.mobile-menu').bind('click', mobileHandler);
	function mobileHandler(){
		$('#mobile-nav').slideToggle();
		}
		/*Reset for window resize*/
		$( window ).resize(function() {
			if ($(window).width() > 768) {
				$('#mobile-nav').slideUp();
			}
		});
		
		
		$("#main-nav > li.page_item").mouseenter(function(){
		
			$("ul.children", this).not(":visible").slideDown(250);
		
		}).mouseleave(function(){
		
			$("ul.children", this).slideUp(250);
		
		});



});
-->
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
        
        	<div class="mobile-menu"></div>
            <ul id="main-nav">
            
	            <?php wp_list_pages("title_li=&include=2"); ?>	
                
                <li class="page_item"><a href="http://illustramedia.com/productions">Productions</a>
                	<ul class="children">
                    
                        <?php $productions = get_bookmarks("category=3&orderby=rating"); 
								
								foreach($productions as $link) {
								
									echo "<li><a href='{$link->link_url}' target='_blank'>{$link->link_name}</a></li>";
								
								}
						
						?>                        
                    
                    </ul>                
                </li>
                
                
                <li class="page_item"><a href="http://illustramedia.com/productions">Buy DVDs</a>
                
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
								
									echo "<li><a href='{$link->link_url}' target='_blank' title='This link will transfer you to RPI, the authorized sales representative for Illustra Media.'>{$link->link_name}</a></li>";
								
								}
						
						?>                        
                        
                    
                    </ul>
                
                </li>
                
   	            <?php wp_list_pages("title_li=&include=189"); ?>	
                
                <?php wp_list_pages("title_li=&include=16"); ?>	

				<?php if(!is_front_page()) { ?>                
                <li class="page_item"><a href="http://illustramedia.com">Home</a></li>
                <?php } ?>
                
                

            
            </ul>
        
        </div>
       <div class="clear"></div>
          <ul id="mobile-nav">
                <li><a href="http://illustramedia.com/about/">About</a></li>
                <li><a href="http://illustramedia.com/productions/">Productions</a>
                    <ul class="dropdown">
                    
                    	<li><a href="http://www.livingwatersthefilm.com/">Living Waters</a></li>
                    <li><a href="http://www.flightthegeniusofbirds.com/">Flight</a></li>
                    <li><a href="http://www.metamorphosisthefilm.com/">Metamorphosis</a></li>
                    <li><a href="http://www.darwinsdilemma.org/">Darwin's Dilemma</a></li>
                    <li><a href="http://unlockingthemysteryoflife.com/" target="_blank">Unlocking the Mystery of Life</a></li>
                    <li><a href="http://theprivilegedplanet.com/" target="_blank">The Privileged Planet</a></li>
                    <li><a href="http://www.thecaseforacreator.com/" target="_blank">The Case for a Creator</a></li>
                	<li><a href="http://wheredoestheevidencelead.com/" target="_blank">Where Does the Evidence Lead</a></li>
                    	<li><a href="http://www.intelligentdesigncollection.com/">Intelligent Design Collection</a></li>
                    	<li><a href="http://www.designoflife.org/">Design of Life Collection</a></li>

                        
                </ul></li>
                <li><a href="clips.php">Buy</a>
                    <ul class="dropdown">
                    
                    	<li><a href="http://go2rpi.com/living-waters-intelligent-design-in-the-oceans-of-the-earth">Living Waters</a></li>
                    	<li><a href="http://go2rpi.com/flight-the-genius-of-birds-dvd/">Flight</a></li>
                        <li><a href="http://go2rpi.com/metamorphosis-the-beauty-and-design-of-butterflies-dvd/">Metamorphosis</a></li>
                        <li><a href="http://go2rpi.com/darwins-dilemma-dvd/">Darwin's Dilemma</a></li>
                        <li><a href="http://go2rpi.com/unlocking-the-mystery-of-life-dvd/" target="_blank">Unlocking the Mystery of Life</a></li>
                        <li><a href="http://go2rpi.com/privileged-planet-dvd" target="_blank">The Privileged Planet</a></li>
                        <li><a href="http://go2rpi.com/case-for-a-creator-lee-strobel-dvd/" target="_blank">The Case for a Creator</a></li>
                        <li><a href="http://go2rpi.com/where-does-the-evidence-lead-dvd/" target="_blank">Where Does the Evidence Lead</a></li>
                            <li><a href="http://go2rpi.com/illustra-media-intelligent-design-collection/">Intelligent Design Collection</a></li>
                            <li><a href="http://go2rpi.com/design-of-life-collection-dvd/">Design of Life Collection</a></li>
    
                            
                    </ul> 
                </li>
                <li><a href="http://illustramedia.com/donate/">Donate</a></li>
                <li><a href="http://illustramedia.com/contact/">Contact</a></li>
        </ul>
   <div class="clear"></div>   
        
    
    </div>

	<div id="main-container">

    	<?php if(is_front_page()) { ?>
            <div id="video">
              <p><iframe width="320" height="180" src="https://www.youtube.com/embed/XGAFTBBWEgI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                    <p style="text-align:center;"><a href="http://www.facebook.com/pages/Illustra-Media/138667886177344?v=wall"><img style="margin:15px 5px -15px 5px;" src="http://illustramedia.com/wp-content/uploads/fb_logo.png" height="40" width="40" /></a>
                    <a href="http://youtube.com/user/illustramedia"><img style="margin:15px 5px -15px 5px;" src="http://illustramedia.com/wp-content/uploads/youtube_logo.png" height="40" width="40" /></a>
                    <a href="https://twitter.com/illustramedia"><img style="margin:15px 5px -15px 5px;" src="http://illustramedia.com/wp-content/uploads/twitter_logo.png" height="40" width="40" /></a> </p>
            </div>
            <div id="intro-blurb">
    
                <?php iinclude_page(13); ?>
    
            
            </div>
    
    		
        <div class="clear"></div>
        <div id="content-wrapper">
            <div id="entries">        
				<h2>News from Illustra Media</h2>
		<?php } ?>