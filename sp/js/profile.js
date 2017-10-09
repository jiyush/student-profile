$(document).ready(function(){

	$("#p2").hide();
	$("#p3").hide();

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