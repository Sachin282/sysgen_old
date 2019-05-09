<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $sql = mysqli_connect('fdb24.awardspace.net','2936315_SysGen','Sachin@282','2936315_SysGen');
// $qry = 'select * from queries';
if(isset($_POST['qry_form']))
{
	echo $this;
	// mysql_query($sql,"insert into queries value('$_POST[qry_name]','$_POST[qry_email]','$_POST[qry_phone]','$_POST[qry_message]')");

}
// echo mysqli_error($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="website designers mumbai, web designers mumbai, website developers mumbai, web developers mumbai , website designing company mumbai, website development, software Application android designers,software Application android designers mumbai, software Application Android developers mumbai, software Application android developers mumbai ,software Application android designing company mumbai, software Application android development mumbai,"/>	
    <meta property="og:description" name="description" content="SysGen is an Innovative website Designing and Application Developing team, providing solutions to business,corporates and startups for their website/Application."/>
	<title>SysGen - the Digital Planet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/SysGen_logo.png">
    <!-- Bootstrap framework main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- magnific popup CSS -->	
	<link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- ====== PRELOADER ====== -->
	<div id="overlay">
		<div id="progstat"></div>
		<div id="progress"></div>
	</div>

	<!-- ====== HEADER ====== -->
	<div class="navbar navbar-default navbar-fixed-top menu-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="https://SysGen.tk" class="navbar-brand"><img src="images/SysGen2.png"alt="logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<nav>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="page-scroll" href="#home">[Home]</a></li>						
						<li><a class="page-scroll" href="#services">[Services]</a></li>
						<li><a class="page-scroll" href="#whyUs">[Why SysGen]</a></li>						
						<li><a class="page-scroll" href="#skills">[Our work]</a></li>						
						<!-- <li><a class="page-scroll" href="#portfolio">Portfolio</a></li> -->
						<!-- <li><a class="page-scroll" href="#blog">Blog</a></li>						 -->
						<li><a class="page-scroll" href="#about-me">[About]</a></li>						
						<li><a class="page-scroll" href="#contact-us">[Contact]</a></li>
					</ul>
				</nav>
			</div> 
		</div><!--- END CONTAINER -->
	</div> 

	<!-- START SLIDER -->
	<section id="home" class="welcome-area">
		<div class="welcome-slider-area">
			<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators carousel-indicators-slider">
					<li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
					<li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="single-slide-item slide-1">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="container">
										<div class="row">
											<div class="col-md-6">
												<h2>We turn your <strong>ideas</strong> into reality</h2>
												 <p>Building everything you need</p>
												<div class="home_btn">
													<a href="tel:+917039349983" class="app-btn page-scroll home_btn_color_two">Contact Now <i class="fa fa-phone"></i></a>
													<a href="#contact-us" class="app-btn page-scroll home_btn_color_one">Arrange Phone Call</a>
													<a href="https://api.whatsapp.com/send?phone=+917039349983&text=Hi%2C+I+contacted+you+Through+your+website." class="app-btn page-scroll home_btn_color_success">Whatsapp Now <i class="fa fa-whatsapp"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="single-slide-item slide-2">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<h2>Get an Expert advise on a single call</h2>
												 <p>We cares for our customer</p>
												<div class="home_btn">
													<a href="tel:+917039349983" class="app-btn page-scroll home_btn_color_one">Contact Now</a>
													<a href="#contact-us" class="app-btn page-scroll home_btn_color_two">Arrange Phone Call</a>
													<a href="https://api.whatsapp.com/send?phone=+917039349983&text=Hi%2C+I+contacted+you+Through+your+website." class="app-btn page-scroll home_btn_color_success">Whatsapp <i class="fa fa-whatsapp"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="single-slide-item slide-3">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<h2>Give a lift to your Business with us</h2>
												 <p>Will support you to grow up your Business</p>
												<div class="home_btn">
													<a href="tel:+917039349983" class="app-btn page-scroll home_btn_color_two">Contact Now</a>
													<a href="#contact-us" class="app-btn page-scroll home_btn_color_one">Arrange Phone Call</a>
													<a href="https://api.whatsapp.com/send?phone=+917039349983&text=Hi%2C+I+contacted+you+Through+your+website." class="app-btn page-scroll home_btn_color_success">Whatsapp <i class="fa fa-whatsapp"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SLIDER -->

