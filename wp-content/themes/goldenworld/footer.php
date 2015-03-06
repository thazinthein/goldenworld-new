<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

  <div class="footermain"> 
          <footer>
               <section class="footer_teasers_wrapper dark_section">
                    <div class="container triangles-of-section">
                         <div class="triangle-up-left"></div>
                         <div class="square-left"></div>
                         <div class="triangle-up-right"></div>
                         <div class="square-right"></div>
                    </div>
                    <div class="container">
                         <div class="row">
                            <div class="footercontent">
                              <div class="col-md-4">
                                  <img src="<?php bloginfo('template_directory');?>/images/facebook.png" class="img-responsive">
                                  <img src="<?php bloginfo('template_directory');?>/images/twitter.png" class="img-responsive">
                                  <img src="<?php bloginfo('template_directory');?>/images/google-plus.png" class="img-responsive">
                              </div>
                              <div class="col-md-8">
                                  <p> 
                                      Copyright © 2013 Golden World Machinery (S) Pte Ltd - All Right Reserved. <br>
                                      Website design by Exhibit Media Pte. Ltd.
                                  </p>
                              </div>
                            </div>
                         </div>
                    </div>
               </section>               
          </footer>
  </div>   

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/functions.php"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"><\/script>');</script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.min.js"></script>



<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->


</body>

</html>
