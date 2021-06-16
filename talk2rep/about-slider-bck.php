<?php
/**
 * Template Name: About
 * @site talk2rep
 */
get_header();
 ?>
<div id="primary" class="content-area">
<section class="about-section" id="company-slider-about">
<!-- <div class="background-blue-slider">
</div> -->
<div class="container">
<h1 class="top-us-big-header">“Nationally Recognized Quality <br /> Award Winning Services.”</h1>

<div>
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
</div>
</div>
</section>
<section class="who-we-are about-section" id="culture">
  <div class="container-fluid">

<div class="col-lg-5 col-md-5">
    <div class="company-history-header">
        <h3>COMPANY HISTORY</h3>
        <span></span>
    </div>
 <div class="who-we-are-paragraph">
     <p>Founded in 2001 and Headquartered in Fort Lauderdale, Florida.  Outplex is a leading digital and customer contact management services provider with multiple US operations and an international footprint with nearshore facilities in the Dominican Republic.  In 2005, Outplex launched work at home representatives and became a pioneer in the contact center industry with a highly skilled distributed network of @home agents.</p>

     <p>For 17+ years, Outplex has successfully serviced multiple government agencies and private industries in verticals such as Healthcare, Financial, Retail, Energy, Insurance, Technology, Travel and Telecommunications and more.</p>
     <p>Outplex is industry recognized as a top 50 customer services agency and is PCI certified.</p>
     <p>All Outplex representatives are background checked, tested and screened. Outplex has over 25,000 certified representatives with over 2000 candidates applying monthly worldwide.</p>
 </div>
</div>

      <div class="col-lg-6 col-md-6" style="padding-left: 20px;">
        <img src="<?=get_template_directory_uri()?>/dist/images/about/group-diagram.svg" alt="Company History"/>
      </div>

</div>
</section>

<section class="vision-mision-section">
<div class="container">
    <div class="col-lg-6 col-md-6 col-lg-offset-6 col-md-offset-6">
        <div class="col-lg-12 title-content">
            <h1 class="who-we-are-title">MISSION</h1>
            <span></span>
        </div>

        <p class="who-we-are-paragraph">
            Create outstanding customer experiences coupling <br /> empowered people with innovative technologies <br /> resulting in great value for our clients.
        </p>

        <div class="col-lg-12 title-content">
            <h1 class="who-we-are-title">VISION</h1>
            <span></span>
        </div>
        <p class="who-we-are-paragraph">
            Globally recognized trusted business partner for <br /> creating great customer experiences and innovative <br/> technology solutions.
        </p>

        <div class="col-lg-12 title-content">
            <h1 class="who-we-are-title">VALUES</h1>
            <span></span>
        </div>
        <div>
            <ul class="values-list">
                <li><p><span>O</span>utdo and Outperform by being your best</p></li>
                <li><p><span>A</span>dd value for our client’s everyday</p></li>
                <li><p><span>T</span>ake Action</p></li>
                <li><p><span>H</span>onesty and Integrity</p></li>
            </ul>
        </div>
    </div>
</div>
</section>


<section class="about-third about-section" id="leadership">
<div class="container">
<!-- HEADER -->
<div class="col-lg-12 col-md-12">
  <div class="about-third-header">
    <h2 class="text-darkblue-color">TALENT, EXPERIENCE, REPUTATION MATTERS!</h2>
		<span></span>
    </div>
  </div>
<!-- Images container -->
<div class="content-about-person">

<!-- team frame -->
<div class="container-person">
<!-- Modal -->
<div class="modal fade" id="tonyaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-51.png" class="img-responsive"/>
			<h2>TONYA COKER</h2>
			<h3>Vice President</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">With over 20 years in the Customer Experience industry working with many Fortune 500 companies, this avid travel lover is an integral part of the exponential growth of Outplex’s Nearshore operations.</p>

			<p class="text-left">
			Though most people know her for her managerial skills, few are aware that a perfect day would include staying at home with her dogs, her husband and a Netflix series.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->


