<?php
require("conexion.php");
include("auth.php");
?>
<!doctype html>
<html>
<head>
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
		button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
			width: 100%;}
		body {background-image: url(img/bluetexture.jpg);
			 background-repeat: no-repeat;
    background-position:;
    margin-right: 0px;
    background-attachment: fixed;
    
}
		input[type=submit] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
		 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
			
	input[type=submit]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;
		
	}
		#main-header {
	background: #333;
	color: white;
	height: 90px;
 
	width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
	left: 0; /* Posicionamos la cabecera al lado izquierdo */
	top: 0; /* Posicionamos la cabecera pegada arriba */
	position: fixed; /* Hacemos que la cabecera tenga una posición fija */
		}
	</style>
<meta charset="UTF-8">
	<script src="jquery-3.3.1.min.js" type="text/javascript" > </script>  
<title>Cuestionario AM</title>
	
	<script type="text/javascript">
$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});
</script>
</head>

<body> 
	<header id="main-header">
	<hr>
		<div align="center">
		<label>1.- NUNCA,  2.-POCAS VECES,  3.-FRECUENTEMENTE,  4.-MUCHAS VECES,  5.- SIEMPRE.</label><br> 
		</div>
		<hr>
	<p style="color: ghostwhite">Bienvenido <?php echo $_SESSION['username']; ?>!</p>
	</header>
	<br><br><br><br><br>
	<div align=center>
	<form name="cuestionario2" action="menu.php" method="post">
		
		<label> 01. Cuando tengo que prestar atención, me doy cuenta de que estoy concentrado y de lo que
estoy haciendo para mantenerme de esa forma<label>	

			<br>
			<input type="radio" name="Bq1" value="1"> 1
  			<input type="radio" name="Bq1" value="2"> 2
  			<input type="radio" name="Bq1" value="3"> 3
			<input type="radio" name="Bq1" value="4"> 4
  			<input type="radio" name="Bq1" value="5"> 5 
			<br><br>

<label> 02. Cuando tengo que prestar atención en una clase, me doy cuenta si estoy siendo eficiente o no</label>	

			<br>
			<input type="radio" name="Bq2" value="1"> 1
  			<input type="radio" name="Bq2" value="2"> 2
  			<input type="radio" name="Bq2" value="3"> 3
			<input type="radio" name="Bq2" value="4"> 4
  			<input type="radio" name="Bq2" value="5"> 5 
			<br><br>

<label> 03. Cuando me doy cuenta de como presto atención, soy capaz de mejorar mi atención</label>	

			<br>
			<input type="radio" name="Bq3" value="1"> 1
  			<input type="radio" name="Bq3" value="2"> 2
  			<input type="radio" name="Bq3" value="3"> 3
			<input type="radio" name="Bq3" value="4"> 4
  			<input type="radio" name="Bq3" value="5"> 5 
			<br><br>
<label> 04. Cuando tengo que hablar, me doy cuenta si soy oportuno o no</label>	

			<br>
			<input type="radio" name="Bq4" value="1"> 1
  			<input type="radio" name="Bq4" value="2"> 2
  			<input type="radio" name="Bq4" value="3"> 3
			<input type="radio" name="Bq4" value="4"> 4
  			<input type="radio" name="Bq4" value="5"> 5 
			<br><br>

<label> 05. Al exponer un trabajo en clase, controlo la manera de hablar</label>	

			<br>
			<input type="radio" name="Bq5" value="1"> 1
  			<input type="radio" name="Bq5" value="2"> 2
  			<input type="radio" name="Bq5" value="3"> 3
			<input type="radio" name="Bq5" value="4"> 4
  			<input type="radio" name="Bq5" value="5"> 5 
			<br><br>

<label> 06. Consigo percibir la reacción del auditorio en clase cuando expongo un trabajo</label>	

			<br>
			<input type="radio" name="Bq6" value="1"> 1
  			<input type="radio" name="Bq6" value="2"> 2
  			<input type="radio" name="Bq6" value="3"> 3
			<input type="radio" name="Bq6" value="4"> 4
  			<input type="radio" name="Bq6" value="5"> 5 
			<br><br>
