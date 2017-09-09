<!DOCTYPE html>
<html >
<head>
	<title></title>
	<script src="./js/angular.min.js"></script>
	<script src="./js/myApp.js"></script>
	
	<style type="text/css">
nav{
	margin-top: 0px;
	}
	.templatemo-create-account{
							    background-color: #fff;
					    		border: none;
					    		max-width: 850px;
					    		max-height: 1190px;
					    		text-align: left;
						}
	.templatemo-container{
							    border-radius: 8px;
					   			 margin: 0 auto;
					    		padding: 30px;
						}
	</style>
</head>
<body style="background-color: #eee;">
<?php  require './master/header.php'; ?>
  <?php  require './master/nav.php'; ?>
<div class="jumbotron" >

		<form  class="form-horizontal templatemo-create-account templatemo-container"  role="form" action="#" method="post" enctype="multipart/form-data">
				
				
		<div   class="form-inner">

				<!-- Personal Details         -->
				<div class="step1" >
				<h3>Personal Detail</h3>
							<div class="form-group">

					          <div class="col-md-4">		          	
					            <label  class="control-label" >First Name <font style="color:red;">*</font> </label>
					            <input type="text" class="form-control" name="first_name" value="<?php if(!empty($first_name)){echo $first_name;}  ?>"  id="fname" required>		            		            		            
					          </div>  
					          <div class="col-md-4">		          	
					            <label  class="control-label" >Middle Name</label>
					            <input type="text" class="form-control" name="middle_name" value="<?php if(!empty($middle_name)){echo $middle_name;}  ?>" id="mname" required>		            		            		            
					          </div>  
					          <div class="col-md-4">		          	
					            <label  class="control-label" >Last Name</label>
					            <input type="text" class="form-control" name="last_name" value="<?php if(!empty($last_name)){echo $last_name;}  ?>" id="lname" required  >		            		            		            
					          </div>             
					        </div>
					        <div class="form-group">
					          <div class="col-md-6">		          	
					            <label  class="control-label" >Father Name <font style="color:red;">*</font> </label>
					            <input type="text" class="form-control" name="first_name" value="<?php if(!empty($first_name)){echo $first_name;}  ?>"  id="fname" required>		            		            		            
					          </div>  
					          <div class="col-md-6">		          	
					            <label  class="control-label" >Mother Name</label>
					            <input type="text" class="form-control" name="middle_name" value="<?php if(!empty($middle_name)){echo $middle_name;}  ?>" id="mname" required>		            		            		            
					          </div>  
					                      
					        </div>
					        <div class="form-group">
					          <div class="col-md-6">		          	
					            <label  class="control-label" >Father profetion <font style="color:red;">*</font> </label>
					            <input type="text" class="form-control" name="first_name" value="<?php if(!empty($first_name)){echo $first_name;}  ?>"  id="fname" required>		            		            		            
					          </div>  
					          <div class="col-md-6">		          	
					            <label  class="control-label" >Mother Profetion</label>
					            <input type="text" class="form-control" name="middle_name" value="<?php if(!empty($middle_name)){echo $middle_name;}  ?>" id="mname" required>		            		            		            
					          </div>  
					                      
					        </div>
					        		
					        
					                     
					        

					         <div class="form-group">
					         	<div class="col-md-3">		          	
					            <label  class="control-label">Date of Birth</label>
					            <input type="date" class="form-control" placeholder=""  id="dob" name="date_of_birth" value="<?php if(!empty($date_of_birth)){echo $date_of_birth;}  ?>" required>		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">Blood Group  </label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" required>
								  <option value="A+">A+</option>
								  <option value="A-">A-</option>
								</select>          		            		            
					          </div>  
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Gender </label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Male
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> Female
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">Catogory </label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" required>
								  <option value="SEBC">SEBC</option>
								  <option value="SC">SC</option>
								  <option value="OPEN">OPEN</option>
								  <option value="ST">ST</option>
								</select>          		            		            
					          </div>    
					                     
					        </div>

					        <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-danger">Next</button>

					          </div>  
					           
					                      
					        </div>
			      </div>

			      <!--  END Personal Details         -->

			      <!-- Contact Details         -->
			      <div class="step2">
				  <h3>Contact Detail</h3>
					      <div class="form-group">
					          <div class="col-md-6">		          	
					            <label  class="control-label">Contact Number</label>
					            <input type="number" maxlength="10" class="form-control" name="contact_number" id="con"s value="<?php if(!empty($contact_number)){echo $contact_number;}  ?>" required>		            		            		            
					          </div>
					          <div class="col-md-6">		          	
					            <label  class="control-label">Contact Number(Optional)</label>
					            <input type="number" maxlength="10" class="form-control" name="contact_number_optional" id="con_op" value="<?php if(!empty($contact_number_optional)){echo $contact_number_optional;}  ?>" required>		            		            		            
					          </div>               
					        </div>	

					        <div class="form-group">
					          <div class="col-md-12">		          	
					            <label  class="control-label">Email</label>
					            <input type="email" class="form-control" name="email" id="email" value="<?php if(!empty($email)){echo $email;}  ?>" required>		            		            		            
					          </div>              
					        </div>	


					        <div class="form-group">
					          <div class="col-md-12">		          	
					            <label  class="control-label">Address</label>
					            <input type="text" class="form-control" name="street"  id="street" placeholder="Street"  value="<?php if(!empty($street)){echo $street;}  ?>" required>		            		            		            
					          </div>  
					          
					                     
					        </div>

					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label"></label>
					            <input type="text" class="form-control" name="city" placeholder="city" id="city" value="<?php if(!empty($city)){echo $city;}  ?>" required>		            		            		            
					          	</div>  

					          <div class="col-md-4">		          	
					            <label  class="control-label"></label>
					            <input type="text" class="form-control" name="state" placeholder="State" id="state" value="<?php if(!empty($state)){echo $state;}  ?>" required>		            		            		            
					          </div>  
					          <div class="col-md-4">		          	
					            <label  class="control-label"></label>
					            <input type="text" class="form-control" name="pincode" placeholder="pin code" id="pincode" value="<?php if(!empty($pincode)){echo $pincode;}  ?>" required>		            		            		            
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-danger">Next</button>

					          </div>  
					           
					                      
					        </div>
					 </div>
			        <!--    End Contact Detail     -->

			        <!--    Edjucation Detail     -->
			        <div class="step3">
					<h3>Edjucation Detail</h3>
					        <div class="form-group">
					          <div class="col-md-3">
					            <label for="password" class="control-label">SSC</label>
					            <input type="text" class="form-control" id="cpi"  name="cpi" value="<?php if(!empty($cpi)){ echo $cpi;}  ?>" required>
					          </div>
					          <div class="col-md-3">
					            <label for="password" class="control-label">HSC</label>
					            <input type="text" class="form-control" id="cgpa"  name="cgpa" value="<?php if(!empty($cgpa)){echo $cgpa;}  ?>" required>
					          </div>
					          <div class="col-md-3">
					            <label for="password" class="control-label">Gujcet Percentage</label>
					            <input type="text" class="form-control" id="tb"  name="total_block" value="<?php  if(!empty($total_block)){echo $total_block;}  ?>" required> 
					          </div>
					          <div class="col-md-3">
					            <label for="password" class="control-label">Gujcate Merid Rank</label>
					            <input type="text" class="form-control" id="cb"  name="current_block" value="<?php if(!empty($current_block)){echo $current_block;}  ?>" required>
					          </div>
					        </div>

					        <div class="form-group">
					          <div class="col-md-3">
					            <label for="password" class="control-label">ACPC Merid Rank</label>
					            <input type="text" class="form-control" id="cpi"  name="cpi" value="<?php if(!empty($cpi)){ echo $cpi;}  ?>" required>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You D2D Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>
					          
					          <div class="col-md-3">
					            <label for="password" class="control-label">Diploma CGPA</label>
					            <input type="text" class="form-control" id="tb"  name="total_block" value="<?php  if(!empty($total_block)){echo $total_block;}  ?>" required> 
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">Year Of Admissiopn </label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" required>
								  <option value="SEBC">2014</option>
								  <option value="SC">2015</option>
								  <option value="OPEN">2016</option>
								  <option value="ST">2017</option>
								</select>          		            		            
					          </div> 
					        </div>
					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label">Branch</label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" required>
								  <option value="SEBC">CE</option>
								  <option value="SC">IT</option>
								  
								</select>          		            		            
					          </div>
					          <div class="col-md-4">		          	
					            <label  class="control-label">Divition</label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" required>
								  <option value="SEBC">A</option>
								  <option value="SC">B</option>
								  
								</select>          		            		            
					          </div>
					          <div class="col-md-4">		          	
					            <label  class="control-label">Current Sem</label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" required>
								  <option value="SEBC">1</option>
								  <option value="SC">2</option>
								  <option value="OPEN">3</option>
								  <option value="ST">4</option>
								  <option value="OPEN">5</option>
								  <option value="ST">6</option>
								  <option value="OPEN">7</option>
								  <option value="ST">8</option>
								</select>          		            		            
					          </div>
					                     
					        </div>
					        <div class="form-group">
					         	<div class="col-md-3">		          	
					            <label  class="control-label">SPI </label>
					            <input type="text" class="form-control" name="sem1" id="s1" placeholder="sem-1"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem2" id="s2" placeholder="Sem-2"  value="<?php if(!empty($sem2)){echo $sem2;}  ?>" required>		            		            		            
					          </div>  
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem3" id="s3" placeholder="sem-3" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" required>		            		            		            
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem3" id="s3" placeholder="sem-4" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" required>		            		            		            
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					         	<div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="sem-1"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem6" id="s2" placeholder="Sem-2"  value="<?php if(!empty($sem2)){echo $sem2;}  ?>" required>		            		            		            
					          </div>  
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem7" id="s3" placeholder="sem-3" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" required>		            		            		            
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem8" id="s3" placeholder="sem-4" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" required>		            		            		            
					          </div>  
					                     
					        </div>

					        <div class="form-group">
					         	<div class="col-md-3">		          	
					            <label  class="control-label">CPI</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="sem-1"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">CGPA</label>
					            <input type="text" class="form-control" name="sem6" id="s2" placeholder="Sem-2"  value="<?php if(!empty($sem2)){echo $sem2;}  ?>" required>		            		            		            
					          </div>  
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">TFWS</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Commuting</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					         	<div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Hosteler</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You J&K Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>	  

					           
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You NSS Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You NCC Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-danger">Next</button>

					          </div>  
					          </div>
					    </div>
			          <!--   End Edjucation Details   -->
			          <!--   Bank Details   -->
			          <div class="step4">
						<h3>Bank Detail</h3>

					          <div class="form-group">
					         	<div class="col-md-12">		          	
					            <label  class="control-label">Bank Account Number</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					         </div>
					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label">ISCF Code</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">Bank Name</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">Bank branch</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					         </div>
					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label">Bank Address</label>
					            <input type="text" class="form-control" name="" id="s1" placeholder="street"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">&nbsp</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="city"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">&nbsp</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="State"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					         </div>
					         <div class="form-group">
					         	<div class="col-md-6">		          	
					            <label  class="control-label">Adhar Card Number</label>
					            <input type="text" class="form-control" name="" id="s1" placeholder="street"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					          	<div class="col-md-6">		          	
					            <label  class="control-label">Election card Number</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="city"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
					          	</div>  
					          	 
					         </div>
					         
					         <div class="form-group">

					           	<div class="col-md-12 templatemo-radio-group" >
					          	<label  class="control-label">Is  Your AC Seeded With Adhar</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" required> Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" required> No
				          		</label>
				          		</div>
					          </div>  
					          
					         </div> 
					          <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-danger">Next</button>

					          </div>  
					          </div>
					     </div>

			          <!--   End Bank Detail  -->    
			          <!--  Credition  --> 
			          <div class="step5">

			          <div class="form-group">
			         	<div class="col-md-12">		          	
			            <label  class="control-label">Enrollment</label>
			            <input type="text" class="form-control" name="" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
			          	</div>  
			          	 
			          	 
			         </div>  



			          <div class="form-group">
			         	<div class="col-md-6">		          	
			            <label  class="control-label">Password</label>
			            <input type="text" class="form-control" name="" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
			          	</div>  
			          	<div class="col-md-6">		          	
			            <label  class="control-label">Confirm Password</label>
			            <input type="text" class="form-control" name="sem5" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" required>		            		            		            
			          	</div>  
			          	 
			         </div> 
			         <div class="form-group">
			          <div class="col-md-6">		          	
			            
			            <button class="btn btn-danger">Submit</button>

			          </div>  
			          </div>
     

			          </div>
			          <!--  end  -->
			        


			    </div>

		      </form>
	

</div>

</body>
</html>