<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "./master/header.php"; ?>
	<script src="./js/form.js"></script>
</head>
<body>
<?php require "./master/navbar.php"; ?>
<div class="container">
	<div class="jumbotron  container-fluid" style="margin-top:120px;">
		
				<form  action="res.php" method="post" class="ajax">

				<!--     Credentials      -->
				<div id="d1">
				<h2>Credentials</h2>
						  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Enrollment</label>
						      <input type="text" name="enrollment" class="form-control" id="inputEmail4" placeholder="Enrollment">
						    </div>
						    
						  </div>
						  <div class="form-row">
							  <div class="form-group col-md-6">
							    <label for="inputAddress" class="col-form-label">Password</label>
							    <input type="password" name="password" class="form-control" id="inputAddress" placeholder="password">
							  </div>
								  <div  class="form-group col-md-6">
							      <label for="inputPassword4" class="col-form-label">Confirm Password</label>
							      <input type="password" name="con_password" class="form-control" id="inputPassword4" placeholder="confirm Password">
							    </div>
						  </div>
						  
						  <div class="form-group col-md-12">
						  <button type="button" id="btn1" class="btn btn-primary ">Next</button>
						  </div>
				</div>

				<!-- PErsonal Deatils -->
				
				<div id="d2">
				<h2>Personal Details</h2>
						  <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">First Name</label>
						      <input type="text" name="fname" class="form-control" id="inputEmail4">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Middle Name</label>
						      <input type="text" name="mname" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Last Name</label>
						      <input type="text" name="lname" class="form-control" id="inputEmail4" >
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Father Name</label>
						      <input type="text" name="father_name" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Mother Name</label>
						      <input type="text" name="mother_name" class="form-control" id="inputEmail4" >
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Father Profession</label>
						      <input type="text" name="f_profession" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Mother Profession</label>
						      <input type="text" name="m_profession" class="form-control" id="inputEmail4" >
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Date of Birth</label>
						      <input type="date" name="dob" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Blood Group</label>
						      <select name="blood_group" class="form-control">
						      	<option value="A+">A+</option>
						      	<option value="A-">A-</option>
						      	<option value="B+">B+</option>
						      	<option value="B-">B-</option>
						      	
						      </select>
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Catogory</label>
						      <select name="catogory" class="form-control">
						      	<option value="sebc">sebc</option>
						      	<option value="open">open</option>
						      	<option value="sc">sc</option>
						      	<option value="st">st</option>
						      	
						      </select>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="control-lable">Gender</label>
							     <div class="radio">
								  <label><input type="radio" name="gender" value="male">Male</label>
								  <label><input type="radio" name="gender" value="female">Female</label>
								 </div>
								 
								  
								
						       
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-12">
						       <label for="password" class="control-label">Upload Photo</label>
								<label class="btn btn-default btn-file">
		   						 Browse <input type="file"   id="photo" >
								</label>
						    </div>
						   
						    
						  </div>

						  
						  <div class="form-group col-md-12">						  
						  <button type="button" id="btn2"  class="btn btn-primary ">Next</button>
						  </div>

				</div>

				<!--  Contact Details  -->
				<div id="d3">
					<h2>Contact Details</h2>
						<div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Contact Number</label>
						      <input type="text" name="contact_num" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Contact Number(Optional)</label>
						      <input type="text" name="contact_num_opt" class="form-control" id="inputEmail4" >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Email</label>
						      <input type="text" name="email" class="form-control" id="inputEmail4" >
						    </div>
						    
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Permanent Address</label>
						      <input type="text" name="p_street" class="form-control" id="inputEmail4"  placeholder="Street">
						    </div>
						    
						    
						 </div>

						 <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="p_city" class="form-control" id="inputEmail4" placeholder="City">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="p_state" class="form-control" id="inputEmail4" placeholder="State">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="p_pincode" class="form-control" id="inputEmail4" placeholder="pincode" >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Local Address</label>
						      <input type="text" name="l_street" class="form-control" id="inputEmail4"  placeholder="Street">
						    </div>
						    
						    
						 </div>

						 <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="l_city" class="form-control" id="inputEmail4" placeholder="City">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="l_state" class="form-control" id="inputEmail4" placeholder="State">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="l_pincode" class="form-control" id="inputEmail4" placeholder="pincode" >
						    </div>
						    
						 </div>

						 <div class="form-group col-md-12">						  
						  <button type="button" id="btn3" class="btn btn-primary ">Next</button>
						  </div>
					
				</div>
				<!--  Education Details -->
				<div id="d4">
					<h2>Education Detail</h2>

						<div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">SSC</label>
						      <input type="text" name="ssc" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">HSC</label>
						      <input type="text" name="hsc" class="form-control" id="inputEmail4" >
						    </div>
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Gujcet Percentage</label>
						      <input type="text" name="guj_per" class="form-control" id="inputEmail4"  >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Gujcet Merit Rank</label>
						      <input type="text" name="guj_merit" class="form-control" id="inputEmail4"  >
						    </div>
						    
						 </div>
						 <div class="form-row">


						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">ACPC Merit Rank</label>
						      <input type="text" name="acpc_merid" class="form-control" id="inputEmail4" >
						    </div>
						
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Diploma CGPA</label>
						      <input type="text" name="d2d_cgpa" class="form-control" id="inputEmail4"  >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Year of Admission</label>
						      <select name="year_of_admission"  class="form-control">
						      	<option value="2013">2013</option>
						      	<option value="2014">2014</option>
						      	<option value="2015">2015</option>
						      	<option value="2016">2016</option>
						      	<option value="2017">2017</option>
						      	
						      </select>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Are You D2D Student</label>
						      <div class="radio">
								  <label><input type="radio" name="d2d" value="yes">Yes</label>
								  <label><input type="radio" name="d2d" value="no">No</label>
								</div>
						    
						 </div>
						 
						 <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Branch</label>
						      <select name="branch"  class="form-control">
						      	<option value="ce">ce</option>
						      	<option value="it">it</option>
						      	
						      </select>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Division</label>
						      <select name="division"  class="form-control">
						      	<option value="A">A</option>
						      	<option value="B">B</option>
						      	
						      	
						      </select>
						    </div>
						    
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Semester</label>
						      <select name="sem"  class="form-control">
						      	<option value="1">1</option>
						      	<option value="2">2</option>
						      	<option value="3">3</option>
						      	<option value="4">4</option>
						      	<option value="5">5</option>
						      	<option value="6">6</option>
						      	<option value="7">7</option>
						      	<option value="8">8</option>
						      	
						      </select>

						    </div>
						    
						    
						 </div>
					
						 <div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">SPI</label>
						      <input type="text" name="sem1" class="form-control" id="inputEmail4" placeholder="Sem-1" >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="sem2" class="form-control" id="inputEmail4" placeholder="Sem-2">
						    </div>
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp </label>
						      <input type="text" name="sem3" class="form-control" id="inputEmail4"  placeholder="Sem-3">
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp  </label>
						      <input type="text" name="sem4" class="form-control" id="inputEmail4" placeholder="Sem-4" >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="sem5" class="form-control" id="inputEmail4" placeholder="Sem-5">
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" name="sem6" class="form-control" id="inputEmail4" placeholder="Sem-6" >
						    </div>
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp </label>
						      <input type="text" name="sem7" class="form-control" id="inputEmail4" placeholder="Sem-7" >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp  </label>
						      <input type="text" name="sem8" class="form-control" id="inputEmail4" placeholder="Sem-8" >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">CPI</label>
						      <input type="text" name="cpi" class="form-control" id="inputEmail4" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">CGPA</label>
						      <input type="text" name="cgpa" class="form-control" id="inputEmail4" >
						    </div>
						    
						    
						    
						 </div>
						 <div class="form-row">
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">TFWS</label>
						      	<div class="radio">
								  <label><input type="radio" name="tfws" value="yes">Yes</label>
								  <label><input type="radio" name="tfws" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Commuting</label>
						      	<div class="radio">
								  <label><input type="radio" name="commuting" value="yes">Yes</label>
								  <label><input type="radio" name="commuting" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Hosteler</label>
						      	<div class="radio">
								  <label><input type="radio" name="hosteler" value="yes">Yes</label>
								  <label><input type="radio" name="hosteler" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Are You J&K Student</label>
						      	<div class="radio">
								  <label><input type="radio" name="jnk" value="yes">Yes</label>
								  <label><input type="radio" name="jnk" value="no">No</label>
								</div>
						 	</div>
						 	
						 </div>
						 <div class="form-row">
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Are You NSS Student</label>
						      	<div class="radio">
								  <label><input type="radio" name="nss" value="yes">Yes</label>
								  <label><input type="radio" name="nss" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Are You NCC Student</label>
						      	<div class="radio">
								  <label><input type="radio" name="ncc" value="yes">Yes</label>
								  <label><input type="radio" name="ncc" value="no">No</label>
								</div>
						 	</div>
						 	
						 	
						 </div>




							<div class="form-group col-md-12">						  
							  <button type="button" id="btn4" class="btn btn-primary ">Next</button>
							</div>

					</div>
				</div>
				<!-- Bank Details -->
				<div id="d5">
					<h2>Bank Detail</h2>

						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4" class="col-form-label">Account Number</label>
							<input type="number" class="form-control" name="account_num">
								
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							<label for="inputEmail4" class="col-form-label">IFSC</label>
							<input type="number" class="form-control" name="ifsc">
								
							</div>
							<div class="form-group col-md-4">
							<label for="inputEmail4" class="col-form-label">Bank Name</label>
							<input type="number" class="form-control" name="bank_name">
								
							</div>
							<div class="form-group col-md-4">
							<label for="inputEmail4" class="col-form-label">Bank Branch</label>
							<input type="number" class="form-control" name="bank_branch">
								
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Adhar Card Number</label>
							<input type="number" class="form-control" name="adhar_num">
								
							</div>
							<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Election Card Number</label>
							<input type="number" class="form-control" name="election_num">
								
							</div>
							
						</div>
						<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Is You Bank AC Seeded With Adhar</label>
						      	<div class="radio">
								  <label><input type="radio" name="seeded" value="yes">Yes</label>
								  <label><input type="radio" name="seeded" value="no">No</label>
								</div>
						 </div>

						 <div class="form-group col-md-12">						  
							  <button type="submit" id="btn4" class="btn btn-primary ">Submit</button>
						</div>
					
				</div>
			
				 
				</form>
			
	
		
	</div>
	
</div>
</body>
</html>