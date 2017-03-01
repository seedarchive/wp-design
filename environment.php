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
      
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">  
    
    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/seed-design/styles/design.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">

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
    </div> 
</div>


</html>
