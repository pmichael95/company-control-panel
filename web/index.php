<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<HTML>
<head>
<?php 
    include 'db.php'; 
    include 'config.php';
?>
<title><?php echo $title; ?> - Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
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
		<div class="main-content">
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
					<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-mail-forward"></i>
								<div class="stats">
								  <h5>
                                    <?php
                                        $result = mysqli_query($conn, "select COUNT(*) as total from (select distinct projectID from project) p;");
                                        $data=mysqli_fetch_assoc($result);
                                       echo $data['total'];
                                    ?>
                                    <span>Projects</span>
                                  </h5>
								  <div class="grow">
									<p># Projects</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
								  <h5>
                                    <?php
                                        $result = mysqli_query($conn, "select count(*) as total from employee");
                                        $data=mysqli_fetch_assoc($result);
                                       echo $data['total'];
                                    ?>
                                    <span>Employees</span>
                                  </h5>
								  <div class="grow grow1">
									<p># Employees</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-eye"></i>
								<div class="stats">
								  <h5>
                                  <?php
                                       $result = mysqli_query($conn, "select count(*) as total from department");
                                       $data=mysqli_fetch_assoc($result);
                                       echo $data['total'];
                                    ?>
                                    <span>Departments</span>
                                  </h5>
								  <div class="grow grow3">
									<p># Departments</p>
								  </div>
								</div>
							</div>
						 </div>
						 <div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="fa fa-usd"></i>
								<div class="stats">
								  <h5>
                                  <?php
                                       $result = mysqli_query($conn, "select count(*) as total from location");
                                       $data=mysqli_fetch_assoc($result);
                                       echo $data['total'];
                                    ?>
                                    <span>Locations</span>
                                  </h5>
								  <div class="grow grow2">
									<p># Locations</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

			<!-- switches -->
		<div class="switches">
			<div class="col-4">
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>Salary STATS</h3>
							<ul>
                                <?php
                                       $result = mysqli_query($conn, "select round(avg(salary),2) as avgsalary from employee e;");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Average Salary in all departments: $" , $data['avgsalary'] , "</li>";
                                       
                                       $result1 = mysqli_query($conn, "select d.deptNumber, d.deptName, round(avg(salary),2) as avgsalary from employee e 
                                                                      left join department d on e.deptNumber = d.deptNumber
                                                                      group by deptNumber");
                                       if (mysqli_num_rows($result1) > 0) {
                                           //output each row
                                           while($row = mysqli_fetch_assoc($result1)) {
                                              echo "<li>Average Salary in ", $row['deptName'], " department: <b>$" , $row['avgsalary'] , "</b></li>";
                                           }
                                       }
                                ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>Project Stats</h3>
							<ul>
                                 <?php
                                       $result = mysqli_query($conn, "select e.employeeName, count(projectID) as numProjects from project p
                                                                        left join employee e on p.SIN = e.SIN
                                                                        group by p.SIN asc
                                                                        LIMIT 1;");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Employee With Least Projects: " , $data['employeeName'] , " with ",$data['numProjects'],  " project(s)</li>";
                                       
                                       $result = mysqli_query($conn, "select e.employeeName, count(projectID) as numProjects from project p
                                                                        left join employee e on p.SIN = e.SIN
                                                                        group by p.SIN desc
                                                                        LIMIT 1;");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Employee With Most Projects: " , $data['employeeName'] , " with ",$data['numProjects'],  " project(s)</li>";
                                       
                                       $result = mysqli_query($conn, "select round(avg(revenue),2) as avgrev from (select distinct projectID, revenue from project) p ");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Average Project Revenue: $" , $data['avgrev'], "</li>";
                                       
                                       $result = mysqli_query($conn, "select pp.projectname, maxrev from (select distinct max(revenue) as maxrev from project) p, project pp
                                                                        where pp.revenue = p.maxrev
                                                                        group by projectID
                                                                        LIMIT 1;");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Project with MOST Revenue ALL TIME: ", $data['projectname'] , " with $" , $data['maxrev'], "</li>";
                                       
                                       $result = mysqli_query($conn, "select pp.projectname, minrev from (select distinct min(revenue) as minrev from project) p, project pp
                                                                        where pp.revenue = p.minrev
                                                                        group by projectID
                                                                        LIMIT 1;");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Project with LEAST Revenue ALL TIME: ", $data['projectname'] , " with $" , $data['minrev'], "</li>";
                                ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>Revenue STATS</h3>
							<ul>
                                <?php
                                       $result = mysqli_query($conn, "select sum(revenue) as rev from project where startDate BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW();");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Total Revenue (last 7 days): $" , $data['rev'] , "</li>";
                                       
                                       $result = mysqli_query($conn, "select sum(revenue) as rev from project where startDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW();");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Total Revenue (last 30 days): $" , $data['rev'] , "</li>";
                                       
                                       $result = mysqli_query($conn, "select sum(revenue) as rev from project where startDate BETWEEN DATE_SUB(NOW(), INTERVAL 365 DAY) AND NOW();");
                                       $data=mysqli_fetch_assoc($result);
                                       echo "<li>Total Revenue (last year): $" , $data['rev'] , "</li>";
                                ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //switches -->
		<div class="col_1">
			<div class="clearfix"> </div>
			
		</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			   <p><?php echo $footer; ?></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</HTML>