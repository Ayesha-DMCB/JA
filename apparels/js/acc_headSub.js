$(document).ready(function (e){
	$("form#insert_accHeadSub").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_accHeadSub.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){

		  rh_msgbox(data);
		  
			window.setTimeout(function () {
			location.href = "manage_acc_subHead";
			}, 600);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

$(document).ready(function (e){
	$("form#edit_accHeadSub").on('submit',(function(e){
		e.preventDefault();
		$.ajax({
		url:'post_url/post_accHeadSub.php',
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){

		  rh_msgbox(data);
		  
			window.setTimeout(function () {
			location.href = "manage_acc_subHead";
			}, 600);
		},
		error: function(){rh_msgbox('Something went wrong');} 	        
		});
	}));
});

function del_accHeadSub(id){
	var r = confirm("Are you sure you want to Delete?");
	if(r == true){
		var delete_head_http = new XMLHttpRequest();
		delete_head_http.onload = function(){
		   window.location = self.location;
		}
		delete_head_http.open("POST", "post_url/del_accHeadSub.php", false);
		delete_head_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		delete_head_http.send('id='+id);
		delete delete_head_http;
	}
 }
 
function headcode(id){
	var changetextC_http = new XMLHttpRequest();
	changetextC_http.onload = function(){
	   var total = this.responseText;
	   document.getElementById("acc_subHead_code").value = total;  
	}
	changetextC_http.open("POST", "post_url/subHead.php", false);
	changetextC_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	changetextC_http.send('id='+id);
} 
function headcodeS(id){
	var headcodeS_http = new XMLHttpRequest();
	headcodeS_http.onload = function(){
       var headCode = this.responseText;
       document.getElementById("acc_subSub_Code").value = headCode;  
	}
	headcodeS_http.open("POST", "post_url/subHeadS.php", false);
	headcodeS_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	headcodeS_http.send('id='+id);
} 