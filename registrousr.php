<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
		button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
		}
		body {
    
	background-image: url(img/gradientglow.jpg);
    
}
	input[type=number] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=number]:focus {border-color:#333; }
	
	
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
	
	input[type=password] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
    border-radius: 5px;
}
	
	input[type=button] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
	 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
	
	input[type=button]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;}
	
	input[type=submit] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
	 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
	
	input[type=submit]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;}
input[type=password]:focus {border-color:#333; }
	</style>
	
	
	
<body>
	<div align="right">
	<input type="button" onclick="location.href='/login/index.php'" value="Menu"/>
	</div>
	
	<form name="Registro De Usuarios" action="registro.php" method="post">
	<Div align="left"> 
	
		
	<label> Ingrese su nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="text" align="right" name="nombre"/><br><br>
	<label>Ingrese sus apellidos:&nbsp;&nbsp;</label>
		<input type="text" align="right" name="apellido"/><br><br>
		
		
	<label> Ingrese su correo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="text" name="user"/><br><br>
	<label>Ingrese su contraseña: </label>
		<input type="password" name="password"/><br><br>
		
	<label>Edad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="number" min="0" max="100" name="edad"><br><br>

		
	<label> Ingrese su pais:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="text" name="pais"/><br><br>
	<label> Ingrese su telefono:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="text" name="telefono"/><br><br>
		</Div>	
		
		<br><br><input type="submit" value="Enviar" />
	
		</form>
		
</body>
</html>