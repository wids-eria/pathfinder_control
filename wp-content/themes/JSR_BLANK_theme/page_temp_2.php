<?php
/*
 Template Name: google form
*/
?>

<!DOCTYPE HTML >
<html lang="en">
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

<body>
    
<div class="page_wrap">
    
    <br />
    <br />
       
    
    <div class="main_content">
	
	<div class="ss-form-heading">
		
		<h1 class="center" itemprop="name">Follow Up Questions</h1>
		
		<p></p>
		
		<div class="SectionTitle center" itemprop="description">
			Thank you for playing Pathfinder. Please take moment to tell us about yourself and answer a few questions that will help us with our research.
		</div>

		<hr class="ss-email-break" style="display:none;">
			
	</div>
	
        
       <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dGUwM2piSWVYQ3pDWmIwOVB0alp1MHc6MQ"
	       width="940" height="2267"
	       frameborder="0"
	       marginheight="0"
	       style="margin:20px 0 20px 0;"
	       marginwidth="0">Loading...</iframe>
       
	<div class="ss-item  ss-section-header">
				
		<div class="ss-form-entry">
			
			<h2 class="center">Thank you so much for participating in our research! </h2>
			
			<div class="SectionTitle center">If you have any comments/questions, please email the P.I., Dr. Molly Carnes at mlcarnes@cwhr.wisc.edu</div>
		</div>
	</div>
	
	<br />

</div>

    
    
<?php get_footer(); ?>
    
    
    
</div>   
    
    
    
<div class="clear">
</div>
 
</body>



</html>
