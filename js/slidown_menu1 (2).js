$(document).ready( function(){
	$("#trigger").click( function(){
		if($("#slider").hasClass("open")){
			$("#slider").removeClass('open');
			$(".wraper").removeClass('close_wraper');
		}else{
			$("#slider").addClass('open');
			$(".wraper").addClass('close_wraper');
		}
	});
	
	
	$("#trigger_min").click( function(){
		if($("#slider").hasClass("open")){
			$("#slider").removeClass('open');
			
		}else{
			$("#slider").addClass('open');
			
		}
	});
	
});

