<?php /* Template Name: troyes-workshop-template */ ?>
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

    <title>Workshop</title>
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
                <h1>SEED WORKSHOP</h1>
                <div class="title-underline blue"></div>
            </div>
            

<div id="workshopcontainer">
<h2>Solutions for Economics, Environment and Democracy </h2>

<br/><br/>

<h2>A Workshop at the 
8th International Conference on Communities &amp; Technologies</h2>

<br/><br/>

<p>
Organized by W. Lance Bennett and Alan Borning (University of Washington, Seattle USA) 
and Volker Wulf (University of Siegen, Siegen, Germany)</p>

</div>

<div id="workshopcontainer">

<p>Quality of life for growing numbers of people on the planet is
threatened by a set of integrated, systemic problems in the economy,
environment and democracy. The goal of the SEED project is to form an
international network of scholar/activists, advocates, and practitioners
who seek to address these problems in a similarly integrated fashion. We
are approaching this in two ways: first, by developing an online platform
that connects our participants and facilitates sharing and assessing ideas
and action experiments operating in local, national and international
arenas; and second, by organizing a set of in-person workshops and other
meetings of participants. This Communities &amp; Technologies Workshop will
be the first of these in-person workshops. Our goals for the workshop are
three-fold: first, to help shape the plans for the SEED community; second,
to present and discuss innovative proposals and work in this broad area;
and third, for a key set of our participants from Europe, North America,
and elsewhere to meet in person to help establish and further the
connections among us.

<p>The workshop will take place at the Universit&eacute; de Technologie de
Troyes, France (<a href="http://comtech.community/venue/">map</a>),
27 June 2017, from 9:30am-5:00pm, in conjunction with the 
<a href="http://comtech.community/">Communities &amp; Technologies
Conference</a>. If you are interested in attending, please send a short
description of your interests and relevant background by email to
seedproj@uw.edu by April 30.  Optionally, you can also include a position
paper with your application. We will then select a maximum of around 15
participants, with the goals of including both academics and practitioners,
and a diverse range of disciplines and skills, in this broad area of
seeking integrated solutions to problems of economy, environment, and
democracy.</p>

<p>A central aspect of the SEED project is a
<a href="<?php echo home_url( 'resource-center' ); ?>">resource center</a> of
position papers and other materials.  We thus also invite attendees to add
appropriate position papers or other materials to this resource center.  To
facilitate exchanges at the workshop, we will send out a list of these
papers in advance.  (Of course, participants can also provide papers later
to add to the resource center, but these wouldn't be available to the
participants before the workshop.)</p>

<table>
<tr><td><b>Important Dates</b></td></tr>
<tr> <td>Applications due:</td> <td>30 April 2017</td> </tr>
<tr> <td>Decisions:</td> <td>10 May 2017 (or earlier)</td> </tr>
<tr> <td>Optional workshop papers due:&nbsp;&nbsp;</td> <td>30 May 2017</td> </tr>
<tr> <td>Workshop:</td> <td>27 June 2017</td> </tr>
</table>

</br>
<b>For Additional Information</b> </br>
Additional information on the workshop themes is provided in our
<a href="<?php echo_article_url( 'troyes-workshop-2017.pdf' ); ?>">workshop description</a>,
which was published in the Communities &amp; Technologies Conference Proceedings.</p>

<br/>
<br/>

</div>


        <div class="rule black-rule"></div>
        </div>

       <?php get_footer(); ?>
    </div> 
</div>


</html>
