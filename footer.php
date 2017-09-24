<div id="footercontainer">
<ul id="footerlistcontainer">
    <li id="contactcontainer">
        <div class="footershadow environment"></div>
        <div id="footerlinkcontainer">
            <h2><span class="whitetext"><a href="/contact">CONTACT</a></span><br/><br/></h2>
        </div>
    </li>
    <li id="partnercontainer">
        <div class="footershadow economy"></div>
        <div id="footerlinkcontainer">
            <h2><span class="whitetext"><a href="/partners">PARTNER ORGANIZATIONS</a></span><br/><br/></h2>
        </div>
    </li>
    <li id="aboutcontainer">
        <div class="footershadow democracy"></div>
        <div id="footerlinkcontainer">
            <h2><span class="whitetext">SHARE</span><br/><br/></h2>
                <a href="http://www.facebook.com/sharer.php?u=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo"
                       src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-logo-white-2x.png" 
                       alt="share this site on facebook"></a>
                <a href="http://twitter.com/share?text=A%20resource%20center%20focused%20on%20solutions%20for%20the%20environment,%20economy,%20and%20democracy&url=<?php bloginfo( 'wpurl' ); ?>">
                  <img class="medialogo"
                       src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-logo-white-2x.png"
                       alt="share this site on twitter"></a>
        </div>
    </li>
</ul>
</div>

<?php wp_footer(); ?>
