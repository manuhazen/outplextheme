<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package talk2rep
 */

get_header();
?>

	<div id="primary" class="content-area">
<section class="video-home-section"><img src="<?=get_template_directory_uri()?>/images/woman_x.jpg" id="vid-pic" />
	<p id="roi-text"><span class="uno">Global Brands’ Choice for</span><br /><span class="dos">Complex Outsourcing</span><br /><span class="tres">and Higher ROI</span></p>

<!-- 
<div id="from-home-mobile" >
	<h1>Work at Home</h1>
	<h2>Domestic & International</h2>
</div>
-->
<div class="home-video-over">

<!-- +++++++++++++++++++++++++++++++++++++++ FROM HOME  ++++++++++++++++++++++++++++++++ -->
<!--
<div id="from-home" >
	<span id="close">X</span>
	<h1>Work at Home</h1>
	<h2>Domestic & International</h2>
</div>
-->
	
	
<video autoplay muted loop id="myVideo" class="home-video">
<!--	<source
	poster="http://v2.talk2rep.com/wp-content/uploads/2018/06/Preload.png"
	src="<?=get_template_directory_uri()?>/dist/videos/HOMEPAGE-prev-0727-10-30-AMx.mp4" type="video/webm" /> -->
	
	<source
	poster="http://v2.talk2rep.com/wp-content/uploads/2018/06/Preload.png"
	src="<?=get_template_directory_uri()?>/dist/videos/HOMEPAGE-prev-0727-10-30-AMx.mp4" type="video/mp4" />
  Your browser does not support HTML5 video.
</video>
</div>
		<div class="main-bottons-content col-lg-12 col-md-12 col-xs-12">
			<div class="col-lg-12 col-xs-12">
				<div class="col-lg-6 col-md-6 col-xs-6">
					<a href="https://chu.tbe.taleo.net/chu02/ats/careers/jobSearch.jsp?act=redirectCws&cws=1&org=TALK2REP" class="big-button-circle bg-gray-color alignright">APPLY NOW</a>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-6">
					<a href="/free-quote/" class="big-button-circle bg-orange-color alignleft">GET A QUOTE</a>
				</div>
			</div>
		</div>
</section>

<!-- Complex Section -->
<section class="second-section">

<div class="home-card-container">

<!-- Card Show -->
<div class="home-card">
<div class="home-card-header">
	<img src="<?=get_template_directory_uri()?>/dist/images/icons-01.png"  />
</div>
<div class="home-card-body">
	<h3 class="text-orange-color">CALL CENTER SERVICES</h3>
	<!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
</div>
<div class="home-card-footer">
	<a href="/call-centers-services">LEARN MORE</a>
</div>
</div>
<!-- Card Show -->

<!-- Card Show -->
<div class="home-card">
<div class="home-card-header">
<img src="<?=get_template_directory_uri()?>/dist/images/icons-02.png"  />
</div>
<div class="home-card-body">
	<h3 class="text-orange-color">LIVE CHAT /<br/> SMS </h3>
	<!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
</div>
<div class="home-card-footer">
	<a href="/live-chat-sms">LEARN MORE</a>
</div>
</div>
<!-- Card Show -->


<!-- Card Show -->
<div class="home-card">
<div class="home-card-header">
	<img src="<?=get_template_directory_uri()?>/dist/images/botx.png"  />
</div>
<div class="home-card-body">
	<h3 class="text-orange-color">CHAT BOT</h3>
	<!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
</div>
<div class="home-card-footer">
	<a href="/chat-bot">LEARN MORE</a>
</div>
</div>
<!-- Card Show -->



<!-- Card Show -->
<div class="home-card">
<div class="home-card-header">
<img src="<?=get_template_directory_uri()?>/dist/images/icons-03.png" />
</div>
<div class="home-card-body">
	<h3 class="text-orange-color">SOCIAL MEDIA <br/> MANAGEMENT</h3>
	<!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>  https://outplex.com/social-media-management/-->
</div>
<div class="home-card-footer">
	<a href="/social-media-management">LEARN MORE</a>
</div>

</div>
<!-- Card Show -->