<section  class="section-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-title text-center">
					<h1>Creative & Innovative Website Designers & Developers</h1>
					<span></span>
				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-12">
  					<div class="about-desc text-center">
  						<p>SysGen is an Innovative website Designing and Application Developing team, providing solutions to business,corporates and startups to get their own custom website/Application. We offer complete services for all your website/application needs.</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section> <!-- end about-me -->
  	<!-- ====== SERVICES ====== -->
  	<section id="services" class=" section-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-title text-center">
					<h2>Services we provide</h2>
					<span></span>
				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-desktop"></i></p>
  						<h3>Application of your need</h3>
  						<p>We make Web,Computer and Android Application with advanced technique and technology.</p>
  					</div>
  				</div>
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-desktop"></i></p>
  						<h3>E-commerce</h3>
  						<p>show your product online  attractively and effectively to get buyers all over the world</p>
  					</div>
  				</div>
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-wordpress"></i></p>
  						<h3>Clean Code</h3>
  						<p>Code becomes more optimizable when it is clear as crystal, and easy for documentation.</p>
  					</div>
  				</div>
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-desktop"></i></p>
  						<h3>On Demand App Solutions</h3>
  						<p>We make on demand app that is app with any special features, like food delevery app, etc.</p>
  					</div>
  				</div>
  			</div>
  			<br>	
  			<div class="row">
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-mobile"></i></p>
  						<h3>Responsive Design</h3>
  						<p>Build for any device, to bring your business on every plateform .</p>
  					</div>
  				</div>
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-internet-explorer"></i></p>
  						<h3>Expert advice</h3>
  						<p>You can Assist an Expert on call or we can manage a meeting on your Convinient.</p>
  					</div>
  				</div>
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-internet-explorer"></i></p>
  						<h3>Domain and Hosting</h3>
  						<p>Confused for Hosting?Ask us.We register domain and provide hosting facility.</p>
  					</div>
  				</div>
  				<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
  					<div class="single-service text-center">
  						<p><i class="fa fa-internet-explorer"></i></p>
  						<h3>Maintenance Service</h3>
  						<p>We maintain/update your website as per your requirement.</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section> <!-- end services -->

  	<!-- ====== BACKGROUND ====== -->

  	<section id="whyUs" class="section-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-title text-center">
					<h2>Why SysGen</h2>
					<span></span>
				</div>
  			</div>
  			<div class="row">
				<ul class="timeline">
				    <li>
				        <div class="timeline-badge"><i class="fa fa-check"></i></div>
				        <div class="timeline-panel">
				            <div class="timeline-heading">
				                <h3 class="timeline-title"><strong>Techniques and Technologies</strong></h3>
				                <!-- <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small></p> -->
				            </div>
				            <div class="timeline-body">
				                <p>we always use advanced technologies and updated techniques to make your Application compatible with all upcoming Features. The Framework we use is mostly secure and loaded with many new technology including which resource optimizing, Security, Features, Responsive and many more.</p>
				            </div>
				        </div>
				    </li>
				    <li class="timeline-inverted">
				        <div class="timeline-badge warning"><i class="fa fa-credit-card"></i></div>
				        <div class="timeline-panel">
				            <div class="timeline-heading">
				                <h3 class="timeline-title"><strong>Customer is First</strong></h3>
				            </div>
				            <div class="timeline-body">
				                <p>First we listen to our customer to understand there needs and requirements after which we sugest our idea for there better resolution and to clear our scope for the project. we uses walkthrough process to get a proper understanding between Development team and Customer toward the project to make a proper understanding between team member and customer about project</p>
				            </div>
				        </div>
				    </li>
				    <li>
				        <div class="timeline-badge danger"><i class="fa fa-bar-chart"></i></div>
				        <div class="timeline-panel">
				            <div class="timeline-heading">
				                <h3 class="timeline-title"><strong>The Services</strong></h3>
				            </div>
				            <div class="timeline-body">
				                <p>We provide our all support and service for your application. you can contact us or we can mannage a phone call or a meeting for you within working hours and working days</p>
				            </div>
				        </div>
				    </li>
				    <li class="timeline-inverted">
				        <div class="timeline-panel">
				            <div class="timeline-heading">
				            	<h3 class="timeline-title"><strong>Open Communication</strong></h3>
				                <!-- <p><small class="text-muted"><i class="fa fa-clock-o"></i> 10 hours ago via Facebook</small></p> -->
				            </div>
				            <div class="timeline-body">
				                <p>We encourage transparency in communication. Every individual in SysGen can raise their opinions which enrich us with valuable ideas that have led to the progress of the organization.</p>
				            </div>
				        </div>
				    </li>
				    <li>
				        <div class="timeline-badge info"><i class="fa fa-calendar-o"></i></div>
				        <div class="timeline-panel">
				            <div class="timeline-heading">
				                <h3 class="timeline-title"><strong>The Team</strong></h3>
				            </div>
				            <div class="timeline-body">
				                <p>Our team is made up of mix of skills from front-end designers to back-end engineers. The team has been helping steer organizations to meet their web presence goals and objectives.</p>
				                <hr>
				                <div class="btn-group">
				                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
				                    <i class="fa fa-cog"></i> <span class="caret"></span>
				                    </button>
				                    <!-- <ul class="dropdown-menu" role="menu">
				                        <li><a href="#">Action</a></li>
				                        <li><a href="#">Another action</a></li>
				                        <li><a href="#">Something else here</a></li>
				                        <li class="divider"></li>
				                        <li><a href="#">Separated link</a></li>
				                    </ul> -->
				                </div>
				            </div>
				        </div>
				    </li>
	
				</ul> <!-- end timeline -->
  			</div><!-- end row -->

  		</div><!-- end container -->
  	</section> <!-- end background -->


  	<!-- ====== MY SKILLS ====== -->
	<section id="skills" class="section-padding">
		<div class="container">
			<div class="row">
  				<div class="section-title text-center">
					<h2>Types of Project we Make</h2>
					<span></span>
				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-6">
  					<div class="my-skill-desc">
	  					<h2>It's indicate our Work level</h2>
						<p>Perspiciatis neque eligendi eveniet magni, vel suscipit repudiandae molestiae ipsum doloribus, tenetur nisi voluptatum aut nesciunt perferendis beatae asperiores velit natus. Tempora ratione blanditiis provident, vitae nobis, dolores et reiciendis?</p>
						<p>SysGen is an Digital planet .</p>
	  				</div>
  				</div>
  				<div class="col-md-6">  					
					<div class="skill-bars">
						<div class="skillbar clearfix" data-percent="90%">
							<div class="skillbar-title"><span>Web Site</span></div>
							<div class="skillbar-bar"></div>
							<!-- <div class="skill-bar-percent">80%</div> -->
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title"><span>CMS based</span></div>
							<div class="skillbar-bar"></div>
							<!-- <div class="skill-bar-percent">80%</div> -->
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="70%">
							<div class="skillbar-title"><span>Android</span></div>
							<div class="skillbar-bar"></div>
							<!-- <div class="skill-bar-percent">50%</div> -->
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="50%">
							<div class="skillbar-title"><span>Computer</span></div>
							<div class="skillbar-bar"></div>
							<!-- <div class="skill-bar-percent">30%</div> -->
						</div> <!-- End Skill Bar -->

						<div class="skillbar clearfix " data-percent="80%">
							<div class="skillbar-title"><span>Consultency</span></div>
							<div class="skillbar-bar"></div>
							<!-- <div class="skill-bar-percent">70%</div> -->
						</div> <!-- End Skill Bar -->
						
						</div> <!-- End Skill Bar -->

					</div> <!-- end skill-bars -->
  				</div>
  			</div>
		</div>
	</section> <!-- end my-skills -->
	
	<?php
	/*	  	
	<!-- ====== PORTFOLIO ====== -->
	<section id="portfolio" class="template_portfolio section-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="section-title text-center">
					<h2>Our Portfolio</h2>
					<span></span>
				</div>						
				<ul class="portfolio-filters text-center">
					<li class="filter active" data-filter="all">all</li>
					<li class="filter" data-filter="cardiology">design</li>
					<li class="filter" data-filter="neurology">development</li>
					<li class="filter" data-filter="urology">ui/ux</li>
					<li class="filter" data-filter="dentel">programming</li>
				</ul>
				<!-- END PORTFOLIO FILTER-->
				<div class="grid">
					<div class="col-md-3 col-sm-4 mix neurology dentel no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/1.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/1.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix urology web no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/2.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/2.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix dentel no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/3.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/3.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix urology xray no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/4.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/4.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix  cardiology no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/5.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/5.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix neurology xray no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/6.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/6.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix cardiology urology no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/7.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/7.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
					<div class="col-md-3 col-sm-4 mix neurology dentel no-padding">
						   <div class="image-wrapper">
								<img src="images/portfolio/8.jpg" class="img-responsive" alt="work">
						   <div class="image-overlay">
							   <span>
							   <a href="images/portfolio/8.jpg" class="image-popup">Title Goes Here</a>
							   </span>
							</div>
						  </div>
					</div> <!--work item-->
				</div><!--/.grid-->		
			</div><!--- END ROW -->	
			<div class="portfolio_btn text-center">
				<a href="#" class="btn btn-about-bg">See More portfolio</a>
			</div>				
		</div><!--- END CONTAINER -->
	</section>
	*/
	?>
	<!-- end portfolio -->
	
	<?php
	/*
	<!-- ====== COUNTER UP ====== -->
	<section id="counter-up" class="section-padding">
		<div class="container">
			<div class="promoInfo text-center">
				<div class="row">
					<div class="col-md-3  col-sm-6 col-xs-12">
						<p><span class="counter">892</span></p>
						<b>Project Done</b>
					</div>
					<div class="col-md-3  col-sm-6 col-xs-12">
						<p><span class="counter">1256</span></p>
						<b>Satisfied Clients</b>
					</div>
					<div class="col-md-3  col-sm-6 col-xs-12">
						<p><span class="counter">1053</span></p>
						<b>Expert Team</b>
					</div>
					<div class="col-md-3  col-sm-6 col-xs-12">
						<p><span class="counter">1255</span></p>
						<b>Social Work</b>
					</div>
				</div>
			</div> <!-- end promoInfo -->
		</div>
	</section> <!-- end counter-up -->

	<!-- ====== TESTIMONIALS ====== -->
	<section id="testimonial" class="section-padding">
		<div class="container">
			<div class="row">
  				<div class="section-title text-center">
					<h2>Testimonials</h2>
					<span></span>
				</div>
  			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="slider-testimonial">
						<div class="carousel slide" data-ride="carousel" id="quote-carousel">
			                <!-- Bottom Carousel Indicators -->
			                <ol class="carousel-indicators">
			                    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/commenter1.png" alt="Commenter">
			                    </li>
			                    <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/commenter2.png" alt="Commenter">
			                    </li>
			                    <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/commenter3.png" alt="Commenter">
			                    </li>
			                </ol>
			                <!-- Carousel Slides / Quotes -->
			                <div class="carousel-inner text-center">
			                	
			                    <!-- Quote 1 -->
			                    <div class="item active">
			                        <div class="row">
			                            <div class="col-sm-8 col-sm-offset-2">
			                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			                                <h4 class="clientName">JABIN KANE</h4>
			                                <p class="clientDesignation">CEO, Gazi Multimedia</p>
			                            </div>
			                        </div>
			                    </div>
			                    
			                    <div class="item">
			                        <div class="row">
			                            <div class="col-sm-8 col-sm-offset-2">                         	
			                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			                                <h4 class="clientName">JABIN KANE</h4>
			                                <p class="clientDesignation">Managing Director, SysGen</p>
			                            </div>
			                        </div>
			                    </div>
			                    
								<div class="item">
			                        <div class="row">
			                            <div class="col-sm-8 col-sm-offset-2">                         	
			                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			                                <h4 class="clientName">JABIN KANE</h4>
			                                <p class="clientDesignation">Product Manager, Google</p>
			                            </div>
			                        </div>
			                    </div>
			                    
			                </div><!-- end carousel-inner -->
			            </div> <!-- end carousel slide -->
					</div> <!-- end slider-testimonial -->
				</div>
			</div>
		</div>
	</section> <!-- end testimonials -->
*/
	?>
	<!-- ====== BLOG ====== -->
	<!-- <section id="blog" class="section-padding">
		<div class="container">
			<div class="row">
  				<div class="section-title text-center">
					<h2 class="section-title-white">My blog</h2>
					<span class="section-title-white"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="single-blog">
						<img src="images/blog-img-1.jpg" alt="Blog" class="img-responsive">
						<h2>Web Design</h2>
						<div class="author-date">By <a href="#">Mofizul</a>, 25 Jan 2017</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur asperiores veritatis id, magni tenetur vel, recusandae expedita alias sint adipisci tempore voluptatem, aut numquam, facere tempora! Quis suscipit at, quo.</p>
						<div class="btn-blog-bg">
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="single-blog">
						<img src="images/blog-img-2.jpg" alt="Blog" class="img-responsive">
						<h2>Graphics Design</h2>
						<div class="author-date">By <a href="#">Kevin</a>, 25 Jan 2017</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur asperiores veritatis id, magni tenetur vel, recusandae expedita alias sint adipisci tempore voluptatem, aut numquam, facere tempora! Quis suscipit at, quo.</p>
						<div class="btn-blog-bg">
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="single-blog">
						<img src="images/blog-img-3.jpg" alt="Blog" class="img-responsive">
						<h2>SEO Mastering</h2>
						<div class="author-date">By <a href="#">Lucy</a>, 25 Jan 2017</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur asperiores veritatis id, magni tenetur vel, recusandae expedita alias sint adipisci tempore voluptatem, aut numquam, facere tempora! Quis suscipit at, quo.</p>
						<div class="btn-blog-bg">
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --> <!-- end blog -->




	<!-- ====== ABOUT ME ====== -->
  	<section id="about-me" class="section-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-title text-center">
					<h2>About us</h2>
					<span></span>
				</div>
  			</div>
  			<div class="row">
  				<!-- <div class="col-md-5">
  					<div class="about-img" style="background-color: #666666ff">
  						<img src="images/solar with background.png" class="img-responsive" alt="about-img">
  					</div>
  				</div> -->
  				<div class="col-md-12">
  					<div class="about-desc">
  						<h2>We are creative developers</h2>
  						<p>SysGen is known for its Simple but Innovative website Designing and clean code.</p>
  						<p>SysGen is particularly well efficient in giving the desired forms to the marketing efforts by various professionals using websites and other web based tools. Creativity, Speed of service delivery, Accuracy and highest level of customer support has always been the well cherished attributes of SysGen</p>
  						<p>Synchronization between needs of customers and customer’s has always been the core specialty. The websites are designed not just to suit your requirements but also your website visitor’s requirements. By successful combination of various technologies, efforts are directed towards developing your business and not just your websites or any other web related application.</p>
  						<!-- <a class="btn btn-about-bg" href="http://SysGen.tk/files/example.pdf">Download BIO</a> -->
  					</div>
  				</div>
  			</div>
  		</div>
