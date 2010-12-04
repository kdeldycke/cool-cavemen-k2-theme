<?php

// This method contain all the addional CSS
function additional_css() {
  ?>
  <!--[if IE]>
  <style type="text/css" media="screen">
  #partners   a .hover,
  .topbuttons a .hover {
   cursor: pointer;
  }
  </style>
  <![endif]-->
  <?php
}


// This method contain all the addional JavaScript
function additional_js() {
  ?>
  <script type='text/javascript' src='/wp-content/themes/k2/styles/cool-cavemen/cufon-yui.js'></script>
  <!--
    Coffee Service font javascript is compiled on http://cufon.shoqolate.com/generate/ with the following parameters:
      * Glyphs included: Uppercase, Lowercase, Numerals, Punctuation, WordPress punctuation, Basic Latin & Latin-1 Supplement.
      * Usage limitied to coolcavemen.com domain.
      * Font scaled to 360 units per em (default value).
      * Path optimization: 2 units (default value).
      * Included kerning tables (default value).
  -->
  <script type='text/javascript' src='/wp-content/themes/k2/styles/cool-cavemen/Coffee_Service_400.font.js'></script>
  <script type="text/javascript">
    Cufon.replace('h1.entry-title');
    Cufon.replace('h3.entry-title');
  </script>
  <script type="text/javascript" charset="utf-8">
    // TODO: unduplicate !
    jQuery(function () {
      //if ($.browser.msie && $.browser.version < 7) return;
      jQuery('#partners li')
        .removeClass('highlight')
        .find('a')
        .append('<span class="hover" />').each(function () {
          var $span = jQuery('> span.hover', this).css('opacity', 0);
          jQuery(this).hover(function () {
            // on hover
            $span.stop().fadeTo(100, 1);
          }, function () {
            // off hover
            $span.stop().fadeTo(500, 0);
          });
        });
    });
    jQuery(function () {
      //if ($.browser.msie && $.browser.version < 7) return;
      jQuery('.topbuttons li')
        .removeClass('highlight')
        .find('a')
        .append('<span class="hover" />').each(function () {
          var $span = jQuery('> span.hover', this).css('opacity', 0);
          jQuery(this).hover(function () {
            // on hover
            $span.stop().fadeTo(100, 1);
          }, function () {
            // off hover
            $span.stop().fadeTo(500, 0);
          });
        });
    });
  </script>
  <script type='text/javascript' src='/wp-content/themes/k2/styles/cool-cavemen/js-popupwindow/jquery.popupwindow.js'></script>
  <script type="text/javascript">
    jQuery(function(){
      jQuery(".musicplayer").popupwindow();
    });
  </script>
  <?php
}


// This method add all the HTML code relative to the Multipolar album release
function multipolar_announcement() {
  ?>
  <ul class="topbuttons">
    <li class="highlight"><a class="play musicplayer" href="http://coolcavemen.com/wp-content/themes/k2/styles/cool-cavemen/music-player.html" rel="height:111,width:420,resizable:0,center:1">Play Multipolar !</a></li>
    <li class="highlight"><a class="buy"  href="http://shop.coolcavemen.com/multipolar-lp">Buy Multipolar !</a></li>
  </ul>
  <?php
}


// Show all copyrights and legal stuff
function legal_notice() {
  ?>
  <!--h4>Latests comments</h4>
  <h4>Recent forum discussions</h4>
  <h4>Latests photos</h4-->
  <h4>Partenaires, sponsors et mécénes</h4>
  <div class="centeringwrapper">
    <ul id="partners">
      <li class="highlight"><a class="gofannon"   href="http://www.gofannon-records.com">Gofannon Records</a></li>
      <li class="highlight"><a class="lichti"     href="http://www.myspace.com/espace_lichti">Lich'ti</a></li>
      <li class="highlight"><a class="commlenvol" href="http://commlenvol.com">commlenvol</a></li>
      <li class="highlight"><a class="kde"        href="http://kevin.deldycke.com">Kevin Deldycke</a></li>
      <li class="highlight"><a class="thomann"    href="http://www.thomann.de/partner_redirect.html?partner_id=36150">thomann</a></li>
    </ul>
  </div>
  <p><a href="/biography/about-us/">about us</a> | <a href="/pro/contact/">contacts</a> | <a href="/pro/mentions-legales/">mentions légales</a> | <a href="/news.php">archives: les anciennes news</a> | <a href="/e107_plugins/forum/forum_viewforum.php?3">vieux forum</a></p>
  <p>Copyright &copy; 2004~<?php echo date('Y');?> Cool Cavemen</p>
  <?php
}


function header_background() {
  ?>
  <div class="imgwrapperwrapper">
    <div class="imgwrapper">
      <img id="band" src="/wp-content/themes/k2/styles/cool-cavemen/header<?php if (is_home()): ?>-home<?php endif; ?>.jpg"/>
    </div>
  </div>
  <?php
}


add_action('template_body_top', 'additional_css');
add_action('template_body_top', 'additional_js');
add_action('template_body_top', 'header_background');
add_action('template_header'  , 'multipolar_announcement');
add_action('template_footer'  , 'legal_notice');


/* IDEA: use translation to add the "♬♪" chars ?
        // Insert separator for the titles above
        if ( !is_home() and !is_404() ) {
                _e(' at ','k2_domain');
        }
*/

?>
