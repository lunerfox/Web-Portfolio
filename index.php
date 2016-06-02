<?php
 Header("Cache-Control: max-age=604800, must-revalidate");

 $offset = 60 * 60 * 24 * 60;
 $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 Header($ExpStr);
?>

<!-- Send header information to user while other content load -->
<?php flush(); ?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <title>Leo Szeto - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Leo Szeto">

    <!-- Le styles -->
	<link href="css/effects.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/paginate.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 80px;
        padding-bottom: 40px;
      }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
    <link rel="apple-touch-icon-precomposed" href="">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
	
  </head>
  
  <body id="home" class="hasGoogleVoiceExt">

    <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><img src="img/Logo_1.png" alt="your slogan here"></a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="#home" class="anchorLink">Home</a></li>
						<li><a href="#portfolio_h" class="anchorLink">Portfolio (Hardware)</a></li>
						<li><a href="#portfolio_s" class="anchorLink">Portfolio (Software)</a></li>
						<li><a href="#talks" class="anchorLink">Talks</a></li>
						<li><a href="#portfolio_n" class="anchorLink">Hobbies</a></li>
						<li><a href="#awards" class="anchorLink">Recognition</a></li>
						<li><a href="assets/Leo_Szeto_Resume.pdf" target="_blank">Resume</a></li>
						<li><a href="http://www.leoszeto.com/portfolio/" target="_blank">Blog</a>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
    </div>

    <div class="container">
		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="row">
			<div class="span42">
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/Hero_1.jpg" alt="">
						</div>
						<div class="item">
							<img src="img/Hero_2.jpg" alt="">
						</div>
						<div class="item">
							<img src="img/Hero_3.jpg" alt="">
						</div>
						<div class="item">
							<img src="img/Hero_5.jpg" alt="">
						</div>			  
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
				</div>
			</div>
		</div>

	<div id="about" class="row">
		<h3>About me</h3>
		<p>
			Thank you for taking the time to visit my portfolio. I'm a recent graduate of UCLA in Electrical Engineering and Computer Engineering. I was born in Hong Kong in 1988, and immigrated to the United States in 1998, as my parents had wanted better educational opportunities for me and my sister. After graduating at Westmoor High School in the class of 2006, I attended Skyline College and City College of San Francisco to pursue my B.S. While there, I developed an interest in Robotics and Embedded systems, as well as computer programming. I later moved to Southern California to attend UCLA and have been in Los Angeles since. It is my hope that I will be able to continue my studies in the field of Mechatronics, with a future career goal of being a senior engineer at a Research and Development lab, as well as obtaining a Master's degree or an MBA. I'm currently working at Walt Disney Imagineering as a Ride Controls Engineer. My hobbies include Photography, Cycling, Drums, Guitar, as well as developing my own automation assistant, J.A.R.V.I.S. 
		</p>
	</div>
	  
	<hr>
		<!-- Portfolio row of columns for Hardware Portfolio -->
		<div id="portfolio_h" class="row">
			<div class="span12">
				<h1>Portfolio (Hardware)</h1>
			</div>
			
			<div class="span4 portthumb">
				<div class="shadow"><img src="img/Port_H_1.jpg" alt=""></a></div>
					<h5>Mini Coaster</h5>
					<p>Fully functional Miniature coaster with block zones</p>
			</div>
			
			<div class="span4 portthumb">
				<div class="shadow"><a href="pomegranate.htm"><img src="img/Port_H_2.jpg" alt=""></a></div>
					<h5>Pomegranate</h5>
					<p>Compact Micromouse packed with features</p>
			</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_H_3.jpg" alt=""></div>
				<h5>Project Atlas</h5>
				<p>Tiny Natcar with Powerful Modules</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><a href="skytanx.htm"><img src="img/Port_H_4.jpg" alt=""></a></div>
				<h5>SkyTanX</h5>
				<p>Skype enabled Telepresense robot</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_H_5.jpg" alt=""></div>
				<h5>CMouse</h5>
				<p>Dynamic maze solving mouse</p>
		</div>

      <!-- Thumbnails row 2 -->

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_H_6.jpg" alt=""></div>
				<h5>Johnny 5</h5>
				<p>2009 US FIRST Robotics robot</p>  
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><a href="hally.htm"><img src="img/Port_H_7.jpg" alt=""></a></div>
				<h5>Hally</h5>
				<p>Basic Line following robot</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_H_8.jpg" alt=""></div>
				<h5>Christmas light equalizer</h5>
				<p>Sound driven light interface</p>
		</div>
      
		<div class="span4 portthumb">
			<div class="shadow"><a href="polycharge.htm"><img src="img/Port_H_9.jpg" alt=""></a></div>
				<h5>3x Li-poly charger</h5>
				<p>Finger sized, low cost li-poly charger</p>
		</div>
          
    </div>
	
	<hr>
    <!-- Portfolio row of columns for Software Portfolio -->
    <div id="portfolio_s" class="row">
		<div class="span12">
			<h1>Portfolio (Software)</h1>
        </div>

		<div class="span4 portthumb">
			<div class="shadow"><a href="#"><img src="img/Port_S_1.jpg" alt=""></a></div>
				<h5>Project Synchron</h5>
				<p>Natcar Automation Platform</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_2.jpg" alt=""></div>
				<h5>ToneMatrix Clone</h5>
				<p>Sequential Music Generator</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><a href="canine.htm"><img src="img/Port_S_3.jpg" alt=""></a></div>
				<h5>Project Canine</h5>
				<p>Canine Machine Learning system</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_4.jpg" alt=""></div>
				<h5>CSim Simulator</h5>
				<p>Maze solving algorithm visualization GUI</p>
		</div>

		<!-- Thumbnails row 2 -->
		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_5.jpg" alt=""></div>
				<h5>VisRoute</h5>
				<p>Logistics Algorithm visualization GUI</p>  
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_6.jpg" alt=""></div>
				<h5>Project Survival</h5>
				<p>Top down shooter game</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><a href="http://ops.ieeebruins.org" target="_blank"><img src="img/Port_S_7.jpg" alt=""></a></div>
				<h5>OPS Wiki</h5>
				<p>UCLA IEEE OPS Program</p>
		</div>
      
		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_8.jpg" alt=""></div>
				<h5>Coming soon...</h5>
				<p>More exciting new things to come!</p>
		</div>
    </div>	
	
	<hr>
	<div id="talks" class="row">
		<div class="span12">
			<h1>Talks</h1>
		</div>
		
		<div class="span4 portthumb">
			<div class="shadow"><img src="img/talks-1.jpg" alt=""></div>
				<h5>Building your Brand</h5>
				<p>Getting hired as a new grad</p>
		</div>

		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_8.jpg" alt=""></div>
				<h5>Building a high performance student chapter</h5>
				<p>Antedotes and Advice for new officers</p>
		</div>
      
		<div class="span4 portthumb">
			<div class="shadow"><img src="img/Port_S_8.jpg" alt=""></div>
				<h5>Everyday Leadership for Engineers</h5>
				<p>Modern philosophies on leadership</p>
		</div>	
	</div>
	
	<hr>
	<!-- Portfolio row of columns for Hardware Portfolio -->
    <div id="portfolio_n" class="row">
        <div class="span12">
          <h1>Hobbies and Arts</h1>
        </div>

      <div class="span4 portthumb">
        <div class="shadow"><a href="music.htm"><img src="img/Port_N_1.jpg" alt=""></a></div>
        <h5>Music</h5>
        <p>My passion for drums</p>
      </div>

      <div class="span4 portthumb">
        <div class="shadow"><a href="photos.htm"><img src="img/Port_N_2.jpg" alt=""></a></div>
        <h5>Photography</h5>
        <p>Showcase for past work</p>
      </div>
	  
      <div class="span4 portthumb">
        <div class="shadow"><img src="img/Port_N_3.jpg" alt=""></a></div>
        <h5>Cycling</h5>
        <p>Pursuing an active lifestyle</p>
      </div>	
	  
	  <div class="span4 portthumb">
        <div class="shadow"><a href="music.htm"><img src="img/Port_N_4.jpg" alt=""></a></div>
        <h5>Arts</h5>
		<p>Integrating passion with skill</p>
      </div>
    </div>
	
	<hr>
