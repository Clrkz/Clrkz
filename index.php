<!doctype html>

<?php



if(isset($_GET['message'])){//change success based on the returned value of the model

	if($_GET['message']=='success'){

		  echo "<script>

        alert('Message sent, I will get back to you soon!');

        </script>";  

	}else{

		  echo "<script>

        alert('There was an error while submitting the form. Please try again.');

        </script>";  

	} 

}



//INFO

$fullname = "Clarence Andaya";

$nickname = "Clarence";

$penname = "Clrkz";

$CVPath = "Clarence Andaya CV.pdf";

$title = "Freelance Developer";
$about = 'Clarence Andaya also known as “Clrkz” is very curious about technology that revolving to our world and that curiosity makes he interested in everything related to it and he start with programming, writing and designing application for his school projects and personal purpose until he work with local and foreign clients while he is student.';

//$about = "Clrkz is "; 

                       

//IMAGES

$profile_img = "images/about/profile3.png";

$about_img = "images/about/about.jpg";

$favicon_img = "images/logos/idea-i.png";

$meta_img = "images/about/profile3.png";



//CONTACTS

$location = "Merville, Paranaque, PH";

$phone = "(+63) 938 959 2854";

$email = "andayaworks@gmail.com";



//SOCIAL

$facebook = "https://www.facebook.com/143Clarkz/";

$twitter = "https://twitter.com/143Clrkz/";

$linkedin = "https://www.linkedin.com/in/clrkz";

$github = "https://www.github.com/Clrkz/";

$youtube = "https://www.youtube.com/clrkz";

$pinterest = "https://www.pinterest.ph/143clarkz/";



//is contact form working?

$contactform = false;

$host = $_SERVER['HTTP_HOST'];  

echo '<script>console.log("====================================================================================================\n\n\nHello There! Do you need something? hmmm might be, if you want something from this website contact me or get it by youself :P\n\n\n====================================================================================================")</script>';

?> 

<html lang="en">

 <script>

document.oncontextmenu = new Function("return false;");

document.onkeydown = function(e) {

  if(event.keyCode == 123) {

     return false;

  }

  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {

     return false;

  }

  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {

     return false;

  }

  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {

     return false;

  }

  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {

     return false;

  }

  if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {

     return false;

  }

}

	</script>

<head>

    <!--meta tags-->

    <meta charset="UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="<?php echo $fullname; ?> Personal Portfolio Website">

    <meta name="keywords" content="clarence, clarence andaya, andaya, clrkz, clarkz, personal, portfolio, personal resume, clean, modern">

    <meta name="author" content="<?php echo $fullname; ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:description" 

  content="It's all about Explorations and my Creations" />

<meta property="og:locale" content="en_GB" />

<meta property="og:locale:alternate" content="en_US" />

<meta property="og:site_name" content="<?php echo $fullname; ?>" />

			<meta property="og:image" content="<?php echo 'http://'.$host.'/'.$meta_img; ?>" />



    <!--template title-->

    <title><?php echo $fullname; ?></title>



    <!--==========Favicon==========-->

<!--

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">

	-->

    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $favicon_img; ?>">

	<!--

    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

    <link rel="manifest" href="favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

-->

    <!--========== Theme Fonts ==========-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800" rel="stylesheet">



    <!--Font Awesome css-->

    <link rel="stylesheet" href="css/font-awesome.min.css">



    <!--Bootstrap css-->

    <link rel="stylesheet" href="css/bootstrap.min.css">



    <!--Animated headline css-->

    <link rel="stylesheet" href="css/jquery.animatedheadline.css">



    <!--Animate css-->

    <link rel="stylesheet" href="css/animate.css">

    

	<!--Owl carousel css-->

	<link rel="stylesheet" href="css/owl.carousel.css">

	<link rel="stylesheet" href="css/owl.theme.default.css">

    

	<!--Magnific popup css-->

	<link rel="stylesheet" href="css/magnific-popup.css">

    

	<!--Normalizer css-->

	<link rel="stylesheet" href="css/normalize.css">



    <!--Theme css-->

    <link rel="stylesheet" href="css/style.css">

	

 <!--line icon css-->

    <link rel="stylesheet" href="css/line-icons.min.css">



    <!--Responsive css-->

    <link rel="stylesheet" href="css/responsive.css">

</head>

<!--onmousedown = 'return false' disblae dragging --> 

