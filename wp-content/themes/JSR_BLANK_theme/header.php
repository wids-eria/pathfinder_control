<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta name="description" content="The Pathfinder project ....">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
	
	<!-- google webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>

	
</head>

<body <?php body_class(); ?>>
	
	<div class="page_wrap">
		
		
		<div class="navigation">
			
		<a href="http://fairplay.control.dev.eriainteractive.com/"><div class="pathfinder_logo"></div></a>
		
		 <div class="help_us_button">
		    
		    <p class="help_text">Want to help with our research?</p>
		    
		    <a href="http://fairplay.dev.eriainteractive.com/iat" class="iat_link"><span>Click Here</span></a>
		    
		</div>
		
		<ul class="nav">
		    
		    <div id="centeredmenu">                
			<ul>
			   <li><a href="#">Bias Information</a> 
				<ul>
				   <li><a href="http://fairplay.control.dev.eriainteractive.com/?page_id=25" class="first_link">What is <br /> implicit bias?</a></li>
				   <li><a href="http://fairplay.control.dev.eriainteractive.com/?cat=3" class="last_link">Examples of Race-Related bias</a></li>
				   <!--<li><a href="http://fairplay.control.dev.eriainteractive.com/?cat=4" class="last_link">Strategies for implicit bias</a></li>-->
				</ul>
			     </li>                   
			</ul>                
		    </div>
		    
		    <li><a href="http://fairplay.control.dev.eriainteractive.com/?cat=5"><span>Strategies</span></a></li>
		    <li><a href="http://fairplay.control.dev.eriainteractive.com/?page_id=5"><span>About Us</span></a></li>
		    <li><a href="http://fairplay.control.dev.eriainteractive.com/?page_id=7"><span>Contact</span></a></li>
		</ul>
		
		
		
		</div>
		
		<hr>
		
		<div class="breadcrumbs">
		
			<p class="crumbs">
			
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p class="crumbs">','</p>');
			} ?>
			
			</p>
		
		</div>






