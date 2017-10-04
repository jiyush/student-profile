<!DOCTYPE html>
<html  ng-app="myApp">
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
	<script src="./js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/sy.css">
	
</head>
<body style="background-color: #eee;">
<?php  require './master/header.php'; ?>
<?php  require './master/nav.php'; ?>

<div class="jumbotron" >

		<form ng-controller="FormController as vmForm" class="form-horizontal templatemo-create-account templatemo-container"  role="form" action="res.php" method="post" enctype="multipart/form-data">
				
				
		<div  ng-switch="vmForm.step"  class="form-inner">

				<!-- Personal Details         -->
				<div class="stepone" ng-switch-when="one">
				<h3>Credentials</h3>
						<div class="form-group">
					         	<div class="col-md-12">		          	
					            <label  class="control-label">Enrollment</label>
					            <input type="text" class="form-control" name="enrollment" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	 
					          	 
					        </div>  



					        <div class="form-group">
					         	<div class="col-md-6">		          	
					            <label  class="control-label">Password</label>
					            <input type="text" class="form-control" name="password" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	<div class="col-md-6">		          	
					            <label  class="control-label">Confirm Password</label>
					            <input type="text" class="form-control" name="con_pass" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					        </div>   	 
					        
						    <div class="form-group">
						          	<div class="col-md-6">		          	
					            
					            	<button class="btn btn-primary" ng-click="vmForm.stepTwo()">next</button>
					            	</div>  
					         </div>
					            
					           
					                      
					        
			      </div>

			      <!--  end crtedetials Details         -->

			      <!-- Contact Details         -->
			      <div class="steptwo" ng-switch-when="two">
			      	<h3>Personal Detail</h3>
			          	<div class="form-group">
					        <div class="col-md-4">		          	
					            <label  class="control-label" >First Name <font style="color:red;">*</font> </label>
					            <input type="text" class="form-control" name="first_name" value="<?php if(!empty($first_name)){echo $first_name;}  ?>"  id="fname">		            		            		            
					        </div>  
					       	<div class="col-md-4">		          	
					            <label  class="control-label" >Middle Name</label>
					            <input type="text" class="form-control" name="middle_name" value="<?php if(!empty($middle_name)){echo $middle_name;}  ?>" id="mname" >		            		            		            
					        </div>  
					        <div class="col-md-4">		          	
					            <label  class="control-label" >Last Name</label>
					            <input type="text" class="form-control" name="last_name" value="<?php if(!empty($last_name)){echo $last_name;}  ?>" id="lname"   >		            		            		            
					        </div>             
					    </div>
					    <div class="form-group">
					        <div class="col-md-6">		          	
					            <label  class="control-label" >Father Name <font style="color:red;">*</font> </label>
					            <input type="text" class="form-control" name="father_name" value="<?php if(!empty($first_name)){echo $first_name;}  ?>"  id="fname" >		            		            		            
					        </div>  
					        <div class="col-md-6">		          	
					            <label  class="control-label" >Mother Name</label>
					            <input type="text" class="form-control" name="mother_name" value="<?php if(!empty($middle_name)){echo $middle_name;}  ?>" id="mname" >		            		            		            
					        </div>  
					    </div>              
					        

					    <div class="form-group">
					        <div class="col-md-6">		          	
					            <label  class="control-label" >Father profession <font style="color:red;">*</font> </label>
					            <input type="text" class="form-control" name="f_profession" value="<?php if(!empty($first_name)){echo $first_name;}  ?>"  id="fname" >		            		            		            
					        </div>  
					        <div class="col-md-6">		          	
					            <label  class="control-label" >Mother profession</label>
					            <input type="text" class="form-control" name="m_profession" value="<?php if(!empty($middle_name)){echo $middle_name;}  ?>" id="mname" >		            		            		            
					        </div>  
					    </div>              
					        
					        		
					        
					                     
					        

					    
					    <div class="form-group">
					        <div class="col-md-6">		          	
					            <label  class="control-label">Date of Birth</label>
					            <input type="date" class="form-control" placeholder=""  id="dob" name="dob" value="<?php if(!empty($date_of_birth)){echo $date_of_birth;}  ?>" >		            		            		            
					        </div>  

					        <div class="col-md-6">		          	
					            <label  class="control-label">Blood Group  </label>
					             <select class="form-control" name="blood_group" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" >
								  <option value="A+">A+</option>
								  <option value="A-">A-</option>
								</select>          		            		            
					        </div> 
					        <div class="col-md-6">		          	
					            <label  class="control-label">Catogory </label>
					             <select class="form-control" name="catogory" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" >
								  <option value="SEBC">SEBC</option>
								  <option value="SC">SC</option>
								  <option value="OPEN">OPEN</option>
								  <option value="ST">ST</option>
								</select>          		            		            
					        </div> 
					        <div class="col-md-6 templatemo-radio-group" >
					          	<label  class="control-label">Gender </label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen1"  value="Male" > Male
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="gender" id="gen2"   value="Female" > Female
				          		</label>
				          		</div>
					        </div>

					            
					                     
					    </div>
					    <div class="form-group">
					    	<div class="col-md-6">
					          <label for="password" class="control-label">Upload Photo</label>
								<label class="btn btn-default btn-file">
		   						 Browse <input type="file"   id="photo" required>
								</label>
							</div>
					    </div>

					    <div class="form-group">
					        <div class="col-md-6">		          	
					            <button class="btn btn-primary" ng-click="vmForm.stepThree()" >Next</button>
					        </div> 
					    </div>
				  
					 </div>
			        <!--    End Contact Detail     -->

			        <!--    Edjucation Detail     -->
			        <div class="stepthree" ng-switch-when="three">
			        	<h3>Contact Detail</h3>
					      <div class="form-group">
					          <div class="col-md-6">		          	
					            <label  class="control-label">Contact Number</label>
					            <input type="number" maxlength="10" class="form-control" name="contact_number" id="con"s value="<?php if(!empty($contact_number)){echo $contact_number;}  ?>" >		            		            		            
					          </div>
					          <div class="col-md-6">		          	
					            <label  class="control-label">Contact Number(Optional)</label>
					            <input type="number" maxlength="10" class="form-control" name="contact_number_opt" id="con_op" value="<?php if(!empty($contact_number_optional)){echo $contact_number_optional;}  ?>" >		            		            		            
					          </div>               
					        </div>	

					        <div class="form-group">
					          <div class="col-md-12">		          	
					            <label  class="control-label">Email</label>
					            <input type="email" class="form-control" name="email" id="email" value="<?php if(!empty($email)){echo $email;}  ?>" >		            		            		            
					          </div>              
					        </div>	


					        <div class="form-group">
					          <div class="col-md-12">		          	
					            <label  class="control-label">Address</label>
					            <input type="text" class="form-control" name="street"  id="street" placeholder="Street"  value="<?php if(!empty($street)){echo $street;}  ?>" >		            		            		            
					          </div>  
					          
					                     
					        </div>

					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label"></label>
					            <input type="text" class="form-control" name="city" placeholder="city" id="city" value="<?php if(!empty($city)){echo $city;}  ?>" >		            		            		            
					          	</div>  

					          <div class="col-md-4">		          	
					            <label  class="control-label"></label>
					            <input type="text" class="form-control" name="state" placeholder="State" id="state" value="<?php if(!empty($state)){echo $state;}  ?>" >		            		            		            
					          </div>  
					          <div class="col-md-4">		          	
					            <label  class="control-label"></label>
					            <input type="text" class="form-control" name="pincode" placeholder="pin code" id="pincode" value="<?php if(!empty($pincode)){echo $pincode;}  ?>" >		            		            		            
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-primary" ng-click="vmForm.stepFour()">Next</button>

					          </div>  
					           
					                      
					        </div>
					
					    </div>
			          <!--   End Edjucation Details   -->
			          <!--   Bank Details   -->
			          <div class="stepfour" ng-switch-when="four">
			          	<h3>Edjucation Detail</h3>
					        <div class="form-group">
					          <div class="col-md-3">
					            <label for="password" class="control-label">SSC</label>
					            <input type="text" class="form-control" id="cpi"  name="ssc" value="<?php if(!empty($cpi)){ echo $cpi;}  ?>" >
					          </div>
					          <div class="col-md-3">
					            <label for="password" class="control-label">HSC</label>
					            <input type="text" class="form-control" id="cgpa"  name="hsc" value="<?php if(!empty($cgpa)){echo $cgpa;}  ?>" >
					          </div>
					          <div class="col-md-3">
					            <label for="password" class="control-label">Gujcet Percentage</label>
					            <input type="text" class="form-control" id="tb"  name="guj_per" value="<?php  if(!empty($total_block)){echo $total_block;}  ?>" > 
					          </div>
					          <div class="col-md-3">
					            <label for="password" class="control-label">Gujcate Merit Rank</label>
					            <input type="text" class="form-control" id="cb"  name="guj_mr" value="<?php if(!empty($current_block)){echo $current_block;}  ?>" >
					          </div>
					        </div>

					        <div class="form-group">
					          <div class="col-md-3">
					            <label for="password" class="control-label">ACPC Merit Rank</label>
					            <input type="text" class="form-control" id="cpi"  name="acpc_mr" value="<?php if(!empty($cpi)){ echo $cpi;}  ?>" >
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You D2D Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="d2d" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="d2d" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>
					          
					          <div class="col-md-3">
					            <label for="password" class="control-label">Diploma CGPA</label>
					            <input type="text" class="form-control" id="tb"  name="diploma_cgpa" value="<?php  if(!empty($total_block)){echo $total_block;}  ?>" > 
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">Year Of Admission </label>
					             <select class="form-control" name="year_of_admission" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" >
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
					             <select class="form-control" name="branch" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" >
								  <option value="SEBC">CE</option>
								  <option value="SC">IT</option>
								  
								</select>          		            		            
					          </div>
					          <div class="col-md-4">		          	
					            <label  class="control-label">Division</label>
					             <select class="form-control" name="division" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" >
								  <option value="SEBC">A</option>
								  <option value="SC">B</option>
								  
								</select>          		            		            
					          </div>
					          <div class="col-md-4">		          	
					            <label  class="control-label">Current Sem</label>
					             <select class="form-control" name="current_sem" value="<?php if(!empty($blood_group)){echo $blood_group;}  ?>" id="bg" >
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
					            <input type="text" class="form-control" name="sem1" id="s1" placeholder="sem-1"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem2" id="s2" placeholder="Sem-2"  value="<?php if(!empty($sem2)){echo $sem2;}  ?>" >		            		            		            
					          </div>  
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem3" id="s3" placeholder="sem-3" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" >		            		            		            
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem4" id="s3" placeholder="sem-4" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" >		            		            		            
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					         	<div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="sem-5"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem6" id="s2" placeholder="Sem-6"  value="<?php if(!empty($sem2)){echo $sem2;}  ?>" >		            		            		            
					          </div>  
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem7" id="s3" placeholder="sem-7" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" >		            		            		            
					          </div>
					          <div class="col-md-3">		          	
					            <label  class="control-label">&nbsp </label>
					            <input type="text" class="form-control" name="sem8" id="s3" placeholder="sem-8" value="<?php  if(!empty($sem3)){echo $sem3;}  ?>" >		            		            		            
					          </div>  
					                     
					        </div>

					        <div class="form-group">
					         	<div class="col-md-3">		          	
					            <label  class="control-label">CPI</label>
					            <input type="text" class="form-control" name="cpi" id="s1" placeholder="sem-1"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  

					          <div class="col-md-3">		          	
					            <label  class="control-label">CGPA</label>
					            <input type="text" class="form-control" name="cgpa" id="s2" placeholder="Sem-2"  value="<?php if(!empty($sem2)){echo $sem2;}  ?>" >		            		            		            
					          </div>  
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">TFWS</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="tfws" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="tfws" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Commuting</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="cummuting" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="cummuting" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					         	<div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Hosteler</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="hosteler" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="hosteler" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You J&K Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="jk" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="jk" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>	  

					           
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You NSS Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="nss" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="nss" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>
					          <div class="col-md-3 templatemo-radio-group" >
					          	<label  class="control-label">Are You NCC Student</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="ncc" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="ncc" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>  
					                     
					        </div>
					        <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-primary" ng-click="vmForm.stepFive()">Next</button>

					          </div>  
					          </div>
						
					     </div>

			          <!--   End Bank Detail  -->    
			          <!--  Credition  --> 
			          <div class="stepfive" ng-switch-when="five">
			          	<h3>Bank Detail</h3>

					          <div class="form-group">
					         	<div class="col-md-12">		          	
					            <label  class="control-label">Bank Account Number</label>
					            <input type="text" class="form-control" name="account_num" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					         </div>
					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label">IFSC Code</label>
					            <input type="text" class="form-control" name="ifsc" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">Bank Name</label>
					            <input type="text" class="form-control" name="bank_name" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">Bank branch</label>
					            <input type="text" class="form-control" name="bank_branch" id="s1" placeholder=""  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					         </div>
					         <div class="form-group">
					         	<div class="col-md-4">		          	
					            <label  class="control-label">Bank Address</label>
					            <input type="text" class="form-control" name="bank_Street" id="s1" placeholder="street"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">&nbsp</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="bank_city"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	<div class="col-md-4">		          	
					            <label  class="control-label">&nbsp</label>
					            <input type="text" class="form-control" name="sem5" id="s1" placeholder="bank_State"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					         </div>
					         <div class="form-group">
					         	<div class="col-md-6">		          	
					            <label  class="control-label">Adhar Card Number</label>
					            <input type="text" class="form-control" name="adhar_num" id="s1" placeholder="street"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	<div class="col-md-6">		          	
					            <label  class="control-label">Election card Number</label>
					            <input type="text" class="form-control" name="Election_num" id="s1" placeholder="city"  value="<?php if(!empty($sem1)){echo $sem1;}  ?>" >		            		            		            
					          	</div>  
					          	 
					         </div>
					         
					         <div class="form-group">

					           	<div class="col-md-12 templatemo-radio-group" >
					          	<label  class="control-label">Is  Your AC Seeded With Adhar</label>
					          	<div class="gen">
					          	<label class="radio-inline" >
				          			<input type="radio" name="ac_seed_adhar" id="gen1"  value="Male" > Yes
				          		</label>
				          		<label class="radio-inline" >
				          			<input type="radio" name="ac_seed_adhar" id="gen2"   value="Female" > No
				          		</label>
				          		</div>
					          </div>  
					          
					         </div> 
					          <div class="form-group">
					          <div class="col-md-6">		          	
					            
					            <button class="btn btn-primary" ng-click="">Submit</button>

					          </div>  
					          </div>
     

			          </div>
			          <!--  end  -->
			        


	    </div>

      </form>
	

</div>

</body>
</html>