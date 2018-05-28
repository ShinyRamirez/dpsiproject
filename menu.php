<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
</head>
<body>
<div class="form">
<p>Bienvenido <?php echo $_SESSION['username']; ?>!</p>
<p>Bienvenido al menu.</p>
	
	
	<input type="button" onClick="location.href='/login/cuestionario1.php'" value="Cuestionario MAI" /><br>
	<input type="button" onClick="location.href='/login/cuestionario3.php'" value="Cuestionario SR" /><br>
	<input type="button" onClick="location.href='/login/cuestionario2.php'" value="Cuestionario AM" /><br>
	<input type="button" onClick="location.href='/login/cuestionario4.php'" value="Cuestionario EA" /><br><br>
	<br>
	
	<input type="button" onClick="location.href='/login/dashboard.php'" value="Dashboard" /><br>
	<input type="button" onClick="location.href='/login/logout.php'" value="Logout" />
</div>
</body>
</html>