<label> 07. Cuando tengo que memorizar algo, se si resultará fácil o difícil recordarlo después</label>	

			<br>
			<input type="radio" name="Bq7" value="1"> 1
  			<input type="radio" name="Bq7" value="2"> 2
  			<input type="radio" name="Bq7" value="3"> 3
			<input type="radio" name="Bq7" value="4"> 4
  			<input type="radio" name="Bq7" value="5"> 5 
			<br><br>
<label> 08. Cuando tengo que recordar una materia recibida en el aula, evalúo si soy o no eficiente al recordarla</label>	

			<br>
			<input type="radio" name="Bq8" value="1"> 1
  			<input type="radio" name="Bq8" value="2"> 2
  			<input type="radio" name="Bq8" value="3"> 3
			<input type="radio" name="Bq8" value="4"> 4
  			<input type="radio" name="Bq8" value="5"> 5 
			<br><br>

<label> 09. Al recordar alguna cosa, percibo si el tema en cuestión se relaciona con otros</label>	

			<br>
			<input type="radio" name="Bq9" value="1"> 1
  			<input type="radio" name="Bq9" value="2"> 2
  			<input type="radio" name="Bq9" value="3"> 3
			<input type="radio" name="Bq9" value="4"> 4
  			<input type="radio" name="Bq9" value="5"> 5 
			<br><br>
<label> 10. Cuando voy a resolver un problema, tengo conciencia de los pasos que debo seguir </label>	

			<br>
			<input type="radio" name="Bq10" value="1"> 1
  			<input type="radio" name="Bq10" value="2"> 2
  			<input type="radio" name="Bq10" value="3"> 3
			<input type="radio" name="Bq10" value="4"> 4
  			<input type="radio" name="Bq10" value="5"> 5 
			<br><br>

<label>11. Cuando tengo que pensar en algo, controlo mi pensamiento </label>	

			<br>
			<input type="radio" name="Bq11" value="1"> 1
  			<input type="radio" name="Bq11" value="2"> 2
  			<input type="radio" name="Bq11" value="3"> 3
			<input type="radio" name="Bq11" value="4"> 4
  			<input type="radio" name="Bq11" value="5"> 5 
			<br><br>
<label>12. Cuando pienso en algo, me doy cuenta de lo que hago para pensar </label>	

			<br>
			<input type="radio" name="Bq12" value="1"> 1
  			<input type="radio" name="Bq12" value="2"> 2
  			<input type="radio" name="Bq12" value="3"> 3
			<input type="radio" name="Bq12" value="4"> 4
  			<input type="radio" name="Bq12" value="5"> 5 
			<br><br>
<label>13. Cuando conozco algo, procuro saber para qué sirve este conocimiento </label>	

			<br>
			<input type="radio" name="Bq13" value="1"> 1
  			<input type="radio" name="Bq13" value="2"> 2
  			<input type="radio" name="Bq13" value="3"> 3
			<input type="radio" name="Bq13" value="4"> 4
  			<input type="radio" name="Bq13" value="5"> 5 
			<br><br>
<label>14. Cuando decido pensar en alguna cosa, me preocupo en saber cuáles son las causas que me llevan a pensar </label>	

			<br>
			<input type="radio" name="Bq14" value="1"> 1
  			<input type="radio" name="Bq14" value="2"> 2
  			<input type="radio" name="Bq14" value="3"> 3
			<input type="radio" name="Bq14" value="4"> 4
  			<input type="radio" name="Bq14" value="5"> 5 
			<br><br>
<label>15. Cuando estoy pensando, tengo consciencia que una cosa es el pensamiento y otra es la
realidad
 </label>	

			<br>
			<input type="radio" name="Bq15" value="1"> 1
  			<input type="radio" name="Bq15" value="2"> 2
  			<input type="radio" name="Bq15" value="3"> 3
			<input type="radio" name="Bq15" value="4"> 4
  			<input type="radio" name="Bq15" value="5"> 5 
			<br><br>
