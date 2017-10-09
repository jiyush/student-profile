


$(document).ready(function(){
    $("#d2").hide();
    $("#d3").hide();
    $("#d4").hide();
    $("#d5").hide();
  



    $("#btn1").click(function(){

	    	var en = $("#en");
			
			$.ajax({
				url : 'check.php',
				type : 'post',
				data : {
					enrollment : en.val()
				},
				success : function(response){
					var res = response;
					if (res == "yes") {
						console.log('exist');
						alert("Enrollment Number Already Exist..!");
						return false;
					}else{
						console.log('Not exist');
						$("#d1").hide();
						$("#d2").show();
					}
				}
			});




		   
	});
	$("#btn2").click(function(){

		$("#d1").hide();
		$("#d2").hide();
		$("#d3").show();
		
	});
	$("#btn3").click(function(){

		$("#d1").hide();
		$("#d2").hide();
		$("#d3").hide();
		$("#d4").show();
		
	});
	$("#btn4").click(function(){

		$("#d1").hide();
		$("#d2").hide();
		$("#d3").hide();
		$("#d4").hide();
		$("#d5").show();
		
	});

	






});

