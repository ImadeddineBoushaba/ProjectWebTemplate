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
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">
	
    <title>PinPin | Free Bootstrap Themes by 365Bootstrap.com</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	  <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">PinPin</a>
	  </div>
	  <div class="navbar-collapse collapse">

		<!-- Left nav -->
		<ul class="nav navbar-nav">
		  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		  <li><a href="#">Link</a></li>
		  <li><a href="#" class="dropup"><i class="fa fa-user"></i> Account</a>
			<ul class="dropdown-menu">
			  <li><a href="#">Login</a></li>
			  <li><a href="#">Register</a></li>
			</ul>
		  </li>
		  <li><a href="#" class="dropup"><i class="fa fa-list"></i> Category</a>
			<ul class="dropdown-menu">
			  <li><a href="#">Technology</a></li>
			  <li><a href="#">Beautifull</a></li>
			  <li><a href="#">Baby Kids</a></li>
			  <li class="divider"></li>
			  <li class="dropdown-header">Nav header</li>
			  <li><a href="#">Others<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Menu 01</a></li>
				  <li><a href="#">Menu 02</a></li>
				  <li><a href="#">Menu 03<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="#">Action</a></li>
					  <li><a href="#">Something else here</a></li>
					  <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
					  <li><a href="#">One more link</a></li>
					  <li><a href="#">Menu item 1</a></li>
					  <li><a href="#">Menu item 2</a></li>
					  <li><a href="#">Menu item 3</a></li>
					  <li><a href="#">Menu item 4</a></li>
					  <li><a href="#">Menu item 5</a></li>
					  <li><a href="#">Menu item 6</a></li>
					  <li><a href="#">Menu item 7</a></li>
					  <li><a href="#">Menu item 8</a></li>
					  <li><a href="#">Menu item 9</a></li>
					  <li><a href="#">Menu item 10</a></li>
					  <li><a href="#">Menu item 11</a></li>
					  <li><a href="#">Menu item 12</a></li>
					  <li><a href="#">Menu item 13</a></li>
					  <li><a href="#">Menu item 14</a></li>
					  <li><a href="#">Menu item 15</a></li>
					</ul>
				  </li>
				  <li><a href="#">Menu 04</a></li>
				  <li><a href="#">Menu 05</a></li>
				</ul>
			  </li>
			</ul>
		  </li>
		  <li><a href="#"><i class="fa fa-envelope"></i> Contact</a></a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		  </div>
		  <button type="submit" class="btn btn-search">Submit</button>
		</form>
		<!-- Right nav -->
		<ul class="nav navbar-nav navbar-right top-social list-inline" style="padding: 0;margin: 0;">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		</ul>

	  </div><!--/.nav-collapse -->
	</div>
	
    <header>
		<div class="logo">
			<a href="index.html"><img src="images/logo.png"></a>
		</div>
    </header>
	
    <div id="page-content" class="sub-page">
		<div class="container">
			<center><article>
				<h2 class="center">Contact Form</h2>
				<!--Warning-->
				<center><?php echo $text;?></center>
				<!---->
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
			</article></center>
		</div>
	</div>
	
    <!-- Once the page is loaded, initialized the plugin. -->
    <script type="text/javascript" src="js/jquery-2.1.1.js" ></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
	
	<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>