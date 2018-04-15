<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php 
	include 'db.php';
	include 'config.php';
?>
<title><?php echo $title; ?> - Add New Location</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.php">COMP <span>353</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
            
            <li class="menu-list"><a href="#"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a>
              <ul class="sub-menu-list">
                <?php echo $addbar; ?>
              </ul>
            </li> 
            
						<li class="menu-list"><a href="#"><i class="lnr lnr-menu"></i> <span>Tables</span></a>
              <ul class="sub-menu-list">
                <?php echo $tablesbar; ?>
              </ul>
            </li>  
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content main-content3">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
					</div>
					<div class="profile_details">		
					</div>		    	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add New Location</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Location Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Location Name" name="locName">
									</div>
									<div class="col-sm-2 jlkdfj1">
										<p class="help-block">Enter a UNIQUE location name.</p>
									</div>
								</div>
								<div class="form-group">
									<label for="deptname-select" class="col-sm-2 control-label">Department Name</label>
									<div class="col-sm-8">
										<?php 
											$result = mysqli_query($conn, "SELECT deptName FROM department;");
											if(mysqli_num_rows($result)){
												$select = '<select name="deptname-select" id="deptname-select" class="form-control1">';
												while($rs = mysqli_fetch_array($result)){
													$select .= '<option value="'.$rs['deptName'].'">'.$rs['deptName'].'</option>';
												}
											}
											$select.='</select>';
											echo $select;
										?>
									</div>
								</div>	
								<!--
								<div class="form-group">
									<label for="deptnumber-select" class="col-sm-2 control-label">Department Number</label>
									<div class="col-sm-8">
										<?php 
										/*
											$result = mysqli_query($conn, "SELECT deptNumber FROM department;");
											if(mysqli_num_rows($result)){
												$select = '<select name="deptnumber-select" id="deptnumber-select" class="form-control1">';
												while($rs = mysqli_fetch_array($result)){
													$select .= '<option value="'.$rs['deptNumber'].'">'.$rs['deptNumber'].'</option>';
												}
											}
											$select.='</select>';
											echo $select;*/
										?>
									</div>
								</div>
								-->
								<div class="form-group">
									<label for="projectid-select" class="col-sm-2 control-label">Project ID</label>
									<div class="col-sm-8">
										<?php 
											$result = mysqli_query($conn, "SELECT projectID FROM project;");
											if(mysqli_num_rows($result)){
												$select = '<select name="projectid-select" id="projectid-select" class="form-control1">';
												while($rs = mysqli_fetch_array($result)){
													$select .= '<option value="'.$rs['projectID'].'">'.$rs['projectID'].'</option>';
												}
											}
											$select.='</select>';
											echo $select;
										?>
									</div>
								</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn-success btn" type="submit" name="submit">Submit</button>
								</div>
							</div>
						 </div>
						</form>
						</div>
					</div>
					

	<?php
 		if(isset($_POST['submit'])){
 			$location_Name = $_POST["locName"];
 			$department_Name = $_POST["deptname-select"];
 			// Now need to find the deptNumber given the deptName
 			$deptNumQuery = "SELECT deptNumber FROM department WHERE deptName = '".$department_Name."';";
 			$res = mysqli_query($conn, $deptNumQuery); // Run the query to find the department number
 			$deptNumRes = mysqli_fetch_row($res); // Access the result in an array fashion
 			$department_Number = $deptNumRes[0]; // The ONLY returned result (at index 0) would be the deptNumber attribute
 			$project_ID = $_POST["projectid-select"];
 			$sql = "INSERT INTO location (locationName, deptName, deptNumber, projectID) VALUES ('".$location_Name."','".$department_Name."','".$department_Number."','".$project_ID."');";
 			$result = mysqli_query($conn, $sql);

 			if(!$result){
 				echo "<form>
 				<div class='form-group has-error'>
        		<label class='control-label' for='inputError1'>ERROR: Insertion has failed. Please check your data and try again.</label>
      			</div>
      			</form>";
 			}
 			else{
 				echo "<form>
 				<div class='form-group has-success'>
        		<label class='control-label' for='inputSuccess1'>Sucessfully added a new location with values:
        		<br />
        		Location Name: ".$location_Name."<br />
        		Department Name: ".$department_Name."<br />
        		Department Number: ".$department_Number."<br />
        		Project ID: ".$project_ID."
        		</label>
      			</div>
 				</form>";
 			}
 		}
 	?>
		</div>
		</div>
		<!--footer section start-->
			<footer>
			   <p><?php echo $footer; ?></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>