<!-- Card Show -->
<div class="home-card le">
<div class="home-card-header">
<img src="<?=get_template_directory_uri()?>/dist/images/sms.png" />
</div>
<div class="home-card-body">
	<h3 class="text-orange-color">TECHNICAL <br/> SUPPORT</h3>
	<!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
</div>
<div class="home-card-footer">
	<a href="/tech-support">LEARN MORE</a>
</div>

</div>
<!-- Card Show -->



<!-- Card Show -->
<div class="home-card le">
<div class="home-card-header">
<img src="<?=get_template_directory_uri()?>/dist/images/icons-04.png" />
</div>
<div class="home-card-body">
	<h3 class="text-orange-color">BACK OFFICE <br/> SUPPORT</h3>
	<!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
</div>
<div class="home-card-footer">
	<a href="/back-office-support">LEARN MORE</a>
</div>

</div>
<!-- Card Show -->



    <!-- Card Show -->
    <div class="home-card le">
        <div class="home-card-header">
            <img src="<?=get_template_directory_uri()?>/dist/images/software-development.png" />
        </div>
        <div class="home-card-body">
            <h3 class="text-orange-color">SOFTWARE <br/> DEVELOPMENT</h3>
            <!-- <p class="text-darkblue-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
        </div>
        <div class="home-card-footer">
            <a href="/software-development">LEARN MORE</a>
        </div>

    </div>
    <!-- Card Show -->
<div>
</section>
<section class="second-section">
<div class="container second-section-body-container">
<div class="col-lg-12 col-md-12" style="margin-top: 38px; margin-bottom: 38px;">
    <!-- <p class="pragraph-home-top">We develop and operationalize customer engagement platforms and collect insightful data to help companies better understand their customers. Outplex strengthens customer relationships often at 40% less than our competitors.</p> -->
	<h2 class="text-orange-color big-topic" style="text-align: center; margin: auto;">Complex Outsourcing • Omnichannel Services </h2>
	
	<!-- Container -->
	<div class="container">

	<div class="col-lg-12 col-md-12 col-xs-12">
	<div class="col-lg-6 col-md-6 col-xs-12">

	<!-- Stick -->
	<div class="list-check-container check-right-margin"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
	<!-- Checked -->
	<div class="list-checked">
	<img src="<?=get_template_directory_uri()?>/dist/images/check.svg" />
	</div>
	<!-- -END-Checked -->
	<!-- Checked Text -->
	<div class="list-checked-text">
	<p>Develop and Operationalize <br/> Customer  Engagement Platforms</p>
	</div>
	<!-- Checked Text -->

	</div>
	<!-- Stick -->
	</div>

	<div class="col-lg-6 col-md-6 col-xs-12">


	<!-- Stick -->
	<div class="list-check-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
	<!-- Checked -->
	<div class="list-checked">
	<img src="<?=get_template_directory_uri()?>/dist/images/check.svg" />
	</div>
	<!-- -END-Checked -->
	<!-- Checked Text -->
	<div class="list-checked-text">
	<p>Strengthen Customer Relationships</p>
	</div>
	<!-- Checked Text -->

	</div>
	<!-- Stick -->


	</div>

	</div>




	<div class="col-lg-12 col-md-12 col-xs-12">
	<div class="col-lg-6 col-md-6 col-xs-12">

	<!-- Stick -->
	<div class="list-check-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
	<!-- Checked -->
	<div class="list-checked">
	<img src="<?=get_template_directory_uri()?>/dist/images/check.svg" />
	</div>
	<!-- -END-Checked -->
	<!-- Checked Text -->
	<div class="list-checked-text">
	<p>Collect Insightful Data to Help <br/>Companies Better Understand Their Customers</p>
	</div>
	<!-- Checked Text -->

	</div>
	<!-- Stick -->
	</div>

	<div class="col-lg-6 col-md-6 col-xs-12">


	<!-- Stick -->
	<div class="list-check-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2200">
	<!-- Checked -->
	<div class="list-checked">
	<img src="<?=get_template_directory_uri()?>/dist/images/check.svg" />
	</div>
	<!-- -END-Checked -->
	<!-- Checked Text -->
	<div class="list-checked-text">
	<p>Clients Save an Average of 40%+</p>
	</div>
	<!-- Checked Text -->

	</div>
	<!-- Stick -->


	</div>

	</div>


	</div>
	<!-- Container -->

