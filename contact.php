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
							<?php echo menu("contact"); ?>
						</ul>
					</div>
				</div>
				
			</div><!-- /header -->
			
			
			<!-- main content -->
			<div id="content" class="row">
				
				<h2>Contact Us</h2>
				
				<p>Want to visit us or send us hate mail? Our address is below.</p>
				
				<div class="address col-md-offset-1">
					<p>Boyd's Used Motors</p>
					<p>Old Petrol Station</p>
					<p>Hill Lane</p>
					<p>Hampshire</p>
					<p>SO17 1BM</p>
				</div>
				<p>We are open every day whenever Boyd has managed to get out of bed.</p>
				
			</div><!-- /main content -->
			
			
			<!-- footer -->
			<div id="footer" class="row">
        <?php echo footer(); ?>
      </div>
			<!-- /footer -->
			
			
		</div><!-- /container -->
					
	</body>
</html>