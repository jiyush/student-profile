$(document).ready(function(){

	$("#p2").hide();
	$("#p3").hide();

	$("#btn_name").click(function(){

		var fname = $("#f_name");
		var mname = $("#m_name");
		var lname = $("#l_name");
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				fname : fname.val(),
				mname : mname.val(),
				lname : lname.val()
			},
			success : function(response){
					
					console.log(response);
					
				}

		});
	});


	$("#btn_pass").click(function(){

		var pass = $("#pass");
		
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				pass : pass.val(),
				
			},
			
			success : function(response){
					
					console.log(response);
					
				}

		});
	});
	$("#btn_f").click(function(){

		var f_prof = $("#f_prof");
		
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				f_prof : f_prof.val(),
				
			},
			
			success : function(response){
					
					console.log(response);
					
				}

		});
	});
	$("#btn_m").click(function(){

		var m_prof = $("#m_prof");
		
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				m_prof : m_prof.val(),
				
			},
			
			success : function(response){
					
					console.log(response);
					
				}

		});
	});
	$("#btn_email").click(function(){

		var email = $("#email");
		
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				email : email.val(),
				
			},
			
			success : function(response){
					
					console.log(response);
					
				}

		});
	});
	$("#btn_local").click(function(){

		var l_street = $("#l_street");
		var l_city = $("#l_city");
		var l_state = $("#l_state");
		var l_pincode = $("#l_pincode");
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				l_street : l_street.val(),
				l_city : l_city.val(),
				l_state : l_state.val(),
				l_pincode : l_pincode.val()
			},
			success : function(response){
					
					console.log(response);
					
				}

		});
	});
	$("#btn_per").click(function(){

		var p_street = $("#p_street");
		var p_city = $("#p_city");
		var p_state = $("#p_state");
		var p_pincode = $("#p_pincode");
		
		$.ajax({

			url : "update.php",
			type : "post",
			data : {
				p_street : p_street.val(),
				p_city : p_city.val(),
				p_state : p_state.val(),
				p_pincode : p_pincode.val()
			},
			success : function(response){
					
					console.log(response);
					
				}

		});
	});


	$("#edu").click(function(){
		$("#p1").hide();
		$("#p2").show();
	});

	$("#bank").click(function(){
		$("#p1").hide();
		$("#p2").hide();
		$("#p3").show();
	});



});