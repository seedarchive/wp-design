<?php /* Template Name: contact-template */ ?>
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

    <title>Contact Us</title>
</head>
    
<div id="outer">
   <div id="container">
       
<!-- hack: inline the header here, to eliminate the search tags -->
<div id="headercontainer">
    <div class="header-image home"></div>
        
    <a href="<?php bloginfo( 'wpurl' ); ?>">
        <img class="seed-logo"
             src="<?php echo get_stylesheet_directory_uri(); ?>/images/seed-logo2.png" 
             alt="link to home page">
    </a>
    

</div>

<?php wp_head(); ?> 


        
        <div id="sharecontainer">
            <div class="sharebox" style="margin-bottom: -0.5px">
                <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo centerlogo"
                       src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-logo-2x.png" 
                       alt="share this site on facebook"></a>
            </div>
            <div class="sharebox" style="margin-bottom: -0.5px">
                <a href="http://twitter.com/share?text=A%20resource%20center%20focused%20on%20solutions%20for%20the%20environment,%20economy,%20and%20democracy&url=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo centerlogo"
                       src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-logo-2x.png"
                       alt="share this site on twitter"></a>
            </div>
            <div id="sharetext">
                <h2 class="vertical"><span class="economy-text">SHARE</span></h2>
            </div>
        </div>

       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1>CONTACT AND EMAIL LIST</h1>
                <div class="title-underline yellow"></div>
            </div>
            
            <div id="bodycontainer">
<p>Email: seedproj@uw.edu</p>
                <p>Center for Communication and Civic Engagement<br/>
                Department of Communication, Room 125<br/>
                Box 353740<br/>
                University of Washington<br/>
                Seattle, WA 98195 USA<br/>
                206-685-1504<br/>
                <a href="http://ccce.com.washington.edu">ccce.com.washington.edu</a>
                <br/><br/></p>
                
                <h3 class="nopadding">Project Mailing List<br/><br/></h3>

<p>We invite you to sign up for our project mailing list:</p>

<ul>

<li><a
href="https://mailman1.u.washington.edu/mailman/listinfo/seed-discussion">seed-discussion</a>:
a discussion list for SEED-related topics</li>

</ul>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>
