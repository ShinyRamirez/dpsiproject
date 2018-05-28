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
			background-color: #ffe6cc;}
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
	<Div align="center"> 
	
	<label> Ingrese su nombre:</label>
		<input type="text"/>
	<label>Ingrese sus apellidos:</label>
		<input type="text" /><br><br>
		
	<label> Ingrese su correo:</label>
		<input type="text" name="user"/>
	<label>Ingrese su contraseña:</label>
		<input type="password" name="password"/><br><br>
		
	<label>Edad:</label>
		<input type="number" min="0" max="100">
		
		
		<br><br><input type="submit" value="Enviar" />
	</Div>
		</form>
</body>
</html>