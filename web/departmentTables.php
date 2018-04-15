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
<title><?php echo $title; ?> - Project Data</title>
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
		<div class="main-content main-content4">
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
                <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group" id="page-wrapper">
						<label for="numinput" class="col-sm-2 control-label">Department Number</label>
						<div class="col-sm-8">
                            <input name="numFilter" type=" text" class="form-control1" id="numinput" placeholder="Enter Department Number">
						</div>
					</div>
                    <div class="form-group" id="page-wrapper">
						<label for="nameinput" class="col-sm-2 control-label">Department Name</label>
						<div class="col-sm-8">
                            <input name="nameFilter"type="text" class="form-control1" id="nameinput" placeholder="Enter Department Name">
						</div>
					</div>
                    
                    <div id="page-wrapper"></div>
                   <div class="col-sm-8 col-sm-offset-2">
                        <input class="btn-success btn" type="submit" value="Filter">
                    </div>


                </form>
            </div>
            <div id="page-wrapper"></div>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Departments</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
						<table class="table">
						  <thead>
							<tr>
							  <th>Department Number</th>
							  <th>Department Name</th>
							</tr>
						  </thead>
						  <tbody>
                            <?php
                                $query = "select * from department";
                                $numFilter = "";
                                $nameFilter = "";

                                //Get POST values from input boxes
                                if(isset($_POST["numFilter"]))
                                {
                                    $numFilter = $_POST["numFilter"];
                                }
                                if(isset($_POST["nameFilter"]))
                                {
                                    $nameFilter = $_POST["nameFilter"];
                                }

                                
                                if($numFilter != "" || $nameFilter != "") //Check if any filter is submitted.
                                {
                                    $query .= " where ";
                                    
                                    $first = true;
                                    
                                    //Check individual filters
                                    if($numFilter != "")
                                    {
                                        $query .= "deptNumber=";
                                        $query .= $numFilter;
                                        $first = false;
                                    }
                                    if($nameFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "deptName='";
                                        $query .= $nameFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                }
                                //////////////////////////
                                echo $query;
                                //////////////////////////
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    //output each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr class=''active''>";
                                        echo "<td>", $row["deptNumber"], "</td>";
                                        echo "<td>", $row["deptName"], "</td>";
                                        echo "</tr>";
                                        
                                    }
                                }
                             ?>
						  </tbody>
						</table>
					   </div>
					</div>
				</div>
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