<label>16. Cuando tengo conciencia de un problema, percibo que la realidad puede ser diferente </label>	

			<br>
			<input type="radio" name="Bq16" value="1"> 1
  			<input type="radio" name="Bq16" value="2"> 2
  			<input type="radio" name="Bq16" value="3"> 3
			<input type="radio" name="Bq16" value="4"> 4
  			<input type="radio" name="Bq16" value="5"> 5 
			<br><br>
<label>17. Para distinguir entre lo que pienso y lo que veo, utilizo estrategias</label>	

			<br>
			<input type="radio" name="Bq17" value="1"> 1
  			<input type="radio" name="Bq17" value="2"> 2
  			<input type="radio" name="Bq17" value="3"> 3
			<input type="radio" name="Bq17" value="4"> 4
  			<input type="radio" name="Bq17" value="5"> 5 
			<br><br>
<label>18. La comprensión de la diferencia entre lo que pienso sobre algo y lo que realmente es ese algo, me facilita el desarrollo de las actividades diarias</label>	

			<br>
			<input type="radio" name="Bq18" value="1"> 1
  			<input type="radio" name="Bq18" value="2"> 2
  			<input type="radio" name="Bq18" value="3"> 3
			<input type="radio" name="Bq18" value="4"> 4
  			<input type="radio" name="Bq18" value="5"> 5 
			<br><br>
<label>19. Cuando soy consciente de alguna realidad, aprecio que esa realidad tiene sus propias reglas </label>	

			<br>
			<input type="radio" name="Bq19" value="1"> 1
  			<input type="radio" name="Bq19" value="2"> 2
  			<input type="radio" name="Bq19" value="3"> 3
			<input type="radio" name="Bq19" value="4"> 4
  			<input type="radio" name="Bq19" value="5"> 5 
			<br><br>
<label>20. Para descubrir la existencia del orden y las reglas que norman un tema, utilizo estrategias </label>	

			<br>
			<input type="radio" name="Bq20" value="1"> 1
  			<input type="radio" name="Bq20" value="2"> 2
  			<input type="radio" name="Bq20" value="3"> 3
			<input type="radio" name="Bq20" value="4"> 4
  			<input type="radio" name="Bq20" value="5"> 5 
			<br><br>
<label> 21. Al descubrir que existen orden y reglas en la realidad, me siento mejor</label>	

			<br>
			<input type="radio" name="Bq21" value="1"> 1
  			<input type="radio" name="Bq21" value="2"> 2
  			<input type="radio" name="Bq21" value="3"> 3
			<input type="radio" name="Bq21" value="4"> 4
  			<input type="radio" name="Bq21" value="5"> 5 
			<br><br>
<label> 22. Me doy cuenta de que para ser consciente de algo, preciso adaptarme a la realidad</label>	

			<br>
			<input type="radio" name="Bq22" value="1"> 1
  			<input type="radio" name="Bq22" value="2"> 2
  			<input type="radio" name="Bq22" value="3"> 3
			<input type="radio" name="Bq22" value="4"> 4
  			<input type="radio" name="Bq22" value="5"> 5 
			<br><br>
<label> 23. Cuando lo que pienso se adapta a las exigencias de la realidad, se el porqué de la adaptación</label>	

			<br>
			<input type="radio" name="Bq23" value="1"> 1
  			<input type="radio" name="Bq23" value="2"> 2
  			<input type="radio" name="Bq23" value="3"> 3
			<input type="radio" name="Bq23" value="4"> 4
  			<input type="radio" name="Bq23" value="5"> 5 
			<br><br>
