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
<title><?php echo $title; ?></title>
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
						<label for="sininput" class="col-sm-2 control-label">SIN</label>
						<div class="col-sm-8">
                            <input name="sinFilter" type=" text" class="form-control1" id="sininput" placeholder="Enter Employee SIN">
						</div>
					</div>
                    <div class="form-group" id="page-wrapper">
						<label for="supervisorinput" class="col-sm-2 control-label">Supervisor SIN</label>
						<div class="col-sm-8">
                            <input name="supervisorFilter"type="text" class="form-control1" id="supervisorinput" placeholder="Enter Supervisor SIN">
						</div>
					</div>
                    <div class="form-group" id="page-wrapper">
						<label for="nameinput" class="col-sm-2 control-label">Employee Name</label>
						<div class="col-sm-8">
                            <input name="nameFilter"type="text" class="form-control1" id="nameinput" placeholder="Enter Employee Name">
						</div>
					</div>
                    <div class="form-group" id="page-wrapper">
						<label for="birthinput" class="col-sm-2 control-label">Birthdate</label>
						<div class="col-sm-8">
                           <input name="birthFilter"type="text" class="form-control1" id="birthinput" placeholder="Enter Birthdate">
                        </div>
					</div>
                    <div class="form-group" id="page-wrapper">
						<label for="addressinput" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-8">
                            <input name="addressFilter"type="text" class="form-control1" id="addressinput" placeholder="Enter Address">
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="phoneinput" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-8">
                            <input name="phoneFilter"type="text" class="form-control1" id="phoneinput" placeholder="Enter Phone Number">
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="salaryinput" class="col-sm-2 control-label">Salary</label>
						<div class="col-sm-8">
                            <input name="salaryFilter"type="text" class="form-control1" id="salaryinput" placeholder="Enter Salary">
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="selector1" class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-8">
                             <select name="genderFilter" id="selector1" class="form-control1">
                                <option value = "" selected="selected">No Filter</option>
                                <option value = "male">Male</option>
                                <option value = "female">Female</option>
							</select>
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="hourinput" class="col-sm-2 control-label">Hours</label>
						<div class="col-sm-8">
                            <input name="hourFilter"type="text" class="form-control1" id="hourinput" placeholder="Enter Hour Number">
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="deptinput" class="col-sm-2 control-label">Department Number</label>
						<div class="col-sm-8">
                            <input name="deptFilter"type="text" class="form-control1" id="deptinput" placeholder="Enter Department Number">
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="deptnameinput" class="col-sm-2 control-label">Department Name</label>
						<div class="col-sm-8">
                            <input name="deptnameFilter"type="text" class="form-control1" id="deptnameinput" placeholder="Enter Department Name">
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="selector1" class="col-sm-2 control-label">Manager</label>
						<div class="col-sm-8">
                             <select name="managerFilter" id="selector1" class="form-control1">
                                <option value = "" selected="selected">No Filter</option>
                                <option value = "yes">Yes</option>
                                <option value = "no">No</option>
							</select>
                        </div>
					</div>
					 <div class="form-group" id="page-wrapper">
						<label for="dateinput" class="col-sm-2 control-label">Manager Start Date</label>
						<div class="col-sm-8">
                            <input name="dateFilter"type="text" class="form-control1" id="dateinput" placeholder="Enter Manager Start Date">
                        </div>
					</div>
                    
                    <div id="page-wrapper"></div>
                   <div class="col-sm-8 col-sm-offset-2">
                        <input class="btn-success btn" type="submit" value="Filter">
                    </div>

			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Employees</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
						<table class="table">
						  <thead>
							<tr>
							  <th>SIN</th>
							  <th>Supervisor SIN</th>
							  <th>Name</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Hours</th>
                <th>Dept Name</th>
                <th>Dept Number</th>
<th>Manager</th>
<th>Manager Start Date</th>
							</tr>
						  </thead>
						  <tbody>
