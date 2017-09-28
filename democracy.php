<?php /* Template Name: democracy-template */ ?>
<?php $class_name = 'democracy'; ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Democracy</title>
</head>
    
<div id="outer">
    <div id="container">
       <?php get_header(); ?>
        
        <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1 class="uppercase"><?php echo $class_name; ?></h1>
                <div class="title-underline <?php echo $class_name; ?>-background"></div>
            </div>
            
            <div id="bodycontainer">
                <h2>HOW DO WE GET OUR DEMOCRACY BACK?<br/><br/></h2>
                
                <p>Political systems once regarded as mechanisms for solving problems are now widely regarded as part of the problem.   We need pathways for political parties and citizen movements to work better, together to refresh political agendas and bring new thinking into governments. <br/><br/></p>
            </div>
            
            <div class="rule black-rule"></div>
            <?php get_posts_for_page($class_name); ?>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
