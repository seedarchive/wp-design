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
      
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">  
    
    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/seed-design/styles/design.css" rel="stylesheet">
</head>
    
<div id="outer">
    <div id="container">
        <?php get_header(); ?>
        
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
                <h2>SOLUTIONS FOR THE ENVIRONMENT, <br/>ECONOMY, AND DEMOCRACY<br/><br/></h2>
                
                <p>The SEED Resource Center will be a smart library of resources focused on solutions for the Environment, Economy, and Democracy, with the goal of increasing cross discipline thinking and collaboration, bolstering solidarity, and breaking down the traditional silos between these interconnected fields.  The current site is a prototype version of the Center, and will evolve and expand in the next months. <br/><br/>
                    
                In order to achieve sustainability and global equity, we need a greater understanding of the intricate networked relationships of systemic problems. SEED will provide cutting edge ideas and proposals, and illustrates their interconnectivity visually in interactive network maps, making complex networks intuitive and digestible. <br/><br/></p>
            </div>
            
            <div class="rule yellow-rule"></div>
        </div>
        
        <div id="problemcontainer">
            <div id="problem-textcontainer">
                <h2><span class="economy-text">PROBLEM</span><br/><br/></h2>
                <div id="bodycontainer">
                    <p><span class="whitetext">The economic thinking taught in top universities still produces experts who discount environmental costs and offer failed formulas for prosperity based on unrealistic growth, whether from the remnants of the Keynesian left or the still reigning neoliberal right. Meanwhile, democratic reform movements face resistance from established parties and interests, and fail to mobilize broader engagement among publics caught up in more immediate issues and economic crises. The activists calling for changes in these areas of environment, economy, or democracy too often operate in separate spheres, promoting reforms that fall short of systemic change.</span></p>
                </div>
            </div>
        </div>
        
        <div id="main-textcontainer">
            <h2><span class="economy-text">OPPORTUNITY</span><br/><br/></h2>
            <div id="bodycontainer">
                <p>Its time to move past the fragmented politics of resistance and develop a politics of positive, aligned action. To address these integrated, systemic issues and overcome barriers to making change we need to build cross-boundary communities of knowledge prepared to interface more effectively with democratic institutions. <br/><br/>
                    
                The SEED library will help integrate and spread ideas created by actors working for economic, environmental, and democratic systems that are fair, representative and sustainable. The goal is to develop a new generation of thinkers that challenge the dominance of obsolete, neoliberal, grow-at-all-costs economics and politics. SEED empowers the people with the knowledge necessary to successfully reshape political institutions and policies with democratic approaches that work for the people and the planet.<br/><br/></p>
            </div>
            
            <div class="rule purple-rule"></div>
        </div>
        
        <div class="squarebutton viewarticles">
            <h4 id="boxtext"><span class="economy-text"><a class="link" href="/all-articles/">ALL ARTICLES</a></span></h4>
        </div>

        <?php get_footer(); ?>
    </div> 
</div>


</html>