<?php
				$query = "select * from employee";
				$sinFilter = "";
				$supervisorFilter = "";
				$nameFilter = "";
				$birthFilter = "";
				$addressFilter = "";
				$phoneFilter ="";
				$salaryFilter ="";
				$genderFilter = "";
				$hourFilter = "";
				$deptFilter = "";
				$deptnameFilter="";
				$managerFilter="";
				$dateFilter="";
				
				if(isset($_POST["sinFilter"]))
				{
					$sinFilter = $_POST["sinFilter"];
				}
				if(isset($_POST["supervisorFilter"]))
				{
					$supervisorFilter = $_POST["supervisorFilter"];
				}
				if(isset($_POST["nameFilter"]))
				{
					$nameFilter = $_POST["nameFilter"];
				}
				if(isset($_POST["birthFilter"]))
				{
					$birthFilter = $_POST["birthFilter"];
				}
				if(isset($_POST["addressFilter"]))
				{
					$addressFilter = $_POST["addressFilter"];
				}
				if(isset($_POST["phoneFilter"]))
				{
					$phoneFilter = $_POST["phoneFilter"];
				}
				if(isset($_POST["salaryFilter"]))
				{
					$salaryFilter = $_POST["salaryFilter"];
				}
				if(isset($_POST["genderFilter"]))
				{
					$genderFilter = $_POST["genderFilter"];
				}
				if(isset($_POST["hourFilter"]))
				{
					$hourFilter = $_POST["hourFilter"];
				}
				if(isset($_POST["deptFilter"]))
				{
					$deptFilter = $_POST["deptFilter"];
				}
				if(isset($_POST["deptnameFilter"]))
				{
					$deptnameFilter = $_POST["deptnameFilter"];
				}
				if(isset($_POST["managerFilter"]))
				{
					$managerFilter = $_POST["managerFilter"];
				}
				if(isset($_POST["dateFilter"]))
				{
					$dateFilter = $_POST["dateFilter"];
				}
				if($sinFilter != "" || $supervisorFilter != "" || $nameFilter != "" 
                || $birthFilter != "" || $addressFilter != "" || $phoneFilter != "" 
				|| $salaryFilter != "" || $genderFilter != "" || $hourFilter != "" 
				|| $deptnameFilter != "" || $deptFilter != "" || $managerFilter != "" 
				|| $dateFilter != "") //Check if any filter is submitted.
                                {
                                    $query .= " where ";
                                    
                                    $first = true;
                                    
                                    //Check individual filters
                                    if($sinFilter != "")
                                    {
                                        $query .= "SIN=";
                                        $query .= $sinFilter;
                                        $first = false;
                                    }
                                    if($supervisorFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "SupervisorSIN='";
                                        $query .= $supervisorFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                    if($nameFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "EmployeeName='";
                                        $query .= $nameFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                    if($birthFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "Birthdate=";
                                        $query .= $birthFilter;
                                        $first = false;
                                    }
									 if($addressFilter != "")
                                    {
                                        $query .= "Address=";
                                        $query .= $addressFilter;
                                        $first = false;
                                    }
                                    if($phoneFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "PhoneNumber='";
                                        $query .= $phoneFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                    if($salaryFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "Salary='";
                                        $query .= $salaryFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                    if($genderFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "Gender='";
                                        $query .= $genderFilter;
										$query .= "'";
                                        $first = false;
                                    }
									 if($hourFilter != "")
                                    {
                                        $query .= "Hour=";
                                        $query .= $hourFilter;
                                        $first = false;
                                    }
                                    if($deptFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "DeptNumber='";
                                        $query .= $deptFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                    if($deptnameFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "DeptName='";
                                        $query .= $deptnameFilter;
                                        $query .= "'";
                                        $first = false;
                                    }
                                    if($managerFilter != "")
                                    {
                                        if(!$first)
                                        {
                                             $query .= " AND ";
                                        }
                                        $query .= "managesDept='";
                                        $query .= $managerFilter;
										$query .= "'";
                                        $first = false;
                                    }
									 if($dateFilter != "")
                                    {
                                        $query .= "ManagerStartDate=";
                                        $query .= $dateFilter;
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
                                        echo "<td>", $row["SIN"], "</td>";
                                        echo "<td>", $row["SupervisorSIN"], "</td>";
                                        echo "<td>", $row["employeeName"], "</td>";
                                        echo "<td>", $row["birthdate"], "</td>";
										echo "<td>", $row["address"], "</td>";
                                        echo "<td>", $row["phoneNumber"], "</td>";
                                        echo "<td>", $row["salary"], "</td>";
                                        echo "<td>", $row["gender"], "</td>"; 
										echo "<td>", $row["hours"], "</td>";
                                        echo "<td>", $row["deptName"], "</td>";
                                        echo "<td>", $row["deptNumber"], "</td>";
                                        echo "<td>", $row["managesDept"], "</td>";  
										echo "<td>", $row["managerStartDate"], "</td>";                                         
                                        echo "</tr>";
                                        
                                    }
                                }
				
				?>
							</tbody>
						  </table>
						</div><!-- /.table-responsive -->
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
