<?php /* Template Name: single-tag-template */ ?>
<?php define( 'WP_USE_THEMES', false ); ?>
<?php $tag = get_queried_object(); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tag: <?php echo $tag->name; ?></title>
</head>
    
<div id="outer">
   <div id="container">
       
       <?php get_header(); ?>
       
       <div id="main-textcontainer">
            <div id="tagtitlecontainer">
                <?php $category = category_for_tag($tag->name); ?>
                <h1>Articles tagged <span class="<?php echo $category; ?>-text"><?php echo $tag->name; ?></span></h1>
                <div class="title-underline <?php echo $category; ?>-background fixed-underline" style="margin-bottom:0"></div>
            </div>
            
            <div id="postlistcontainer">
                <?php get_posts_for_tag($tag); ?>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
