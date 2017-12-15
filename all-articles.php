<?php /* Template Name: all-articles-template */ ?>
<?php $class_name = 'all-articles'; ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All Articles</title>
</head>
    
<div id="outer">
    <div id="container">
       <?php get_header( 'resourcecenter' ); ?>
        
        <div id="main-textcontainer">
            <div id="articletitlecontainer">
                <h1 class="uppercase">ALL ARTICLES</h1>
                <div class="title-underline <?php echo $class_name; ?>-background fixed-underline"></div>
            </div>
            
            <?php get_posts_for_page($class_name); ?>
            
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
