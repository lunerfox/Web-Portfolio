<?php
 Header("Cache-Control: max-age=604800, must-revalidate");

 $offset = 60 * 60 * 24 * 60;
 $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 Header($ExpStr);
?>

<!-- Send header information to user while other content load -->
<?php flush(); ?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta charset="utf-8">
    <title>Leo Szeto - Portfolio</title>
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
            <li><a href="#courses" class="anchorLink">Courses</a></li>
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
				<div id="mainCarousel" class="carousel slide">
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
					<a class="left carousel-control" href="#mainCarousel" data-slide="prev">‹</a>
					<a class="right carousel-control" href="#mainCarousel" data-slide="next">›</a>
				</div>
			</div>
		</div>

	<div id="about" class="row">
    <div class="span12">
      <h3>About me</h3>
  		<p>Thank you for taking the time to visit my portfolio!</p>
      <p>
      I'm a well-rounded Engineer/Technical Creative with specialities in Computer Science and Embedded Systems, particularly in the field of Automation in the Theme Park industry.
      Graduating from UCLA with a BS in Electrical Engineering and Computer Engineering, I have recently completed a project in Shanghai Disneyland where I had a leading role in developing and
      testing the Software of a best-in-class Roller Coaster.
      </p>

      <p>
      In my free time, I've continued my learning by taking video lectures from Udemy.com, learning the fundamentals of iOS development using Swift, and Unity development.
      I'm especially interested in Virtual Reality, and believe that it has the potential to revolutionize content delivery.
      I also study game design and have developed 2 board games.
      </p>

      <p>
      My hobbies outside of work include Electronics tinkering, Web development, Game Design, Playing Music, Biking, and Photography. I also do motivational speaking from time to time.
      </p>

      <h3>History</h3>
      <p>
      I was born in Hong Kong in 1988, and immigrated to the United States in 1998, as my parents had wanted better educational opportunities for me and my sister.
      After graduating at Westmoor High School in the class of 2006, I attended Skyline College and City College of San Francisco to pursue my B.S. While there,
      I developed an interest in Robotics and Embedded systems, as well as computer programming. I later moved to Southern California to attend UCLA and have been in Los Angeles since.
      It is my hope that I will be able to continue my studies in the field of Mechatronics, with a future career goal of being a senior engineer at a Research and Development lab.
      </p>
    </div>
	</div>

  <hr>
   <!-- Portfolio blurb for Shanghai Disneyland -->
   <div class="row">
     <div class="span12">
       <h1>Shanghai Disneyland</h1>
     </div>
   </div>

   <div class="container">
  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="row">
    <div class="span42">
      <div id="shdlCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/SHDL_1.jpg" alt="">
          </div>
          <div class="item">
            <img src="img/SHDL_2.jpg" alt="">
          </div>
          <div class="item">
            <img src="img/SHDL_3.jpg" alt="">
          </div>
          <div class="item">
            <img src="img/SHDL_4.jpg" alt="">
          </div>
        </div>
        <a class="left carousel-control" href="#shdlCarousel" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#shdlCarousel" data-slide="next">›</a>
      </div>
    </div>
  </div>

   <p>In the summer of 2014, I embarked on a grand adventure; Travel half-way across the world to Shanghai to build the first ever Disneyland in Mainland China, and the 6th Happiest place on earth.</p>
   <p>I spent the last 22 months on the field, taking the design from concept to implementation.</p>
   <p>As a Ride Controls Software Engineer, my job was to design and implement the control software for a family-oriented Roller coaster, Seven Dwarfs Mine Train.</p>
   <p>The software interfaces with over 1500+ components, and utilizes a variety of strategies to maintain close control of all vehicles in the attraction, ensuring the safety of guests in all circumstances</p>
	<hr>
		<!-- Portfolio row of columns for Hardware Portfolio -->
		<div id="portfolio_h" class="row">
			<div class="span12">
				<h1>Portfolio (Hardware)</h1>
			</div>

			<div class="span4 portthumb">
				<div class="shadow"><a href="minicoaster.htm"><img src="img/Port_H_1.jpg" alt=""></a></div>
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
  			<h1>Portfolio (Software) <a href="https://github.com/lunerfox" target="_blank">[GitHub]</a></h1>
      </div>

      <div class="span4 portthumb">
  			<div class="shadow"><a href="http://ieeeusa.org/volunteers/committees/spax/" target="_blank"><img src="img/Port_S_8.jpg" alt=""></div>
  				<h5>SPAx Website</h5>
  				<p>IEEE-USA Student Professional Experience</p>
  		</div>

  		<div class="span4 portthumb">
  			<div class="shadow"><img src="img/Port_S_1.jpg" alt=""></a></div>
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

      <!-- Thumbnails row 2 -->

  		<div class="span4 portthumb">
  			<div class="shadow"><img src="img/Port_S_4.jpg" alt=""></div>
  				<h5>CSim Simulator</h5>
  				<p>Maze solving algorithm visualization GUI</p>
  		</div>

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

  		<!-- Thumbnails row 3 -->
  		<div class="span4 portthumb">
  			<div class="shadow"><a href="http://ops.ieeebruins.org" target="_blank"><img src="img/Port_S_7.jpg" alt=""></a></div>
  				<h5>OPS Wiki</h5>
  				<p>UCLA IEEE OPS Program</p>
  		</div>

    </div>

  <hr>

  <div id="courses" class="row">
    <div class="span12">
      <h1>Courses</h1>
    </div>

    <div class="span12"><h3>Game Development and Mobile</h3></div>
    <div class="span4 portthumb">
      <div class="shadow"><img src="img/Course-1.jpg" alt=""></div>
        <h5>Make Virtual Reality Games in C# with Unity</h5>
        <p>Ben Tristem</p>
    </div>

    <div class="span4 portthumb">
      <div class="shadow"><img src="img/Course-2.jpg" alt=""></div>
        <h5>The Complete iOS 8 and Swift Course</h5>
        <p>Rob Percival</p>
    </div>

    <div class="span12"><h3>Automation Systems</h3></div>
    <div class="span4 portthumb">
      <div class="shadow"><img src="img/Course-3.jpg" alt=""></div>
        <h5>ControlLogix PLC Programming and Configuration</h5>
        <p>Rockwell Automation</p>
    </div>

    <div class="span4 portthumb">
      <div class="shadow"><img src="img/Course-4.jpg" alt=""></div>
        <h5>Siemens S7 PLC Programming and Configuration</h5>
        <p>Siemens</p>
    </div>

  </div>

	<hr>
  	<div id="talks" class="row">
  		<div class="span12">
  			<h1>Talks</h1>
        <p>Public speaking is one of my hobbies, and I've often jumped at opportunities to share what I've learned professionally and personnally with others.
          I've given numberous talks on leadership and building impactful change to Engineers and high school students domestically and internationally. </p>
      </div>



  		<div class="span4 portthumb">
  			<div class="shadow"><img src="img/talks-1.jpg" alt=""></div>
  				<h5>Building your Brand</h5>
  				<p>Getting hired as a new grad</p>
  		</div>

  		<div class="span4 portthumb">
  			<div class="shadow"><a href="http://prezi.com/wb8sr8yzlc0i/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank"><img src="img/talks-2.jpg" alt=""></div>
  				<h5>Building a high performance student chapter</h5>
  				<p>Antedotes and Advice for new officers</p>
  		</div>

  		<div class="span4 portthumb">
  			<div class="shadow"><a href="http://prezi.com/adpzat_50_rz/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank"><img src="img/talks-3.jpg" alt=""></div>
  				<h5>Everyday Leadership for Engineers</h5>
  				<p>Modern philosophies on leadership</p>
  		</div>

      <div class="span4 portthumb">
        <div class="shadow"><a href="http://prezi.com/qbtsn9upv_pf/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank"><img src="img/talks-4.jpg" alt=""></div>
          <h5>This is UCLA IEEE (2015)</h5>
          <p>Dissecting the success of the Ops Program</p>
      </div>

      <div class="span4 portthumb">
        <div class="shadow"><a href="http://prezi.com/qwgjpzrnruxn/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank"><img src="img/talks-5.jpg" alt=""></div>
          <h5>Getting Started with Python</h5>
          <p>From Hello World to APIs</p>
      </div>

      <div class="span4 portthumb">
        <div class="shadow"><a href="http://prezi.com/wclxh3ezudah/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank"><img src="img/talks-6.jpg" alt=""></div>
          <h5>We, The Optimists</h5>
          <p>The mindset towards building a great anything</p>
      </div>
    </div>

	<hr>
	<!-- Portfolio row of columns for Hobbies Portfolio -->
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

      <div class="span4 portthumb">
          <div class="shadow"><a href="music.htm"><img src="img/portfolioph.jpg" alt=""></a></div>
          <h5>Board Game Design</h5>
          <p>Math + Creativity = Fun</p>
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
			<p>I was selected by the UCLA school of engineering as an examplary student in the Electrical Engineering Department for 2012. <a href="http://engineering.ucla.edu/leoszetoee/" target="_blank"> Link </a> </p>
      <!--Alternative Link in case this one goes down: https://web.archive.org/web/20150906163324/http://engineering.ucla.edu/leoszetoee/-->
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

		<div align="right">Leo Szeto 2016- Revision 0.8.1 <br><a href="http://www.simplehitcounter.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=1191435&f=0&b=16777215" border="0" height="18" width="83" alt="web counter"></a><a href="http://www.simplehitcounter.com" target="_blank" style="text-decoration:none;"></a>
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
