<?php /* Template Name: manifesto-template */ ?>
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

    <title>SEED Manifesto</title>
      
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">  
    
    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/seed-design/styles/design.css" rel="stylesheet">
</head>
    
<div id="outer">
   <div id="container">
       
       <?php get_header(); ?>
       
       <div id="main-textcontainer">
            <div id="titlecontainer">
                <h1>SEED Manifesto</h1>
                <div class="title-underline blue"></div>
            </div>
            

<div id="workshopcontainer">
<h2>Solutions for Economics, Environment and Democracy </h2>

<br/><br/>

</div>

<div id="workshopcontainer">

<p>This page will contain the text of the SEED Project Manifesto.</p>

<p>In the meantime, here is a <a href="/articles/manifesto.pdf">pdf version<a>.
</p>

</br>

<br/>
<br/>

</div>


        <div class="rule black-rule"></div>
        </div>

<!-- footer inlined for this page, since contact info is different -->
<div id="footercontainer">
<ul id="footerlistcontainer">
    <li id="contactcontainer">
        <div class="footershadow environment"></div>
        <div id="footerlinkcontainer">
            <h2><span class="whitetext">CONTACT</span><br/><br/></h2>
            <p><span class=whitetext>SEEDPROJ@UW.EDU</span></p>
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
                <a href="http://www.facebook.com/sharer.php?u=<?php home_url( ); ?>">
                <img class="medialogo" src="/images/fb-logo-white@2x.png" alt="share this site on facebook"></a>
                <a
                href="http://twitter.com/share?text=A%20workshop%20on%20solutions%20for%20the%20environment,%20economy,%20and%20democracy&url=<?php bloginfo( 'wpurl' ); ?>/2017workshop">
                <img class="medialogo" src="/images/twitter-logo-white@2x.png" alt="share this site on twitter"></a>
        </div>
    </li>
</ul>
</div>

<?php wp_footer(); ?>

    </div> 
</div>


</html>
