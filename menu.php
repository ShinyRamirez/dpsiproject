<?php
//include auth.php file on all secure pages
include("auth.php");



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<style>

	body {
    
	background-image: url(img/gradientglow.jpg);
    
}
	input[type=password] {padding:5px; border:2px solid #ccc;
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=password]:focus {border-color:#333;}
	
	
	input[type=text] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=text]:focus {border-color:#333; }

input[type=submit] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
	 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
	
	input[type=submit]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;
		
	}
	
	input[type=button] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
	 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
	
	input[type=button]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;
		
	}
</style>
	
</head>
	
	
<body>
<div class="form">
<p style="color: ghostwhite">Bienvenido <?php echo $_SESSION['username']; ?>!</p>
<p style="color: ghostwhite">Bienvenido al menu.</p>
	
	
	<input type="button" onClick="location.href='/login/cuestionario1.php'" value="Cuestionario MAI" /><br>
	<input type="button" onClick="location.href='/login/cuestionario3.php'" value="Cuestionario SR" /><br>
	<input type="button" onClick="location.href='/login/cuestionario2.php'" value="Cuestionario AM" /><br>
	<input type="button" onClick="location.href='/login/cuestionario4.php'" value="Cuestionario EA" /><br><br>
	<br>
	

	<input type="button" onClick="location.href='/login/logout.php'" value="Logout" />
</div>
</body>
</html>