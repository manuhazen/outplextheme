<?php
/**
 * Template Name: Landing Page | April 2021
 * @site talk2rep
 */
get_header();
 ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
 <style>
.header-text{
	text-align: center;
	color:#fff;
}

.landing-page-content{
	font-size:1.25rem;
	line-height: 1.5;
}

 </style>
    <!-- Event snippet for Quote Submission conversion page -->
<!-- BEGIN LivePerson Monitor. -->
<script type="text/javascript">window.lpTag=window.lpTag||{},'undefined'==typeof window.lpTag._tagCount?(window.lpTag={wl:lpTag.wl||null,scp:lpTag.scp||null,site:'44778652'||'',section:lpTag.section||'',tagletSection:lpTag.tagletSection||null,autoStart:lpTag.autoStart!==!1,ovr:lpTag.ovr||{},_v:'1.10.0',_tagCount:1,protocol:'https:',events:{bind:function(t,e,i){lpTag.defer(function(){lpTag.events.bind(t,e,i)},0)},trigger:function(t,e,i){lpTag.defer(function(){lpTag.events.trigger(t,e,i)},1)}},defer:function(t,e){0===e?(this._defB=this._defB||[],this._defB.push(t)):1===e?(this._defT=this._defT||[],this._defT.push(t)):(this._defL=this._defL||[],this._defL.push(t))},load:function(t,e,i){var n=this;setTimeout(function(){n._load(t,e,i)},0)},_load:function(t,e,i){var n=t;t||(n=this.protocol+'//'+(this.ovr&&this.ovr.domain?this.ovr.domain:'lptag.liveperson.net')+'/tag/tag.js?site='+this.site);var o=document.createElement('script');o.setAttribute('charset',e?e:'UTF-8'),i&&o.setAttribute('id',i),o.setAttribute('src',n),document.getElementsByTagName('head').item(0).appendChild(o)},init:function(){this._timing=this._timing||{},this._timing.start=(new Date).getTime();var t=this;window.attachEvent?window.attachEvent('onload',function(){t._domReady('domReady')}):(window.addEventListener('DOMContentLoaded',function(){t._domReady('contReady')},!1),window.addEventListener('load',function(){t._domReady('domReady')},!1)),'undefined'===typeof window._lptStop&&this.load()},start:function(){this.autoStart=!0},_domReady:function(t){this.isDom||(this.isDom=!0,this.events.trigger('LPT','DOM_READY',{t:t})),this._timing[t]=(new Date).getTime()},vars:lpTag.vars||[],dbs:lpTag.dbs||[],ctn:lpTag.ctn||[],sdes:lpTag.sdes||[],hooks:lpTag.hooks||[],identities:lpTag.identities||[],ev:lpTag.ev||[]},lpTag.init()):window.lpTag._tagCount+=1;</script>
<!-- END LivePerson Monitor. -->

<div id="primary" class="content-area">
<div id="LP_DIV_1543502529558"></div>



<section class="contact-header-section">
  <div class="container">
    <div class="contact-header" >
      <h1 class="header-text" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
      	<?php the_title(); ?>      		
      	</h1>
       <h2 class="header-text" data-aos="" data-aos-easing="" data-aos-duration="">
       	<?php the_field('landing_page_h2'); ?>       		
       	</h2> 
    </div>
  </div>
</section>

<section class="main-form-container bg-light-gray">
<div class="container-fluid form-section-container">

<div class="col-lg-3 col-md-3 services-bubble">
    <!-- Services -->
    <div class="col-lg-12 col-md-12 award-content">
        <!-- <img src="<?=get_template_directory_uri()?>/dist/images/balls/114.png" class="img-responsive" style="margin: auto;" width="150.1" height="119.8"/> -->
    </div> 
    <!-- End Services -->
    <!-- Services -->
    <div class="col-lg-12 col-md-12 award-content">
        <!-- <img src="<?=get_template_directory_uri()?>/dist/images/balls/115.png" class="img-responsive" style="margin: auto;" width="150.1" height="119.8"/> -->
    </div>
    <!-- End Services -->
    <!-- Services -->
    <div class="col-lg-12 col-md-12 award-content">
        <!-- <img src="<?=get_template_directory_uri()?>/dist/images/balls/116.png" class="img-responsive" style="margin: auto;" width="150.1" height="119.8"/> -->
    </div>
    <!-- End Services -->
    <!-- Services -->
    <div class="col-lg-12 col-md-12 award-content">
        <!-- <img src="<?=get_template_directory_uri()?>/dist/images/balls/117.png" class="img-responsive" style="margin: auto;" width="150.1" height="119.8"/> -->
    </div>
    <!-- End Services -->
