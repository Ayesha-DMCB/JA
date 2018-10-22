$(document).ready(function (e){
	$("form#insert_accHeadSubS").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_accHeadSSub.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){

		  rh_msgbox(data);
		  
			window.setTimeout(function () {
			location.href = "man_acc_subSub.php";
			}, 800);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

$(document).ready(function (e){
	$("form#edit_accHeadSubS").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_accHeadSSub.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){

		  rh_msgbox(data);
		  
			window.setTimeout(function () {
			location.href = "man_acc_subSub";
			}, 800);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

function del_accHeSubS(id){
	var r = confirm("Are you sure you want to Delete?");
	if(r == true){
		var delete_head_http = new XMLHttpRequest();
		delete_head_http.onload = function(){
		   window.location = self.location;
		}
		delete_head_http.open("POST", "post_url/del_accHeadSubS.php", false);
		delete_head_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		delete_head_http.send('id='+id);
		delete delete_head_http;
}
}
	   