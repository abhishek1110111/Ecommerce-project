$(document).ready(function(){
	var nam;
	console.log("heeee");
	$('.sub').click(function(){
		console.log("hr hr mahadev");
		nam=$('#a').val();
		console.log(nam);
	
	$.ajax({
		method: "POST",
		url:"db.php",
		data:{ action:"jarhe",nam:nam},
		
		//dataType:"json",
		success: function(response)
		 {
		 	$('.majnu').html(response);
		  }
		
	})
		
	});

});