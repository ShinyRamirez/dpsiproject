<?php
require("conexion.php");
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>

</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="menu.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>