</div>

 
 <!-- main content - Landing Pages -->

<div class="col-lg-6 col-md-6 outplex-form-container">
	<div class="landing-page-content">
		<?php the_content(); ?>
	</div>	

	<form action="/thank-you-landing-page" method="post">
		<div class="col-lg-12 col-md-12">
			<div class="col-lg-12">
				<div class="outplex-input-group">
					<label style="margin-bottom: 14px;">I’m interested in</label>
				</div>
			</div>
		<div class="col-lg- col-md-4">
			<label class="container">Call Center Services
				<input type="checkbox" name="fqchecks[]" value="Call Center">
				<span class="checkmark"></span>
			</label>
		</div>
		<div class="col-lg-4 col-md-4">
			<label class="container">Chat Bot
				<input type="checkbox" name="fqchecks[]" value="Chat Bot">
				<span class="checkmark"></span>
			</label>
		</div>
		<div class="col-lg-4 col-md-4">
			<label class="container">Back Office Support
			<input type="checkbox" name="fqchecks[]" value="Back Office Support">
			<span class="checkmark"></span>
			</label>
		</div>
		</div>


<div class="col-lg-12 col-md-12">
	<div class="col-lg-4 col-md-4">
		<label class="container">Live Chat / SMS
		<input type="checkbox" name="fqchecks[]" value="Live Chat / SMS">
		<span class="checkmark"></span>
		</label>
	</div>
	<div class="col-lg-4 col-md-4">
		<label class="container">Social Media Management
		<input type="checkbox" name="fqchecks[]" value="Social Media Management" />
		<span class="checkmark"></span>
		</label>
	</div>
	<div class="col-lg-4 col-md-4">
		<label class="container">Tech Support
		<input type="checkbox" name="fqchecks[]" value="Tech Support" />
		<span class="checkmark"></span>
		</label>
	</div>
</div>

		 <div class="col-lg-12 col-md-12">
		 <div class="col-lg-4 col-md-4">
		 <label class="container">Software Development
		  <input type="checkbox" name="fqchecks[]" value="Software Development">
		  <span class="checkmark"></span>
		</label>
		 </div>

		</div>

		<!-- new col 12 -->
		<div class="col-lg-12 col-md-12">

		<div class="col-lg-6 col-md-6" style="display: none;">
		<div class="outplex-input-group">
		<label>Landing Page:</label>
		  <input type="text" class="form-control" name="LandingPage" value="<?php the_title(); ?>" required/>
		</div>
		</div>


		
		<div class="col-lg-6 col-md-6">
		<div class="outplex-input-group">
		<label>First name</label>
		  <input type="text" class="form-control" name="firstname" required/>
		</div>
		</div>

		<div class="col-lg-6 col-md-6">
		<div class="outplex-input-group">
		  <label>Last name</label>
		<input type="text" class="form-control" name="lastname" required/>
		</div>
		</div>
		<div class="col-lg-12 col-md-12">
		<div class="outplex-input-group">
		  <label> Email </label>
		<input type="email" class="form-control" name="email" required/>
		</div>
		</div>
		<div class="col-lg-6 col-md-6">
		<div class="outplex-input-group">
		  <label>Company</label>
		<input type="text" class="form-control" name="company" required/>
		</div>
		</div>
		<div class="col-lg-6 col-md-6">
		<div class="outplex-input-group">
		  <label>Phone</label>
		<input type="number" class="form-control" name="phone" required/>
		</div>
		</div>
		<div class="col-lg-6 col-md-6">
		<div class="outplex-input-group">
		  <label>How did you learn about us</label>
		<select class="form-control" name="slctnlearn">
		  <option disabled selected value> -- select an option -- </option>
		  <option value="event">Event</option>
		  <option value="social media">Social Media</option>
		  <option value="referral">Referral</option>
		  <option value="google search">Google Search</option>
		  <option value="tv-radio">TV/Radio</option>
		  <option value="other">Other</option>
		</select>
		</div>
		</div>
		<div class="col-lg-12 col-md-12">
		<div class="outplex-input-group">
		  <label>Tells us about your needs</label>
		  <textarea class="form-control" name="message"></textarea>
		</div>
		</div>


		 <div class="col-lg-12 col-md-12" style="margin-top: 10px;">
		 <label class="container">By contacting us, you agree to our privacy policy and the information you provide
		here will be collected by OutPLEX.
		  <input type="checkbox" required>
		  <span class="checkmark"></span>
		</label>
		 </div>
			
		<div class="g-recaptcha" data-sitekey="6Le82MYZAAAAABY5w1rIfxyuk8m1H2OqN-WCOayN"></div>

		<div class="col-lg-12 col-md-12 text-center">
		<div class="outplex-input-group">
		  <input type="submit" value="Submit" name="SubmitButton"/>
		</div>
		</div>

		</div>
	</form>
 </div>

