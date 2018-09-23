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
			<a href="#intro" class="logo">
				<img src="assets/images/logo-small.png" alt="Logo">
				<span>Charlie Bisbee Web Development</span>
				<span class="cbwd">CBWD</span>
			</a>
			<ul id="nav">
				<li>
					<a href="#portfolio">My Portfolio</a>
				</li>
				<li>
					<a href="#testimonials">Testimonials</a>
				</li>
				<li>
					<a href="#contact">Contact</a>
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
				<p>I'm a front end developer specializing in user-friendly experiences with simple layouts. A self-taught programmer, I code with HTML5 and CSS (Sass) to create beautiful, interactive and fully responsive websites. Feel free to check out <a href="#portfolio">my portfolio</a> of screenshots. You can also view my code at <a href="https://github.com/bisbeec" target="_blank">github.com/bisbeec</a>. Fun pens can be found <a href="https://codepen.io/cbisbee/" target="_blank">here</a>.</p>
				<p>Whether you're an employer, a recruiter, a co-founder, or a fellow developer, <a href="#contact">contact me</a> to discuss collaborating on a project.</p>
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
							<p>Couples & Individual's Therapy</p>
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
	<div id="overlay-full"></div>
	<div class="carousel-showcase carousel slide" id="myCarousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="customCarouselIndicator active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="customCarouselIndicator"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="customCarouselIndicator"></li>
            <li data-target="#myCarousel" data-slide-to="3" class="customCarouselIndicator"></li>
            <li data-target="#myCarousel" data-slide-to="4" class="customCarouselIndicator"></li>
            <li data-target="#myCarousel" data-slide-to="5" class="customCarouselIndicator"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item one active">
                <img src="assets/images/screenshots/nahant-swim.jpg" alt="Nahant S.W.I.M.">
                <div class="carousel-caption">
                    <h3>Title for the Image</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Nunc varius facilisis eros in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa teger ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer.</p>
                    <a href="#">Visit the site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="item two">
            	<img src="assets/images/screenshots/vtparks.jpg" alt="Vermont State Parks">
                <div class="carousel-caption">
                    <h3>Title for the Image</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Nunc varius facilisis eros in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa teger ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer.</p>
                    <a href="#">Visit the site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="item three">
                <img src="assets/images/screenshots/bernstein.jpg" alt="Steven Bernstein">
                <div class="carousel-caption">
                    <h3>Title for the Image</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Nunc varius facilisis eros in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa teger ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer.</p>
                    <a href="#">Visit the site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="item four">
            	<img src="assets/images/screenshots/agatewood.jpg" alt="Agatewood">
                <div class="carousel-caption">
                    <h3>Title for the Image</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Nunc varius facilisis eros in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa teger ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer.</p>
                    <a href="#">Visit the site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="item five">
            	<img src="assets/images/screenshots/whalers.jpg" alt="North Haven Whalers">
                <div class="carousel-caption">
                    <h3>Title for the Image</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Nunc varius facilisis eros in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa teger ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer.</p>
                    <a href="#">Visit the site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="item six">
                <img src="assets/images/screenshots/billysims.jpg" alt="Billy Sims">
                <div class="carousel-caption">
                    <h3>Title for the Image</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Nunc varius facilisis eros in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa teger ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer.</p>
                    <a href="#">Visit the site <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    	<span class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </span>
        <span class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </span>
    </div>
</body>
</html>