<div class="about-person" data-toggle="modal" data-target="#tonyaModal">
</div>
</div>
<!-- [end] = team frame -->

<!-- team frame -->
<div class="container-person">
<!-- Modal -->
<div class="modal fade" id="personmodal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-53.png" class="img-responsive"/>
			<h2>PAUL MARTINEZ</h2>
			<h3>Director of Operations</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">Paul has over 12 years of Call Center Management experience with several Top 50 Omni Channel providers. Expertise in sales with experience in various verticals including Wireless, SaaS Solutions and Deregulated Energy.</p>

			<p class="text-left">
			Born and raised in New York where he attained academic accolades such as submission to the National Honors Society. He is a die-hard Dallas Cowboys fan, Believes Elvis is still alive and is a proud father and family man.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" class="about-person" data-toggle="modal" data-target="#personmodal-2">
</div>
</div>
<!-- [end] = team frame -->

<!-- team frame -->
<div class="container-person">
	<!-- Modal -->
<div class="modal fade" id="personmodal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-52.png" class="img-responsive"/>
			<h2>JIM RYAN</h2>
			<h3>CEO and Founder</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">Started my career as a phone rep making outbound calls for a telecom company.  I quickly realized sales, service and tech was in my blood and 25 years later I’m hiring people with a lot more talent than me.</p>

			<p class="text-left">
			Today, I’m proud to have one of the best and most innovative tech and business process outsourcing companies.  Along this great journey, 3 beautiful daughters and a few fish caught off the coast of Ft Lauderdale.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-3">
</div>
</div>
<!-- [end] = team frame -->

<!-- team frame -->
<div class="container-person">
<!-- Modal -->
<div class="modal fade" id="personmodal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-56.png" class="img-responsive"/>
			<h2>GABRIELA VENEGAS</h2>
			<h3>Director of People and Culture</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">Gaby is part of the amazing HR Talent Acquisition team with over 10 years of experience in full cycle recruitment. Through the years she has developed a keen eye for talent and has a proven track record of successfully identifying and placing top talent.</p>

			<p class="text-left">
			She has an excellent ability to understand business needs and build strong relationships with hiring managers and candidates. Outside of work, you will find her volunteering or taking long walks on the beach.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-4">
</div>
</div>
<!-- [end] = team frame -->


<!-- team frame -->
<div class="container-person">
	<!-- Modal -->
<div class="modal fade" id="personmodal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-54.png" class="img-responsive"/>
			<h2>DANA GOLDSHOLLE</h2>
			<h3>Diretor of Customer Success</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">With 10+ years of experience in the call center industry Dana is responsible for new Outplex business acquisitions, development and strategic partnership supporting clients interested in business process outsourcing.</p>

			<p class="text-left">
			She is focused on call center, live chat, customer engagement and making sure her son doesn’t break any bones during football games.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-5">
</div>
</div>
<!-- [end] = team frame -->


<!-- team frame -->
<div class="container-person">
	<!-- Modal -->
<div class="modal fade" id="personmodal-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-58.png" class="img-responsive"/>
			<h2>ELI RAMOS</h2>
			<h3>Finance Director</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">Playing the lead role of the company’s accounting, Eli is responsible for the preparation of all financial statements and reports.</p>

			<p class="text-left">
			However, don’t let the serious exterior fool you, he’s overall an adventurous soul who likes to spend his weekends in the ocean as a Certified Open Water Diver.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-6">
</div>
</div>
<!-- [end] = team frame -->

<!-- team frame -->
<div class="container-person">
	<!-- Modal -->
<div class="modal fade" id="personmodal-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/Mask-Group-57.png" class="img-responsive"/>
			<h2>RORY CHANEY</h2>
			<h3>Director of Quality & Training</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">14+ years of call center experience supporting global clients with a focus on Chat Engagements both in sales and customer service in a variety of industries’. </p>

			<p class="text-left">
			Responsibilities include designing and overseeing the use of training programs, evaluating employee information retention post training, and applying best practices in order to improve employee development. Born in New Jersey, has 2 sons and is a Golden State Warriors fan.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-7">
