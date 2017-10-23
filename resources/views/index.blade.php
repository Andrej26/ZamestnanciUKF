<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>College Landing Page</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{URL::to('/')}}fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="{{URL::to('/')}}fonts/icomoon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{URL::to('/')}}/style.css">
		
		<!--[if lt IE 9]>
		<script src="{{URL::to('/')}}/js/ie-support/html5.js"></script>
		<script src="{{URL::to('/')}}/js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<div class="container">
				<main class="main-content">
					<div class="content">
						<header class="site-header">
							<a href="" class="logo"><img src="{{URL::to('/')}}/images/logo.png" alt=""></a>
							<div class="header-type">
								<h1>Choose your future today!</h1>
								<p>Dolores et quas molestias excepturi sint occaecati cupiditate non provident similique sunt in culpa qui officia deserunt mollitia animi est laborum dolorum.</p>
							</div>
						</header> <!-- .site-header -->

						<div class="banner">
							<img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
						</div>

						<h2>What is so cool in our college?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maxime explicabo architecto illo itaque expedita eaque harum illum perferendis, accusantium dolores, culpa alias. At impedit labore, quidem suscipit cumque sapiente!</p>

						<div class="row">
							<div class="col-md-6">
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-owl"></i></div>
									<h3 class="feature-title">Ducimus blanditiis praesentium </h3>
									<p>Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
								</div>

								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-bus"></i></div>
									<h3 class="feature-title">Adipiscing eiusmod incididunt </h3>
									<p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-school"></i></div>
									<h3 class="feature-title">Nemo enim ipsam voluptatem</h3>
									<p>Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
								</div>

								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="icon-foot-ball"></i></div>
									<h3 class="feature-title">Nam libero tempore soluta nobis </h3>
									<p>Labore et dolore magna aliqua ad minim veniam exercitation ullamco.</p>
								</div>
							</div>
						</div>

						<div class="features">
							<div class="feature">
								<div class="feature-icon large"><i class="icon-archive"></i></div>
								<h2 class="feature-title">Accusamus iusto dignissimos ducimus</h2>
								<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
							</div>
							<div class="feature">
								<div class="feature-icon large"><i class="icon-book"></i></div>
								<h2 class="feature-title">Neque porro quisquam est dolorem</h2>
								<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
							</div>
							<div class="feature">
								<div class="feature-icon large"><i class="icon-badge"></i></div>
								<h2 class="feature-title">Lorem ipsum dolor sit amet consectetur</h2>
								<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
							</div>
						</div>
					</div>
					<div class="aside">
						<form action="#" class="signup-form">
							<div class="form-header">
								<h2>Bussiness College</h2>
								<p>Accusantium doloremque laudantium totam rem aperiam eaque ipsa quae inventore veritatis dolor architecto.</p>
							</div>
							<div class="form-content">
								<p><input type="text" placeholder="First name..."></p>
								<p><input type="text" placeholder="Last name..."></p>
								<p><input type="text" placeholder="Email address..."></p>
								<p><input type="text" placeholder="Phone number..."></p>
								<p><input type="text" placeholder="Street..."></p>
								<p class="columned">
									<input type="text" placeholder="City...">
									<input type="text" placeholder="Zip" class="small">
								</p>
								<p>
									<span class="select control">
										<select name="" id="">
											<option value="#">Choose education level</option>
											<option value="#"></option>
											<option value="#"></option>
										</select>
									</span>
								</p>
								<p>
									<span class="select control">
										<select name="" id="">
											<option value="#">Choose Course</option>
											<option value="#"></option>
											<option value="#"></option>
										</select>
									</span>
								</p>
								
								<h4>When do you want to join?</h4>
								<div class="row">
									<div class="col-sm-6">
										<span class="radio control">
											<input type="radio" name="month" id="jan">
											<label for="jan">January</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="feb">
											<label for="feb">February</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="mar">
											<label for="mar">March</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="apr">
											<label for="apr">April</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="may">
											<label for="may">May</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="jun">
											<label for="jun">Jun</label>
										</span>
									</div>
									<div class="col-sm-6">
										<span class="radio control">
											<input type="radio" name="month" id="jul">
											<label for="jul">July</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="aug">
											<label for="aug">August</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="sep">
											<label for="sep">September</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="oct">
											<label for="oct">October</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="nov">
											<label for="nov">November</label>
										</span>
										<span class="radio control">
											<input type="radio" name="month" id="dec">
											<label for="dec">December</label>
										</span>
									</div>
								</div>
								<p>
									<span class="radio control">
										<input type="radio" name="month" id="ny">
										<label for="ny">Not within the next year</label>
									</span>
								</p>
								
								<p>
									<input type="submit" value="get the program information">
								</p>
								<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est numquam vitae nemo</p>
							</div>
						</form>
					</div>
				</main>

				<div class="graduates">
					<ul class="slides">
						<li>
							<div class="student-data">
								<div class="student-image">
									<img src="{{URL::to('/')}}/public/dummy/person-1.jpg" alt="">
								</div>
								<div class="student-details">
									<h2 class="student-name">Howard Brown</h2>
									<ul class="student-info">
										<li>Graduation: <strong>2011</strong></li>
										<li>Course: <strong>Management</strong></li>
										<li>Current job: <strong>Micro System INC.</strong></li>
									</ul>

									<p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
								</div>
								
							</div>
						</li>
						<li>
							<div class="student-data">
								<div class="student-image">
									<img src="{{URL::to('/')}}/dummy/person-1.jpg" alt="">
								</div>
								<div class="student-details">
									<h2 class="student-name">Howard Brown</h2>
									<ul class="student-info">
										<li>Graduation: <strong>2011</strong></li>
										<li>Course: <strong>Management</strong></li>
										<li>Current job: <strong>Micro System INC.</strong></li>
									</ul>

									<p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
								</div>
								
							</div>
						</li>
					</ul>
				</div>

				<footer class="site-footer">
					<p>Copyright &copy; 2014 Company Name. Designed by Themezy. All rights reserved</p>

					<div class="social-links">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
					</div>
				</footer>
				
			</div>

		</div>

		<script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
		<script src="{{URL::to('/')}}/js/plugins.js"></script>
		<script src="{{URL::to('/')}}/js/app.js"></script>
		
	</body>

</html>