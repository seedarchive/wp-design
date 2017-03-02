<?php /* Template Name: single-post-template */ ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php the_title(); ?></title>
      
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">  
    
    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/seed-design/styles/design.css" rel="stylesheet">
</head>
    
<div id="outer">
    <div id="container">
       <?php get_header(); ?>
        
        <div id="main-textcontainer">
            <div id="articletitlecontainer">
                <h1><?php the_title(); ?></h1>
                <div class="title-underline economy-background fixed-underline"></div>
            </div>
            
            <?php setup_postdata( $post ); ?>
            
            <div id="bodycontainer">
                <h2><span class="uppercase"><?php echo get_post_meta(get_the_ID(), 'article-author', true); ?><br/><br/><br/></span></h2>
                
                <h2 class="uppercase"><span class="economy-text"><?php the_excerpt(); ?></span></h2>
                
                <p><?php the_content(); ?></p>
                
                <div class="squarebutton pdf">
                    <h4 id="boxtext"><span class="economy-text"><a class="link" href="/articles/<?php $title = the_title_attribute('echo=0'); get_article_link($title); ?>">PDF</a></span></h4>
                </div>
            </div>
            
            <div class="rule black-rule"></div>
            
            <div id="postlistcontainer">
                <h4>CATEGORIES<br/><br/></h4>
                <?php display_categories($post, 25); ?>
                <h4>TAGS<br/><br/></h4>
                <?php display_tags_for_post($post); ?>
                <table class="linktable">
                    <tr>
                        <td style="width:20%"><h4>ORGANIZATION</h4></td>
                        <td style="width:60%"><h4><span class="light economy-text"><?php echo get_post_meta(get_the_ID(), 'organization', true); ?><br/></span></h4></td>
                    </tr>
                    <tr style="height: 10px"></tr>
                    <tr>
                        <td style="width:20%"><h4>LINK</h4></td>
                        <td style="width:50%; padding-right:5%"><h4><span class="light economy-text"><a href="<?php echo get_post_meta(get_the_ID(), 'link', true); ?>"><?php echo get_post_meta(get_the_ID(), 'link', true); ?></a></span></h4></td>
                        <td><div class="sharebox" style="float:right">
                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(get_the_ID()); ?>">
                            <img class="medialogo centerlogo" src="/images/fb-logo@2x.png" alt="share this article on facebook"></a>
                        </div></td>
                        <td><div class="sharebox">
                            <a href="http://twitter.com/share?url=<?php echo get_permalink(get_the_ID()); ?>">
                            <img class="medialogo centerlogo" src="/images/twitter-logo@2x.png" alt="share this article on twitter"></a>
                        </div></td>
                    </tr>
                </table>
            </div>
        </div>
       <?php get_footer(); ?>
    </div> 
</div>


</html>