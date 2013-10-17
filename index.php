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
							<?php echo menu("index"); ?>
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
				
				
          <?php 
            $data = file_get_contents("http://comp2203.ecs.soton.ac.uk/labs/lab3/api/location.php?location=3772");
            $weather = json_decode($data);
          ?>
				
          <pre>
            <?php print_r($weather);
                       
            
            ?>
          </pre>
          
          <?php
            echo("The name is ".$weather->name." the country is ".$weather->country." the speed is ".$weather->weather->wind->speed);
          ?>
				
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
        <?php echo footer(); ?>
      </div>
			<!-- /footer -->
			
			
		</div><!-- /container -->
					
	</body>
</html>