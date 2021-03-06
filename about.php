<!DOCTYPE html>
<?php include ("includes/header.php"); ?>
<?php include ("includes/footer.php"); ?>
<?php include ("includes/menu.php"); ?>
<html>
    <?php echo(head("Boyd's Used Motors")); ?>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
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
							<?php echo menu("about"); ?>
						</ul>
					</div>
				</div>
				
			</div><!-- /header -->
			
			
			<!-- main content -->
			<div id="content" class="row">
				
				<h2>About Boyd's Used Motors</h2>
				
				<p>Boyd's Used Motors started almost 10 years ago when Boyd found a rusty car in a ditch. He managed to sell it for a sandwich, although, he would have accepted a hard roll with ketchup.
				</p>
				
				<p>It was at this point that Boyd knew he had a flair for selling used cars to anyone that walked through his door.</p>
				
				<p>Over the years Boyd's car empire has grown from the ditch where he found his first car to the abandoned petrol station just down the road. He has sold many, many cars in his career. Too many for him to count.</p>
				
				<p>What awaits this visionary entrepreneur in the future? We will see.</p>
				
				
			</div><!-- /main content -->
			
			
			<!-- footer -->
			<div id="footer" class="row">
        <?php echo footer(); ?>
      </div>
			<!-- /footer -->
			
			
		</div><!-- /container -->
					
	</body>
</html>