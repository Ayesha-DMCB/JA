$(document).ready(function (e){
	$("form#addEmployee").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_employee.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		  window.setTimeout(function () {
			location.href = "new_employee";
		  }, 1000);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

$(document).ready(function (e){
	$("form#add_qualification").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_employee.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		  window.setTimeout(function () {
			location.href = "emp_qualification";
		  }, 1000);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

$(document).ready(function (e){
	$("form#add_experience").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_employee.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		  window.setTimeout(function () {
			location.href = "emp_experience";
		  }, 1000);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

$(document).ready(function (e){
	$("form#edit_user").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/insert_add_room.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		 	window.setTimeout(function () {
			location.href = "manage_admin";
			}, 1000);	
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

function del_user(id){
var r = confirm("Are you sure you want to Delete?");
if(r == true){
	var delete_head_http = new XMLHttpRequest();
	delete_head_http.onload = function(){
	   window.location = self.location;
	}
	delete_head_http.open("POST", "post_url/delete_user.php", false);
	delete_head_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	delete_head_http.send('id='+id);
	delete delete_head_http;
}
}