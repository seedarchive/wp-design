<?php
$div_class = get_page_name($_SERVER['REQUEST_URI']);
?>

<div id="headercontainer">
    <div class="header-image <?php echo $div_class ?>"></div>
        
    <a href="<?php bloginfo( 'wpurl' ); ?>">
        <img class="seed-logo" src="/images/seed-logo@3x.png" alt="link to home page">
    </a>
    
    <div id="navcontainer"> 
        <a href="/tags">
            <img class="tags-icon" src="/images/tags-icon.png" alt="link to all tags page">
        </a>
        
        <a href="/search">
            <img class="search-icon" src="/images/search-icon@2x.png" alt="link to search page">
        </a>
        
        <ul id="navbarcontainer">
            <a href="/environment">
                <li><img class="navimg" src="/images/environment@2x.png" alt="link to environemnt page"></li>
            </a>
            <a href="/economy">
                <li><img class="navimg" src="/images/economy@2x.png" alt="link to economy page"></li>
            </a>
            <a href="/democracy">
                <li><img class="navimg" src="/images/democracy@2x.png" alt="link to democracy page"></li>
            </a>
        </ul>
        
        <ul id="shadowcontainer">
            <?php echo get_shadow_colors($div_class) ?>
        </ul>
        
    </div>
</div>

<?php wp_head(); ?> 

