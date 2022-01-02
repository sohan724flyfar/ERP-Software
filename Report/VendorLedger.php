<?php

include '../config.php';
include('../session.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Vendor List</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="../assets/css/feathericon.min.css">
	<!-- Datatables CSS -->
	<link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
	
		<!-- /Header -->
		<?php
        	include '../header.php';
        ?>
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
							<h3 class="page-title">Vendor</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Vendor</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<!-- Contant -->
				
					<div class="col-md-12">
						
					</div>
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="text-right">
										<a href="AddVendor.php" class="btn btn-primary"> Add +</a>
									</div>
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-stripped">
											<thead>
												<tr>
													<th>Vendor ID</th>
													<th>Name</th>
													<th>Phone</th>
													<th>Company</th>
													<th>Action</th>
                                                    <th></th>
												</tr>
											</thead>
											<tbody>

												<?php

												$sql = "SELECT * FROM vendor ORDER BY id DESC";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
  												while($row = $result->fetch_assoc()) {													  
													  $vendor_id = "".$row["vendorId"];
													  $ciphering = "AES-128-CTR";
													  $iv_length = openssl_cipher_iv_length($ciphering);
													  $options = 0;
													  $encryption_iv = '1234567891011121';
													  $encryption_key = "FlyFarInterNational";
													  $encryption = openssl_encrypt($vendor_id, $ciphering,
																$encryption_key, $options, $encryption_iv);

													echo "<tr><td>".$row["vendorId"]."</td>
																<td>".$row["name"]."</td> 
																<td>".$row["phone"]."</td>
														 		<td>".$row["company"]."</td>
																<td><a href='VendorLedgerView.php?vId=$encryption' class='btn btn-primary'> View </a><td>
																 </tr>";   											
												  }
												} else {

											    }
												?>


											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					<div class="col-md-3">						
					</div>
				</div>
				<!-- /Page Wrapper -->
			</div>
			<!-- /Main Wrapper -->
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