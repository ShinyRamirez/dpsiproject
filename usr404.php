<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Usuario No Encontrado</title>
	
	<Style>
	body {
    
	background-image: url(img/gradientglow.jpg);
    
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
	
	<form>
	<div align="center">
		
		<font face="impact" size="+2">El usuario no se encuentra en la base de datos</font><br><br>
	  <font face="impact" size="+2"> Favor de<input type="button" onclick="location.href='/login/index.php'"value="Ingresar"/>o    </font> <input type="button" onclick="location.href='/login/registrousr.php'" value="Registrarse" /><br>
	<br>
		
		<img src="img/error.png" width="500" height="500" alt=""/> </div>
	
		
	</form>
	
	
	
</body>
</html>