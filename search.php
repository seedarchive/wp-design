<?php /* Template Name: search-template */ ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search</title>
</head>
    
<div id="outer">
   <div id="container">
       
       <?php get_header( 'resourcecenter' ); ?>
       
       <div id="main-textcontainer">
            <div id="searchcontainer">
                <?php get_search_form(); ?>
                <?php $search = generate_search_query(); ?>
                <div style="margin-bottom: 15px"></div>
                <h4><a href="<?php echo home_url( 'tags'); ?>">View all tags</a><br/><br/></h4>
            </div>
            
            <div class="rule black-rule"></div>
           
            <div id="postlistcontainer">
                <?php display_posts($search); ?>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>

</html>
