<?php /* Template Name: partners-template */ ?>
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

    <title>Partners</title>
</head>
    
<div id="outer">
   <div id="container">
        <?php get_header(); ?>
        
        <div id="sharecontainer">
            <div class="sharebox" style="margin-bottom: -0.5px">
                <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo centerlogo"
                       src="<?php echo_image_url('fb-logo-2x.png'); ?>"
                       alt="share this site on facebook"></a>
            </div>
            <div class="sharebox" style="margin-bottom: -0.5px">
                <a href="http://twitter.com/share?text=A%20resource%20center%20focused%20on%20solutions%20for%20the%20environment,%20economy,%20and%20democracy&url=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo centerlogo"
                       src="<?php echo_image_url('twitter-logo-2x.png'); ?>"
                       alt="share this site on twitter"></a>
            </div>
            <div id="sharetext">
                <h2 class="vertical"><span class="economy-text">SHARE</span></h2>
            </div>
        </div>

       
       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1>PARTNERS</h1>
                <div class="title-underline blue"></div>
            </div>
            
            <div id="postlistcontainer">
                <?php display_partners(); ?>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