<!-- 
  		<div class="row">
  					<div class="about-img" style="background-color: #666666ff">
  						<img src="images/solar with background.png
  						" class="img-responsive" alt="about-img">
  					</div>
  				</div> -->

  	</section> <!-- end about-me -->
  	

	<!-- ====== CONTACT Us ====== -->
	<section class="contact" id="contact-us">
		<div class="container">
			<div class="row">
  				<div class="section-title text-center">
					<h2>Any query?</h2>
					<span></span>
				</div>
			</div>

			<div class="row form-wrapper">
				<div class="col-md-8 col-md-offset-2">

					<!-- Contact-Me Form -->
					<form name="qry_form" id="contactForm"  novalidate>
						<div class="row control-group">
						    <div class="form-group col-xs-12 floating-label-form-group controls">
						        <label>Name</label>
						        <input name="qry_name" type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
						        <p class="help-block text-danger" id="ername"></p>
						    </div>
						</div>

						<div class="row control-group">
						    <div class="form-group col-xs-12 floating-label-form-group controls">
						        <label>Email Address</label>
						        <input name="qry_email" type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
						        <p class="help-block text-danger" id="ermail"></p>
						    </div>
						    <div class="col-xs-12">
						        <h3 style="float:center;"><b>OR</b></h3>
						    </div>
						    <div class="form-group col-xs-12 floating-label-form-group controls">
						        <label>Phone Number</label>
						        <input name="qry_phone" type="text" class="form-control" placeholder="987654321" id="phone" required data-validation-required-message="Please enter your Phone Number.">
						        <p class="help-block text-danger" id="erphone"></p>
						    </div>
						</div>

						<div class="row control-group">
						    <div class="form-group col-xs-12 floating-label-form-group controls">
						        <label>Message</label>
						        <textarea name="qry_message" rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
						        <p class="help-block text-danger"></p>
						    </div>
						</div>

						<div id="success"> </div> <!-- For success/fail messages -->
						<button type="submit" class="btn submit-btn">Send Your Message</button>
					</form>

				</div>
			</div>
			<!-- Contact Details -->
			<div class="row contact-info">
				<div class="row">
  				<div class="section-title text-center">
					<h2>Contact Us</h2>
					<span></span>
				</div>
			</div>
				<div class="col-md-4 col-sm-6 col-xs-12 info">
					<i class="fa fa-phone text-center"></i>
					<div class="info-content">
						<h3>phone</h3>
						<span>(+91) 70393 49983</span>
						<span>(+91) 88265 54423</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 info">
					<i class="fa fa-envelope text-center"></i>
					<div class="info-content">
						<h3>Email</h3>
						<span>sachinmaurya282@gmail.com</span>
						<span>info@SysGen.com</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 info">
					<i class="fa fa-home text-center"></i>
					<div class="info-content">
						<h3>Address</h3>
						<span>016/07 shakti SRA co op HSG Soc</span><span>Bhabrekar nagar, charkop</span><span>Kandivali West</span>
					</div>
				</div>
			</div>				
		</div> <!-- end container -->

		<!-- <div id="map_wrapper">
			<div id="map_canvas"></div>
		</div> -->
	</section> <!-- end contact-me -->



