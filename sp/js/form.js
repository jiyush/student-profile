


$(document).ready(function(){
    $("#d2").hide();
    $("#d3").hide();
    $("#d4").hide();
    $("#d5").hide();


    $("#btn1").click(function(){

		$("#d1").hide();
		$("#d2").show();
		
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

	




	$('form.ajax').on('submit',function(){
		var that = $(this),
		url = that.attr('action'),
		method = that.attr('method'),
		data = {};

		that.find('[name]').each(function(index ,value){
			var that = $(this),
			name = that.attr('name'),
			value = that.val();

			data[name] = value;
		});

		$.ajax({
			url : url,
			type : method,
			data : data,
			success : function(response){
				console.log(response);
			}

		});

		
	});


});