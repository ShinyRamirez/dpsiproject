<?php
include ("conexion.php");
/*$connect= mysqli_connect('localhost','root','');


if (!$connect) {
	
	echo("No Hubo Exito");
} */

$bd_select = mysqli_select_db($connect, 'login');

mysqli_query ($connect, "INSERT INTO `login`.`usuarios` (`usuario`, `contrasena`) VALUES ('$_POST[user]','$_POST[password]') ");


 header('Location: index.php');
//echo nl2br("Conexion Satisfactoria\n");
mysqli_close($connect);

/*while ($post = each($_POST))
{
echo  $post[0].("=").$post[1].nl2br("\n");
}*/
/*echo '<pre>';
print_r($_POST);
echo '</pre>';  
*/
?>
