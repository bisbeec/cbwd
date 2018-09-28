<?php

if($_POST["submit"]) {
    $recipient="bisbeec@gmail.com";
    $subject="CBWD Website Message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    if(!empty($_POST['website'])) die();

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<h6>Thank you! Your message has been sent.</h6>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/styles.css">
	<script type="text/javascript" src="assets/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/custom.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>CBWD</title>
	<link rel="icon" 
      type="image/png" 
      href="assets/images/logo-small.png">
</head>
<body>
	<header id="header">
		<div class="width-wrap">
			<a href="#intro" class="logo scroll-link">
				<img src="assets/images/logo-small.png" alt="Logo">
				<span>Charlie Bisbee Web Development</span>
				<span class="cbwd">CBWD</span>
			</a>
			<ul id="nav">
				<li>
					<a href="#portfolio" class="scroll-link">My Portfolio</a>
				</li>
				<li>
					<a href="#testimonials" class="scroll-link">Testimonials</a>
				</li>
				<li>
					<a href="#contact" class="scroll-link">Contact</a>
				</li>
			</ul>
			<div id="hamburger">
				<div class="bar bar-one"></div>
				<div class="bar bar-two"></div>
				<div class="bar bar-three"></div>
			</div>
		</div>
	</header>
	<main id="main">
		<section class="section intro" id="intro">
			<div class="content width-wrap">
				<img id="my-img" src="assets/images/me-square.jpg" alt="Charlie">
				<h1>Hi, I'm Charlie.</h1>
				<p>I'm a front end developer specializing in user-friendly experiences with simple layouts. A self-taught programmer, I code with HTML5 and CSS (Sass) to create beautiful, interactive and fully responsive websites. Feel free to check out <a href="#portfolio" class="scroll-link">my portfolio</a> of screenshots. You can also view my code at <a href="https://github.com/bisbeec" target="_blank">github.com/bisbeec</a>. Fun pens can be found <a href="https://codepen.io/cbisbee/" target="_blank">here</a>.</p>
				<p>Whether you're an employer, a recruiter, a co-founder, or a fellow developer, <a href="#contact" class="scroll-link">contact me</a> to discuss collaborating on a project.</p>
			</div>
			<div class="overlay"></div>
		</section>
		<section class="section work" id="portfolio">
			<div class="content width-wrap">
				<h1 id="recent-work-heading">Recent Work</h1>
				<div class="grid">




					<figure id="nahant-swim">
						<img src="assets/images/screenshots/nahant-swim.jpg" alt="Nahant S.W.I.M."/>
						<figcaption>
							<h2>Nahant S.W.I.M.</h2>
							<p>Environmental Conservation</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="vtparks">
						<img src="assets/images/screenshots/vtparks.jpg" alt="Vermont State Parks"/>
						<figcaption>
							<h2>Vermont State Parks</h2>
							<p>Travel & Tourism</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="bernstein">
						<img src="assets/images/screenshots/bernstein.jpg" alt="Steven Bernstein"/>
						<figcaption>
							<h2>Steven Bernstein</h2>
							<p>Couples & Individual Therapy</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="agatewood">
						<img src="assets/images/screenshots/agatewood.jpg" alt="Agatewood"/>
						<figcaption>
							<h2>Agatewood Strategies</h2>
							<p>Environmental Consultation</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="whalers">
						<img src="assets/images/screenshots/whalers.jpg" alt="North Haven Whalers"/>
						<figcaption>
							<h2>North Haven Whaler Rentals</h2>
							<p>Boat Rentals</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="billysims">
						<img src="assets/images/screenshots/billysims.jpg" alt="Billy Sims China Food Group"/>
						<figcaption>
							<h2>Billy Sims China Food Group</h2>
							<p>Importing/Exporting</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="cbwd">
						<img src="assets/images/screenshots/cbwd.jpg" alt="CBWD"/>
						<figcaption>
							<h2>CBWD</h2>
							<p>Professional Portfolio</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>

					<figure id="adventureland">
						<img src="assets/images/screenshots/adventureland.jpg" alt="Adventureland"/>
						<figcaption>
							<h2>Adventureland</h2>
							<p>Personal Travel Blog</p>
							<span class="plus">+</span>
						</figcaption>			
					</figure>
				</div>
			</div>
		</section>
		<section class="section testimonials" id="testimonials">
			<div class="content width-wrap">
				<h1>Testimonials</h1>
				<div class="testi-sec">
					<p class="quote">Charlie did a fantastic job redesigning our website! While working on our outdated site, he re-organized our web content to ensure effective and attractive communication of our mission, history and ongoing projects. In addition, he introduced new web design features to create a responsive site that can be seen on mobile devices as effectively as on desktops and laptops. He was a delight to work with, and we couldn’t be more pleased with the final product, which has received rave reviews from our members. We highly recommend him!</p>
					<p class="author">- Vi Patek & Alice Cort, Nahant SWIM, Inc.</p>
				</div>
				<div class="testi-sec">
					<p class="quote">I love working with Charlie! He designed a website for us that is beautiful to view, easy to use, and fully responsive. He has a great aesthetic and is knowledgeable about best practices and standards. He took the time to understand the intricacies of our organization and business needs and was able to weave that into an appealing modern web design. He has an excellent eye for detail and a dogged determination to solve any issues. I would work with him again any time.</p>
					<p class="author">- Rochelle Skinner, Vermont State Parks</p>
				</div>
				<div class="testi-sec">
					<p class="quote">Working with Charlie was extremely easy. He was able to take my ideas for a website and put a much more refined and polished look to the site so my business projects the image which I want. He was very responsive and worked quickly to help me achieve exactly what I need.</p>
					<p class="author">- Dave Low, Agatewood Sustainability Strategies</p>
				</div>
				<div class="testi-sec">
					<p class="quote">Charlie helped us recover and update our website, which had lain dormant for a few years. He guided us through the process of registering with a web host, and patiently handled the technical details of this transition despite a series of delays from the host company. Charlie also resolved graphics issues and helped give the website a fresh new look. Charlie was always accessible and responsive by email (we're based in England; he near Boston), and we recommend him unreservedly for the good work he has done for us.</p>
					<p class="author">- Tom Bartlett, Warren Cove Memoirs</p>
				</div>
				<div class="testi-sec">
					<p class="quote">Charlie is an experienced developer with a refreshing eagerness to learn and explore through code. Since he began working with the web, he's shown unwavering determination to build both his technical portfolio and his client portfolio. Charlie brings a thoughtful approach to a craft often marred by haste. He's personable, knowledgeable, thorough, and a pleasure to work with.</p>
					<p class="author">- Chris Beaman, Archer Sparrow Design</p>
				</div>
			</div>
		</section>
		<section class="section contact" id="contact">
			<div class="content width-wrap">
				<h1>Let's Talk.</h1>
				<form id="contactform" method="post" action="index.php">
					<input type="text" placeholder="Name" name="sender" required>
					<input type="text" id="website" name="website"/>
					<input type="email" placeholder="Email" name="senderEmail" required>
					<textarea placeholder="Message" name="message" required></textarea>
					<input class="submit" type="submit" name="submit" value="Submit">
				</form>
				<?=$thankYou ?>
				<div class="contact-row">
					<div class="email-contact">
						<a href="mailto:bisbeec@gmail.com">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<span>bisbeec@gmail.com</span>
						</a>
					</div>
					<div class="phone-contact">
						<a href="tel:1-802-777-6807">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<span>802.777.6807</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="width-wrap">
				<p>&copy 2018, Charlie Bisbee Web Development. All rights reserved.</p>
				<a href="https://www.linkedin.com/in/bisbeec" target="_blank"><i class="fa-linkedin-square fa" aria-hidden="true"></i></a>
				<p id="adventureland"><a href="http://www.adventureland.charliebisbee.com/index.html" target="_blank">adventureland <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
			</div>
		</footer>
	</main>

	<!--OVERLAY CAROUSEL-->
	<div id="overlay-full">

		<!--NAHANT SWIM-->
		<div class="carousel-showcase carousel slide" id="myCarousel-nahant" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-nahant" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-nahant" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-nahant" data-slide-to="2" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-nahant" data-slide-to="3" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-nahant" data-slide-to="4" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-nahant" data-slide-to="5" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/nahant-swim-home.jpg" alt="Nahant S.W.I.M.">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/nahant-swim-multiple2.jpg" alt="Nahant S.W.I.M.">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/nahant-swim-support.jpg" alt="Nahant S.W.I.M.">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/nahant-swim-contact.jpg" alt="Nahant S.W.I.M.">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/nahant-swim-phone-menu.jpg" alt="Nahant S.W.I.M.">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/nahant-swim-multiple.jpg" alt="Nahant S.W.I.M.">
	            </div>
	            <div class="carousel-caption">
	            	<h3>Nahant S.W.I.M.</h3>
	                <p>Nahant S.W.I.M. (Safer Waters in Massachusetts), is a non-profit, volunteer-run organization that works to keep the waters around Nahant and Mass. clean for future generations. Working in tandem with board executive Vi Patek and Alice Cort, I created a simple, responsive template that accentuates the organization's goals and needs. <em><small>(HTML, CSS, jQuery, Bootstrap)</small></em></p>
	                <a href="https://nahantswim.org/index.html" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-nahant" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-nahant" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--VT STATE PARKS-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-vtparks" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-vtparks" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-vtparks" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-vtparks" data-slide-to="2" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-vtparks" data-slide-to="3" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-vtparks" data-slide-to="4" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-vtparks" data-slide-to="5" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-vtparks" data-slide-to="6" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/vtparks-home.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/vtparks-multiple2.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/vtparks-brighton.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/vtparks-phone-menu.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/vtparks-multiple.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/vtparks-hiking.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="item">
	            	<img src="assets/images/carousel/vtparks-parkfinder.jpg" alt="Vermont State Parks">
	            </div>
	            <div class="carousel-caption">
	                <h3>Vermont State Parks</h3>
	                <p>Vermont State Parks' old website was outdated and built using tables and inline CSS. Working with the department's marketing head, I created and utilized a bootstrap-powered template that is intuitive and easy to use. <small><em>(HTML, CSS, JS, jQuery, Bootstrap)</em></small></p>
	                <a href="https://vtstateparks.com/" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-vtparks" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-vtparks" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--BERNSTEIN-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-bernstein" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-bernstein" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-bernstein" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-bernstein" data-slide-to="2" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-bernstein" data-slide-to="3" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/bernstein-home.jpg" alt="Bernstein">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/bernstein-multiple2.jpg" alt="Bernstein">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/bernstein-about.jpg" alt="Bernstein">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/bernstein-services.jpg" alt="Bernstein">
	            </div>
	            <div class="carousel-caption">
	                <h3>Steven Bernstein Therapy</h3>
	                <p>While working with a designer from <a href="https://www.bartlettinteractive.com/" target="_blank" style="display: inline; margin: 0">Bartlett Interactive</a>, I built this Wordpress site off a pre-existing theme. Steven was looking for a site that would feel welcoming and professional and would help grow his business. <small><em>(Wordpress, CSS)</em></small></p>
	                <a href="http://www.stevenbernsteintherapy.com/" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-bernstein" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-bernstein" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--AGATEWOOD-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-agatewood" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-agatewood" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-agatewood" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-agatewood" data-slide-to="2" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-agatewood" data-slide-to="3" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/agatewood-home.jpg" alt="Agatewood">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/agatewood-multiple2.jpg" alt="Agatewood">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/agatewood-what-we-do.jpg" alt="Agatewood">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/agatewood-projects.jpg" alt="Agatewood">
	            </div>
	            <div class="carousel-caption">
	                <h3>Agatewood Strategies</h3>
	                <p>Agatewood writes and implements LEED-certified sustainability strategies for a variety of organizations and institutions. Principal Dave Low came to me looking for a professional website that would be easy to manage. I bounced some template ideas off him and then created this modified WP theme. <small><em>(Wordpress, CSS, HTML)</em></small></p>
	                <a href="http://agatewoodconsulting.com/" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-agatewood" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-agatewood" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--WHALERS-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-whalers" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-whalers" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-whalers" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-whalers" data-slide-to="2" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-whalers" data-slide-to="3" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-whalers" data-slide-to="4" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/whalers-home.jpg" alt="North Haven Whaler Rentals">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/whalers-multiple.jpg" alt="North Haven Whaler Rentals">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/whalers-rentals.jpg" alt="North Haven Whaler Rentals">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/whalers-policies.jpg" alt="North Haven Whaler Rentals">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/whalers-contact.jpg" alt="North Haven Whaler Rentals">
	            </div>
	            <div class="carousel-caption">
	                <h3>North Haven Whaler Rentals</h3>
	                <p>Kate Yoder and her family were trying to get their fledgling whaler rental operation off the ground and approached Bartlett and me about helping in the process. We created this Squarespace site that utilizes a third-party rental system. <small><em>(Squarespace, CSS, HTML)</em></small></p>
	                <a href="https://www.northhavenwhalers.com/" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-whalers" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-whalers" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--BILLY SIMS-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-sims" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-sims" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-sims" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-sims" data-slide-to="2" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/billysims-home.jpg" alt="China Food Hub">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/billysims-multiple.jpg" alt="China Food Hub">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/billysims-about.jpg" alt="China Food Hub">
	            </div>
	            <div class="carousel-caption">
	                <h3>Billy Sims China Food Group</h3>
	                <p>Former Heisman Trophy winner Sims' startup got a boost with this Bartlett-designed WP site. <small><em>(Wordpress, CSS)</em></small></p>
	                <a href="http://www.chinafoodhub.com/" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-sims" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-sims" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--CBWD-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-cbwd" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-cbwd" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-cbwd" data-slide-to="1" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/cbwd-home.jpg" alt="CBWD">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/cbwd-multiple.jpg" alt="CBWD">
	            </div>
	            <div class="carousel-caption">
	                <h3>CBWD</h3>
	                <p>My professional portfolio is hard-coded using specialized hover effects and light PHP. <small><em>(HTML, CSS, jQuery, PHP)</em></small></p>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-cbwd" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-cbwd" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>

	    <!--ADVENTURELAND-->
	    <div class="carousel-showcase carousel slide" id="myCarousel-adventureland" data-interval="false">
			<span class="faux-x">X</span>
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel-adventureland" data-slide-to="0" class="customCarouselIndicator active"></li>
	            <li data-target="#myCarousel-adventureland" data-slide-to="1" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-adventureland" data-slide-to="2" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-adventureland" data-slide-to="3" class="customCarouselIndicator"></li>
	            <li data-target="#myCarousel-adventureland" data-slide-to="4" class="customCarouselIndicator"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	            <div class="item active">
	                <img src="assets/images/carousel/adventureland-home.jpg" alt="Adventureland">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/adventureland-multiple.jpg" alt="Adventureland">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/adventureland-photos-hover.jpg" alt="Adventureland">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/adventureland-stories.jpg" alt="Adventureland">
	            </div>
	            <div class="item">
	                <img src="assets/images/carousel/adventureland-gallery.jpg" alt="Adventureland">
	            </div>
	            <div class="carousel-caption">
	                <h3>Adventureland</h3>
	                <p>This travel blog site is hard-coded and based upon a Squarespace theme. Fixed-positioning parallax effects and hover transitions give it a dynamic feel. <small><em>(HTML, CSS, jQuery)</em></small></p>
	                <a href="http://www.adventureland.charliebisbee.com/index.html" target="_blank">Visit the site <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    	<a class="left carousel-control" href="#myCarousel-adventureland" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel-adventureland" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>
	</div>
</body>
</html>