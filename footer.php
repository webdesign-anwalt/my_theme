<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template

 */

/* 
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
		<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix dunkel">
	<?php responsive_footer_top(); ?>

    <div id="footer-wrapper" class="dunkel">
    
<div id="meinfooter" class="dunkel flexkarten zwei">
 <div class=" ">
<img style="height:40px; width:auto; padding-right:5px;" align="left" src="http://www.ent-schuldigung.de/wp-content/uploads/logo-weiss.png">
<div class="">
	 <span class="org adressemm"><b>Rechtsanwälte <br />Miehler &amp; Müller</b></span>
	 <div class="adr adresse" >
	  	<div class="street-address adresse">Sophienstr.3,  <span class="postal-code adresse">80333</span> <span 	class="locality adresse">München</span
	  	</div>
		<div class="adresse">(Nähe Karlsplatz / Stachus)</div>
		</div> 
	</div>
		<div class="li-einzeilig">
	<ul>
	<li class="bild-text"><img class="rund" src="http://www.ent-schuldigung.de/wp-content/uploads/jens.jpg" alt="Rechtsanwalt Müller" /><p><a href="http://www.ent-schuldigung.de/ueber-uns/#mueller">
	Rechtsanwalt <br />
Jens A. Müller <br />
089-45081615</a></p></li>
	<li class="bild-text"><img class="rund" src="http://www.ent-schuldigung.de/wp-content/uploads/john.jpg" /><p><a href="http://www.ent-schuldigung.de/ueber-uns/#miehler"> Rechtsanwalt <br />
John Miehler</br>
089-55213795</a></p></li>
</ul>
<a href="http://anwalt-verbraucherinsolvenz">Mehr Infos zur Verbraucherinsolvenz</a></div>

</div>

</div>

 <div class="">
<ul class="fa-ul">
	<li><i class="fa fa-certificate"></i> Beratungsstelle nach § 305 InsO<span>Als Rechtsanwälte sind wir berechtigt, die Bescheinigung über das Scheitern der außergerichtlichen Schuldenbereinigung auszustellen</span> </li>
	<li><i class="fa fa-calendar"></i> Keine Wartezeiten <span>Wir arbeiten schnell und effektiv</span></li>
	<li><i class="fa fa-gavel"></i> Erfahrung<span>Wir haben lange Erfahrung als Rechtsanwälte und Schuldnerberater</span></li>
	<li><i class="fa fa-bookmark"></i> Kompetenz <span>Mitglied der Arbeitsgemeinschaft Sanierung und Privatinsolvenz und Mitglied der Arbeitsgemeinschaft Schuldnerberatung </span></li>
</ul>

 </div>
        <div class="volle-breite" id="design">
           <a href="http://www.webdesign-anwalt.de/" target:"_blank">Design: www.webdesign-anwalt.de </a>
        </div><!-- end .powered -->
</div>     

        

        
    </div><!-- end #footer-wrapper -->
    
	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5105724-2', 'auto');
  ga('send', 'pageview');

</script>
<script src="//use.typekit.net/jjf1tab.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="functions.js"> </script>
</body>
</html>