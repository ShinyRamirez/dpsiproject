<?php
  /*$user = $_POST['user'];
   $password = $_POST['password'];

   if (($user == "shinysick") AND ($password == "20933") or ($user == "marilu") AND ($password == "12345")) {
      header('Location: cuestionario1.php');
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }*/


require ("conexion.php"); 
//mysqli_select_db($connect,"login");
//$db_selected = mysqli_select_db($connect, 'login' );


session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = ($_POST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($connect,$username);
	$password = ($_POST['password']);
	$passwordcoded = md5($password);
	//var_dump($passwordcoded);exit;
	$password = mysqli_real_escape_string($connect,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `usuarios` WHERE correo='$username' and contrasena='$password'";
	
	$result = mysqli_query($connect,$query) or die(mysql_error());
	
	$rows = mysqli_num_rows($result);
	
	//var_dump($rows);exit;
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: menu.php");
         }else{
			
			header("Location: usr404.php");
	/*echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
	*/
		
		}
    }else{
	header ("Location usr404.php");
	
}
	/*while ($post = each($_POST))
{
echo  $post[0].("=").$post[1].nl2br("\n");
}
echo '<pre>';
print_r($_POST);
echo '</pre>'; */
?>

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
