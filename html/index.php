<?php
    session_start();
    if(!isset($_SESSION['userlogin'])) {
        header("Location: indexnew.html");
    }
   
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION);
        header("Location: login.php");
    }
 ?>
 

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1.0x">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<title>Home Page</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/Styles.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
<body>
<section id="header">
	<div class="menu-bar">

		<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.html"> Career Finder </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexnew.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobseeker.html">Job Seeker</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signinpage.php"> Employer </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contactUs.html">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
	<a href="login.php"><button class="btn menu-right-btn border" type="button" id ="logout"> Log Out </button></a>
		</form>

  </div>
</nav>	
	</div>

<div class="banner text-center">
	<h3> Looking for a job</h3>
			<div class="search-job text-center">
						<input type="text" class="form-control" placeholder=" Category">
						<input type="text" class="form-control" placeholder=" Compnay">
						<input type="text" class="form-control" placeholder=" Location">
						<a href="jobseeker.html"><button class="btn menu-right-btn border" type="button"> Find a job </button></a>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>



	
<section id="RecentCategories">
<div class="container text-center">
	<h2> Recent Searches</h2><br>
	<div class="compnay-details text-left">
		<div class="Job-update">
		<h5>Contact Based Web Developer</h5>
	</div>
	<div class="apply-btn">
			<a href="/Users/nehasarvil/Documents/Project_3340/html/jobseeker.html"><button type="button" class="btn btn-primary">Apply</button>	</a>
		</div>
	</div>

	<div class="compnay-details text-left">
		<div class="Job-update">
		<h5>Full Stack Web Developer</h5>
		</div>
	<div class="apply-btn">
			<a href="jobseeker.html"><button type="button" class="btn btn-primary">Apply</button>	</a>	
		</div>
	</div>

	<div class="compnay-details text-left">
		<div class="Job-update">
		<h5>Customer service Representative</h5>
		</div>
	<div class="apply-btn">
			<a href="jobseeker.html"><button type="button" class="btn btn-primary">Apply</button>	</a>	
		</div>
	</div>

	<div class="compnay-details text-left">
		<div class="Job-update">
		<h5>Account Manager</h5>
		</div>
	<div class="apply-btn">
			<a href="jobseeker.html"><button type="button" class="btn btn-primary">Apply</button>	</a>	
		</div>
	</div>
</div>
</section>


<section id="site-stats">
	<div class="container text-center">
		<h3> Jobs </h3>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
				<div class="col-6">
					<div class="stats-box">
						<i class="fa fa-user-o"></i><span><small>30k +</small></span>
						<p>Job Seeker</p>
					</div>
					</div>
				<div class="col-6">
					<div class="stats-box">
						<i class="fa fa-slideshare"></i><span><small>40k +</small></span>
						<p>Employer</p>
					</div>
					</div>
				</div>

	</div>

	<div class="col-md-6">
		<div class="row">
				<div class="col-6">
					<div class="stats-box">
						<i class="fa fa-hand-peace-o"></i><span><small>100k +</small></span>
						<p>Active Jobs</p>
					</div>
					</div>
				<div class="col-6">
					<div class="stats-box">
						<i class="fa fa-building-o"></i><span><small>100k +</small></span>
						<p>Compnies</p>
					</div>
					</div>
				</div>

	</div>
	</div>
	</div>
	
	
</section>

<section id="app-banner" class="text-center">
	<h3> Find Jobs on mobile, Download app</h3>
	<img src="../photos/anroid.png">
	<img src="../photos/apple.jpg">
	
</section>

<section id="footer" class="text-center">
<h5>Subscribe here</h5>
<a href="#"><img src="../photos//facebook.png" style="width: 50px;"> </a>
<a href="#"><img src="../photos/twitter.png" style="width: 50px;"> </a>
<a href="#"><img src="../photos/instagram.jpg" style="width: 50px;"> </a>

<p> Copyright @2020 All rights reserved by Career Finder</p>

</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>