<!DOCTYPE HTML>

<html lang="en">
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
							<img class ="logo icon" src="assets/graphics/logo.png" alt="logo">
						</div>

						<div class="content">
							<div class="inner">
								<h1>Front Range Dogs</h1>
								<p>Tired Paws, Happy Dogs</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">About</a></li>
								<li><a href="#work">Services</a></li>
								<li><a id="galleryBtn" href="#gallery">Photo Roll</a></li>
								<li><a id = "contactBtn" href="#contact">Interested?</a></li>								
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Introduction</h2>
								<q>A strong web presence for your business</q>

								<!-- <span class="image main"><img src="assets/graphics/bio.jpg" alt="" /></span> -->
								<p>Hello! I'm a passionate and experienced dog walker and sitter. 
									With over five years in the pet care industry, I've developed a deep love for animals, especially dogs. 
									Each walk is a chance for me to create enriching experiences tailored to the needs of the furry companion. 
									As a sitter, I provide a safe and comfortable environment, ensuring your pet feels right at home. 
									Rest assured, your beloved dog will be in loving and capable hands with me. 
									Let's make your dog's day wag-tastic!
								</p>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="assets/graphics/walk.jpg" alt="" /></span>
								<h3> Dog Walking </h3>
									<p>	During our dog walks, your furry friend and I will embark on exciting and enriching adventures. 
										We'll explore scenic trails, stroll through local parks, and enjoy one-on-one playtime. 
										I'll make sure to cater the walk to your dog's energy levels and preferences, whether they love to run and play fetch or prefer a leisurely pace. 
										My top priority is your pet's safety and happiness, so I'll keep a keen eye on their well-being throughout the entire walk. 
										With plenty of belly rubs and affection, I aim to make each walk a tail-wagging experience your dog will look forward to every time!
									</p>		
								<span class="image main"><img src="assets/graphics/sit.jpg" alt="" /></span>
								<h3> Pet Sitting </h3>
									<p>
									As your pet sitter, I'll provide a loving and comfortable environment in your pet's own home. 
									I'll follow their routines closely, offering affection and attention throughout their stay. 
									You can trust your furry friend will be in responsible and caring hands, receiving personalized care and regular updates. 
									Rest assured, I'll treat them as if they were my own.
									</p> 
									<span>I look forward to helping you and your dog live their happiest, healthiest, and fullest life! 🐶</span>							
							</article>

						<!-- gallery -->
							<article id="gallery">
								<h2 class="major">Photo Gallery</h2>
								
								<section class="img-row" id="rowOne">
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
								</section>

								<section class="img-row" id="rowTwo">
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/cat.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/cat.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/cat.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/cat.png" alt="Image" ></a>
								</section>
								
								<section class="img-row" id="rowThree">
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
									<a data-fslightbox class="imgLink" href=""><img class="thumbnail" src="assets/graphics/dog.png" alt="Image" ></a>
								</section>								

							</article>

						<!-- Contact -->
							
							<article id="contact">
								<section id="formView" >
									<h2 class="major" id >Contact</h2>
									
									<form method="post" id ="contactForm">
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
												<label for="pet">Pet Type</label>
												<input type="radio" name="pet" value="dog" id="dog">
													<label for="dog">
														<i class="fa fa-dog"></i>
													</label>
													
												<input type="radio" name="pet" value="cat" id="cat">
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
												<input type="email" name="email" id="email" required>
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
										<li><a href="" class="fa fa-solid fa-paw" style="--fa-animation-duration: 4s;"></a></li>
										<li><a href="" class="fa fa-brands fa-linkedin" style="--fa-animation-duration: 4s;"></a></li>
										<!-- <li><a href="#" class="fa fa-brands fa-instagram" style="--fa-animation-duration: 4s;"></a></li> -->
										<li><a href="https://github.com/irvMol/dogWalking" class="fa fa-brands fa-github" style="--fa-animation-duration: 4s;"></a></li>
									</ul>
								</section>

								<section id="formSubmitted">
									<img class="alert-img" src="assets/graphics/success.png" alt="successful submission">
									<h2>Message sent successfully!</h2>
								</section>

								<section id="formFailed">
									<img class="alert-img" src="assets/graphics/fail.png" alt="error in submission">
									<h2>Message Failed!</h2>
									<h4 id="errorMsg"></h4>
								</section>

							</article>

								
						<!-- Elements -->


					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Front Range Dog Care. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>
			
		<!-- Scripts -->

			<!-- CDN jquery preferred -->
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>			    
			<!-- Fallback if CDN is not available -->
			<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>	
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/gallery.js"></script>
			<script src="assets/js/fslightbox.js"></script>
			<script src="assets/js/contact.js"></script>


	</body>
</html>
