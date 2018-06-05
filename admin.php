<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}
		
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
		
		input[type=email] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=email]:focus {border-color:#333; }

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
		
body {
    
	background-image: url(img/gradientglow.jpg);
    
}
	</style>
	
<title>Documento sin título</title>
</head>

<body>
	<div align="right">
	<input type="button" onClick="location.href='/login/index.php'" value="Menu"/>
	</div>
	<div align=center> <h2 style="color: greenyellow" >ADMIN LOGIN</h2><br>

<form name="login" action="adminlogin.php" method="post"> 
	
	<label>Nombre de usuario</label><br>
	<input type="email" style="width:215px; height:25px " name="username" placeholder="Usuario" required /><br><br>
	<label>Contraseña</label><br>
	<input type="password" style="width:215px; height:25px" name="password" placeholder="Contraseña" required/><br>
	
	<br><input type="submit" value="Login" /> 
	
	<br>
	

	
  </form>
	 
</div>	
		
		
</body>
</html>