<?php
require("conexion.php");
include("auth.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<script src="jquery-3.3.1.min.js" type="text/javascript" > </script>
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
<title>CUESTIONARIO SR</title>
	
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
		<label>Marque la letra que considere representa la actividad que prefiere.</label><br>
		</div>
		<hr>
	<p style="color: ghostwhite">Bienvenido <?php echo $_SESSION['username'];?>!</p>
	</header>
	
	<div align=center>
		<br><br><br><br><br>
	<form name="cuestionario3" action="reporte.php" method="post">
		
		<label> Marque solo una letra por pregunta en la columna.</label><br>
Lo importante es que seas muy sincero contigo mismo en las respuestas</label><br> <hr>
		<label>1 Me gusta cualquier lugar en que…</label>	

			<br>
			<table>
			<tr>
			<td>A Hay cosas que ver y personas que observar </td>	<td><input type="radio" name="Cq[0]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Hay música, temas de que platicar o silencio </td>	<td><input type="radio" name="Cq[0]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Hay suficiente espacio para moverse </td>			<td><input type="radio" name="Cq[0]" value="3" required></td>
			</tr>	
			</table>
			<br>
			
			<label>2 Disfruto los libros y las revistas que…</label>	
			<br>
			
				
			<table>
			<tr>
			<td>A Tienen muchas fotos </td>	<td><input type="radio" name="Cq[1]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Discuten tópicos interesantes </td>	<td><input type="radio" name="Cq[1]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Que cubren noticias sobre deportes, actividades o manualidades </td>			<td><input type="radio" name="Cq[1]" value="3" required></td>
			</tr>
			</table>
				<br>
			<label>3 Cuando tengo tiempo libre prefiero…</label>	
			<br>
			
				
			<table>
			<tr>
			<td>A Ver la televisión </td>	<td><input type="radio" name="Cq[2]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Escuchar música, radio o leer libros </td>	<td><input type="radio" name="Cq[2]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C QHacer algo de ejercicio físico, de atletismo o usar mis manos </td>			<td><input type="radio" name="Cq[2]" value="3" required></td>
			</tr>
			</table>
				<br>
			<label>4 Cuando estoy hablando con alguien…</label>	
			<br>
			
				
			<table>
			<tr>
			<td>A Trato de ver lo que me esta diciendo </td>	<td><input type="radio" name="Cq[3]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Escucho con detenimiento para que pueda oír lo que tiene que tiene que decir </td>	<td><input type="radio" name="Cq[3]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Trato de entrar en contacto con lo que me está diciendo </td>			<td><input type="radio" name="Cq[3]" value="3" required></td>
			</tr>
			</table>
				<br>
			<label>5 Aprendo más fácilmente cuando…</label>	
			<br>
			
				
			<table>
			<tr>
			<td>A Veo a alguien demostrando lo que tengo que hacer </td>	<td><input type="radio" name="Cq[4]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Recibo instrucciones verbales </td>	<td><input type="radio" name="Cq[4]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Lo hago con mis propias manos </td>			<td><input type="radio" name="Cq[4]" value="3" required /></td>
			</tr>
			</table>
				<br>
			<label>6 Cuando soluciono problemas…</label>	
			<br>
			
				
			<table>
			<tr>
			<td>A Sigo mirando alternativas hasta que las piezas encajan </td>	<td><input type="radio" name="Cq[5]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Hablo acerca de nuevos avances hasta que algo hace “click” </td>	<td><input type="radio" name="Cq[5]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Armo las posibilidades, las junto hasta sentir que estoy en balance </td>			<td><input type="radio" name="Cq[5]" value="3" required></td>
			</tr>
			</table>
				<br>
			<label>7 Lo que noto inmediatamente de las personas es…</label>	
			<br>	
			<table>
			<tr>
			<td>A Como se les ve la ropa</td>	
				<td><input type="radio" name="Cq[6]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Como es su tono de voz cuando hablan </td>	<td><input type="radio" name="Cq[6]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Como se mueven</td>			<td><input type="radio" name="Cq[6]" value="3" required ></td>
			</tr>
			</table>
				<br>
				
			<label>8 Cuando tengo muchas cosas que hacer…</label>	
			<br>
			<table>
			<tr>
			<td>A Hago una lista de lo que voy a hacer o me imagino haciéndolo</td>	
				<td> <input type="radio" name="Cq[7]" value="1" required> </td>
				</tr>	
			<tr>	
  			<td>B Me estoy recordando que cosas tengo que hacer </td>	
				<td><input type="radio" name="Cq[7]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Me siento incómodo hasta que casi todas las cosas están hechas</td>			
				<td> <input type="radio" name="Cq[7]" value="3" required></td>
			</tr>
			</table>
					
				<br>
		<label>9 Cuando empiezo a conocer por primera vez una ciudad tiendo a…</label>	
			<br>
			<table>
			<tr>
			<td>A Usar un mapa</td>	<td><input type="radio" name="Cq[8]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Preguntar donde están los lugares que quiero visitar </td>	<td>
				<input type="radio" name="Cq[8]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Confío en mis sensaciones acerca de qué camino tomar</td>			<td>
				<input type="radio" name="Cq[8]" value="3" required></td>
			</tr>
			</table>
				<br>

			<label>10 Si recuerdas ahora mismo una experiencia feliz. ¿Qué viene primero a tu memoria?</label>	
			<br>
<table>
			<tr>
			<td>A El lugar, cosas y personas que viste</td>	<td><input type="radio" name="Cq[9]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Las voces, música, canto de pájaros o sonidos que escuchaste </td>	<td><input type="radio" name="Cq[9]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Las sensaciones y emociones que allí sentiste</td>			<td><input type="radio" name="Cq[9]" value="3" required></td>
			</tr>
			</table>
				<br>
				
				<label>11 Cuando se me asigna un trabajo, lo entiendo y ejecuto bien si:</label>	
			<br>
<table>
			<tr>
			<td>A Está escrito o dibujado</td>	<td><input type="radio" name="Cq[10]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Escucho claramente la explicación </td>	<td><input type="radio" name="Cq[10]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Tengo la sensación de entender y la seguridad de saber hacerlo</td>			<td><input type="radio" name="Cq[10]" value="3" required></td>
			</tr>
			</table>
				<br>

<label>12 Cuando voy a la playa lo primero que me hace feliz al estar allí es:</label>	
			<br>
<table>
			<tr>
			<td>A Ver la arena, los rayos del sol, el azul transparente de del agua</td>	<td><input type="radio" name="Cq[11]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B El sonido de las olas, el murmullo del viento y el canto de las aves </td>	<td><input type="radio" name="Cq[11]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Sentir la arena, la caricia de la brisa en mi piel, la serenidad y el gozo ante la
inmensidad del mar</td>			<td><input type="radio" name="Cq[11]" value="3" required></td>
			</tr>
			</table>
				<br>

<label>13 Al pensar en una persona que amo lo primero que hago es:</label>	
			<br>
<table>
			<tr>
			<td>A Ver en mi mente su rostro y figura</td>	<td><input type="radio" name="Cq[12]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Escuchar su voz en mi mente </td>	<td><input type="radio" name="Cq[12]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Revivir sensaciones y sentimientos respecto a tal persona</td>			<td><input type="radio" name="Cq[12]" value="3" required></td>
			</tr>
			</table>
				<br>

<label>14 Descubro que alguien me ama de veras si:</label>	
			<br>
<table>
			<tr>
			<td>A Me mira con ojos de ternura</td>	<td><input type="radio" name="Cq[13]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Me habla afectuosamente o me dice: “Te amo” </td>	<td><input type="radio" name="Cq[13]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Se me acerca y me saluda y toca con cariño</td>			<td><input type="radio" name="Cq[13]" value="3" required></td>
			</tr>
			</table>
				<br>

<label>15 Cuando estoy muy feliz, mi mundo</label>	
			<br>
<table>
			<tr>
			<td>A Tiene brillo y coloridos nuevos</td>	<td><input type="radio" name="Cq[14]" value="1" required></td>
				</tr>	
			<tr>	
  			<td>B Resuena en mi interior con una armonía de música hermosa</td>	<td><input type="radio" name="Cq[14]" value="2" required></td>
				</tr>
			<tr>	
  			<td>C Aviva sentimientos de alegría y éxtasis</td>			<td><input type="radio" name="Cq[14]" value="3" required></td>
			</tr>
			</table>
				<br>
		<input type="submit" value="Guardar" /> 


			
	
	</form></div>
	
</body>
</html>