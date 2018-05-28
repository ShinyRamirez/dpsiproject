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
        $query = "SELECT * FROM `usuarios` WHERE usuario='$username' and contrasena='$password'";
	
	$result = mysqli_query($connect,$query) or die(mysql_error());
	
	$rows = mysqli_num_rows($result);
	
	//var_dump($rows);exit;
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: cuestionario1.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
	}
    }else






	/*while ($post = each($_POST))
{
echo  $post[0].("=").$post[1].nl2br("\n");
}
echo '<pre>';
print_r($_POST);
echo '</pre>'; */




?>
