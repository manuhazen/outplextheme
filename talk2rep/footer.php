<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talk2rep
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="container-fluid">
	<!-- Left footer -->
	<div class="col-lg-12 col-md-12">
 <!-- First inf -->
	<div class="col-lg-2 col-md-2 text-center">
	<img src="<?=get_template_directory_uri()?>/dist/images/outplex-white-logo.png" class="footer-logo"  />

	</div>

<!-- Second inf -->
<div class="col-lg-8 col-md-8 text-center">
	<!-- <h4 class="footer-sub-title">Contact</h4>
	<p class="footer-text-two"><strong>phone: </strong> +1.866.856.2737</p>
	<p class="footer-text-two"><strong>Local phone: </strong> 954.933.0660</p>
	<p class="footer-text-two"><strong>E-mail: </strong> info@outplex.com</p>
	<p class="footer-text-two"><strong>Sales: </strong> sales@outplex.com</p>
	<p class="footer-text-two"><strong>Careers: </strong> recruiting@outplex.com</p> -->
<!-- Privacy Policy | About Us | Career Oportunities |Request a Quote | Privacy Policy -->
	<ul class="footer-menu">
	<li>
	<a href="/privacy-policy/">Privacy Policy |</a>
	</li>
	<li>
	<a href="/about-us/">About Us |</a>
	</li>
	<li>
	<a href="http://chu.tbe.taleo.net/chu02/ats/careers/jobSearch.jsp?act=redirectCws&cws=1&org=TALK2REP">Career Oportunities |</a>
	</li>
	<li>
	<a href="/free-quote">Request a Quote</a>
	</li>
	</ul>
<p class="footer-address">3363 West Commercial Blvd., Suite A 200<br/> Ft. Lauderdale, Florida 33309</p>
	</div>

<!-- Third inf -->
<div class="col-lg-2 col-md-2 text-center">

	<ul class="footer-menu-social">
	<!-- <li>
	<a href="https://www.instagram.com/talk2repdr/">
	<img src="<?=get_template_directory_uri()?>/dist/images/icons/instagram.png" />
	</a>
	</li> -->

	<!-- <li>
	<a href="https://www.facebook.com/Talk2RepDR/">
	<img src="<?=get_template_directory_uri()?>/dist/images/icons/facebook.png" />
	</a>
	</li> -->

		<li>
	<a href="https://twitter.com/OutPLEX_US">
	<img src="<?=get_template_directory_uri()?>/dist/images/icons/twitter-icon.png" rel="nofollow"/>
	</a>
	</li>

		<li>
	<a href="https://www.linkedin.com/company/outplex-outsourcing/" rel="nofollow">
	<img src="<?=get_template_directory_uri()?>/dist/images/icons/linkedin.png" />
	</a>
	</li>
<p>&copy; OutPLEX</p>
	</ul>
	</div>

	</div>

	<!-- Right footer -->
	<!-- <div class="col-lg-4 col-md-4">
	<h4 class="subscribe-title">Subscribe to OutPLEX News
via Email</h4>
	<div class="footer-form-content"> -->
		<!-- <p class="text-orange-color">Lorem ipsum dolor sit amet consectetur <br/> adipisicing elit.</p> -->
	<!-- <div class="form-inline">
    <div class="form-group">
      <input type="text" class="talk2-gray-input" id="pwd" placeholder="Email Address" name="pwd">
    </div>

    <button type="button" class="t2rep-button-footer bg-orange-color">SUBSCRIBE</button>
</div>
</div>	 -->

	</div>
	</div>
	</footer><!-- #colophon -->
	<script>
    AOS.init();
  </script>
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
	console.log('ok, jquery should be visible:', $);

	
	
</script>
</body>
</html>