<body onmousedown = 'return false' oncopy = 'return false' oncut = 'return false' onselectstart = 'return false' >



    <!--preloader starts-->





    <div class="loader_bg"><div class="loader"></div></div>





    <!--preloader ends-->



    <!--navigation area starts-->



    <header class="nav-area navbar-fixed-top">

        <div class="container">

            <div class="row">

                <!--main menu starts-->



                <div class="col-md-12">

                    <div class="main-menu">

                        <div class="navbar navbar-cus">

                            <div class="navbar-header">

                                <a href="index.php" class="navbar-brand"><span class="logo"><?php echo $penname; ?></span></a> <!--edit site name here--> 

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="sr-only">Toggle navigation</span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>



                            <div class="navbar-collapse collapse">

                                <nav>

                                    <ul class="nav navbar-nav navbar-right">

                                        <li class="active"><a class="smooth-menu" href="#home">Home</a></li>

                                        <li><a class="smooth-menu" href="#about">About</a></li>

                                        <li><a class="smooth-menu" href="#services">Services</a></li>

                                        <li><a class="smooth-menu" href="#portfolio">Portfolio</a></li>

                                        <li><a class="smooth-menu" href="#testimonial">Testimonial</a></li>

                                        <li><a class="smooth-menu" href="#contact">Contact</a></li>

                                    </ul>

                                </nav>

                            </div>

                        </div>

                    </div>

                </div>



                <!--main menu ends-->

            </div>

        </div>

    </header>



    <!--navigation area ends-->



    <!--Banner area starts-->



    <div class="banner-area" id="home">

        <div id="particles-js"></div>

        <div class="banner-table">

            <div class="banner-table-cell">

                <div class="welcome-text">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12">

                                <section class="intro animate-scale">

								<div class="img-area">

                                    <img src="<?php echo $profile_img; ?>" alt=""> <!--edit image-->

                                </div>

                                    <h3>I'm <?php echo $nickname; ?></h3>



                                    <h1 class="ah-headline">



                                        <span class="ah-words-wrapper">

                                            <b class="is-visible">Java Dev</b> <!--edit the name to your name-->

                                            <b>Android Dev</b> <!--edit the designation if you are in different profession-->

                                            <b>Web Dev</b> <!--edit the designation if you are in different profession-->

                                            <b>Tech Savy</b> <!--edit the designation if you are in different profession-->

                                        </span>

                                    </h1>

									<!--

                                    <a href="#contact" class="banner-btn">Contact me</a>

									-->



								<div class="social-icon">

                                    <ul>

								      <li><a href="<?php echo $facebook; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                                        <li><a href="<?php echo $twitter; ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>

                                        <li><a href="<?php echo $linkedin; ?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

										 <li><a href="<?php echo $github; ?>" target="_blank" title="Github"><i class="fa fa-github"></i></a></li>

                                        <li><a href="<?php echo $youtube; ?>" target="_blank" title="YouTube"><i class="fa fa-youtube"></i></a></li>

                                        <li><a href="<?php echo $pinterest; ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>

                                    </ul>

                                </div>

								 

                        

                               </section>



                                <div class="clearfix"></div>



                                <a class="mouse-scroll hidden-xs" href="#about">

                                    <span class="mouse">

                                        <span class="mouse-movement"></span>

                                    </span>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!--Banner area ends-->



    <!--about area starts-->



    <div class="about-area section-padding" id="about">

        <div class="container">



            <div class="row">

                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">

                    <div class="about-text-left">

                        <h2><?php echo $fullname; ?></h2> <!--edit name-->

                        <h3><?php echo $title; ?></h3> <!--edit designation-->

                        <p><?php echo $about; ?></p>

                        <a href="<?php echo $CVPath; ?>" download>Download CV &nbsp; &nbsp;<i class="fa fa-download"></i></a>

                    </div>

                </div>



                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                    <img src="<?php echo $about_img; ?>"  class="img-responsive" alt="about image"> <!--add your image here-->

                </div>



                <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">

                    <div class="about-text-right">



                        <div id="skills">



                            <h3>My Skills</h3>



                            <div class="row">



                                <div class="col-md-12">



                                    <!-- skillbar -->

                                    <div class="skillbar" data-percent="80%"> <!--edit percentage-->



                                        <h6 class="skillbar-title">Java</h6> <!--edit skills-->

                                        <h6 class="skillbar-percent">80%</h6> <!--edit percentage-->



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

                                    <!-- end skillbar -->

									

									   <!-- skillbar -->

                                    <div class="skillbar" data-percent="65%"> <!--edit percentage-->



                                        <h6 class="skillbar-title">HTML / CSS</h6> <!--edit skills-->

                                        <h6 class="skillbar-percent">65%</h6> <!--edit percentage-->



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

                                    <!-- end skillbar -->



                                </div>





                                <div class="col-md-12">



                                    <!-- skillbar -->

                                    <div class="skillbar" data-percent="75%"> <!--edit percentage-->



                                        <h6 class="skillbar-title">PHP</h6> <!--edit skills-->

                                        <h6 class="skillbar-percent">75%</h6> <!--edit percentage-->



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

                                    <!-- end skillbar -->



                                </div>



                                <div class="col-md-12">



                                    <!-- skillbar -->

                                    <div class="skillbar" data-percent="85%"> <!--edit percentage-->



                                        <h6 class="skillbar-title">Photoshop</h6> <!--edit skills-->

                                        <h6 class="skillbar-percent">85%</h6> <!--edit percentage-->



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

                                    <!-- end skillbar -->



                                </div>





                                <div class="col-md-12">



                                    <!-- skillbar -->

                                    <div class="skillbar" data-percent="65%"> <!--edit percentage-->



                                        <h6 class="skillbar-title">CMS</h6> <!--edit skills-->

                                        <h6 class="skillbar-percent">70%</h6> <!--edit percentage-->



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

                                    <!-- end skillbar -->



                                </div>

