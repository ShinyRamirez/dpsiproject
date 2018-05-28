<?php

$connect= mysqli_connect('localhost','root','','login');
//mysqli_select_db($connect,'login');


if (!$connect) {
	
	echo("No Hubo Exito");
}

?>