<?php /* Template Name: resource-center-template */ ?>
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

    <title>SEED Resource Center</title>
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
                <h2>SEED RESOURCE CENTER<br/><br/></h2>
                
                <p>The SEED Resource Center is a library of
                resources focused on solutions for the Environment,
                Economy, and Democracy, with the goal of increasing cross
                discipline thinking and collaboration, bolstering
                solidarity, and breaking down the traditional silos between
                these interconnected fields.  The current site is a
                prototype version of the Center, and will evolve and expand
                in the coming months. <br/><br/></p>

            </div>
            
            <div class="rule purple-rule"></div>
        </div>

        <div class="squarebutton viewarticles">
                    <h4 id="boxtext"><span class="economy-text">
                                    <a class="link" href="<?php echo
                    home_url( 'all-articles'); ?>">ALL
                    ARTICLES</a></span></h4>
                            </div>

                            <?php get_footer(); ?>
                                </div>
                                </div>


</html>
