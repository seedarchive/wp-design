<?php /* Template Name: index-template */ ?>
<?php define( 'WP_USE_THEMES', false ); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
</head>
    
<div id="outer">
   <div id="container">
        <?php get_header(); ?>

       <div id="main-textcontainer">

           <?php
    	    while ( have_posts() ) : the_post();
	    the_content();
            endwhile; // End of the loop.
           ?>

           <div class="rule black-rule"></div><!-- .black-rule -->
           
       </div><!-- .main-textcontainer -->

       <?php get_footer(); ?>
    </div><!-- .container -->
</div><!-- .outer -->

</html>
