

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

 ?>
 

<?php 


    require_once("connection.php");
    $query = " select * from registertion ";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>News - Law Firm</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="practices.html">Practices</a>
				</li>
				<li>
					<a href="lawyers.html">Our Lawyers</a>
				</li>
				<li class="active">
					<a href="news.html">News</a>
					<div>
						<a href="singlepost.html">News Single Post</a>
					</div>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Recent News</h2>
					<p>
						This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
					</p>
					<p>
						You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
					</p>
					<p>
						If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
					</p>
				</div>
				<div>
					<h2>Client Testimonials</h2>
					<p>
						&ldquo;The best family lawyers in the city so far. Me and my ex-wife didn’t have any<br> problems settling the terms and agreement. Everything went so smoothly. We’re both very happy.&rdquo; <span>- Jared Greene</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>News</h1>
				<ul class="news">
					<li>
						<div class="box">
							<img src="images/bride-sideview.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>The Basics of Marriage Laws</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
					<li>
						<div class="box">
							<img src="images/happy.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>Happy Newly Divorced Women</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
					<li>
						<div class="box">
							<img src="images/children.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>Children &amp; Divorced Parents</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> the address city, state 1111
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@freewebsitetemplates.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="http://www.freewebsitetemplates.com/misc/contact/" class="subscribe">Click to send us an email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 Manes Winchester. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>