<!-- Services row of columns -->
    <div id="awards" class="row">
        <div class="span12">
			<h1>Recognition</h1>
        </div>

        <div class="span4">
			<h5>HSSEAS Featured Student</h5>
			<p>I was selected by the UCLA school of engineering as an examplary student in the Electrical Engineering Department for 2012. <a href="http://www.engineer.ucla.edu/visitor-links/current-students/student-profiles/LeoSzetoEE" target="_blank"> Link </a> </p>
		</div>

        <div class="span4">
			<h5>Student Group of the Year</h5>
			<p>Under my leadership as Project manager (2010 - 2011), and President (2011 - 2012), UCLA IEEE has grown to better service the EE community on campus, and received the ESUC student group of the year award for 2 consecutive years.<a href="http://www.ieeebruins.org" target="_blank"> Website </a></p></p>
        </div>

        <div class="span4">
			<h5>Ingenuity</h5>
			<p>My team and I participated in an Annual Rube Goldberg engineering competition and won first place against other student groups, many of whom were engineers. Featured on the Daily Bruin front page. <a href="http://www.dailybruin.com/index.php/article/2012/02/no_so_simple" target="_blank"> Link </a></p>
        </div>

        <!-- Services Row 2  -->

        <div class="span4">
			<h5>Creativity</h5>
			<p>I am an avid percussion player and have enjoyed playing with a band of UCLA Engineers for the last 1.5 years. We participated in the annual Engineering Talent show and received 3rd place in 2011. <a href="http://www.youtube.com/watch?v=uS_EAu85nj4" target="_blank"> Video </a></p>
        </div>

        <div class="span4">
			<h5>Recommendations</h5>
			<p><i>"Leo is one of the finest students and colleagues I have dealt with in my nine years of teaching at UCLA. He combines great personality, creativity, and leadership with a true hardware geek's passions. I believe that he is happiest when he is working on a new hardware project."</i></p>
			- Dr. Mike Briggs, EE Lecturer at UCLA
        </div>

    </div>
    </div>
      <hr>

      <footer>
		
		<div align="right">Leo Szeto 2012- Revision 0.7.1 <br><a href="http://www.simplehitcounter.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=1191435&f=0&b=16777215" border="0" height="18" width="83" alt="web counter"></a><a href="http://www.simplehitcounter.com" target="_blank" style="text-decoration:none;"></a>
		</div>
		<!-- End of SimpleHitCounter Code -->
 
      </footer>		
	  
    </div> <!-- /container -->


	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/anchor.js" type="text/javascript"></script>

	<script type="text/javascript">
</body></html>