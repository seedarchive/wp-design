<?php /* Template Name: environment-template */ ?>
<?php $class_name = 'environment'; ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Environment</title>
</head>
    
<div id="outer">
   <div id="container">
       
       <?php get_header( 'resourcecenter' ); ?>
       
       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1 class="uppercase"><?php echo $class_name; ?></h1>
                <div class="title-underline <?php echo $class_name; ?>-background"></div>
            </div>
            
            <div id="bodycontainer">
                <h2>HOW CAN WE LIVE WITHIN<br/> THE LIMITS OF OUR PLANET?<br/><br/></h2>
                
                <p>Our life support systems are facing catastrophic threats.  We must find new ways of existing within the constraints of the only earth we have. <br/><br/></p>
            </div>
            
            <div class="rule black-rule"></div>
            <?php get_posts_for_page($class_name); ?>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