<label> 24. Cuando mis pensamientos se adaptan a la realidad, siento que la realidad se impone a mis intenciones</label>	

			<br>
			<input type="radio" name="Bq24" value="1"> 1
  			<input type="radio" name="Bq24" value="2"> 2
  			<input type="radio" name="Bq24" value="3"> 3
			<input type="radio" name="Bq24" value="4"> 4
  			<input type="radio" name="Bq24" value="5"> 5 
			<br><br>
<label> 25. Tengo conciencia de que todo lo que hago (pensar, recordar, prestar atención) está relacionado entre sí</label>	

			<br>
			<input type="radio" name="Bq25" value="1"> 1
  			<input type="radio" name="Bq25" value="2"> 2
  			<input type="radio" name="Bq25" value="3"> 3
			<input type="radio" name="Bq25" value="4"> 4
  			<input type="radio" name="Bq25" value="5"> 5 
			<br><br>
<label> 26. Cuando organizo mis conocimientos, utilizo estrategias</label>	

			<br>
			<input type="radio" name="Bq26" value="1"> 1
  			<input type="radio" name="Bq26" value="2"> 2
  			<input type="radio" name="Bq26" value="3"> 3
			<input type="radio" name="Bq26" value="4"> 4
  			<input type="radio" name="Bq26" value="5"> 5 
			<br><br>
<label>27. La organización de mi pensamiento, facilita mi trabajo intelectual </label>	

			<br>
			<input type="radio" name="Bq27" value="1"> 1
  			<input type="radio" name="Bq27" value="2"> 2
  			<input type="radio" name="Bq27" value="3"> 3
			<input type="radio" name="Bq27" value="4"> 4
  			<input type="radio" name="Bq27" value="5"> 5 
			<br><br>
<label> 28. Cuando soy consciente de alguna cosa, siento que esta conciencia se modifica según la situación</label>	

			<br>
			<input type="radio" name="Bq28" value="1"> 1
  			<input type="radio" name="Bq28" value="2"> 2
  			<input type="radio" name="Bq28" value="3"> 3
			<input type="radio" name="Bq28" value="4"> 4
  			<input type="radio" name="Bq28" value="5"> 5 
			<br><br>
<label> 29. Para que mis pensamientos sean flexibles, utilizo estrategias y procedimientos</label>	

			<br>
			<input type="radio" name="Bq29" value="1"> 1
  			<input type="radio" name="Bq29" value="2"> 2
  			<input type="radio" name="Bq29" value="3"> 3
			<input type="radio" name="Bq29" value="4"> 4
  			<input type="radio" name="Bq29" value="5"> 5 
			<br><br>
<label> 30. Cuando soy flexible, siento que las cosas se vuelven más seguras y eficaces</label>	

			<br>
			<input type="radio" name="Bq30" value="1"> 1
  			<input type="radio" name="Bq30" value="2"> 2
  			<input type="radio" name="Bq30" value="3"> 3
			<input type="radio" name="Bq30" value="4"> 4
  			<input type="radio" name="Bq30" value="5"> 5 
			<br><br>

<label> 31. Cuando conozco algo, soy consciente de que lo conozco</label>	

			<br>
			<input type="radio" name="Bq31" value="1"> 1
  			<input type="radio" name="Bq31" value="2"> 2
  			<input type="radio" name="Bq31" value="3"> 3
			<input type="radio" name="Bq31" value="4"> 4
  			<input type="radio" name="Bq31" value="5"> 5 
			<br><br>
<label>32. Cuando tengo que auto-controlarme, utilizo estrategias </label>	

			<br>
			<input type="radio" name="Bq32" value="1"> 1
  			<input type="radio" name="Bq32" value="2"> 2
  			<input type="radio" name="Bq32" value="3"> 3
			<input type="radio" name="Bq32" value="4"> 4
  			<input type="radio" name="Bq32" value="5"> 5 
			<br><br>
<label>33. Al auto-controlarme, me siento más seguro y eficiente </label>	

			<br>
			<input type="radio" name="Bq33" value="1"> 1
  			<input type="radio" name="Bq33" value="2"> 2
  			<input type="radio" name="Bq33" value="3"> 3
			<input type="radio" name="Bq33" value="4"> 4
  			<input type="radio" name="Bq33" value="5"> 5 
			<br><br>