<!--

                                <div class="col-md-12">

 

                                    <div class="skillbar" data-percent="60%">  



                                        <h6 class="skillbar-title">JOOMLA</h6>  

                                        <h6 class="skillbar-percent">60%</h6>  



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

									

                                    <div class="skillbar" data-percent="60%">  



                                        <h6 class="skillbar-title">DRUPAL</h6>  

                                        <h6 class="skillbar-percent">60%</h6>  



                                        <div class="skillbar-bar">

                                            <div class="skillbar-child"></div>

                                        </div>



                                    </div>

                                  



                                </div>

								-->



                            </div>



                        </div>



                    </div>



                </div>

            </div>



        </div>

    </div>



    <!--about area ends-->

    

    <!--Services Area Starts-->

<div class="services-area section-padding" id="services">

    <div class="container">

        <div class="row">

            <div class="section-title">

                <h2>My <span>Services</span></h2>

            </div>

        </div>

        <div class="row">

            <div class="col-md-4 col-sm-6 service">

                <div class="service-box">

                    <span class="after"></span>

                    <span class="before"></span>

                    <div class="service-icon">

                        <i class="icon-compass"></i>

                    </div>



                    <div class="service-content">

                        <h4>Java Development</h4>

                        <p>Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible.</p>

                    </div>

                </div>



            </div>

            <div class="col-md-4 col-sm-6 service">

                <div class="service-box">

                    <span class="after"></span>

                    <span class="before"></span>

                    <div class="service-icon">

                        <i class="icon-aperture"></i>

                    </div>

                    <div class="service-content">

                        <h4>Web Development</h4>

                        <p>Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).<br><br></p>

                    </div>

                </div>



            </div>

            <div class="col-md-4 col-sm-6 service">

                <div class="service-box">

                    <span class="after"></span>

                    <span class="before"></span>

                    <div class="service-icon">

                        <i class="icon-gears"></i>

                    </div>

                    <div class="service-content">

                        <h4>Android Development</h4>

                        <p>Android software development is the process by which applications are created for devices running the Android operating system.<br><br></p>

                    </div>

                </div>



            </div>

            <div class="col-md-4 col-sm-6 service">

                <div class="service-box">

                    <span class="after"></span>

                    <span class="before"></span>

                    <div class="service-icon">

                        <i class="icon-bargraph"></i>

                    </div>

                    <div class="service-content">

                        <h4>Graphics Design</h4>

                        <p>Graphic design is the process of visual communication and problem-solving through the use of typography, photography, iconography and illustration.</p>

                    </div>

                </div>



            </div>

            <div class="col-md-4 col-sm-6 service">

                <div class="service-box">

                    <span class="after"></span>

                    <span class="before"></span>

                    <div class="service-icon">

                        <i class="icon-adjustments"></i>

                    </div>

                    <div class="service-content">

                        <h4>Android Repair</h4>

                        <p>Cell Phone Repair Technicians solve technical problems in mobile devices. Detecting issues, running tests, replacing parts, and reporting repairs to managers and manufacturers.</p>

                    </div>

                </div>



            </div>

            <div class="col-md-4 col-sm-6 service">

                <div class="service-box">

                    <span class="after"></span>

                    <span class="before"></span>

                    <div class="service-icon">

                        <i class="icon-browser"></i>

                    </div>

                    <div class="service-content">

                        <h4>Computer Repair</h4>

                        <p>Computer repair is the process of identifying, troubleshooting and resolving problems and issues in a faulty computer.<br><br></p>

                    </div>

                </div>



            </div>



        </div>

    </div>