</div>
</div>
</section>
	
	
<!-- ====================== Custom Styles ===================== -->
<style>
	.between-second-and-third{
		/* display: none; */
		background-color: white;
		margin: 80px 0;
	}
	.between-second-and-third .centralizer {
		max-width:1000px;
		width: 100%;
		margin: 0 auto;
		min-height:20px;
	}
	.between-second-and-third .centralizer h1 {
		color: #f16d10;
		text-align: center;
		font-size: 25px;
		margin-bottom: 45px;
	}
	.between-second-and-third .centralizer .iframe-container {
		margin: 0 auto;
		width: 560px;
	}
	.between-second-and-third .centralizer .iframe-container iframe {
		
	}
	/* ---------- Work from Home ------------------------------------------------------ */
	#from-home{
		opacity: 1;
		background-color:#f16d10;
		
		width: 750px;
		height: 270px;
		position: absolute;
		z-index: 999;
		
		top: 45%;
		margin-top: -80px;
		
		left:-750px;
		border-top-right-radius: 50px;
		border-bottom-right-radius: 50px
	}
	#from-home h1,
	#from-home h2{
		color: white;
	}
	#from-home h1{
		font-weight: bold;
		font-size: 75px;
		position: absolute;
		left: 110px;
		top: 34px;
	}
	#from-home h2{
		color: white;
		font-size: 43px;
		position: absolute;
		top: 126px;
		left: 114px;
	}
	span#close{
		color: #ca4102;
		font-size: 49px;
		position: absolute;
		top: 28px;
		right: 18px;
		width: 61px;
		height: 61px;
		cursor: pointer;
		padding: 10px;
	}
	
	
	/* -------------work from home mobible----------------------------------------------- */
	#from-home-mobile{
		display: none;
		opacity: 1;
		background-color:#f16d10;
		width: 100%;
		height: 75px;
		position: absolute;
		z-index: 999;
		bottom: 80px;
		left:0;
	}
	#from-home-mobile h1,
	#from-home-mobile h2{
		color: white;
	}
	#from-home-mobile h1{
		width: 165px;
		font-weight: bold;
		font-size: 25px;
		position: relative;
		margin: 0 auto;
		top: 10px;
	}
	#from-home-mobile h2{
		width: 205px;
		color: white;
		font-size: 18px;
		position: relative;
		top: 10px;
		margin: 0 auto;
	}
	
	/* ========================================================================================= */
	/* ------------------------------------ responsive ----------------------------------------- */
	/* ========================================================================================= */
	
	@media (max-width: 1073px){
		#from-home {
			width: 370px;
			height: 150px;
			position: absolute;
			z-index: 999;
			top: 40%;
			margin-top: -80px;
			left: -750px;
			
		}
		#from-home h1{
			font-weight: bold;
			font-size: 30px;
			position: absolute;
			left: 52px;
    		top: 8px;
		}
		#from-home h2{
			color: white;
			font-size: 20px;
			position: absolute;
			top: 60px;
    		left: 39px;
		}
	}
	
	@media (max-width: 1024px) {
		#from-home-mobile{
			display: block;
		}
	}
	
	@media (max-width: 980px) {
		.between-second-and-third{
			padding: 0 20px;
		}
		.between-second-and-third .centralizer {
			
		}
		.between-second-and-third .centralizer h1 {
			color: #f16d10;
			text-align: center;
			font-size: 25px;
			margin-bottom: 45px;
		}
		.between-second-and-third .centralizer .iframe-container {
			margin: 0 auto;
			max-width: 560px;
			width: 100%;
		}
		.between-second-and-third .centralizer .iframe-container iframe {
			width: 100%;
		}	
	}
	
	
	
	
	
	
</style>
	<script>
		
	</script>
<section class="between-second-and-third">
	<div class="centralizer">
		<h1 class="big-topic">OutPLEX Brand Digital Transformation as Featured on Bloomberg</h1>
		<div class="iframe-container">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7HLVnEqpyM0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section class="third-section-container">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
</section>
	</div><!-- #primary -->

<?php
get_footer();