<label>34. Tengo consciencia del conocimiento que poseo de las otras personas </label>	

			<br>
			<input type="radio" name="Bq34" value="1"> 1
  			<input type="radio" name="Bq34" value="2"> 2
  			<input type="radio" name="Bq34" value="3"> 3
			<input type="radio" name="Bq34" value="4"> 4
  			<input type="radio" name="Bq34" value="5"> 5 
			<br><br>
<label>35. Cuando tengo que hacer algún trabajo académico, se escoger los procedimientos necesarios conforme a lo que pide cada trabajo </label>	

			<br>
			<input type="radio" name="Bq35" value="1"> 1
  			<input type="radio" name="Bq35" value="2"> 2
  			<input type="radio" name="Bq35" value="3"> 3
			<input type="radio" name="Bq35" value="4"> 4
  			<input type="radio" name="Bq35" value="5"> 5 
			<br><br>
<label> 36. Cuando pienso en mi mismo, considero las observaciones hechas por otras personas sobre mi</label>	

			<br>
			<input type="radio" name="Bq36" value="1"> 1
  			<input type="radio" name="Bq36" value="2"> 2
  			<input type="radio" name="Bq36" value="3"> 3
			<input type="radio" name="Bq36" value="4"> 4
  			<input type="radio" name="Bq36" value="5"> 5 
			<br><br>
<label>37. Los conocimientos previos que tengo sobre algo, me facilitan pensar o recordar sobre ello </label>	

			<br>
			<input type="radio" name="Bq37" value="1"> 1
  			<input type="radio" name="Bq37" value="2"> 2
  			<input type="radio" name="Bq37" value="3"> 3
			<input type="radio" name="Bq37" value="4"> 4
  			<input type="radio" name="Bq37" value="5"> 5 
			<br><br>
<label> 38. Cuando tomo consciencia que tengo dificultades para recordar algo, dedico un esfuerzo mayor para recordar</label>	

			<br>
			<input type="radio" name="Bq38" value="1"> 1
  			<input type="radio" name="Bq38" value="2"> 2
  			<input type="radio" name="Bq38" value="3"> 3
			<input type="radio" name="Bq38" value="4"> 4
  			<input type="radio" name="Bq38" value="5"> 5 
			<br><br>
<label> 39. Cuando tengo que recordar o prestar atención en algo, sólo lo hago si con esto tengo algún beneficio</label>	

			<br>
			<input type="radio" name="Bq39" value="1"> 1
  			<input type="radio" name="Bq39" value="2"> 2
  			<input type="radio" name="Bq39" value="3"> 3
			<input type="radio" name="Bq39" value="4"> 4
  			<input type="radio" name="Bq39" value="5"> 5 
			<br><br>
<label>40. Cuando tengo que pensar, recordar o prestar atención con eficiencia, se cuáles son los materiales importantes y cuáles no </label>	

			<br>
			<input type="radio" name="Bq40" value="1"> 1
  			<input type="radio" name="Bq40" value="2"> 2
  			<input type="radio" name="Bq40" value="3"> 3
			<input type="radio" name="Bq40" value="4"> 4
  			<input type="radio" name="Bq40" value="5"> 5 
			<br><br>
<label> 41. Cuando tengo que pensar, recordar o prestar atención con eficiencia, lo hago de forma diferente en cada nueva situación</label>	

			<br>
			<input type="radio" name="Bq41" value="1"> 1
  			<input type="radio" name="Bq41" value="2"> 2
  			<input type="radio" name="Bq41" value="3"> 3
			<input type="radio" name="Bq41" value="4"> 4
  			<input type="radio" name="Bq41" value="5"> 5 
			<br><br>

