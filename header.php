<?php
$div_class = get_page_name($_SERVER['REQUEST_URI']);
?>

<div id="headercontainer">
    <div class="header-image <?php echo $div_class ?>"></div>
        
    <a href="<?php bloginfo( 'wpurl' ); ?>">
        <img class="seed-logo"
             src="<?php echo_image_url('seed-logo2.png'); ?>" 
             alt="link to home page">
    </a>
</div>

<?php wp_head(); ?> 

