$(document).ready(function (e){
	$("form#updateSalMatrix").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_salMatrix.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		   window.setTimeout(function () {
			location.href = "SalaryMatrix";
			}, 1000); 
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});
