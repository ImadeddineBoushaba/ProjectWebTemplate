<?php
/*
Free Bootstrap Themes : http://www.365bootstrap.com
*/

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">

	<title>AppPlay - Free Bootstrap Themes</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body>
 
  <!-- ########################### -->
  <div class="top container">
    <div class="row">
      <div class="col-md-12">
        <img class="toplogo" src="images/logo.png"/>
      </div>
    </div>
  </div>

  <!-- ############################## -->
  <div id="nav-wrapper">
    <div id="nav" class="navbar navbar-default navbar-inner container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
    
            <!-- BAR CONTENTS -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">AppPlay</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!-- LEFT CONTENT -->
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span class="fa fa-arrow-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span> ITEM</a></li>
                    <li class="divider"></li>
                    <li><a href="#" style="font-weight:300"><span class="glyphicon glyphicon-asterisk"></span> Item1</a></li>
                    <li><a href="#" style="font-weight:300"><span class="glyphicon glyphicon-asterisk"></span> Item2</a></li>
                    <li><a href="#" style="font-weight:300"><span class="glyphicon glyphicon-asterisk"></span> Item3</a></li>
                  </ul>
                </li>
              </ul>
              
              <!-- RIGHT CONTENT -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html"><span class="fa fa-home"></span> Home</a></li>
                <li><a href="contact.html"><span class="fa fa-envelope"></span> Contact</a></li>
              </ul>
            </div>
		
          </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- nav -->
  </div> <!-- wrapper -->

	<header class="container">
		<!-- CAROUSEL -->
		<div id="carousel-example-generic" class="carousel slide row hidden-xs" data-ride="carousel" data-interval="4000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/banner1.jpg" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="images/banner2.jpg" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="images/banner3.jpg" alt="..." style="width:100%">
				</div>
			</div>
		 
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page container">
	
	<div class="row">
		
		<div class="col-md-6 col-md-offset-1">
			<div id="main-content">
				<article>
					<center><div class="art-header">
						<h1 class="center">Contact</h1>
					</div></center>
					<!--Warning-->
					<center><?php echo $text;?></center>
					<!---->
					<div class="art-content">
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="contact.php">
								<label>
								<span>Enter your name:</span>
								<input type="text"  name="name" id="name" required>
								</label>
								<label>
								<span>Enter your email:</span>
								<input type="email"  name="email" id="email" required>
								</label>
								<label>
								<span>Your message here:</span>
								<textarea name="message" id="message"></textarea>
								</label>
								<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
							</form>
						</div>
					</div>
				</article>
			</div>
		</div>
	
		<div class="col-md-4">
			<div class="bs-sidebar affix hidden-sm" id="sidebar">
				<h3>Top Download</h3>
				<div id="owl-demo2" class="owl-carousel">
					<div class="item">
						<a href="single.html"><img src="images/1.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/2.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/7.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/3.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/4.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/5.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/6.png" /></a>
					</div>
				</div>
				<h3>New</h3>
				<div id="owl-demo3" class="owl-carousel">
					<div class="item">
						<a href="single.html"><img src="images/1.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/2.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/7.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/3.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/4.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/5.png" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/6.png" /></a>
					</div>
				</div>
			</div>
		</div>
    </div>

	
	</div>
	
	<!-- FOOTER -->
	<footer class="container ">
		<div class="row">
			<div class="col-md-4">
				<p>Copyright - <a href="http://www.365bootstrap.com" target="_blank" >Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li><a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="https://www.facebook.com/365bootstrap"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li><a href="#">Privacy Policy</a>
					</li>
					<li><a href="#">Terms of Use</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script>
		if ($(window).width() < 1199) {
			$('#sidebar').affix({
			  offset: {
				top: 398
			  }
			}); 
		} else {
			$('#sidebar').affix({
			  offset: {
				top: 442
			  }
			}); 
		}

		$(function() {
			$('#nav-wrapper').height($("#nav").height());
			
			$('#nav').affix({
				offset: { top: $('#nav').offset().top }
			});
		});
	</script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
	  $("#owl-demo1").owlCarousel({
        autoPlay: 3000,
        items : 1,
      });
      $("#owl-demo2").owlCarousel({
        autoPlay: 3000,
        items : 3,
      });
	  $("#owl-demo3").owlCarousel({
        autoPlay: 3000,
        items : 3,
      });
    });
    </script>
</body>
</html>