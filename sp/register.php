<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "./master/header.php"; ?>
	<script src="./js/app.js"></script>
	<script src="./js/form.js"></script>
	<style type="text/css">
	.error{
		color: red;
	}
	</style>
	
	
</head>
<body>
<?php require "./master/navbar.php"; ?>
<div class="container" ng-app="MyApp" ng-controller="FormController" ng-init="init()">
	<div class="jumbotron  container-fluid" style="margin-top:120px;">
		
				<form name="form" action="res.php" ng-submit="onFormSubmit()" method="post" class="ajax" id="jax">

				<!--     Credentials      -->
				<div id="d1">
				<h2>Credentials</h2>
						  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Enrollment</label>
						      <input type="number" name="enrollment" 
						      		class="form-control" 
						      		 id="en" 
						      		placeholder="Enrollment"
						      		ng-model="user.enrollment"
						      		ng-required="true"
						      		ng-minlength="12"
						      		ng-maxlength="12"
						      >
						      <span class="error" ng-show="form.enrollment.$invalid && form.enrollment.$touched">
						      	<span ng-show="form.enrollment.$error.required">Enrollment is Required..!</span>
						      	<span ng-show="form.enrollment.$error.minlength">Enrollment is to Sort..!</span>
						      	<span ng-show="form.enrollment.$error.maxlength">Enrollment is to Long..!</span>
						      	<span class="en_error" ></span>
						      </span>
						    </div>
						    
						  </div>
						  <div class="form-row">
							  <div class="form-group col-md-6">
							    <label for="inputAddress" class="col-form-label">Password</label>
							    <input type="password" name="password" 
								    class="form-control" 
								    id="inputAddress" 
								    placeholder="password"
								    ng-model="user.password"
								    ng-required="true"
								    ng-minlength="8"
								    ng-maxlength="16"
							    >
							     <span class="error" ng-show="form.password.$invalid && form.password.$touched">
							      	<span ng-show="form.password.$error.required">Password is Required..!</span>
							      	<span ng-show="form.password.$error.minlength">Password must be 8 charater..!</span>
						      	
						      	</span>
							  </div>
								  <div  class="form-group col-md-6">
							      <label for="inputPassword4" class="col-form-label">Confirm Password</label>
							      <input type="password" 
							      		 name="con_password" 
							      		 class="form-control" 
							      		 id="inputPassword4" 
							      		 placeholder="confirm Password"
							      		 ng-model="user.con_password"
							      		 ng-required="true"
							      		 ng-minlength="8"
							      		 ng-maxlength="16"
							      		 compare-to="user.password" 
							      >

             

							      <span class="error" ng-show="form.con_password.$invalid && form.con_password.$touched">
							      	<span ng-show="form.con_password.$error.required">confirm password is Required..!</span>
							      	<span ng-show="form.con_password.$error.minlength">confirm password must be 8 charater..!</span>
									<span ng-show="form.con_password.$error.compareTo">Passwords do not match</span>
						      	</span>
							    </div>
						  </div>
						  
						  <div class="form-group col-md-12">
						  <button type="button" 
						  		id="btn1"  
						  		class="btn btn-primary "
						  		ng-disabled="!isValid(0)"
						  		
						  		>Next</button> <!--   ng-disabled="form.$invalid"  -->
						  </div>
				</div>

				<!-- PErsonal Deatils -->
				
				<div id="d2">
				<h2>Personal Details</h2>
						  <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">First Name</label>
						      <input type="text"
						      		 name="fname" 
						      		 class="form-control" 
						      		 
						      		 ng-model="user.fname"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.fname.$invalid && form.fname.$touched">
							      	<div ng-show="form.fname.$error.required">First Name is Required..!</div>
							  </div>
						    </div>
						    
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Middle Name</label>
						      <input type="text" 
						      		 name="mname" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.mname"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.mname.$invalid && form.mname.$touched">
							      	<div ng-show="form.mname.$error.required">Middle Name is Required..!</div>
							  </div>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Last Name</label>
						      <input type="text" 
						      		 name="lname" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.lname"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.lname.$invalid && form.lname.$touched">
							      	<div ng-show="form.lname.$error.required">Last Name is Required..!</div>
							  </div>
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Father Name</label>
						      <input type="text" 
						      		 name="father_name" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.father_name"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.father_name.$invalid && form.father_name.$touched">
							      	<div ng-show="form.father_name.$error.required">Father Name is Required..!</div>
							  </div>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Mother Name</label>
						      <input type="text" 
						      		 name="mother_name" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.mother_name"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.mother_name.$invalid && form.mother_name.$touched">
							      	<div ng-show="form.mother_name.$error.required">Mother Name is Required..!</div>
							  </div>
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Father Profession</label>
						      <input type="text" 
						      		 name="f_profession" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.f_profession"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.f_profession.$invalid && form.f_profession.$touched">
							      	<div ng-show="form.f_profession.$error.required">Father Profession is Required..!</div>
							  </div>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Mother Profession</label>
						      <input type="text" 
						      		 name="m_profession" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.m_profession"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.m_profession.$invalid && form.m_profession.$touched">
							      	<div ng-show="form.m_profession.$error.required">Mother Profession  is Required..!</div>
							  </div>
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Date of Birth</label>
						      <input type="date" 
						      		 name="dob" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.dob"
						      		 ng-required="true"
						      >
						      <div class="error" ng-show="form.dob.$invalid && form.dob.$touched">
							      	<div ng-show="form.dob.$error.required">Date of Birth is Required..!</div>
							  </div>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Blood Group</label>
						      <select name="blood_group" 
						      		  class="form-control"
						      		  ng-model="user.blood_group"
						      		  ng-required="true"
						      >
						      	<option value="A+">A+</option>
						      	<option value="A-">A-</option>
						      	<option value="B+">B+</option>
						      	<option value="B-">B-</option>
						      	
						      </select>
						      <div class="error" ng-show="form.blood_group.$invalid && form.blood_group.$touched">
							      	<div ng-show="form.blood_group.$error.required">Blood Group is Required..!</div>
							  </div>
						    </div>
						    
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Catogory</label>
						      <select name="catogory" 
						      		  class="form-control"
						      		  ng-model="user.catogory"
						      		  ng-required="true"
						      >
						      	<option value="sebc">sebc</option>
						      	<option value="open">open</option>
						      	<option value="sc">sc</option>
						      	<option value="st">st</option>
						      	
						      </select>
						      <div class="error" ng-show="form.catogory.$invalid && form.catogory.$touched">
							      	<div ng-show="form.catogory.$error.required">Catogory is Required..!</div>
							  </div>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="control-lable">Gender</label>
							     <div class="radio">
								  <label><input type="radio"  
								  				name="gender" 
								  				value="male" 
								  				checked 
								  		  >Male</label>
								  <label><input type="radio" 
								  				name="gender" 
								  				value="female" 
								  		>Female</label>
								 </div>
								 
								  
								
						    </div>
						    
						  </div>
						 

						  
						  <div class="form-group col-md-12">						  
						  <button type="button" id="btn2" 
						  		  class="btn btn-primary"
						  		  ng-disabled="!isValid(1)"
						  >Next</button>
						  </div>

				</div>

				<!--  Contact Details  -->
				<div id="d3">
					<h2>Contact Details</h2>
						<div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Contact Number</label>
						      <input type="number" 
						      		 name="contact_num" 
						      		 class="form-control" 
						      		 ng-model="user.contact_num"
						      		 ng-required="true"
						      		 ng-minlenght="10"
						       >
						       <span class="error" ng-show="form.contact_num.$invalid && form.contact_num.$touched">
							      	<span ng-show="form.contact_num.$error.required">contact Number is Required..!</span>
							      	<span ng-show="form.contact_num.$error.minlength">Password must be 10 charater..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">Contact Number(Optional)</label>
						      <input type="number" name="contact_num_opt" class="form-control"  >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Email</label>
						      <input type="email" 
						      		 name="email" 
						      		 class="form-control" 
						      		  
						      		 ng-model="user.email"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.email.$invalid && form.email.$touched">
							      	<span ng-show="form.email.$error.required">Email is Required..!</span>
							  </span>    	
						    </div>
						    
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Permanent Address</label>
						      <input type="text" 
						      		 name="p_street" 
						      		 class="form-control" 
						      		   
						      		 placeholder="Street"
						      		 ng-model="user.p_street"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.p_street.$invalid && form.p_street.$touched">
							      	<span ng-show="form.p_street.$error.required">Street is Required..!</span>
							   </span>
						    </div>
						    
						    
						 </div>

						 <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" 
						      		 name="p_city" 
						      		 class="form-control"
						      		 placeholder="City"
						      		 ng-model="user.p_city"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.p_city.$invalid && form.p_city.$touched">
							      	<span ng-show="form.p_city.$error.required">City is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" 
						      		 name="p_state" 
						      		 class="form-control"  
						      		 placeholder="State"
						      		 ng-model="user.p_state"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.p_state.$invalid && form.p_state.$touched">
							      	<span ng-show="form.p_state.$error.required">State is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="number" 
						      		 name="p_pincode" 
						      		 class="form-control" 
						      		  
						      		 placeholder="pincode" 
						      		 ng-model="user.p_pincode"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.p_pincode.$invalid && form.p_pincode.$touched">
							      	<span ng-show="form.p_pincode.$error.required">Pin Code  is Required..!</span>
							   </span>
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4" class="col-form-label">Local Address</label>
						      <input type="text" 
						      		 name="l_street" 
						      		 class="form-control"   
						      		 placeholder="Street"
						      		 ng-model="user.l_street"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.l_street.$invalid && form.l_street.$touched">
							      	<span ng-show="form.l_street.$error.required">Street  is Required..!</span>
							   </span>
						    </div>
						    
						    
						 </div>

						 <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" 
						      		 name="l_city" 
						      		 class="form-control"  
						      		 placeholder="City"
						      		 ng-model="user.l_city"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.l_city.$invalid && form.l_city.$touched">
							      	<span ng-show="form.l_city.$error.required">City  is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="text" 
						      		 name="l_state" 
						      		 class="form-control"  
						      		 placeholder="State"
						      		 ng-model="user.l_state"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.l_state.$invalid && form.l_state.$touched">
							      	<span ng-show="form.l_state.$error.required">State  is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="number" 
						      		 name="l_pincode" 
						      		 class="form-control"  
						      		 placeholder="pincode" 
						      		 ng-model="user.l_pincode"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.l_pincode.$invalid && form.l_pincode.$touched">
							      	<span ng-show="form.l_pincode.$error.required">Pin Code  is Required..!</span>
							   </span>
						    </div>
						    
						 </div>

						 <div class="form-group col-md-12">						  
						  <button type="button" 
						  		  id="btn3" 
						  		  class="btn btn-primary"
						  		  ng-disabled="!isValid(2)"
						  >Next</button>
						  </div>
					
				</div>
				<!--  Education Details -->
				<div id="d4">
					<h2>Education Detail</h2>

						<div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">SSC%</label>
						      <input type="number" 
						      		 name="ssc" 
						      		 class="form-control"  
						      		 ng-model="user.ssc"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.ssc.$invalid && form.ssc.$touched">
							      	<span ng-show="form.ssc.$error.required">SSC Percentage  is Required..!</span>
							  </span>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">HSC%</label>
						      <input type="number" 
						      		 name="hsc" 
						      		 class="form-control"  
						      		 placeholder="(If No Enter 0)"
						      		 ng-model="user.hsc"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.hsc.$invalid && form.hsc.$touched">
							      	<span ng-show="form.hsc.$error.required">HSC Percentage  is Required..!</span>
							   </span>
						    </div>
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Gujcet Percentage%</label>
						      <input type="number" 
						      		 name="guj_per" 
						      		 class="form-control"   
						      		 placeholder="(If No Enter 0)"
						      		 ng-model="user.guj_per"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.guj_per.$invalid && form.guj_per.$touched">
							      	<span ng-show="form.guj_per.$error.required">Gujcet Percentage  is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Gujcet Merit Rank</label>
						      <input type="number" 
						      		 name="guj_merit" 
						      		 class="form-control"   
						      		 placeholder="(If No Enter 0)"
						      		 ng-model="user.guj_merit"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.guj_merit.$invalid && form.guj_merit.$touched">
							      	<span ng-show="form.guj_merit.$error.required">Gujcet Merit  is Required..!</span>
							   </span>
						    </div>
						    
						 </div>
						 <div class="form-row">


						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">ACPC Merit Rank</label>
						      <input type="number" 
						      		 name="acpc_merit" 
						      		 class="form-control"  
						      		 ng-model="user.acpc_merit"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.acpc_merit.$invalid && form.acpc_merit.$touched">
							      	<span ng-show="form.acpc_merit.$error.required">ACPC Merit Rank  is Required..!</span>
							   </span>
						    </div>
						
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Diploma CGPA</label>
						      <input type="number" 
						      		 name="d2d_cgpa" 
						      		 class="form-control"   
						      		 placeholder="(If No Enter 0)"
						      		 ng-model="user.d2d_cgpa"
						      		 ng-required="true"
						      >
						      <span class="error" ng-show="form.d2d_cgpa.$invalid && form.d2d_cgpa.$touched">
							      	<span ng-show="form.d2d_cgpa.$error.required">Diploma CGPA  is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Year of Admission</label>
						      <select name="year_of_admission"  
						      		  class="form-control"
						      		  ng-model="user.year_of_admission"
						      		  ng-required="true"
						      >
						      	<option value="2013">2013</option>
						      	<option value="2014">2014</option>
						      	<option value="2015">2015</option>
						      	<option value="2016">2016</option>
						      	<option value="2017">2017</option>
						      	
						      </select>
						      <span class="error" ng-show="form.year_of_admission.$invalid && form.year_of_admission.$touched">
							      	<span ng-show="form.year_of_admission.$error.required">Year Of Admission is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">Are You D2D Student</label>
						      <div class="radio">
								  <label><input type="radio" name="d2d" value="yes" checked checked>Yes</label>
								  <label><input type="radio" name="d2d" value="no">No</label>
								</div>
						    
						 </div>
						 
						 <div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Branch</label>
						      <select name="branch"  
						      		  class="form-control"
						      		  ng-model="user.branch"
						      		  ng-required="true"
						      >
						      	<option value="ce">ce</option>
						      	<option value="it">it</option>
						      	
						      </select>
						      <span class="error" ng-show="form.branch.$invalid && form.branch.$touched">
							      	<span ng-show="form.branch.$error.required">Branch  is Required..!</span>
							   </span>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Division</label>
						      <select name="division"  
						      		  class="form-control"
						      		  ng-model="user.division"
						      		  ng-required="true"
						      >
						      	<option value="A">A</option>
						      	<option value="B">B</option>
						      	
						      	
						      </select>
						      <span class="error" ng-show="form.division.$invalid && form.division.$touched">
							      	<span ng-show="form.division.$error.required">Division  is Required..!</span>
							   </span>
						    </div>
						    
						    <div class="form-group col-md-4">
						      <label for="inputEmail4" class="col-form-label">Semester</label>
						      <select name="sem"  
						      		  class="form-control"
						      		  ng-model="user.sem"
						      		  ng-required="true"
						      >
						      	<option value="1">1</option>
						      	<option value="2">2</option>
						      	<option value="3">3</option>
						      	<option value="4">4</option>
						      	<option value="5">5</option>
						      	<option value="6">6</option>
						      	<option value="7">7</option>
						      	<option value="8">8</option>
						      	
						      </select>
						      <span class="error" ng-show="form.sem.$invalid && form.sem.$touched">
							      	<span ng-show="form.sem.$error.required">Semester  is Required..!</span>
							   </span>
						    </div>
						    
						    
						 </div>
					
						 <div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">SPI</label>
						      <input type="number" 
						      		 name="sem1" 
						      		 class="form-control"  
						      		 placeholder="Sem-1" 
						      		 
						      >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="number" name="sem2"  class="form-control"  placeholder="Sem-2">
						    </div>
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp </label>
						      <input type="number" name="sem3"  class="form-control"   placeholder="Sem-3">
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp  </label>
						      <input type="number" name="sem4"  class="form-control"  placeholder="Sem-4" >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="number" name="sem5"  class="form-control"  placeholder="Sem-5">
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp</label>
						      <input type="number" name="sem6"  class="form-control"  placeholder="Sem-6" >
						    </div>
						    
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp </label>
						      <input type="number" name="sem7"  class="form-control"  placeholder="Sem-7" >
						    </div>
						    <div class="form-group col-md-3">
						      <label for="inputEmail4" class="col-form-label">&nbsp  </label>
						      <input type="number" name="sem8"  class="form-control"  placeholder="Sem-8" >
						    </div>
						    
						 </div>
						 <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">CPI</label>
						      <input type="number"  name="cpi" class="form-control"  >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4" class="col-form-label">CGPA</label>
						      <input type="number"  name="cgpa" class="form-control"  >
						    </div>
						    
						    
						    
						 </div>
						 <div class="form-row">
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">TFWS</label>
						      	<div class="radio">
								  <label><input type="radio" name="tfws" value="yes" checked>Yes</label>
								  <label><input type="radio" name="tfws" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Commuting</label>
						      	<div class="radio">
								  <label><input type="radio" name="commuting" value="yes" checked>Yes</label>
								  <label><input type="radio" name="commuting" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Hosteler</label>
						      	<div class="radio">
								  <label><input type="radio" name="hosteler" value="yes" checked>Yes</label>
								  <label><input type="radio" name="hosteler" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Are You J&K Student</label>
						      	<div class="radio">
								  <label><input type="radio" name="jnk" value="yes" checked>Yes</label>
								  <label><input type="radio" name="jnk" value="no">No</label>
								</div>
						 	</div>
						 	
						 </div>
						 <div class="form-row">
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Are You NSS Student</label>
						      	<div class="radio">
								  <label><input type="radio" name="nss" value="yes" checked>Yes</label>
								  <label><input type="radio" name="nss" value="no">No</label>
								</div>
						 	</div>
						 	<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Are You NCC Student</label>
						      	<div class="radio">
								  <label><input type="radio" name="ncc" value="yes" checked>Yes</label>
								  <label><input type="radio" name="ncc" value="no">No</label>
								</div>
						 	</div>
						 	
						 	
						 </div>




							<div class="form-group col-md-12">						  
							  <button 	type="button" 
							  			id="btn4" 
							  			class="btn btn-primary "
							  			ng-disabled="!isValid(3)"
							  >Next</button>
							</div>

					</div>
				</div>
				<!-- Bank Details -->
				<div id="d5">
					<h2>Bank Detail</h2>

						<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputEmail4" class="col-form-label">Account Number</label>
							<input 	type="number" 
									class="form-control" 
									name="account_num"
									ng-model="user.account_num"
									ng-required="true"
									ng-minlength="9"
									ng-maxlength="18"
							>
							<span class="error" ng-show="form.account_num.$invalid && form.account_num.$touched">
							      	<span ng-show="form.account_num.$error.required">Account Number  is Required..!</span>
							      	<span ng-show="form.account_num.$error.minlength">Account Number  is Sort..!</span>
							      	<span ng-show="form.account_num.$error.maxlength">Account Number  is Long..!</span>
							 </span>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							<label for="inputEmail4" class="col-form-label">IFSC Code</label>
							<input 	type="text" 
									class="form-control" 
									name="ifsc"
									ng-model="user.ifsc"
									ng-required="true"
							>
							<span class="error" ng-show="form.ifsc.$invalid && form.ifsc.$touched">
							      	<span ng-show="form.ifsc.$error.required">IFSC Code  is Required..!</span>
							 </span>	
							</div>
							<div class="form-group col-md-4">
							<label for="inputEmail4" class="col-form-label">Bank Name</label>
							<input 	type="text" 
									class="form-control" 
									name="bank_name"
									ng-model="user.bank_name"
									ng-required="true"
							>
							<span class="error" ng-show="form.bank_name.$invalid && form.bank_name.$touched">
							      	<span ng-show="form.bank_name.$error.required">Bank Name  is Required..!</span>
							 </span>
								
							</div>
							<div class="form-group col-md-4">
							<label for="inputEmail4" class="col-form-label">Bank Branch</label>
							<input 	type="text" 
									class="form-control" 
									name="bank_branch"
									ng-model="user.bank_branch"
									ng-required="true"
							>
							<span class="error" ng-show="form.bank_branch.$invalid && form.bank_branch.$touched">
							      	<span ng-show="form.bank_branch.$error.required">Bank Branch  is Required..!</span>
							 </span>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Adhar Card Number</label>
							<input 	type="number" 
									class="form-control" 
									name="adhar_num"
									ng-model="user.adhar_num"
									ng-required="true"
									ng-minlength="12"
									ng-maxlength="12"
							>
							<span class="error" ng-show="form.adhar_num.$invalid && form.adhar_num.$touched">
							      	<span ng-show="form.adhar_num.$error.required">Adhar Card  Number  is Required..!</span>
							      	<span ng-show="form.adhar_num.$error.minlength">Adhar Card  Number  Must be 12 Digit..!</span>
							      	<span ng-show="form.adhar_num.$error.maxlength">Adhar Card  Number  Must be 12 Digit..!</span>
							 </span>	
							</div>
							<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Election Card Number</label>
							<input 	type="text" 
									class="form-control" 
									name="election_num"
									ng-model="user.election_num"
									ng-required="true"
							>
							<span class="error" ng-show="form.election_num.$invalid && form.election_num.$touched">
							      	<span ng-show="form.election_num.$error.required">Election Number  is Required..!</span>
							 </span>
							</div>
							
						</div>
						<div class="form-group col-md-3">
						 		<label for="inputEmail4" class="col-form-label">Is You Bank AC Seeded With Adhar</label>
						      	<div class="radio">
								  <label><input type="radio" name="seeded" value="yes" checked>Yes</label>
								  <label><input type="radio" name="seeded" value="yeshi">No</label>
								</div>
						 </div>

						 <div class="form-group col-md-12">						  
							  <button type="submit"
							  		  id="btn4" 
							  		  class="btn btn-primary"
							  		  ng-disabled="!isValid(4)"
							  >Submit</button>
						</div>
					
				</div>
			
				 
				</form>
			
	
		
	</div>
	
</div>
</body>
</html>