</div>



    <!--Services Area Ends-->

    

	<!--number area starts-->



	<div class="number-area section-padding">

		<div class="container">

			<div class="row">

				<div class="col-md-3 col-xs-6">

					<div class="single-number text-center">

						<i class="fa fa-clock-o"></i>

						<h2 class="counter">3015</h2> <!--edit-->

						<p>Hours Worked</p>

					</div>

				</div>

				<div class="col-md-3 col-xs-6">

					<div class="single-number text-center">

						<i class="fa fa-code"></i>

						<h2 class="counter">643589</h2> <!--edit-->

						<p>Lines of Code</p>

					</div>

				</div>

				<div class="col-md-3 col-xs-6">

					<div class="single-number text-center">

						<i class="fa fa-user"></i>

						<h2 class="counter">53</h2> <!--edit-->

						<p>Happy Customers</p>

					</div>

				</div>

				<div class="col-md-3 col-xs-6">

					<div class="single-number text-center">

						<i class="fa fa-trophy"></i>

						<h2 class="counter">6</h2> <!--edit-->

						<p>Awards</p>

					</div>

				</div>

			</div>

		</div>

	</div>



	<!--number area ends-->

   

	<!--Portfolio Area Starts-->



	<div id="portfolio" class="portfolio-area section-padding">

		<div class="container">

			  <div class="row">

            <div class="section-title">

                <h2>My <span>Portfolio</span></h2>

            </div>

        </div>

			<div class="row">



                <div class="portfolio-items">



                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                        <div id="inline-popups" class="port-box">

                            <a href="#test-popup" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/hotel.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Hotel Management System</h2> <!--your project name-->

                                        <p>Automate the service and payment of hotel for faster transaction.</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7 col-xs-12">

                                    <div class="por-img">

                                        <img src="images/portfolio/hotel.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5 col-xs-12">

                                    <div class="por-text">

                                        <h2>Hotel Management System</h2> <!--your project title-->

                                        <p>Automate the service and payment of hotel for faster transaction.</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>School Project</p> <!--edit here-->

                                                    <p>15/03/2017</p> <!--edit here-->

                                                    <p>MS Access App</p> <!--edit here-->

                                                    <p>GitHub Private</p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>



                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups-2">

                            <a href="#test-popup-2" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/blood.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Blood Bank Management System</h2> <!--your project name-->

                                        <p>It is use for convenience and faster transaction between donors and donees.</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-2" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">



                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/blood.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Blood Bank Management System</h2> <!--your project title-->

                                        <p>It is use for convenience and faster transaction between donors and donees.</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>School Project</p> <!--edit here-->

                                                    <p>13/03/2018</p> <!--edit here-->

                                                    <p>Java Application</p> <!--edit here-->

                                                    <p><a href="https://github.com/Clrkz/Blood-Bank-System" target="_blank">GitHub</a></p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>



                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups-3">

                            <a href="#test-popup-3" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/delivery.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Package Delivery System</h2> <!--your project name-->

                                        <p>Also known as "CLJS" Tracking, Payment, Log History, Pricing and more features...</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-3" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">



                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/delivery.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Package Delivery System</h2> <!--your project title-->

                                        <p>Also known as "CLJS" Tracking, Payment, Log History, Pricing and more features...</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>School Project</p> <!--edit here-->

                                                    <p>04/12/2018</p> <!--edit here-->

                                                    <p>Java Application</p> <!--edit here-->

                                                    <p>GitHub Private</p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>



                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups-4">

                            <a href="#test-popup-4" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/air.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Aircraft Parts Inventory System</h2> <!--your project name-->

                                        <p>It is used to monitor the parts of aircraft for borrowers and suppliers.</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-4" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/air.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Aircraft Parts Inventory System</h2> <!--your project title-->

                                        <p>It is used to monitor the parts of aircraft for borrowers and suppliers.</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>PHILSCA Students</p> <!--edit here-->

                                                    <p>25/03/2019</p> <!--edit here-->

                                                    <p>Web Application</p> <!--edit here-->

                                                    <p><a href="https://github.com/Clrkz/Aircraft-Parts-Inventory-System" target="_blank">GitHub</a></p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>



                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups-5">

                            <a href="#test-popup-5" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/cloud.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Online File Storage and File Sharing System</h2> <!--your project name-->

                                        <p>Store and Share files without any ads nor registration, Admin panel, User registration and more...</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-5" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/cloud.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Online File Storage and File Sharing System</h2> <!--your project title-->

                                        <p>Store and Share files without any ads nor registration, Admin panel, User registration and more...</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>School Project</p> <!--edit here-->

                                                    <p>20/05/2019</p> <!--edit here-->

                                                    <p>Web Application</p> <!--edit here-->

                                                    <p><a href="https://github.com/Clrkz/Simple-Cloud-Storage-System" target="_blank">GitHub</a></p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>

					<!-- Start Portfolio -->

                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups-6">

                            <a href="#test-popup-6" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/intern.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Internship Management System</h2> <!--your project name-->

                                        <p>Keep intern personal records and files for future use, student registration, company information, data analysis, audit trail and more...</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-6" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/intern.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Internship Management System</h2> <!--your project title-->

                                        <p>Keep intern personal records and files for future use, student registration, company information, data analysis, audit trail and more...</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>TCU CDPO</p> <!--edit here-->

                                                    <p>12/05/2018</p> <!--edit here-->

                                                    <p>Java Application</p> <!--edit here-->

                                                    <p><a href="https://github.com/Clrkz/Interns-Management-System" target="_blank">GitHub</a></p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>

					



                    </div>

					<!-- End Portfolio -->

					

					<!-- Start Portfolio -->

                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups">

                            <a href="#test-popup-7" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/barangay.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Barangay Management System</h2> <!--your project name-->

                                        <p>Store personal records of barangay residence, releasing of Barangay Clearance, Bussiness Permit with payment and log history records.</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-7" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/barangay.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Barangay Management System</h2> <!--your project title-->

                                        <p>Store personal records of barangay residence, releasing of Barangay Clearance, Bussiness Permit with payment and log history records.</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>School Project</p> <!--edit here-->

                                                    <p>27/03/2017</p> <!--edit here-->

                                                    <p>Java Application</p> <!--edit here-->

                                                    <p><a href="https://github.com/Clrkz/Barangay-Management-System" target="_blank">GitHub</a></p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>

					<!-- End Portfolio -->

					

					<!-- Start Portfolio -->

                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups">

                            <a href="#test-popup-8" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/vet.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Veterinary Mobile Application</h2> <!--your project name-->

                                        <p>It is develop for faster transaction of vet and pet owner.</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        <div id="test-popup-8" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/vet.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Veterinary Mobile Application</h2> <!--your project title-->

                                        <p>It is develop for faster transaction of vet and pet owner.</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>School Project</p> <!--edit here-->

                                                    <p>21/11/2018</p> <!--edit here-->

                                                    <p>Mobile Application</p> <!--edit here-->

                                                    <p>GitHub Private</p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>

					<!-- End Portfolio -->

			<!-- Start Portfolio -->

                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">



                        <div id="inline-popups">

                            <a href="#test-popup-9" data-effect="mfp-zoom-out">

                                <div class="hovereffect">



                                    <img src="images/portfolio/idea-i.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    <div class="overlay">

                                        <h2>Integrated Development Environment Artificial-Intelligence (IDEA-I)</h2> <!--your project name-->

                                        <p>IDEA-I Voice Recognition IDE for Java, You can create java program by using voice command, it is use Artificial Intelligence like Siri and Cortana.</p>

                                    </div>



                                </div>

                            </a>

                        </div>

                        	<div id="test-popup-9" class="white-popup mfp-with-anim mfp-hide">

                            <div class="row">

                                <div class="col-md-7">

                                    <div class="por-img">

                                        <img src="images/portfolio/idea-i.png" alt="portfolio image" class="img-responsive"> <!--edit image-->

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="por-text">

                                        <h2>Integrated Development Environment Artificial-Intelligence (IDEA-I)</h2> <!--your project title-->

                                        <p>IDEA-I Voice Recognition IDE for Java, You can create java program by using voice command, it is use Artificial Intelligence like Siri and Cortana...</p>

                                        <div class="por-text-details">

                                            <div class="row">

                                                <div class="col-xs-4">

                                                    <p>Client: </p>

                                                    <p>Completed:</p>

                                                    <p>Type:</p>

                                                    <p>link:</p>

                                                </div>

                                                <div class="col-xs-offset-1 col-xs-7">

                                                    <p>THESIS PROJECT</p> <!--edit here-->

                                                    <p>12/16/2019</p> <!--edit here-->

                                                    <p>Java Application</p> <!--edit here-->

                                                    <p>GitHub Private</p> <!--edit here-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                    </div>

					<!-- End Portfolio -->



                </div> <!--end portfolio grid -->



            </div>





		</div>

	</div>





	<!--Portfolio Area Ends-->

   

	<!--Testimonial Section Starts-->

