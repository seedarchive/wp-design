<?php /* Template Name: partners-template */ ?>
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

    <title>Partners</title>
</head>
    
<div id="outer">
   <div id="container">
       
       <?php get_header(); ?>
       
       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1>PARTNERS</h1>
                <div class="title-underline blue"></div>
            </div>
            
            <div id="postlistcontainer">
                <?php display_partners(); ?>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
