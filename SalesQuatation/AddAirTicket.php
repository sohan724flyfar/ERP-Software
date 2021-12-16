`<?php

include '../config.php';
include('../session.php');


//Reciept No

$SQT_No;
$sql = "SELECT * FROM salesqutation ORDER BY sqNo  DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $outputString = preg_replace('/[^0-9]/', '', $row["sqNo"]);
		$number = (int)$outputString + 1;
		$SQT_No = "SQT-$number";									
 }
} else {
	$SQT_No ="SQT-1000";

 }



 if ($_SERVER["REQUEST_METHOD"] == "POST") { 	
	 
	$Client_Name = $_POST['client'];
	$Pax_No = $_POST['pax'];
    //Pax
    $pax1 = $_POST['pax1'];
	$Airlines1 = $_POST['airlines1'];
    $from1 = $_POST['from1'];
	$to1 = $_POST['to1'];
	$type1 = $_POST['tickettype1'];
	$way1 = $_POST['way1'];
    $price1 = $_POST['price1']; 

    //Pax2
    if(isset($_POST['pax2'])){
    $pax2 = $_POST['pax2'];
	$Airlines2 = $_POST['airlines2'];  
    $from2 = $_POST['from2'];
	$to2 = $_POST['to2']; 
	$type2 = $_POST['tickettype2']; 
	$way2 = $_POST['way2'];
    $price2 = $_POST['price2'];
    }else{
        $pax2 = " ";
		$Airlines2 =" ";
        $from2 = " ";
		$to2 = " ";
		$type2 =" "; 
		$way2 = " "; 
        $price2 = " ";
    }

    //Pax3
    if(isset($_POST['pax3'])){
    $pax3 = $_POST['pax3']; 
	$Airlines3 = $_POST['airlines3'];  
    $from3 = $_POST['from3'];
	$to3 = $_POST['to3'];
	$type3 = $_POST['tickettype3']; 
	$way3 = $_POST['way3'];
    $price3 = $_POST['price3'];
    }else{
        $pax3 = " ";
		$Airlines3 =" ";
        $from3 = " ";
		$to3 = " ";
		$type3 =" ";
		$way3 = " ";
        $price3 = " ";
    }

     //Pax4
     if(isset($_POST['pax4'])){
     $pax4 = $_POST['pax4'];
	 $Airlines4 = $_POST['airlines4'];
     $from4 = $_POST['from4'];
	 $to4 = $_POST['to4'];
	 $type4 = $_POST['tickettype4'];
	 $way4 = $_POST['way4']; 
     $price4 = $_POST['price4'];
     }else{
        $pax4 = " ";
		$Airlines4 =" ";
        $from4 = " ";
		$to4 = " ";
		$type4 =" ";
		$way4 = " ";
        $price4 = " ";
     }

     //Pax 5
     if(isset($_POST['pax5'])){
     $pax5 = $_POST['pax5'];
	 $Airlines5 = $_POST['airlines5'];
     $from5 = $_POST['from5'];
	 $to5 = $_POST['to5'];
	 $type5 = $_POST['tickettype5'];
	 $way5 = $_POST['way5']; 
     $price5 = $_POST['price5'];
     }else{
        $pax5 = " ";
		$Airlines5 =" ";
        $from5 = " ";
		$to5 = " ";
		$type5 =" ";
		$way5= " ";
        $price5 = " ";

     }

	
    $mrgenerate = "INSERT INTO `salesqutation`(
        `sqNo`,
		`createdBy`,
		`clientName`,
		`pax`,
		`PaxName1`,
		`Airlines1`,
		`from1`,
		`to1`,
		`type1`,
		`cost1`,
		`PaxName2`,
		`Airlines2`,
		`from2`,
		`to2`,
		`type2`,
		`cost2`,
		`PaxName3`,
		`Airlines3`,
		`from3`,
		`to3`,
		`type3`,
		`cost3`,
		`PaxName4`,
		`Airlines4`,
		`from4`,
		`to4`,
		`type4`,
		`cost4`,
		`PaxName5`,
		`Airlines5`,
		`from5`,
		`to5`,
		`type5`,
		`cost5`,
		`way1`,
		`way2`,
		`way3`,
		`way4`,
		`way5`
    )
    VALUES(
        '$SQT_No',
		'$userName',
		'$Client_Name',
		'$Pax_No',
        '$pax1',
		'$Airlines1',
        '$from1',
		'$to1',
		'$type1',
        '$price1',
        '$pax2',
		'$Airlines2',
        '$from2',
		'$to2',
		'$type2',
        '$price2',
        '$pax3',
		'$Airlines3',
        '$from3',
		'$to3',
		'$type3',
        '$price3',
        '$pax4',
		'$Airlines4',
        '$from4',
		'$to4',
		'$type4',
        '$price4',
        '$pax5',
		'$Airlines5',
        '$from5',
		'$to5',
		'$type5',
        '$price5',
		'$way1',
		'$way2',
		'$way3',
		'$way4',
		'$way5'

    )";

	if (mysqli_query($conn, $mrgenerate)) {
        echo '<script language="javascript">';
		echo 'alert("Successfully Created"); location.href="Invoice.php?SQT='.$SQT_No.'"';
		echo '</script>';		
	} else {
		echo "Error: " . $mrgenerate . "<br>" . mysqli_error($conn);
	}

}	
                                                                           

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Add Sales Quatation</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="../assets/css/feathericon.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Datatables CSS -->
	<link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header">
			
			<!-- Logo -->
			<div class="header-left">
				<a href="../index.php" class="logo">
					 <img src="../logo.png" alt="Logo">
				</a>
				<a href="../index.php" class="logo logo-small">
					<img src="../logo.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fe fe-text-align-left"></i>
			</a>

			<div class="top-nav-search">
				<form>
					<input type="text" name="search" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn">
				<i class="fa fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu">

				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="fe fe-bell"></i> <span class="badge badge-pill">1</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profile.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Farhana </span> Schedule <span class="noti-title">her appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>

							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="#">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img class="rounded-circle" src="../assets/img/profile.jpg" width="31" alt="Ryan Taylor"></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="../assets/img/profile.jpg" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<!-- #Username -->
								<h6> <?php echo $userName; ?> </h6>
                                <p class="text-muted mb-0"><?php echo $userRole; ?></p>
							</div>
						</div>
						<a class="dropdown-item" href="">My Profile</a>
						<a class="dropdown-item" href="">Settings</a>
						<a class="dropdown-item" href="../logout.php">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

		<!-- Sidebar -->

		 <!-- Sidebar -->

		 <?php if($userRole == 'reservation'){
			print "<div class='sidebar' id='sidebar'>
				<div class='sidebar-inner slimscroll'>
					<div id='sidebar-menu' class='sidebar-menu'>
						<ul>
							<li class='menu-title'>
								<span>Main</span>
							</li>
							<li>
								<a href='../dashboard.php'><i class='fe fe-home'></i> <span> Dashboard</span></a>
							</li>
							
							<li>
							<a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Sales Quatation</span></a>
								<ul>
									<li><a href='../SalesQuatation'><i class='fe fe-layout'> </i> <span> Air Ticket</span></a></li>
									
								</ul>
							</li>

							<li>
								<a data-toggle='dropdown'><i class='fe fe-layout'></i> <span> Invoice</span></a>
									<ul>
										<li><a href='../AirInvoice'><i class='fe fe-layout'> </i> <span> Air Ticket </span></a></li>
										
									</ul>
							</li>
							<li>
                                <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span> Role</span></a>
                                    <ul>
                                    <li><a href='../Role'><i class='fe fe-layout'> </i> <span> All Role </span></a></li>
                                        <li><a href='../Role/AddRole.php'><i class='fe fe-layout'> </i> <span> Add Role </span></a></li>
                                        
                                    </ul>
                            </li>
							
						</ul>
					</div>
				</div>
			</div>" ;

}elseif($userRole == 'accounts'){
print "<div class='sidebar' id='sidebar'>
<div class='sidebar-inner slimscroll'>
 <div id='sidebar-menu' class='sidebar-menu'>
	 <ul>
		 <li class='menu-title'>
			 <span>Main</span>
		 </li>
		 <li>
			 <a href='Dashboard.php'><i class='fe fe-home'></i> <span>Dashboard</span></a>
		 </li>
		 
		 <li>
			 <a href='Bill.php'><i class='fe fe-layout'></i> <span>Bill</span></a>
		 </li>

		 <li>
			 <a href='MoneyReceipt.php'><i class='fe fe-layout'></i> <span>Money Receipt</span></a>
		 </li>
		 
	 </ul>
 </div>
</div>
</div>" ;


} elseif($userRole =='developer'){

echo "<div class='sidebar' id='sidebar'>
<div class='sidebar-inner slimscroll'>
 <div id='sidebar-menu' class='sidebar-menu'>
	 <ul>
		 <li class='menu-title'>
			 <span>Main</span>
		 </li>
		 <li>
			 <a href='dashboard.php'><i class='fe fe-home'></i> <span>Dashboard</span></a>
		 </li>
		 <li>
			 <a href='salesQuotation.php'><i class='fe fe-layout'></i> <span>Sales Quotation</span></a>
		 </li>
		 <li>
			  <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Invoice</span></a>
				  <ul>
					 <li><a href='AirInvoice'><i class='fe fe-layout'> </i> <span> Air Ticket</span></a></li>
					  <li><a href='access.php'><i class='fe fe-layout'> </i> <span> Visa</span></a> </li>
					 <li><a href='#'><i class='fe fe-layout'></i> Others</a></li>
				  </ul>
				 </li>
		 <li>
			 <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Accounting</span></a>
				 <ul>
					 <li><a href='CashEquivalent.php'><i class='fe fe-layout'></i> <span>Cash And Cash</span></a></li>
					 <li><a href='access.php'><i class='fe fe-layout'></i> <span>Acces control</span></a> </li>
					 <li><a href='#'><i class='fe fe-layout'></i> Portal</a></li>
				 </ul>
		 </li>
		 <li>
			 <a href='Bill.php'><i class='fe fe-layout'></i> <span>Bill</span></a>
		 </li>
		 <li>
			 <a href='expense.php'><i class='fe fe-layout'></i> <span>Expense</span></a>
		 </li>
		 <li>
			 <a href='moneyReceipt.php'><i class='fe fe-layout'></i> <span>Money Receipt</span></a>
		 </li>

		 <li>
			 <a href='payment.php'><i class='fe fe-layout'></i> <span>Payment</span></a>
		 </li>
		 <li>
			 <a href='Salary/SalarySheet.php'><i class='fe fe-layout'></i> <span>Salary</span></a>
		 </li>
		 <li>
			 <a href='project.php'><i class='fe fe-layout'></i> <span>Project</span></a>
		 </li>
		 <li>
			 <a href='employees.php'><i class='fe fe-layout'></i> <span>Employees</span></a>
		 </li>
		 <li>
			 <a href='Report.php'><i class='fe fe-layout'></i> <span>Report</span></a>
		 </li>

		 <li>
			 <a href='refund.php'><i class='fe fe-layout'></i> <span>Refund</span></a>
		 </li>
		 

	 </ul>
 </div>
</div>
</div>";}elseif($userRole == 'admin'){
echo "<div class='sidebar' id='sidebar'>
<div class='sidebar-inner slimscroll'>
 <div id='sidebar-menu' class='sidebar-menu'>
	 <ul>
		 <li class='menu-title'>
			 <span>Main</span>
		 </li>

		 <li>
			 <a href='Inventory.php'><i class='fe fe-layout'></i> <span> Inventory</span></a>
		 </li>
		 
		 <li>
			 <a href='Salary/SalarySheet.php'><i class='fe fe-layout'></i> <span>Salary</span></a>
		 </li>
		 <li>
			 <a href='Attandance.php'><i class='fe fe-layout'></i> <span> Attandance</span></a>
		 </li>
		 <li>
			 <a href='Employees.php'><i class='fe fe-layout'></i> <span> Employees</span></a>
		 </li>
		 
		 

	 </ul>
 </div>
</div>
</div>";

}
 
?>	
<!--- Sidebar --->
		

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Add Sales Quatation</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="../project.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Sales Quatation</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-danger card-title">Sales Quatation Details</h4>
										<div class="text-right">
										

										<?php if(isset($success)){
                                        echo "<div class='alert alert-success' role='alert'> $success  </div> ";
                                            }
                                      ?>
									</div>

											
									</div>
									<div class="card-body">
										<form action="#" autocomplete="off" method="post">
											<div class="row">
												<div class="col-md-12">
													<h4 class="card-title">Details</h4>
													<div class="row">

													<div class="col-md-4">
															<div class="form-group">
																<label>Quatation No:</label>
																<input type="text" value="<?php echo $SQT_No ?>" class="form-control" disabled>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label>Bill To:</label>
																<select name="client" class="select form-control"  required>
                                                                            <option value="" disabled selected>Choose Client</option>
                                                                            <?php
                                                                                $sql = "SELECT *  FROM `customer` ORDER BY name DESC";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["name"];	
                                                                                    echo "<option value=\"$vnName\">".$row["name"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label>Pax No</label>
																<input type="number" name="pax" min="1" max="5" class="form-control" required>
															</div>
														</div>
														
													</div>
                                                    <div class="row">
															<div class="col-md-2">
																<div class="form-group">
																	<label>Pax Name 1</label>
																	<input type="text" name="pax1" class="form-control">
																</div>
															</div>
															<div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label>Airlines :</label>
                                                                    <select name="airlines1" class="select form-control"  >
                                                                            <option value="" disabled selected>*</option>
                                                                            <option value="6E">6E</option>
                                                                            <option value="AI">AI</option>
                                                                            <option value="BG">BG</option>
                                                                            <option value="BS">BS </option>
                                                                            <option value="CX">CX</option>
                                                                            <option value="CZ">CZ</option>
                                                                            <option value="EK">EK</option>
                                                                            <option value="EY">EY</option>
                                                                            <option value="FZ">FZ </option>	
                                                                            <option value="GF">GF </option>
                                                                            <option value="G9">G9 </option>
                                                                            <option value="G8">G8 </option>	
                                                                            <option value="H9">H9</option>
                                                                            <option value="J9">J9</option>
                                                                            <option value="KU">KU</option>
                                                                            <option value="MH">MH</option>
                                                                            <option value="MS">MS </option>	
                                                                            <option value="OD">OD</option>	
                                                                            <option value="OV">OV</option>
                                                                            <option value="QR">QR </option>	
                                                                            <option value="UL">UL</option>                                                                          
                                                                            <option value="UK">UK</option>
                                                                            <option value="SV">SV</option>
                                                                            <option value="SQ">SQ </option>
                                                                            <option value="SL">SL</option>
                                                                            <option value="SG">SG </option>
                                                                            <option value="TK">TK </option>	                                                                       
                                                                            <option value="TG">TG </option>  	
                                                                            <option value="VQ">VQ </option>                                                                                                                                                    
                                                                            <option value="WY">WY</option>   
                                                                        </select>
                                                                	</div>
																</div>
															<div class="col-md-1">
																<div class="form-group">
																	<label>From</label>
																	<select name="from1" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-1">
																<div class="form-group">
																	<label>To</label>
																	<select name="to1" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Ticket Type :</label>
                                                                    <select name="tickettype1" class="select form-control" required >
                                                                            <option value="" disabled selected>Ticket Type</option>
                                                                            <option value="Non Refundable">Non Refundable</option>
                                                                            <option value="Refundable">Refundable</option>	
                                                                            <option value="Refund Adjusted">Refund Adjusted </option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Way:</label>
                                                                    <select name="way1" class="select form-control" required >
                                                                            <option value="" disabled selected>Way</option>
                                                                            <option value="One Way">One Way</option>
                                                                            <option value="Round Trip">Round Trip</option>	
                                                                            <option value="Multiple City">Multiple City</option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
															
															<div class="col-md-2">
																<div class="form-group">
																	<label>Amount</label>
																	<input type="number" name="price1" class="form-control" required>
																</div>
															</div>														
													</div>
                                                    
                                                    <div class="row">
                                                    <div class="col-md-2">
															<div class="form-group">
																<label>Pax Name 2</label>
																<input type="text" name="pax2" class="form-control">
															</div>
														</div>
														<div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label>Airlines :</label>
                                                                    <select name="airlines2" class="select form-control"  >
                                                                            <option value="" disabled selected>*</option>
                                                                            <option value="6E">6E</option>
                                                                            <option value="AI">AI</option>
                                                                            <option value="BG">BG</option>
                                                                            <option value="BS">BS </option>
                                                                            <option value="CX">CX</option>
                                                                            <option value="CZ">CZ</option>
                                                                            <option value="EK">EK</option>
                                                                            <option value="EY">EY</option>
                                                                            <option value="FZ">FZ </option>	
                                                                            <option value="GF">GF </option>
                                                                            <option value="G9">G9 </option>
                                                                            <option value="G8">G8 </option>	
                                                                            <option value="H9">H9</option>
                                                                            <option value="J9">J9</option>
                                                                            <option value="KU">KU</option>
                                                                            <option value="MH">MH</option>
                                                                            <option value="MS">MS </option>	
                                                                            <option value="OD">OD</option>	
                                                                            <option value="OV">OV</option>
                                                                            <option value="QR">QR </option>	
                                                                            <option value="UL">UL</option>                                                                          
                                                                            <option value="UK">UK</option>
                                                                            <option value="SV">SV</option>
                                                                            <option value="SQ">SQ </option>
                                                                            <option value="SL">SL</option>
                                                                            <option value="SG">SG </option>
                                                                            <option value="TK">TK </option>	                                                                       
                                                                            <option value="TG">TG </option>  	
                                                                            <option value="VQ">VQ </option>                                                                                                                                                    
                                                                            <option value="WY">WY</option>   
                                                                        </select>
                                                                	</div>
																</div>
																<div class="col-md-1">
																<div class="form-group">
																	<label>From</label>
																	<select name="from2" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-1">
																<div class="form-group">
																	<label>To</label>
																	<select name="to2" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
														<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Ticket Type :</label>
                                                                    <select name="tickettype2" class="select form-control" >
                                                                            <option value="" disabled selected>Ticket Type</option>
                                                                            <option value="Non Refundable">Non Refundable</option>
                                                                            <option value="Refundable">Refundable</option>	
                                                                            <option value="Refund Adjusted">Refund Adjusted </option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                        </div>
														<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Way:</label>
                                                                    <select name="way2" class="select form-control" >
                                                                            <option value="" disabled selected>Way</option>
                                                                            <option value="One Way">One Way</option>
                                                                            <option value="Round Trip">Round Trip</option>	
                                                                            <option value="Multiple City">Multiple City</option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
														
														
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Amount</label>
																<input type="number" name="price2" class="form-control">
															</div>
														</div>
														
													</div>
                                                    <div class="row">
                                                    <div class="col-md-2">
															<div class="form-group">
																<label>Pax Name 3</label>
																<input type="text" name="pax3" class="form-control">
															</div>
														</div>
														<div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label>Airlines :</label>
                                                                    <select name="airlines3" class="select form-control"  >
                                                                            <option value="" disabled selected>*</option>
                                                                            <option value="6E">6E</option>
                                                                            <option value="AI">AI</option>
                                                                            <option value="BG">BG</option>
                                                                            <option value="BS">BS </option>
                                                                            <option value="CX">CX</option>
                                                                            <option value="CZ">CZ</option>
                                                                            <option value="EK">EK</option>
                                                                            <option value="EY">EY</option>
                                                                            <option value="FZ">FZ </option>	
                                                                            <option value="GF">GF </option>
                                                                            <option value="G9">G9 </option>
                                                                            <option value="G8">G8 </option>	
                                                                            <option value="H9">H9</option>
                                                                            <option value="J9">J9</option>
                                                                            <option value="KU">KU</option>
                                                                            <option value="MH">MH</option>
                                                                            <option value="MS">MS </option>	
                                                                            <option value="OD">OD</option>	
                                                                            <option value="OV">OV</option>
                                                                            <option value="QR">QR </option>	
                                                                            <option value="UL">UL</option>                                                                          
                                                                            <option value="UK">UK</option>
                                                                            <option value="SV">SV</option>
                                                                            <option value="SQ">SQ </option>
                                                                            <option value="SL">SL</option>
                                                                            <option value="SG">SG </option>
                                                                            <option value="TK">TK </option>	                                                                       
                                                                            <option value="TG">TG </option>  	
                                                                            <option value="VQ">VQ </option>                                                                                                                                                    
                                                                            <option value="WY">WY</option>   
                                                                        </select>
                                                                	</div>
																</div>
																<div class="col-md-1">
																<div class="form-group">
																	<label>From</label>
																	<select name="from3" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-1">
																<div class="form-group">
																	<label>To</label>
																	<select name="to3" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>

															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Ticket Type :</label>
                                                                    <select name="tickettype3" class="select form-control" >
                                                                            <option value="" disabled selected>Ticket Type</option>
                                                                            <option value="Non Refundable">Non Refundable</option>
                                                                            <option value="Refundable">Refundable</option>	
                                                                            <option value="Refund Adjusted">Refund Adjusted </option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>

															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Way:</label>
                                                                    <select name="way3" class="select form-control" >
                                                                            <option value="" disabled selected>Way</option>
                                                                            <option value="One Way">One Way</option>
                                                                            <option value="Round Trip">Round Trip</option>	
                                                                            <option value="Multiple City">Multiple City</option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
														
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Amount</label>
																<input type="number" name="price3" class="form-control">
															</div>
														</div>
														
													</div>

                                               <div class="row">
                                                    <div class="col-md-2">
															<div class="form-group">
																<label>Pax Name 4</label>
																<input type="text" name="pax4" class="form-control">
															</div>
														</div>
														<div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label>Airlines :</label>
                                                                    <select name="airlines4" class="select form-control"  >
                                                                            <option value="" disabled selected>*</option>
                                                                            <option value="6E">6E</option>
                                                                            <option value="AI">AI</option>
                                                                            <option value="BG">BG</option>
                                                                            <option value="BS">BS </option>
                                                                            <option value="CX">CX</option>
                                                                            <option value="CZ">CZ</option>
                                                                            <option value="EK">EK</option>
                                                                            <option value="EY">EY</option>
                                                                            <option value="FZ">FZ </option>	
                                                                            <option value="GF">GF </option>
                                                                            <option value="G9">G9 </option>
                                                                            <option value="G8">G8 </option>	
                                                                            <option value="H9">H9</option>
                                                                            <option value="J9">J9</option>
                                                                            <option value="KU">KU</option>
                                                                            <option value="MH">MH</option>
                                                                            <option value="MS">MS </option>	
                                                                            <option value="OD">OD</option>	
                                                                            <option value="OV">OV</option>
                                                                            <option value="QR">QR </option>	
                                                                            <option value="UL">UL</option>                                                                          
                                                                            <option value="UK">UK</option>
                                                                            <option value="SV">SV</option>
                                                                            <option value="SQ">SQ </option>
                                                                            <option value="SL">SL</option>
                                                                            <option value="SG">SG </option>
                                                                            <option value="TK">TK </option>	                                                                       
                                                                            <option value="TG">TG </option>  	
                                                                            <option value="VQ">VQ </option>                                                                                                                                                    
                                                                            <option value="WY">WY</option>   
                                                                        </select>
                                                                	</div>
																</div>
																<div class="col-md-1">
																<div class="form-group">
																	<label>From</label>
																	<select name="from4" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-1">
																<div class="form-group">
																	<label>To</label>
																	<select name="to4" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Ticket Type :</label>
                                                                    <select name="tickettype4" class="select form-control" >
                                                                            <option value="" disabled selected>Ticket Type</option>
                                                                            <option value="Non Refundable">Non Refundable</option>
                                                                            <option value="Refundable">Refundable</option>	
                                                                            <option value="Refund Adjusted">Refund Adjusted </option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>

															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Way:</label>
                                                                    <select name="way4" class="select form-control" >
                                                                            <option value="" disabled selected>Way</option>
                                                                            <option value="One Way">One Way</option>
                                                                            <option value="Round Trip">Round Trip</option>	
                                                                            <option value="Multiple City">Multiple City</option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
														
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Amount</label>
																<input type="number" name="price4" class="form-control">
															</div>
														</div>
														
													</div>
                                               
                                               <div class="row">
                                                    <div class="col-md-2">
															<div class="form-group">
																<label>Pax Name 5</label>
																<input type="text" name="pax5" class="form-control">
															</div>
														</div>
														<div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label>Airlines :</label>
                                                                    <select name="airlines5" class="select form-control"  >
                                                                            <option value="" disabled selected>*</option>
                                                                            <option value="6E">6E</option>
                                                                            <option value="AI">AI</option>
                                                                            <option value="BG">BG</option>
                                                                            <option value="BS">BS </option>
                                                                            <option value="CX">CX</option>
                                                                            <option value="CZ">CZ</option>
                                                                            <option value="EK">EK</option>
                                                                            <option value="EY">EY</option>
                                                                            <option value="FZ">FZ </option>	
                                                                            <option value="GF">GF </option>
                                                                            <option value="G9">G9 </option>
                                                                            <option value="G8">G8 </option>	
                                                                            <option value="H9">H9</option>
                                                                            <option value="J9">J9</option>
                                                                            <option value="KU">KU</option>
                                                                            <option value="MH">MH</option>
                                                                            <option value="MS">MS </option>	
                                                                            <option value="OD">OD</option>	
                                                                            <option value="OV">OV</option>
                                                                            <option value="QR">QR </option>	
                                                                            <option value="UL">UL</option>                                                                          
                                                                            <option value="UK">UK</option>
                                                                            <option value="SV">SV</option>
                                                                            <option value="SQ">SQ </option>
                                                                            <option value="SL">SL</option>
                                                                            <option value="SG">SG </option>
                                                                            <option value="TK">TK </option>	                                                                       
                                                                            <option value="TG">TG </option>  	
                                                                            <option value="VQ">VQ </option>                                                                                                                                                    
                                                                            <option value="WY">WY</option>   
                                                                        </select>
                                                                	</div>
																</div>
																<div class="col-md-1">
																<div class="form-group">
																	<label>From</label>
																	<select name="from5" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>
															<div class="col-md-1">
																<div class="form-group">
																	<label>To</label>
																	<select name="to5" class="select form-control" required >
                                                                            <option value="" disabled selected>*</option>
                                                                            <?php
                                                                                $sql = "SELECT DISTINCT code FROM airports order by code";
                                                                                $result = $conn->query($sql);
                                
                                                                                if ($result->num_rows > 0) {
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $vnName = $row["code"];	
                                                                                    echo "<option value=\"$vnName\">".$row["code"]."</option>";                                                                                 
                                                                                }
                                                                            }
                                                                                ?>
                                                                            
                                                                </select>
																</div>
															</div>

															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Ticket Type :</label>
                                                                    <select name="tickettype5" class="select form-control" >
                                                                            <option value="" disabled selected>Ticket Type</option>
                                                                            <option value="Non Refundable">Non Refundable</option>
                                                                            <option value="Refundable">Refundable</option>	
                                                                            <option value="Refund Adjusted">Refund Adjusted </option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
															<div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Way:</label>
                                                                    <select name="way5" class="select form-control" >
                                                                            <option value="" disabled selected>Way</option>
                                                                            <option value="One Way">One Way</option>
                                                                            <option value="Round Trip">Round Trip</option>	
                                                                            <option value="Multiple City">Multiple City</option>	
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
														
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Amount</label>
																<input type="number" name="price5" class="form-control">
															</div>
														</div>
														
													</div>
                                               </div>

                                            </div>

											<div class="text-right">
												<button type="submit" class="btn btn-primary"> Create Quatation</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
														
					<!-- End Contant -->
					</div>			
				</div>
				<!-- /Page Wrapper -->
			</div>
			<!-- /Main Wrapper -->
			<input type="hidden" id="refresh" value="no">

			<script>
				jQuery( document ).ready(function( $ ) {

				//Use this inside your document ready jQuery 
				$(window).on('popstate', function() {
				location.reload(true);
				});

				});
			</script>
			
			<!-- jQuery -->
			<script src="../assets/js/jquery-3.2.1.min.js"></script>
			<!-- Bootstrap Core JS -->
			<script src="../assets/js/popper.min.js"></script>
			<script src="../assets/js/bootstrap.min.js"></script>
			<!-- Slimscroll JS -->
			<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
			<!-- Datatables JS -->
			<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="../assets/plugins/datatables/datatables.min.js"></script>
			<!-- Custom JS -->
			<script  src="../assets/js/script.js"></script>
	</body>
</html>