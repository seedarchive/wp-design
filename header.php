<?php
$div_class = get_page_name($_SERVER['REQUEST_URI']);
?>

<div id="headercontainer">
    <div class="header-image <?php echo $div_class ?>"></div>
        
    <a href="<?php bloginfo( 'wpurl' ); ?>">
        <img class="seed-logo"
             src="<?php echo get_stylesheet_directory_uri(); ?>/images/seed-logo2.png" 
             alt="link to home page">
    </a>
    
    <div id="navcontainer"> 
        <a href="<?php echo home_url( 'tags'); ?>">
            <img class="tags-icon"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/images/tags-icon.png"
                 alt="link to all tags page">
        </a>
        
        <a href="<?php echo home_url( 'search'); ?>">
            <img class="search-icon"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon-2x.png" 
                 alt="link to search page">
        </a>
        
        <ul id="navbarcontainer">
            <a href="<?php echo home_url( 'environment'); ?>">
                <li><img class="navimg" 
                         src="<?php echo get_stylesheet_directory_uri(); ?>/images/environment-2x.png"
                         alt="link to environment page"></li>
            </a>
            <a href="<?php echo home_url( 'economy'); ?>">
                <li><img class="navimg"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/images/economy-2x.png"
                         alt="link to economy page"></li>
            </a>
            <a href="<?php echo home_url( 'democracy'); ?>">
                <li><img class="navimg"
                         src="<?php echo get_stylesheet_directory_uri(); ?>/images/democracy-2x.png"
                         alt="link to democracy page"></li>
            </a>
        </ul>
        
        <ul id="shadowcontainer">
            <?php echo get_shadow_colors($div_class) ?>
        </ul>
        
    </div>
</div>

<?php wp_head(); ?> 

