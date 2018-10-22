$(document).ready(function (e){
	$("form#creVoucher").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_crVoucher.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  rh_msgbox(data);
		  
		  window.setTimeout(function () {
			location.href = "view_cashEntry";
		  }, 700);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

/* $(document).ready(function (e){
	$("form#edit_accHead").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_accHead.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  alert(data);
		  window.setTimeout(function () {
			location.href = "manage_accHead";
			}, 600);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
}); */

function del_vou(id){
	var r = confirm("Are you sure you want to Delete?");
	if(r == true){
		var delete_head_http = new XMLHttpRequest();
		delete_head_http.onload = function(){
		   window.location = self.location;
		}
		delete_head_http.open("POST", "post_url/del_voucher.php", false);
		delete_head_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		delete_head_http.send('id='+id);
		delete delete_head_http;
	}
  } 