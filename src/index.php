<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Front Range Dog Care </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="https://kit.fontawesome.com/f71f56719f.js" crossorigin="anonymous"></script>

	</head>

	<body class="is-preload" >

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div>
							<img class ="logo icon" src="assets/images/logoSimple.png" alt="logo">
						</div>

						<div class="content">
							<div class="inner">
								<h1>Front Range Dogs</h1>
								<p>Tired Paws, Happy Dogs</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">About Alyssa</a></li>
								<li><a href="#work">Services</a></li>
								<li><a id="galleryBtn" href="#gallery">Photo Roll</a></li>
								<li><a href="#contact">Interested?</a></li>								
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Introduction</h2>
								<q>I believe a tired dog, is a happy dog.</q>

								<!-- <span class="image main"><img src="assets/images/bio.jpg" alt="" /></span> -->
								<p>Hello! My name is Alyssa Black, and I provide pet care services in Westminster, CO and the
								surrounding areas. Working with animals, especially our beloved canines, has been my passion since I was a child.
								I’ve been living with and caring for dogs my entire life, and have been professionally dog sitting and walking for the last seven years.
								I have extensive experience with many different types of dog breeds, and all sizes and ages - from hour old puppies to elderly dogs. 
								I’ve performed a large variety of care services, from extended overnight stays, drop-ins multiple times a day, to light grooming and training sessions.
								Along with all of my experience with dogs, I am also First Aid and CPR certified.
								</p>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="assets/images/walk.jpg" alt="" /></span>
								<h3> Dog Walking </h3>
								<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
		
								<span class="image main"><img src="assets/images/sit.jpg" alt="" /></span>
								<h3> Pet Sitting </h3>
								<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
							</article>

						<!-- gallery -->
							<article id="gallery">
								<h2 class="major">Photo Gallery</h2>
								
								<section class="img-row" id="rowOne">
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
								</section>

								<section class="img-row" id="rowTwo">
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic02.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic02.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic02.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic02.jpg" alt="Image" ></a>
								</section>
								
								<section class="img-row" id="rowThree">
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/images/pic01.jpg" alt="Image" ></a>
								</section>								

							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" id ="contactForm">
								<!-- <form method="post" class = "contact" action="assets/php/contact.php"> -->
									<div class="fields">
										<div class="field third">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" pattern=[A-Z\sa-z]{3,30} required>
										</div>

										<div class="field third">
											<label for="pet">Pets' Name</label>
											<input type="text" name="subject" id="pet" pattern=[A-Z\sa-z]{3,30} required>
										</div>

										<div class="field third">
											<input type="radio" name="pet" id="dog">
												<label for="dog">
													<i class="fa fa-dog"></i>
												</label>
												
											<input type="radio" name="pet" id="cat">
												<label for="cat">
													<i class="fa fa-cat"></i>
												</label>      
											
											<!-- <input type="radio" name="pet" id="other">
											<label for="other">
												<i class="fa fa-dragon"></i>
											</label>    	 -->
										</div>

										<div class="field">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" required>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4" required></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								
								<ul class="icons">
									<li><a href="https://r.rover.com/iCnW8V" class="fa-solid fa-paw fa-beat" style="--fa-animation-duration: 4s;"></a></li>
									<li><a href="https://www.linkedin.com/in/alyssa-black-772aa21a4" class="fa-brands fa-linkedin fa-beat" style="--fa-animation-duration: 4s;"></a></li>
									<li><a href="#" class="fa-brands fa-instagram fa-beat" style="--fa-animation-duration: 4s;"></a></li>
									<li><a href="https://github.com/irvMol/dogWalking" class="fa-brands fa-github fa-beat" style="--fa-animation-duration: 4s;"></a></li>
								</ul>
							</article>

						<!-- Elements -->


					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>
			
		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/gallery.js"></script>
			<script src="assets/js/fslightbox.js"></script>
			<script src="assets/js/contact.js"></script>


	</body>
</html>
