<?php /* Template Name: economy-template */ ?>
<?php $class_name = 'economy'; ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Economy</title>
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
                <h2>WHAT'S THE ECONOMY FOR?<br/><br/></h2>
                
                <p>The current global economic model threatens basic human needs, social equity, and the life support systems of the planet.  The challenge for policy makers and citizens, alike, is to rethink our approach to the economy to yield a more enduring prosperity. <br/><br/></p>
            </div>
            
            <div class="rule black-rule"></div>
            <?php get_posts_for_page($class_name); ?>
        </div>
       <?php get_footer(); ?>

    s</div> 
</div>


</html>
