<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />

		<!--Bootstrap CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<title>Nick's PWP</title>
	</head>
<!--		Div containing landing area, nav, and background image-->
		<div class="container-fluid" id="bgimage">
			<nav class="navbar">
				<a class="nav-link mr-auto" href="#">Logo Button</a>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">About Me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Form</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Legal</a>
					</li>
				</ul>
			</nav>
			<div class="d-flex flex-column">
			<div class="text-left justify-content-start my-5 ml-5">
			<h2>Hello and</h2>
			</div>
			<div class="text-center justify-content-center my-5">
				<h2>Welcome To My</h2>
			</div>
			<div class="text-right justify-content-end my-5 mr-5">
				<h2>Portfolio Site</h2>
			</div>
			</div>
			</div>
<!--		Div for services section-->
		<div class="container border mb-4 py-3">
				<h2 class="text-right">Services</h2>
		</div>
<!--		Div containing services cards-->
		<div class="container">
			<div class = "row d-flex justify-content-between">

				<div class = "col-sm-6 col-lg-3">
					<div class="thumbnail text-center">
						<div>
							<h5>Elegant and Functional</h5>
							<h6>UI|UX</h6>
						</div>
						<figure class = " figure-caption border rounded bg-light">
							<figcaption class="text-center">
								Let's get crazy. Isn't it great to do something you can't fail at? Let's make a happy little mountain now. You don't have to be crazy to do this but it does help. If you don't like it - change it. It's your world.
							</figcaption>
						</figure>
					</div>
				</div>

				<div class = "col-sm-6 col-lg-3">
					<div class="thumbnail text-center">
						<div>
							<h5>Mobile Web App</h5>
							<h6>Creation and Conversion</h6>
						</div>
						<figure class = " figure-caption border rounded bg-light">
							<figcaption class="text-center">
								That's a crooked tree. We'll send him to Washington. Just let this happen. We just let this flow right out of our minds. Just think about these things in your mind and drop em' on canvas. And just raise cain. Isn't it great.
							</figcaption>
						</figure>
					</div>
				</div>

				<div class = "col-sm-6 col-lg-3">
					<div class="thumbnail text-center">
						<div>
							<h5>Custom WordPress</h5>
							<h6>CMS Solutions</h6>
						</div>
						<figure class = " figure-caption border rounded bg-light">
							<figcaption class="text-center">
								These trees are so much fun. I get started on them and I have a hard time stopping. You can create beautiful things - but you have to see them in your mind first. We need dark in order to show light.
							</figcaption>
						</figure>
					</div>
		</div>
<!--		div containing footer for services section-->
		<div class="container border mb-5">
			<h3 class="ml-3">Always Mobile First</h3>
			<h3 class="text-right mr-3">Always Responsive Design</h3>
		</div>
<!--		Div containing the portfolio section-->
		<div class="container">
			<div class="row">
			<div class="container border justify-content-center col-8">
				<h1 class="text-right">Portfolio</h1>
			</div>
			</div>
			<div class="row">
				<div class="container border d-flex justify-content-center col-8">
					<a href="#"><img src="http://fillmurray.com/200/300" alt=""/></a>
					<a href="#"><img src="http://fillmurray.com/200/300" alt=""/></a>
					<a href="#"><img src="http://fillmurray.com/200/300" alt=""/></a>
				</div>
			</div>
		</div>
<!--		Div containg header for Contact Section-->
		<div class="container border mt-5 mb-3">
			<div class="container border">
				<h1 class="text-right">Contact</h1>
			</div>
		</div>
<!--		Div containg contact section content-->
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h2 class="text-right">Who Are You?</h2>
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Your Name</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email Address</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Phone Number</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="(505)-555-5555">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Company Name</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Company Name">
				</div>
				<div class="form-group">
					<label for="exampleTextarea">Services You Are Interested In</label>
					<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
				</div>
<!--				Col containing about me section-->
				<div class="col-4 d-flex flex-column flex-wrap">
					<h2 class="justify-content-center">Who Am I?</h2>
					<p>Quis meatball ut t-bone, ball tip andouille nulla consequat minim aliquip cillum sed velit qui. Adipisicing reprehenderit excepteur non salami. Et t-bone shankle eu kevin pork aliqua aliquip. Corned beef do veniam aliqua enim prosciutto sausage id ut consequat ut buffalo.</p>
					<p><small>Call </small></p>
					<p>505-555-5555</p>
					<div class="d-flex flex-row">
					<img src="http://fillmurray.com/g/200/300" class="rounded-circle float-left" alt="Cinque Terre" />
						<div class="d-flex flex-column">
					<p class="text-right"><small>Email</small></p>
					<p class="text-right">Npascetti@</p>
					<p class="text-right"><small>Npascetti.com</small></p>
						</div>
					</div>
					<div class="d-flex flex-row justify-content-center">
					<a href="https://github.com/npascetti"><img src="../images/GitHub-Mark-64px.png" alt="githubmark"></a>
					<a href="https://github.com/npascetti"><img src="../images/linkedin.png" alt="githubmark"></a>
					<a href="https://github.com/npascetti"><img src="../images/GitHub-Mark-64px.png" alt="githubmark"></a>
					</div>
				</div>
			</div>
		</div>
<!--		Div containing footer of whole page-->
		<footer class="page-footer container-fluid mt-3" id="bgimage1">
			<div class="container">
				<div class="footer-copyright">
					<div class="container-fluid">
						© 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

					</div>
				</div>
			</div>
		</footer>
	</body>
</html>