<?php
include '../config.php';

$encryption = $_GET['empId'];
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$decryption_iv  = '1234567891011121';
$decryption_key  = "FlyFarInterNational";
$decryption=openssl_decrypt ($encryption, $ciphering, 
        $decryption_key, $options, $decryption_iv);

$EmployeeId = $decryption;
//Employee varibale
$Emp_Email="";
$Emp_Name;
$Emp_Phone;
$Emp_Dept;

//basic Variable
$Emp_fname;
$Emp_mName;
$Emp_Religion; $Emp_Marital; $Emp_Blood; $Emp_Telephone; $Emp_Birth; 
$Emp_tempAddress; $Emp_parmaAddress; $Emp_NID; $Emp_Passport; $Emp_Insurance; $Emp_BirthId;
$Emp_BankName; $Emp_BankAccNo; $Emp_BankBranchName; $Emp_PfAccN0;


//Job Info

$Emp_jobType; $Emp_Salary; $Emp_joindate; $Emp_resigndate; $Emp_Designation;
$Emp_confirmationdate; $Emp_incrementdate; $Emp_regdate;



//Academic Info

$Emp_PrevCompany; $Emp_Duartion; $Emp_Isuue;
$Emp_ScName; $Emp_ScResult; $Emp_ScPassYear; $Emp_ScSession;
$Emp_ClName; $Emp_ClResult; $Emp_ClPassYear; $Emp_ClSession;
$Emp_UVName; $Emp_UVResult; $Emp_UVPassYear; $Emp_UvSession;


//Employee Info

$sql = "SELECT * FROM `employee` WHERE `EMP_ID`='$EmployeeId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$Emp_Email = $row["email"];	
        $Emp_Name = $row["name"];	
        $Emp_Phone = $row["phone"];	
        $Emp_Dept = $row["department"];	
        							
 }
}

 // Basic Info

$sql = "SELECT * FROM `employee_info` WHERE `EMP_ID`='$EmployeeId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$Emp_fname = $row["fatherName"];	
        $Emp_mName = $row["motherName"];	
        $Emp_Religion = $row["religion"];
        $Emp_Telephone = $row["telephone"];	
        $Emp_Marital = $row["maritalstatus"];
        $Emp_Blood = $row["bloodgroup"];	
        $Emp_Birth = $row["dateOfBirth"];	
        $Emp_tempAddress = $row["temporaryaddress"];	
        $Emp_parmaAddress = $row["parmanentaddress"];
        $Emp_NID = $row["nid"];
        $Emp_Insurance = $row["insuranceno"];
        $Emp_Passport = $row["passportno"];
        $Emp_BirthId = $row["birthid"];
        $Emp_BankAccNo =$row["bankacc"];
        $Emp_BankName = $row["bankname"];
        $Emp_BankBranchName = $row["branchname"];
        $Emp_PfAccN0 = $row["pfaccno"];
      							
 }
}

//Job Info

$sql = "SELECT * FROM `emp_jobinfo` WHERE `EMP_ID`='$EmployeeId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$Emp_jobType = $row["jobType"];	
        $Emp_Salary = $row["salary"];	
        $Emp_joindate = $row["joindate"];	
        $Emp_resigndate = $row["resigndate"];
        $Emp_confirmationdate = $row["confirmationdate"];	
        $Emp_incrementdate = $row["incrementdate"];
        $Emp_regdate = $row["registrationdate"];	
        $Emp_Designation = $row["designation"];	       							
    }
}

//Academic Info

$sql = "SELECT * FROM `employee_academicinfo` WHERE `EMP_ID`='$EmployeeId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$Emp_PrevCompany = $row["pastcompanyname"];	
        $Emp_Duartion = $row["workduration"];	
        $Emp_Isuue = $row["resigncause"];	
        $Emp_ScName = $row["schoolname"];	
        $Emp_ScResult = $row["sscresult"];	
        $Emp_ScPassYear = $row["sscpassingyear"];
		$Emp_ScSession = $row["sscsessionyear"];
        $Emp_ClName = $row["collegename"];	
        $Emp_ClResult = $row["hscresult"];	
        $Emp_ClPassYear = $row["hscpassingyear"];
		$Emp_ClSession = $row["hscsessionyear"];
        $Emp_UVName = $row["universityname"];	
        $Emp_UVResult = $row["cgpa"];	
        $Emp_UVPassYear = $row["uvpassingyear"];
		$Emp_UvSession = $row["uvsessionyear"];
	}
}
											
