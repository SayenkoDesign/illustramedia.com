<?php
/**
 * Template Name: RPI Page
 * 
 * This page template is for a documentary stanadlone page
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Welcome to Illustra Media - creator of the world's premiere Intelligent Design movies - exploring scientific clues to solve the mysteries of creation" />
<meta name="keywords" content="Intelligent Design, Apologetics, Inteligent Design, Creationist, Evolution Theory, What is Intelligent Design, What is Apologetics, case for a creator, lee strobel, Darwins Dilemma, Unlocking the Mystery of Life, The Privileged Planet, Flight the genius of birds, metamorphosis, Where does the evidence lead, illustra media, discovery institute, cri, Christian research journal" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <?php // force ie8 to use ie7 emu ?>
<title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     * We filter the output of wp_title() a bit -- see
     * twentyten_filter_wp_title() in functions.php.
     */
    wp_title( '|', true, 'right' );

    ?></title>


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
<style>
<!--
hr{
    margin:45px 0;
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #E96F35;
    padding: 0; 
}
.btn-rpi{
    padding: 10px;
    display: block;
    width: 400px;
    text-align: center;
    background: #E96F35;
    color: #000;
    font-weight: bold;
    text-decoration: none;
    margin: 20px 0;
    border-radius: 5px;
    border: 1px solid #e0601a;
}
.btn-rpi:hover{background:#f9a475; transition:all .2s;}
.review span{color:#f9c27d;}
.review{
    padding: 3%;
    display: block;
    margin-left: 17%;
    background: #edf9ff;
    border: 2px solid #c74904;
    width: 60%;
    text-align: center;
}
.rpi-content{
    font-family: Arial, sans-serif;
}
.rpi-content h2{
    font-style: italic;
    font-size:30px;
    color:#E96F35;
}
.rpi-content h2.entry-title{font-style:normal; color:#000; font-size:36px; text-transform:uppercase;}
.pluginSkinLight{display:none;}
.rpi-content{max-width:1000px; width:90%; padding:0 5%; margin:auto;}
iframe{float:right; margin:0 0 15px 15px;}

@media screen and (max-width:767px){
    .btn-rpi{width:90%;}
    .review{width:87%; margin-left:0;}
    iframe{width:93%; float:none; margin:15px 0;}
}
-->
</style>

</head>

<body>

<header style="display:block; width:100%; background:#E96F35;">
    <img style="float:left; margin:15px;" src="http://cdn3.bigcommerce.com/s-ahoo6j3/product_images/logo_1_1437412224__92609.png">
    <div style="clear:both;"></div>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="main-content" class="rpi-content" role="main">

        <h2 class="entry-title"><?php the_title(); ?></h2>
        
                       
        <div class="inner-entry">
			<?php the_content(); ?>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
        </div>

<?php endwhile; ?>


</div>

</body>
</html>
