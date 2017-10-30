<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
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
                <h1>SEED</h1>
                <div class="title-underline purple"></div>
            </div>
            
            <div id="bodycontainer">
                <h2>SOLUTIONS FOR ENVIRONMENT, <br/>ECONOMY, AND DEMOCRACY<br/><br/></h2>
                
<p>Quality of life for growing numbers of people on the planet is
threatened by a set of integrated, systemic problems in the environment and
our economic and political systems. The goal of the SEED project is to form an
international network of scholar/activists, advocates, and practitioners
who seek to address these problems in a similarly integrated fashion. We
are approaching this in two ways: first, by developing an online platform
that connects our participants and facilitates sharing and assessing ideas
and action experiments operating in local, national and international
arenas; and second, by organizing a set of in-person workshops and other
meetings of participants.</p>

<p>Please see the following for additional information:</p>

<ul>

<li>The <a href="manifesto/">SEED Manifesto</a> -- summarizes our analysis of
the current situation and approach</li>

<li><a href="resource-center/">Resource Center</a> -- a prototype
version of a library of resources relevant to SEED</li>

<li><a href="2017workshop/">SEED Workshop at the 8th International
  Conference on Communities &amp; Technologies</a> (workshop held
  June 2017)</li>

<li><a href="https://ischool.uni-siegen.de/sozioinformatik/solutions-for-environment-economics-and-democracy-seed/">SEED
Workshop at the University of Siegen, Germany</a>
 (workshop held October 2017)</li>

</ul>

</div>

        </div>
        
        <?php get_footer(); ?>
    </div> 
</div>


</html>
