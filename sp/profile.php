<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require './master/header.php'; ?>
  	<link rel="stylesheet" type="text/css" href="./libs/css/materialize.min.css" />
   <script type="text/javascript" src="./libs/js/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="./libs/js/materialize.min.js"></script>
   <script type="text/javascript" src="./js/profile.js"></script>
          	
</head>
<body>
<?php 
	require 'connect.inc.php';
	require 'core.inc.php';
	require './master/profile-navbar.php';
	if (login()) {

		$father_name = getfield('father_name');
		$mother_name = getfield('mother_name');
		$f_profession = getfield('f_profession');
		$m_profession = getfield('m_profession');
		$dob = getfield('dob');
		$blood_group = getfield('blood_group');
		$catogory = getfield('catogory');
		$contact_num = getfield('contact_num');
		$email = getfield('email');
		$l_street = getfield('l_street');
		$l_city = getfield('l_city');
		$l_state = getfield('l_state');
		$l_pincode = getfield('l_pincode');
		$p_street = getfield('p_street');
		$p_city = getfield('p_city');
		$p_state = getfield('p_state');
		$p_pincode = getfield('p_pincode');
		$ssc = getfield('ssc');
		$hsc = getfield('hsc');
		$guj_per = getfield('guj_per');
		$guj_merit = getfield('guj_merit');
		$acpc_merit = getfield('acpc_merit');
		$d2d_cgpa = getfield('d2d_cgpa');
		$year_of_admission = getfield('year_of_admission');
		$d2d = getfield('d2d');
		$branch = getfield('branch');
		$division = getfield('division');
		$sem = getfield('sem');
		$sem1 = getfield('sem1');
		$sem2 = getfield('sem2');
		$sem3 = getfield('sem3');
		$sem4 = getfield('sem4');
		$sem5 = getfield('sem5');
		$sem6 = getfield('sem6');
		$sem7 = getfield('sem7');
		$sem8 = getfield('sem8');
		$cpi = getfield('cpi');
		$cgpa = getfield('cgpa');
		$tfws = getfield('tfws');
		$commuting = getfield('commuting');
		$hosteler = getfield('hosteler');
		$jnk = getfield('jnk');
		$nss = getfield('nss');
		$ncc = getfield('ncc');
		$account_num = getfield('account_num');
		$ifsc = getfield('ifsc');
		$bank_name = getfield('bank_name');
		$bank_branch = getfield('bank_branch');
		$adhar_num = getfield('adhar_num');
		$election_num = getfield('election_num');
		$seeded = getfield('seeded');
			
?>
<header style="margin-top:50px;">
	 <ul  class="side-nav fixed" id="nav-mobile" style="width:220px;margin-top:50px;" >
       


       <li class="bold "><a href="./profile.php" class="waves-effect waves-blue">Personal Details</a></li>
       <li class="bold"><a href="#p2" id="edu" class="waves-effect waves-blue">Education Details</a></li>
       <li class="bold"><a href="#p3" id="bank" class="waves-effect waves-blue">Bank Deatils</a></li>
       
       <li class="bold"><a href="logout.php" class="waves-effect waves-red">Sign out</a></li>
    
    </ul>

      <nav class="top-nav">
          <div class="container">
            <div class="nav-wrapper">
            <a class="page-title"></a>
              <a class="page-title">Profile Manager</a>  
            </div>
          </div>
          <a data-activates="nav-mobile" class="button-collapse hard top-nav full" style="margin-top:25px;"><i class="mdi-navigation-menu"></i></a>
        </nav>
</header> 
<main style="padding-left:90px;">
    
    <div class="container">
   <!-- <ul class="collapsible" data-collapsible="accordion"> -->
    	<!--  Personal Details    -->
   		<div id="p1">
   		<ul class="collapsible" data-collapsible="accordion">
   				<li>
			         <div class="collapsible-header"><i class=""></i>Name :
			          <?php 
			          		$fname = getfield('fname'); echo $fname."\t"; 
			          		$mname = getfield('mname'); echo $mname."\t"; 
			          		$lname = getfield('lname'); echo $lname."\t"; 
			          ?>  
			         </div> 
			        
			         <div class="collapsible-body">
				         <div class="row">
				    
					        <div class="input-field col s4 left50">
					         <i class="mdi-action-swap-vert prefix"></i>
					          <input id="first_name" type="text" value="" class="validate">
					          <label for="first_name">Change your First Name</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="middle_name" type="text" value="" class="validate">
					          <label for="last_name">Change your Middle Name</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="last_name" type="text" value="" class="validate">
					          <label for="last_name">Change your Last Name</label>
					        </div>
					     
					        <button class="waves-effect waves-light btn left50 changeUserProfileData" onclick="changeName()" id="nameChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				        
				     	 </div>
			    	</div>
       			</li>
   				<li>
         			<div class="collapsible-header"><i class=""></i>Enrollment : <?php $en = getfield('enrollment'); echo $en; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Change Password  </div>
         			<div class="collapsible-body">
				         <div class="input-field col s6">
				              <i class=" prefix"></i>
				              <input id="icon_prefix_Email" type="email" value="" class="validate w-500">
				              <label for="icon_prefix_Email">Change Your Password</label>
				          </div>
				          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
				           <i class="mdi-editor-merge-type right"></i>Change it
				        </button>
				    </div>
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Father Name : <?php echo $father_name; ?>  </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Mother Name : <?php echo $mother_name; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Father Profession : <?php echo $f_profession; ?>  </div>
         			<div class="collapsible-body">
				         <div class="input-field col s6">
				              <i class=" prefix"></i>
				              <input id="icon_prefix_Email" type="email" value="" class="validate w-500">
				              <label for="icon_prefix_Email">Change Father Profession</label>
				          </div>
				          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
				           <i class="mdi-editor-merge-type right"></i>Change it
				        </button>
				    </div>
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Mother Profession : <?php echo $m_profession; ?> </div>
         			<div class="collapsible-body">
				         <div class="input-field col s6">
				              <i class=" prefix"></i>
				              <input id="icon_prefix_Email" type="email" value="" class="validate w-500">
				              <label for="icon_prefix_Email">Change Mother Profession</label>
				          </div>
				          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
				           <i class="mdi-editor-merge-type right"></i>Change it
				        </button>
				    </div>
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Date of Birht : <?php echo $dob; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Blood Group : <?php echo $blood_group; ?>  </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Catogory : <?php echo $catogory; ?> </div>
         
       			</li>
       			<li>
			         <div class="collapsible-header"><i class=""></i>Email : <?php echo $email; ?> </div>
				         <div class="collapsible-body">
				         <div class="input-field col s6">
				              <i class=" prefix"></i>
				              <input id="icon_prefix_Email" type="email" value="" class="validate w-500">
				              <label for="icon_prefix_Email">Change your Email address</label>
				          </div>
				          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
				           <i class="mdi-editor-merge-type right"></i>Change it
				        </button>
			      	</div>
		       </li>
		       <li>
			         <div class="collapsible-header"><i class=""></i>Local Address : <?php 

			         		echo $l_street."\t".$l_city."\t".$l_state."\t".$l_pincode;

			          ?>  </div> 
			        
			         <div class="collapsible-body">
				         <div class="row">
				    
					        <div class="input-field col s4 left50">
					         <i class="mdi-action-swap-vert prefix"></i>
					          <input id="first_name" type="text" value="" class="validate">
					          <label for="first_name">Change your Street</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="middle_name" type="text" value="" class="validate">
					          <label for="last_name">Change your City</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="last_name" type="text" value="" class="validate">
					          <label for="last_name">Change your State</label>
					        </div>
					     
					        <button class="waves-effect waves-light btn left50 changeUserProfileData" onclick="changeName()" id="nameChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				        
				     	 </div>
			    	</div>
       			</li>
       			<li>
			         <div class="collapsible-header"><i class=""></i>Permanent Address :   

			         <?php 

			         	echo $p_street."\t".$p_city."\t".$p_state."\t".$p_pincode;

			          ?>
			         </div> 
			        
			         <div class="collapsible-body">
				         <div class="row">
				    
					        <div class="input-field col s4 left50">
					         <i class="mdi-action-swap-vert prefix"></i>
					          <input id="first_name" type="text" value="" class="validate">
					          <label for="first_name">Change your Street</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="middle_name" type="text" value="" class="validate">
					          <label for="last_name">Change your City</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="last_name" type="text" value="" class="validate">
					          <label for="last_name">Change your State</label>
					        </div>
					     
					        <button class="waves-effect waves-light btn left50 changeUserProfileData" onclick="changeName()" id="nameChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				        
				     	 </div>
			    	</div>
       			</li>	

       	</ul>
   		</div>
   		<!--  Education  Details    -->
     	<div id="p2">
     	 <ul class="collapsible" data-collapsible="accordion">			

     	 		<li>
         			<div class="collapsible-header"><i class=""></i>SSC % : <?php echo $ssc; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>HSC % : <?php echo $hsc; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Gujcet Percenttage % : <?php echo $guj_per; ?>  </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Gujcet Merit Rank : <?php echo $guj_merit; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Are You D2D Student : <?php echo $d2d; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Diploma CGPA : <?php echo $d2d_cgpa; ?>  </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Year Of Admission % : <?php echo $year_of_admission; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Branch % : <?php echo $branch; ?> </div>
         
       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Division :  <?php echo $division; ?></div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Semester : <?php echo $sem; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>SPI :  

         			<?php 
         				echo "Sem-1 :".$sem1."\t"."Sem-2 :".$sem2."\t"."Sem-3 :".$sem3."\t"."Sem-4 :".$sem4."\t"."Sem-5 :".$sem5."\t"."Sem-6 :".$sem6."\t"."Sem-7 :".$sem7."\t"."Sem-8 :".$sem8;
         			 ?>
         			</div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>CPI : <?php echo $cpi; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>CGPA : <?php echo $cgpa; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>TFWS :  <?php echo $tfws; ?></div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Commuting : <?php echo $commuting; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Hosteler : <?php echo $hosteler; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Are You J&K Student : <?php echo $jnk; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Are You NSS Student : <?php echo $nss; ?> </div>

       			</li>
       			<li>
         			<div class="collapsible-header"><i class=""></i>Are You NCC Student : <?php echo $ncc; ?> </div>

       			</li>

     	 </ul>
     	</div>
     	<!--  Bank Details    -->
     	<div id="p3">
     		<ul class="collapsible" data-collapsible="accordion">	

     				<li>
				         <div class="collapsible-header"><i class=""></i>Bank Account Number : <?php echo $account_num; ?> </div>
					         <div class="collapsible-body">
					         <div class="input-field col s6">
					              <i class=" prefix"></i>
					              <input id="icon_prefix_Email" type="number" value="" class="validate w-500">
					              <label for="icon_prefix_Email">Change Your Bank Account Number</label>
					          </div>
					          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				      	</div>
		       		</li>
		       		<li>
				         <div class="collapsible-header"><i class=""></i>IFSC Code : <?php echo $ifsc; ?> </div>
					         <div class="collapsible-body">
					         <div class="input-field col s6">
					              <i class=" prefix"></i>
					              <input id="icon_prefix_Email" type="text" value="" class="validate w-500">
					              <label for="icon_prefix_Email">Change Your Bank IFSC</label>
					          </div>
					          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				      	</div>
		       		</li>
		       		<li>
				         <div class="collapsible-header"><i class=""></i>Bank Branch : <?php echo $bank_branch; ?> </div>
					         <div class="collapsible-body">
					         <div class="input-field col s6">
					              <i class=" prefix"></i>
					              <input id="icon_prefix_Email" type="text" value="" class="validate w-500">
					              <label for="icon_prefix_Email">Change Your Bank Branch</label>
					          </div>
					          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				      	</div>
		       		</li>
		       		<li>
				         <div class="collapsible-header"><i class=""></i>Bank Name : <?php echo $bank_name; ?> </div>
					         <div class="collapsible-body">
					         <div class="input-field col s6">
					              <i class=" prefix"></i>
					              <input id="icon_prefix_Email" type="text" value="" class="validate w-500">
					              <label for="icon_prefix_Email">Change Your Bank Name</label>
					          </div>
					          <button class="waves-effect waves-light btn left50 changeUserProfileData" pageXhr="changeemail" id="emailChangeSbmtBtn" >
					           <i class="mdi-editor-merge-type right"></i>Change it
					        </button>
				      	</div>
		       		</li>
		       		<li>
         				<div class="collapsible-header"><i class=""></i>Adhar Card Number : <?php echo $adhar_num; ?> </div>

       				</li>
       				<li>
         				<div class="collapsible-header"><i class=""></i>Election Card Number : <?php echo $election_num; ?> </div>

       				</li>
       				<li>
         				<div class="collapsible-header"><i class=""></i>Is You Adharcard Seeded With bank Account : <?php echo $seeded; ?>  </div>

       				</li>

     		</ul>		
     	</div>

     
    </div>

</main>			


<?php
	}else{
		header('location:index.php');
	}
 ?>


</body>
</html>