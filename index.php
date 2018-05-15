<?php
	session_start();
	if(isset($_SESSION["success"]))
	{
		header("location:main.php");
		exit();
	}
	
	if(isset($_POST["username"]) && isset($_POST["password"]))
	{	
		$Username = $_POST["username"];
		$Password = $_POST["password"];
		
		if($Username == "shashika" && $Password == "12345678")
		{
			header("location:main.php");
			$_SESSION["success"] = true;
			exit();
		}
		else
		{
			$error = "Login Error!";		
		}
	}
?>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body style="background-image: url('wallpaper.jpg');color: #000000;">
		<form method="POST">
		<h1>CSRF protection in web application via double submit cookies</h1>
		
		
		<?php if(isset($error)){echo $error."<br>";}?>
		<center style="padding-top: 150px; font-size: 20px;">
			Username:<input name="username" type="text"/><br><br>
			Password:<input name="password" type="password"/><br><br>
			<input type="submit" value="Login"/>
			
			<div class="row" align="center" style="padding-top: 20px;">
                
                    <div>
                        IT15075154 - H. K. S. H. Premalal
                    </br>
                        Cyber Security - 3rd Year - Regular
                    </div>  
               
            </div>
			
			</center>	
		</form>
	</body>
</html>