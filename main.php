<?php
	session_start();
	if(!isset($_SESSION["success"]))
	{
		header("location:login.php");
		exit();
	}
	setcookie("csrf_token","");	
	setcookie("csrf_token",md5(mt_rand()+time()));
?>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body>
		<form id="logout" method="POST" action="logout.php">
		
		<?php if(isset($error)){echo $error."<br>";}?>
			
			<input type="submit" value="Logout"/> 			
		</form>
	</body>
	
	<script>
		window.onload=getToken();
		function getToken(){
			var form = document.getElementById("logout");
			var token = document.createElement("input");
			token.setAttribute("type", "hidden");
			token.setAttribute("name", "csrf");
			token.setAttribute("value", getCookie("csrf_token"));
			form.appendChild(token);
		}
		
		function getCookie(name) {
			var value = "; " + document.cookie;
			var parts = value.split("; " + name + "=");
			if (parts.length == 2){
				return parts.pop().split(";").shift();
			}
		}

	</script>
	
</html>