<!-- /landing page content -->

 <div class="col-lg-12 col-md-12 award-content" style="margin-top:100px">
 <!-- Awards -->
 <div class="col-lg-3 col-md-3 col-xs-3 award-content">
 <img src="<?=get_template_directory_uri()?>/dist/images/Awards/contactcenteraward.png" class="img-responsive" style="margin: auto;" width="166.1" height="119.8"/>
 </div>
 <!-- End Award -->

   <!-- Awards -->
   <div class="col-lg-3 col-md-3 col-xs-3 award-content">
 <img src="<?=get_template_directory_uri()?>/dist/images/Awards/xquality_guaranteed.png" class="img-responsive" style="margin: auto;"   width="137.7" height="143.4"/>
 </div>
 <!-- End Award -->

     <!-- Awards -->
     <div class="col-lg-3 col-md-3 col-xs-3 award-content">
         <img src="<?=get_template_directory_uri()?>/dist/images/Awards/Inc5000.png" class="img-responsive" style="margin: auto;" width="166.1" height="119.8"/>
     </div>
     <!-- End Award -->

     <!-- Awards -->
     <div class="col-lg-3 col-md-3 col-xs-3 award-content">
         <img src="<?=get_template_directory_uri()?>/dist/images/Awards/CIS-Top-50_2012.png" class="img-responsive" style="margin: auto;" width="147.3" height="202.6"/>
     </div> 
     <!-- End Award -->
</div>
</div>
</section>

<?php /*
	hide locations on landing pages 

<section class="location-section">
	<div class="container">
	<div class="col-lg-12 col-md-12 location-section-header">
	<h2>locations</h2>
	<span class="underline"></span>
	</div>


	<div class="col-lg-4 col-md-4 col-xs-12" data-aos="fade-down-left" data-aos-duration="3000">
	<div class="contact-inf-content first-loc">
	<span class="vertical-line-contact"></span>
	<h3>US DOMESTIC</h3>
	<p>
	3363 West Commercial Blvd. <br /> Suite A 200<br/>
	Ft. Lauderdale, Florida 33309<br/>
	Phone: <a href="tel:1-866-856-2737">+1.866.856.2737</a><br/>
	Local Phone: <a href="tel:1-954-933-0660">954.933.0660</a><br/>
	E-mail: <a href="mailto:info@outplex.com">info@outplex.com</a><br/>
	Careers: <a href="mailto:recruiting@outplex.com">recruiting@outplex.com</a>
	</p>
	</div>
	</div>


	<div class="col-lg-4 col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="3000">
	<div class="contact-inf-content">
	<span class="vertical-line-contact"></span>
	<h3>WORK AT HOME</h3>
	<p>
	US BASED
	Phone: <a href="tel:1-866-856-2737">+1.866.856.2737</a> <br />
	Local Phone: <a href="tel:1-954-933-0660">954.933.0660</a> <br />
	E-mail: <a href="mailto:info@outplex.com">info@outplex.com</a> <br />
	Careers: <a href="mailto:recruiting@outplex.com">recruiting@outplex.com</a>
	</p>
	</div>
	</div>


	<div class="col-lg-4 col-md-4 col-xs-12" data-aos="fade-up-left" data-aos-duration="3000">
	<div class="contact-inf-content">
	<span class="vertical-line-contact"></span>
	<h3>NEARSHORE</h3>
	<p>
	Ave. Tiradentes, Esq. Lic. <br />
	Carlos Sanchez, Torre Cristal, Santo Domingo, Dominican Republic
	<br />
	4to Piso.<br />
	Local Phone: <a href="tel:1-829-954-1658">829.954.1658</a><br />
	E-mail: <a href="mailto:info@outplex.com">info@outplex.com</a><br />
	Careers: <a href="mailto:recruiting@outplex.com">recruiting@outplex.com</a>
	</p>
	</div>
	</div>


	</div>
	<div class="bottom-widget-container">
	<div id="map"></div>
	</div>

</section>
*/
?> 


</div>
 <?php
get_footer();
 ?>