<div id="testimonial" class="testimonial-area section-padding">

    <div class="container">

        <div class="row">

            <div class="section-title">

			<div class="section-header wow fadeInDown" data-wow-delay="0.2s">

						<p class="line-one"></p>

						 <h2>Client <span>Testimonials</span></h2>

						<p class="line-one"></p>

					</div>

               

            </div>

        </div>

        <div class="row">



            <div class="col-md-12">

 

			<div id="testimonial-carousel" class="testimonial-slider owl-carousel owl-theme">



		 

			<div class="single-testi text-center item" style="width: 100%; margin-right: 30px;">

			<div class="single-testimonial">



                        <div class="testi-comment">

                            <i class="fa fa-quote-left"></i>

                            <p>Thankyou for making website for our thesis project! Recommended!</p>

                        </div>



                        <div class="row">

                            <div class="col-md-8 col-xs-8">

                                <h2>Students</h2> <!--edit here-->

                                <h3>PHILSCA</h3> <!--edit here-->

                            </div>

                            <div class="col-md-4">

                                <div class="testi-img">

                                    <img src="images/testimonial/philsca.png" alt=""> <!--edit image here-->

                                </div>

                            </div>

                        </div>



                    </div></div>

					

			 

			 <div class="single-testi text-center item"  style="width: 100%; margin-right: 30px;">

			 <div class="single-testimonial">



                        <div class="testi-comment">

                            <i class="fa fa-quote-left"></i>

                            <p>My Experience working with Clarence has been very positive. I always receive quality service from him. I highly recommend this.</p>

                        </div>



                        <div class="row">

                            <div class="col-md-8 col-xs-8">

                                <h2>Director</h2> <!--edit here-->

                                <h3>TCU CDPO</h3> <!--edit here-->

                            </div>

                            <div class="col-md-4 col-xs-4">

                                <div class="testi-img">

                                    <img src="images/testimonial/cdpo.jpg" alt="testimonial image"> <!--edit image here-->

                                </div>

                            </div>

                        </div>



                    </div></div>

					<div class="single-testi text-center item"  style="width: 100%; margin-right: 30px;">

			 <div class="single-testimonial" style="height: 100%;">



                        <div class="testi-comment">

                            <i class="fa fa-quote-left"></i>

                            <p>I start to sell clothes on social media, I need website and my friend recommend this person, Now I'm start earning using it.</p>

                        </div>



                        <div class="row">

                            <div class="col-md-8 col-xs-8">

                                <h2>Maiden</h2> <!--edit here-->

                                <h3>ONLINE SELLER</h3> <!--edit here-->

                            </div>

                            <div class="col-md-4 col-xs-4">

                                <div class="testi-img">

                                    <img src="images/testimonial/testi4.jpg" alt="testimonial image"> <!--edit image here-->

                                </div>

                            </div>

                        </div>



                    </div></div>

				 

					 

					

					

			

			</div>

			 

            </div>



        </div>

    </div>

