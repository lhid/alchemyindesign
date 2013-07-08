$(document).ready(function(){
	$("#contact").bind('submit',function(){
		//let's start by disabling the submit button. hopefully this will help prevent any issues with people double-clicking and submitting the form multiple times
		$("#send").attr("disabled","disabled");
		
		//ajax post request
		$.post(
			"contact.php",
			$("#contact").serialize(), 
			function(data){
				if (data == 'true'){
					//success
					$("#send").attr("value","Message Sent");
				} else {
					//failure
					//not sure what to do here...
					$("#send")
						.attr("value","Send Failed. Try Again?")
						.removeAttr("disabled");
				}
			});
		return false;
	});
}); 
