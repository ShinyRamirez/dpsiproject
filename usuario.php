<?php
   $user = $_GET['user'];
   $password = $_GET['password'];

   if (($user == "shinysick") AND ($password == "20933")) {
      header('Location: cuestionario1.php');
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?>