<section class="contact" id="contact-us">
		<div class="container">
			<div class="row">
  				<div class="section-title text-center">
					<h2>Your FeedBack</h2>
					<span>Your feedback is valuable, any feedback will be helpful for us to make SysGen more better.</span>
				</div>
			</div>

			<div class="row form-wrapper">
				<div class="col-md-8 col-md-offset-2">
					<form name="feedback_form">
						<div class="row control-group">
						    <div class="form-group col-xs-12 floating-label-form-group controls">
						        <label>Message</label>
						        <textarea name="feedback" rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
						        <p class="help-block text-danger"></p>
						    </div>
						</div>

						<div id="success"> </div> <!-- For success/fail messages -->
						<button type="submit" class="btn submit-btn">Send Your Feedback</button>
					</form>

				</div>
			</div>
			<!-- Contact Details -->
		<!-- 	<div class="row contact-info">
				<h3 class="text-center">How it works</h3>
				<div class="col-md-4 col-sm-6 col-xs-12 info">
					<i class="fa fa-phone text-center"></i>
					<div class="info-content">
						<h3>phone</h3>
						<span>(+91) 70393 49983</span>
						<span>(+91) 88265 54423</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 info">
					<i class="fa fa-envelope text-center"></i>
					<div class="info-content">
						<h3>Email</h3>
						<span>sachinmaurya282@gmail.com</span>
						<span>info@SysGen.com</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 info">
					<i class="fa fa-home text-center"></i>
					<div class="info-content">
						<h3>Address</h3>
						<span>016/07 shakti SRA co op HSG Soc</span><span>Bhabrekar nagar, charkop</span><span>Kandivali West</span>
					</div>
				</div>
			</div>	 -->			
		</div> <!-- end container -->

	<!-- 	<div id="map_wrapper">
			<div id="map_canvas"></div>
		</div> -->
	</section> <!-- end contact-me -->
	<!-- ====== FOOTER ====== -->
	<footer id="footer-area" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="footer-social">
					<a href="#Facebook.com"><i class="fa fa-facebook"></i></a>
		            <a href="#twitter.com"><i class="fa fa-twitter"></i></a>
		            <!-- <a href="#google.com"><i class="fa fa-google"></i></a> -->
		            <a href="#mail"><i class="fa fa-envelope"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="copyrigth-text text-center">
						<p>Copyright &copy;2017; All Rights Reserved By <a href="http://SysGen.tk/">SysGen</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer> <!-- end footer-area -->

	<!-- ====== BACK TO TOP ====== -->
	<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>

	<!-- ====== SCROLL PERCENTAGE ====== -->
	<div id="scroll"></div>

	<!-- jquery latest version -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>	
	<!-- modernizer JS -->		
	<script src="js/modernizr-2.8.3.min.js"></script>	
	<!-- magnific-popup js -->               
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- jquery mixitup js -->   
	<script src="js/jquery.mixitup.min.js"></script>
	<!-- Counter Up -->
    <script src="js/waypoints.min.js"></script> 
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Google Map and Marker -->
<?php // 	<script src="js/gmap.js"></script> --> ?>
	<!-- Contact Form -->
	<script src="js/contact_me.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
    <script src="js/custom.js"></script>


    <!--Start of Tawk.to Script-->
<?php
/*<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c44647eab5284048d0db981/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
*/
?>
<!--End of Tawk.to Script-->

</body>
</html>