</div>

	<!--Testimonial Section Ends-->



    <!--contact area starts-->



    <div class="contact-area section-padding" id="contact">

        <div class="container">

             <div class="row">

            <div class="section-title">

                <h2>My <span>Contact</span></h2>

            </div>

        </div>



            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.4s">

                        <i class="fa fa-home"></i>

                        <h2>Location</h2>

                        <p><?php echo $location; ?></p> <!--edit here-->

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.6s">

                        <i class="fa fa-phone"></i>

                        <h2>Phone: </h2>

                        <p><?php echo $phone; ?></p> <!--edit here-->

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.8s">

                        <i class="fa fa-envelope-o"></i>

                        <h2>Email</h2>

                        <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p> <!--edit here-->

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="1s">

                        <i class="fa fa-gg"></i>

                        <h2>Social Media </h2>

                        <div class="socials">

                            <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a> <!--your facebook profile link here-->

                            <a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github"></i></a> <!--your linkedin profile link here-->

                            <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a> <!--your twitter profile link here-->

                            <a href="<?php echo $pinterest; ?>" target="_blank"><i class="fa fa-pinterest"></i></a> <!--your pinterest profile link here-->

                            <a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a> <!--your pinterest profile link here-->

                        </div>

                    </div>

                </div>

            </div>



            <div class="row">



                <div class="col-md-10 col-md-offset-1">

				<div class="id="contact-form"">

                    <form  method="post" action="contact.php" class="wow fadeInDown" data-wow-delay="1.2s">



                        <div class="messages"></div> <!--you can change the message in contact.php file -->

						<?php if(!$contactform): ?>

 <h4>Contact form not working yet, Email me directly, Thankyou.</h4> 

						<?php endif; ?>

                        <div class="controls"> 

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your full name *" required="required" data-error="Fullname is required.">

                                        <div class="help-block with-errors"></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">

                                        <div class="help-block with-errors"></div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your Message *" rows="4" required="required" data-error="Leave a message for me"></textarea>

                                        <div class="help-block with-errors"></div>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <button class="btn btn-send" name="submit" value="" >Send message</button>

                                </div>

                            </div>

                        </div>



                    </form>

					</div>

                </div>



            </div>

        </div>

    </div>

	 



    <!--contact area ends-->



    <!--Brand area starts-->



    <div class="brand-area section-padding">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-xs-6 col-sm-3">

                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.2s">

                        <a href="https://phcorner.net/" target="_blank"><img src="images/brand/phcorner.png" alt="brand image"></a> <!--edit image-->

                    </div>

                </div>

                <div class="col-md-3 col-xs-6 col-sm-3">

                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.4s">

                        <a href="https://symbianize.com/" target="_blank"><img src="images/brand/symbianize.png" alt="brand image"></a> <!--edit image-->

                    </div>

                </div>

                <div class="col-md-3 col-xs-6 col-sm-3">

                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.6s">

                        <a href="https://stackoverflow.com/" target="_blank"><img src="images/brand/stackoverflow.png" alt="brand image"></a> <!--edit image-->

                    </div>

                </div>

                <div class="col-md-3 col-xs-6 col-sm-3">

                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.8s">

                       <a href="https://github.com/" target="_blank"><img src="images/brand/github.png" alt="brand image"></a> <!--edit image-->

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!--Brand area ends-->



    <!--Footer Area Starts-->



    <div class="footer-area">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                  <!--  <p>&copy; All Right Reserved By <a href="http://clarenceandaya.ml/" target="_blank">Clarence Andaya</a></p> edit here-->

                    <p>&copy; <?php echo $fullname; ?></p> <!--edit here-->

                </div>

            </div>

        </div>

    </div>



    <!--Footer Area Ends-->

    

    







    <!--Latest version JQuery-->

    <script src="js/jquery-3.2.1.min.js"></script>



    <!--Bootstrap js-->

    <script src="js/bootstrap.min.js"></script>



	<!--Magnific popup js-->

	<script src="js/jquery.magnific-popup.js"></script>



	<!--Owl Carousel js-->

	<script src="js/owl.carousel.js"></script>



    <!--Animated headline js-->

    <script src="js/jquery.animatedheadline.js"></script>



    <!--wow js-->

    <script src="js/wow.min.js"></script>

    

    <!--Validator js-->

    <script src="js/jquery.waypoints.js"></script>

    

	<!--counter up js-->

	<script src="js/jquery.counterup.min.js"></script>



    <!--particles js-->

    <script src="js/particles.js"></script>

    <script src="js/app.js"></script>



    <!--Validator js-->

    <script src="js/validator.js"></script>



    <!--Contact js-->

    <script src="js/contact.js"></script>



    <!--Main js-->

    <script src="js/main.js"></script>

    

   

</body>

</html>