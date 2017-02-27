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
                <h2>CURIBATOR VESTIBULUM UTRICIES<br/> PLACERAT. INTERDUM TORTOR.<br/><br/></h2>
                
                <p>Morbi nec nunc in risus molestie rhoncus. Suspendisse placerat nibh eu leo congue vestibulum. Integer tempor, ante sit amet molestie dignissim, mi lorem suscipit augue, id tincidunt dolor tortor id ex. Nullam iaculis nisi vel urna maximus vehicula. Curabitur vestibulum ultricies placerat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis eleifend nisi id tortor facilisis, et elementum tortor molestie. Etiam a purus quam. Suspendisse feugiat erat nec ante molestie, at dignissim felis condimentum. Donec imperdiet, quam eget vulputate iaculis, felis enim ultrices elit, imperdiet pretium purus nisl eu odio. <br/><br/></p>
            </div>
            
            <div class="rule black-rule"></div>
            <?php get_posts_for_page($class_name); ?>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>