<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Second Page</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header">
			
			<!-- Logo -->
			<div class="header-left">
				<a href="index.html" class="logo">
				 <img src="../logo.png" alt="Logo">
				</a>
				<a href="index.html" class="logo logo-small">
					<img src="../logo.png" alt="Logo" width="30" height="30">
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
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

	      <!-- Sidebar -->
		<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li>
                            <a href="Dashborad.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="salesQuotation.html"><i class="fe fe-layout"></i> <span>Sales Quotation</span></a>
                        </li>
                        <li>
                            <a href="invoice.html"><i class="fe fe-layout"></i> <span>Invoice</span></a>
                        </li>
                        <li>
                            <a href="Bill.html"><i class="fe fe-layout"></i> <span>Bill</span></a>
                        </li>
                        <li>
                            <a href="expense.html"><i class="fe fe-layout"></i> <span>Expense</span></a>
                        </li>
                        <li>
                            <a href="moneyReceipt.html"><i class="fe fe-layout"></i> <span>Money Receipt</span></a>
                        </li>

                        <li>
                            <a href="payment.html"><i class="fe fe-layout"></i> <span>Payment</span></a>
                        </li>
                        <li>
                            <a href="transfer.html"><i class="fe fe-layout"></i> <span>Transfer</span></a>
                        </li>
                        <li>
                            <a href="project.html"><i class="fe fe-layout"></i> <span>Project</span></a>
                        </li>
                        <li>
                            <a href="employees.html"><i class="fe fe-layout"></i> <span>Employees</span></a>
                        </li>
                        <li>
                            <a href="Report.html"><i class="fe fe-layout"></i> <span>Report</span></a>
                        </li>

                        <li>
                            <a href="refund.html"><i class="fe fe-layout"></i> <span>Refund</span></a>
                        </li>
                        <li>
                            <a href="Accounting"><i class="fe fe-layout"></i> <span>Accounting</span></a>
                            <li>
                                <a href="reservation.html"><i class="fe fe-layout"></i> <span>Reservation</span></a>
                                <li>
                                    <a href="access.html"><i class="fe fe-layout"></i> <span>Acces control</span></a>
                                </li>
                            </li>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Employee Details</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="invoice.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Employee Details</li>
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
										<h4 class="text-danger card-title">Employee Information</h4>
									</div>
									<div class="card-body">
										<form action="#">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-2">
															<div class="form-group">
																<label>Employee ID</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Email: </label>
																<input type="email" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Full Name</label>
																<input type="text" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Phone</label>
																<input type="text" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Department :</label>
																<input type="text" class="form-control">
															</div>												
													    </div>

                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Password :</label>
																<input type="password" class="form-control">
															</div>
														</div>
											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary"> Save </button>
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

                    <!---- basic Info -->
                    
                    <div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-danger card-title">Basic Information</h4>
									</div>
									<div class="card-body">
										<form action="#">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-2">
															<div class="form-group">
																<label>Father Name</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Mother Name</label>
																<input type="email" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Religion</label>
																<input type="number" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Marital Status</label>
																<input type="number" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Blood Group :</label>
																<input type="text" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Telephone No (Home) :</label>
																<input type="text" class="form-control">
															</div>
														</div>
													</div>

													<div class="row">													
														<div class="col-md-4">
															<div class="form-group">
																<label>Birth Date :</label>
																<input type="date" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Temporary Address:</label>
																<input type="text" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Parmanent Address:</label>
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
                         <!---- basic Info -->


                    <!---- JOb Info -->
                    
                    <div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-danger card-title">Job Information</h4>
									</div>
									<div class="card-body">
										<form action="#">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-2">
															<div class="form-group">
																<label>Job Type</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Designation</label>
																<input type="email" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Salary</label>
																<input type="number" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Registration Date :</label>
																<input type="date" class="form-control">
															</div>
													    </div>
                                                        
													</div>
													<div class="row">	
                                                    <div class="col-md-3">
															<div class="form-group">
																<label>Join Date :</label>
																<input type="date" class="form-control">
															</div>
													</div>

                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Resign Date :</label>
																<input type="date" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Confirmation Date :</label>
																<input type="date" class="form-control">
															</div>
														</div>												
														<div class="col-md-3">
															<div class="form-group">
																<label>Salary Increment Date :</label>
																<input type="date" class="form-control">
															</div>
														</div>


													</div>
												</div>
											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
                         <!---- basic Info -->

                    <!---- Academic Info -->
                    
                    <div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-danger card-title">Academic Information</h4>
									</div>
									<div class="card-body">
										<form action="#">
											<div class="row">
												<div class="col-md-12">
													<div class="row">   
                                                        <div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
                                                            <h5 class="card-title"> University Information </h5>
                                                            </div>                                                           
                                                        </div>                                                  
														<div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
																<label>Name of Institute</label>
																<input type="text" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                           
                                                            <div class="form-group">
																<label>Passing Year</label>
																<input type="text" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                            
                                                            <div class="form-group">
																<label>Result</label>
																<input type="text" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
																<label>Academic Session</label>
																<input type="text" class="form-control">
															</div>                                                            
														</div>                                                      
													</div>

                                                    <div class="row">   
                                                        <div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
                                                            <h5 class="card-title"> College Information </h5>
                                                            </div>                                                           
                                                        </div>                                                  
														<div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
																<label>Name of Institute</label>
																<input type="text" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                           
                                                            <div class="form-group">
																<label>Passing Year</label>
																<input type="text" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                            
                                                            <div class="form-group">
																<label>Result</label>
																<input type="text" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
																<label>Academic Session</label>
																<input type="text" class="form-control">
															</div>                                                            
														</div>                                                      
													</div>

                                                    <div class="row">   
                                                        <div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
                                                            <h5 class="card-title"> School Information </h5>
                                                            </div>                                                           
                                                        </div>                                                  
														<div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
																<label>Name of Institute</label>
																<input type="text" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                           
                                                            <div class="form-group">
																<label>Passing Year</label>
																<input type="text" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                            
                                                            <div class="form-group">
																<label>Result</label>
																<input type="text" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
																<label>Academic Session</label>
																<input type="text" class="form-control">
															</div>                                                            
														</div>                                                      
													</div>
	
												</div>
											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
                        <!---- Academic Info -->
                    
                    
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