<label>42. Cuando tengo que pensar, recordar o prestar atención con eficiencia, tomo en cuenta el contexto socio-cultural en que me encuentro </label>	

			<br>
			<input type="radio" name="Bq42" value="1"> 1
  			<input type="radio" name="Bq42" value="2"> 2
  			<input type="radio" name="Bq42" value="3"> 3
			<input type="radio" name="Bq42" value="4"> 4
  			<input type="radio" name="Bq42" value="5"> 5 
			<br><br>

<label>43. Cuando tengo que pensar, recordar o prestar atención, lo hago de forma diferente según la actividad que tengo que realizar </label>	

			<br>
			<input type="radio" name="Bq43" value="1"> 1
  			<input type="radio" name="Bq43" value="2"> 2
  			<input type="radio" name="Bq43" value="3"> 3
			<input type="radio" name="Bq43" value="4"> 4
  			<input type="radio" name="Bq43" value="5"> 5 
			<br><br>
<label>44. Al pensar, recordar o prestar atención, si fuese necesario, busco estrategias nuevas </label>	

			<br>
			<input type="radio" name="Bq44" value="1"> 1
  			<input type="radio" name="Bq44" value="2"> 2
  			<input type="radio" name="Bq44" value="3"> 3
			<input type="radio" name="Bq44" value="4"> 4
  			<input type="radio" name="Bq44" value="5"> 5 
			<br><br>
<label>45. Al pensar, recordar o prestar atención, considero importante la concentración y el esfuerzo </label>	

			<br>
			<input type="radio" name="Bq45" value="1"> 1
  			<input type="radio" name="Bq45" value="2"> 2
  			<input type="radio" name="Bq45" value="3"> 3
			<input type="radio" name="Bq45" value="4"> 4
  			<input type="radio" name="Bq45" value="5"> 5 
			<br><br>
<label>46. Cuando tengo consciencia de que tengo dudas de algo, busco ayuda para resolverlas </label>	

			<br>
			<input type="radio" name="Bq46" value="1"> 1
  			<input type="radio" name="Bq46" value="2"> 2
  			<input type="radio" name="Bq46" value="3"> 3
			<input type="radio" name="Bq46" value="4"> 4
  			<input type="radio" name="Bq46" value="5"> 5 
			<br><br>
<label>47. Piensas antes lo que vas a decir y luego lo dices </label>	

			<br>
			<input type="radio" name="Bq47" value="1"> 1
  			<input type="radio" name="Bq47" value="2"> 2
  			<input type="radio" name="Bq47" value="3"> 3
			<input type="radio" name="Bq47" value="4"> 4
  			<input type="radio" name="Bq47" value="5"> 5 
			<br><br>
<label>48. Cuando te están preguntando algo esperas a que termine de hablar para responderle </label>	

			<br>
			<input type="radio" name="Bq48" value="1"> 1
  			<input type="radio" name="Bq48" value="2"> 2
  			<input type="radio" name="Bq48" value="3"> 3
			<input type="radio" name="Bq48" value="4"> 4
  			<input type="radio" name="Bq48" value="5"> 5 
			<br><br>
<label> 49. Cuando te están hablando observas el lenguaje corporal de la persona</label>	

			<br>
			<input type="radio" name="Bq49" value="1"> 1
  			<input type="radio" name="Bq49" value="2"> 2
  			<input type="radio" name="Bq49" value="3"> 3
			<input type="radio" name="Bq49" value="4"> 4
  			<input type="radio" name="Bq49" value="5"> 5 
			<br><br>
<label> 50. Cuando respondes a una pregunta usas el mismo lenguaje corporal que uso la persona</label>	

			<br>
			<input type="radio" name="Bq50" value="1"> 1
  			<input type="radio" name="Bq50" value="2"> 2
  			<input type="radio" name="Bq50" value="3"> 3
			<input type="radio" name="Bq50" value="4"> 4
  			<input type="radio" name="Bq50" value="5"> 5 
			<br><br>
			<input type="submit" value="Guardar" /> 

		</form>
	</div>
</body>
</html>