</div>
</div>
<!-- [end] = team frame -->

<!-- team frame -->
<div class="container-person">
	<!-- Modal -->
<div class="modal fade" id="personmodal-8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/oliver-paula.png" class="img-responsive"/>
			<h2>OLIVER PAULA</h2>
			<h3>Operations Manager</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">With 10 years of experience, Oliver has been a fundamental figure in building strong work relationships and applying innovative work practices.</p>

			<p class="text-left">
			He is famously known to be the “life of the party” with his fun personality and positive attitude.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-8">
</div>
</div>
<!-- [end] = team frame -->

<!-- team frame -->
<div class="container-person">

	<!-- Modal -->
	<div class="modal fade" id="personmodal-10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="<?=get_template_directory_uri()?>/dist/images/about/pete.png" class="img-responsive"/>
			<h2>PETE WALLEN</h2>
			<h3>Supervisor</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">Pete has over 8 years of management experience in the Omni-channel service industry. Managing day to day operations for multiple campaigns in a blended environment, working closely with staff to develop key strengths and bolster performance.</p>

			<p class="text-left">
			He’s a native from the beautiful island of Jamaica where he was a tennis prodigy. Pete is a loving father, a proud family man and a sports fanatic.  
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-10">
</div>
</div>
<!-- [end] = team frame -->


<!-- team frame -->
<div class="container-person">
	<!-- Modal -->
	<div class="modal fade" id="personmodal-9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 8px; margin-right: 8px;">
					<span aria-hidden="true">&times;</span>
					</button>
      <div class="col-lg-6 col-md-6 profile">
			<img src="https://outplex.com/wp-content/uploads/2020/09/Webp.net-resizeimage-1.jpg" class="img-responsive"/>
			<h2>ANDREA ALBURQUERQUE</h2>
			<h3>Program Manager</h3>
			</div>
			<div class="col-lg-6 col-md-6 bio-modal-text">
			<!-- <h1>BIO</h1> -->
			<p class="text-left">With 10+ years of experience in the call center industry, Andrea has become one of our key players when it comes to building strong client relations and successful workforce growth.</p>

			<p class="text-left">
			When she’s not planning the next strategy to drive the numbers on her projects, she spends a lot of time thinking about which beach to visit next or what adventure awaits.
			</p>

			</div>
      </div>

    </div>
  </div>
</div>
<!-- endModal -->
<div class="about-person" data-toggle="modal" data-target="#personmodal-9">
</div>
</div>
<!-- [end] = team frame -->


</div>
<!-- [end] Images Container -->
<!-- [END] header -->
</div>
</section> 

<section class="about-botto-slider about-section" style="background-color: #FAFAFA;" id="our-site">
<div class="col-lg-12 col-md-12">
  <div class="about-third-header">
    <h2 class="text-orange-color">DOMESTIC AND INTERNATIONAL SITES</h2>
  <span class="thir-bar"></span>
    </div>
	<div class="container">

        <div class="col-lg-12 col-md-12">
            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-1.jpg" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-1.jpg" class="img-responsive"/>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-2.png" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-2.png" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-2.png" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-2.png" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>
        </div> <!-- Close -->




        <div class="col-lg-12 col-md-12">
            <!-- Bottom- -->
            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-4.png" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-4.png" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-5.jpg" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>//dist/images/about/slider/Thumbnails/slider-sites-5.jpg" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-6.jpg" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-6.jpg" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>
        </div>



        <div class="col-lg-12 col-md-12">
            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-7.jpg" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-7.jpg" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-8.png" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-8.png" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 light-box-slider-img-cont">
                <a href="<?=get_template_directory_uri()?>/dist/aboutslider/new/slider-sites-9.png" data-lightbox="oursite" >
                    <img src="<?=get_template_directory_uri()?>/dist/images/about/slider/Thumbnails/slider-sites-9.png" class="img-responsive" rel="lightbox[roadtrip]"/>
                </a>
            </div>
        </div>



	</div>
  </div>
</section>
</div>
 <?php
get_footer();
 ?>

