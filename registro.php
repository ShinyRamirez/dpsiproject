<?php

$connect= mysqli_connect('localhost','root','', 'login');


if (!$connect) {
	
	echo("No Hubo Exito");
}

echo nl2br("Conexion Satisfactoria\n");
mysqli_close($connect);

/*while ($post = each($_POST))
{
echo  $post[0].("=").$post[1].nl2br("\n");
}*/
echo '<pre>';
print_r($_POST);
echo '</pre>';  

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>
	
	</title>
	</head>
	
	<body>
		<form name="resultado" action="" method="get">
		
		<div align="center">
			<label>Hoja de resultados</label>
			</div>
		</form>
	</body>
</html>