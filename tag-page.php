<?php /* Template Name: tag-page-template */ ?>
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

    <title>Tags</title>
</head>
    
<div id="outer">
   <div id="container">
       
       <?php get_header( 'resourcecenter' ); ?>
       
       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1>TAGS</h1>
                <div class="title-underline purple"></div>
            </div>
            
            <div id="postlistcontainer">
                <?php display_all_tags(); ?>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