?>
<!------------  Header ----------->
<?php include '../header.php'; ?>
<!------------  Header ----------->

	     
        <!-- Sidebar -->

		<?php include '../sidebar.php'; ?>	
			<!--- Sidebar --->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Employee Details</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="invoice.php">Dashboard</a></li>
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
																<input type="text" value="<?php echo $EmployeeId ?>" class="form-control" disabled>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Email: </label>
																<input type="email" value="<?php echo $Emp_Email ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Full Name</label>
																<input type="text" value="<?php echo $Emp_Name ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Phone</label>
																<input type="text" value="<?php echo $Emp_Phone ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Department :</label>
																<input type="text" value="<?php echo $Emp_Dept ?>" class="form-control" disabled>
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
																<input type="text" value="<?php echo $Emp_fname ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Mother Name</label>
																<input type="email" value="<?php echo $Emp_mName ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Religion</label>
																<input type="text" value="<?php echo $Emp_Religion ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Marital Status</label>
																<input type="text" value="<?php echo $Emp_Marital ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Blood Group :</label>
																<input type="text" value="<?php echo $Emp_Blood ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-2">
															<div class="form-group">
																<label>Telephone No (Home) :</label>
																<input type="text" value="<?php echo $Emp_Telephone ?>" class="form-control">
															</div>
														</div>
													</div>


                                                    <div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label>National ID No: </label>
																<input type="text" value="<?php echo $Emp_NID ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Passport No: </label>
																<input type="text" value="<?php echo $Emp_Passport ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Birth Certificate</label>
																<input type="text" value="<?php echo $Emp_BirthId ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Insurance No:  </label>
																<input type="text" value="<?php echo $Emp_Insurance ?>" class="form-control">
															</div>
														</div>
                                                        
													</div>




													<div class="row">													
														<div class="col-md-4">
															<div class="form-group">
																<label>Birth Date :</label>
																<input type="date" value="<?php echo $Emp_Birth ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Temporary Address:</label>
																<input type="text" value="<?php echo $Emp_Insurance ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label>Parmanent Address:</label>
																<input type="text" value="<?php echo $Emp_Insurance ?>" class="form-control">
															</div>
														</div>
													</div>

                                                    <!--- Bank Info -->
                                                    <div class="row">													
														<div class="col-md-3">
															<div class="form-group">
																<label>Bank Name</label>
																<input type="text" value="<?php echo $Emp_BankName ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Bank Acc No: </label>
																<input type="text" value="<?php echo $Emp_BankAccNo ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Branch Name:</label>
																<input type="text" value="<?php echo $Emp_BankBranchName ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Providant Fund Acc No:</label>
																<input type="text" value="<?php echo $Emp_PfAccN0 ?>" class="form-control">
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary">Updsate</button>
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
														<div class="col-md-3">
															<div class="form-group">
																<label>Job Type</label>
																<input type="text" value="<?php echo $Emp_jobType ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Designation</label>
																<input type="text" value="<?php echo $Emp_Designation ?>" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Salary</label>
																<input type="text" value="<?php echo $Emp_Salary ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Registration Date :</label>
																<input type="date" value="<?php echo $Emp_regdate ?>" class="form-control">
															</div>
													    </div>
                                                        
													</div>
													<div class="row">	
                                                    <div class="col-md-3">
															<div class="form-group">
																<label>Join Date :</label>
																<input type="date" value="<?php echo $Emp_joindate ?>" class="form-control">
															</div>
													</div>

                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Resign Date :</label>
																<input type="date" value="<?php echo $Emp_resigndate ?>" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Confirmation Date :</label>
																<input type="date" value="<?php echo $Emp_confirmationdate ?>" class="form-control">
															</div>
														</div>												
														<div class="col-md-3">
															<div class="form-group">
																<label>Salary Increment Date :</label>
																<input type="date" value="<?php echo $Emp_incrementdate ?>" class="form-control">
															</div>
														</div>


													</div>
												</div>
											</div>
											



											<div class="text-right">
												<button type="submit" class="btn btn-primary">Update</button>
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
                                                            <h5 class="card-title"> Previous Work Experience </h5>
                                                            </div>                                                           
                                                        </div>                                                  
														<div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
																<label>Name of Company</label>
																<input type="text" value="<?php echo $Emp_PrevCompany ?>" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-3">                                                           
                                                            <div class="form-group">
																<label>Work Duration</label>
																<input type="text" value="<?php echo $Emp_Duartion ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-3">                                                            
                                                            <div class="form-group">
																<label>Cause of Resign</label>
																<input type="text" value="<?php echo $Emp_Isuue ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                                                                              
													</div>


													<div class="row">   
                                                        <div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
                                                            <h5 class="card-title"> University Information </h5>
                                                            </div>                                                           
                                                        </div>                                                  
														<div class="col-md-3">                                                                                                                 
                                                            <div class="form-group">
																<label>Name of Institute</label>
																<input type="text" value="<?php echo $Emp_UVName ?>" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                           
                                                            <div class="form-group">
																<label>Passing Year</label>
																<input type="text" value="<?php echo $Emp_UVPassYear ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                            
                                                            <div class="form-group">
																<label>Result</label>
																<input type="text" value="<?php echo $Emp_UVResult ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
																<label>Academic Session</label>
																<input type="text" value="<?php echo $Emp_UvSession ?>" class="form-control">
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
																<input type="text" value="<?php echo $Emp_ClName ?>" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                           
                                                            <div class="form-group">
																<label>Passing Year</label>
																<input type="text" value="<?php echo $Emp_ClPassYear ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                            
                                                            <div class="form-group">
																<label>Result</label>
																<input type="text" value="<?php echo $Emp_ClResult ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
																<label>Academic Session</label>
																<input type="text" value="<?php echo $Emp_ClSession ?>" class="form-control">
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
																<input type="text" value="<?php echo $Emp_UVName ?>" class="form-control">
                                                            </div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                           
                                                            <div class="form-group">
																<label>Passing Year</label>
																<input type="text" value="<?php echo $Emp_UVPassYear ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">                                                            
                                                            <div class="form-group">
																<label>Result</label>
																<input type="text" value="<?php echo $Emp_UVResult ?>" class="form-control">
															</div>                                                           
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
																<label>Academic Session</label>
																<input type="text" value="<?php echo $Emp_ScSession ?>" class="form-control">
															</div>                                                            
														</div>                                                      
													</div>
	
												</div>
											</div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary"> Update</button>
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
			
<!------------  Footer ----------->
<?php include '../footer.php'; ?>
<!------------  Footer ----------->