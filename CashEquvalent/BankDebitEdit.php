<?php
include '../config.php';
include('../session.php');


$debitId = $_GET['getDebitId'];

//Employee Info
$Bank_Name;
$Bank_Branch;
$Bank_Acccount;
$Bank_Id;
$Debit;
$Debitdate;
$DebitComments;



$sql = "SELECT * FROM bank where id='$debitId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $Bank_Name = $row["bankname"];
        $Bank_Branch = $row["branchname"];
        $Bank_Acccount = $row["bankaccno"];
        $Bank_Id = $row["bankId"];
        $Debit = $row["debit"];
        $Debitdate = $row["debitDate"];
        $DebitComments = $row["debitComment"];

        								
 }
} else {
echo "0 results";
 }


											
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Add Employee</title>
	<!-- Favicon -->
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="../assets/css/feathericon.min.css">
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
				<a href="index.php" class="logo">
				 <img src="logo.png" alt="Logo">
				</a>
				<a href="index.php" class="logo logo-small">
					<img src="logo.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fe fe-text-align-left"></i>
			</a>

			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
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
												<p class="noti-details"><span class="noti-title">Employee </span> Schedule <span class="noti-title">her appointment</span></p>
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
						<span class="user-img"><img class="rounded-circle" src="assets/img/profile.jpg" width="31" alt="Ryan Taylor"></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="assets/img/profile.jpg" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<!-- #Username -->
								<h6>Admin</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="">My Profile</a>
						<a class="dropdown-item" href="">Settings</a>
						<a class="dropdown-item" href="login.php">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

	     
        <!-- Sidebar -->

		<?php
        	include '../sidebar.php';
        ?>	
			<!--- Sidebar --->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Add New bank</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="invoice.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Add New Bank</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				

				<!-- Contant -->
				<div class="row">					
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-danger card-title">Bank Information</h4>
									</div>
                                    
									<div class="card-body">
										<form action="#" method='post'>
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>Bank ID</label>
																<input type="text" name="bankid" value="<?php echo $Bank_Id ?>" class="form-control" disabled>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Bank Name</label>
																<input type="text" value="<?php echo $Bank_Name ?>" name="bankname" class="form-control">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Branch Name</label>
																<input type="text" value="<?php echo $Bank_Branch ?>" name="branchname" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-6">
															<div class="form-group">
																<label>Account Number</label>
																<input type="text" value="<?php echo $Bank_Acccount ?>" name="accno" class="form-control">
															</div>
														</div>

                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Credit Balance</label>
																<input type="number" value="<?php echo $Debit ?>" name="credit" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Credit Balance</label>
																<input type="date" value="<?php echo $Debitdate ?>" name="credit" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Comments</label>
																<input type="text" value="<?php echo $DebitComments ?>" name="creditdt" class="form-control">
															</div>
														</div>
											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary"> Create </button>
											</div>
										</form>
									</div>
								</div>
							</div>

                            <!-- Contact Personal Info  --->
            
						</div>


					</div>
					<!-- End Contant -->
					</div>	

                   
                    
                    
				</div>

				<!-- /Page Wrapper -->
			</div>
			<!-- /Main Wrapper -->
			<!-- jQuery -->
			<script src="assets/js/jquery-3.2.1.min.js"></script>
			<!-- Bootstrap Core JS -->
			<script src="assets/js/popper.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<!-- Slimscroll JS -->
			<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
			<!-- Custom JS -->
			<script  src="assets/js/script.js"></script>
		</body>
		</html>