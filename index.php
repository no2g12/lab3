<!DOCTYPE html>
<html>
	<head>
		<title>Boyd's Used Motors</title>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		
		<script src="//code.jquery.com/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		
	</head>
	<body onLoad="startTimer()">
		
		<!-- container -->
		<div class="container">
			
			
			<!-- header -->
			<div id="header">
				<!-- title -->
				<div class="row">
					<div class="col-md-3 pull-left"><img src="img/banner-left.png"></div>
					<div class="col-md-6"><h1>Boyd's Used Motors</h1></div>
					<div class="col-md-3 pull-right"><img src="img/banner-right.png"></div>
				</div>
				
				<!-- motd -->
				<h2 id="motd">A name you can surely trust!</h2>
				
				<!-- navigation -->
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="finances.html">Finances</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
				
			</div><!-- /header -->
			
			
			<!-- main content -->
			<div id="content" class="row">
				
				
				<div class="col-md-7">
					<p>Welcome to Boyd's Used Motors!!! We have some of the finest cars with only minor problems.</p>
					
					<p>We have been voted best car company in the UK by our employees 8 years running. <br/>Boyd's Used Motors has been running for over 13 years selling reliable used cars to the first person to walk in the door.</p>
					
					<p>We saw you coming and made a special price just for you! That's the quality service you can expect from our friendly staff.</p>
				</div>
				
				<!-- sidebar -->
				<div id="sidebar" class="col-md-4 pull-right">
					<img src="img/sales-boyd.png" width="100%" class="img-rounded"></img>
					<p class="caption text-muted">Our trustworthy staff, sales lad Boyd!</p>
					
					<img src='img/car-blue.png' id="car" height="256px" />
					<h4>View our range of colours available for new cars today!</h4>
					
					<p class="btn btn-primary" onClick="changeCar()">Click here to get a random car colour</p>
				</div><!-- /sidebar -->
				
				
				
			</div><!-- /main content -->
			
			
			<!-- footer -->
			<div id="footer" class="row">
				<p class="col-md-offset-1 text-muted">Designed by Boyd's Artistic Design Company &copy; 2013</p>
			</div><!-- /footer -->
			
			
		</div><!-- /container -->
					
	</body>
</html>