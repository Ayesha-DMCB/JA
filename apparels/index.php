<?php 
require_once('functions/db_config.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<script src="lib/jquery.js" type="text/javascript"></script>
	<link href="stylesheets/style.css" rel="stylesheet" type="text/css">
	
	<script> 
     $(function(){
		$('form#LoginForm').on('submit', function(e){
			e.preventDefault();
			var username = $('[name="txt_username"]');
			var password = $('[name="txt_password"]');
			
			var dataString = 'username='+username.val()+'&password='+password.val();
			
			$.ajax({
				 type:'post',
				 url:'post_url/user_login.php',
				 data:dataString,
				 success:function(data){
					//alert(data);
					arr = new Array();
					arr = data.split("|");
					if(arr[0] == 0){
						window.location = 'dashboard.php';
					}
					else{
						alert(arr[1]);
					}
				 },
				 error:function(){
					//alert('Error');
				 }
			});
		});
	});
	</script>
</head>
<body>
    <div id="top_logo">
	    <div class="login_box"> 
		   <h3 style="color:#008C46;">ADMIN LOGIN</h3><hr>
		   <form method="post" id="LoginForm">
			<br>
			USERNAME<br>
			<input type="email" name="txt_username" value="admin@dmcbl.com" required tabindex="1"><br>
			PASSWORD<br>
			<input type="password" name="txt_password" value="123" required tabindex="2"><br><br>
			
			<input type="submit" name="btn_user_login" value="LOGIN" tabindex="3">
		   </form>
		</div>
	</div>
</body>
</html>