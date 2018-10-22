$(document).ready(function (e){
	$("form#add_hType").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_holyType.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		    window.setTimeout(function () {
			  location.href = "holydayType";
		    }, 1000); 
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

$(document).ready(function (e){
	$("form#edit_hType").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_holyType.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		  window.setTimeout(function () {
			location.href = "holydayType";
			}, 1000);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

function delete_htype(id){
	var r = confirm("Are you sure you want to Delete?");
	if(r == true){
		var delete_head_http = new XMLHttpRequest();
		delete_head_http.onload = function(){
		   window.location = self.location;
		}
		delete_head_http.open("POST", "post_url/del_holyType.php", false);
		delete_head_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		delete_head_http.send('id='+id);
		delete delete_head_http;
	}
} 