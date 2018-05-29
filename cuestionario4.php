<?php
require("conexion.php");
include("auth.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
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
<title>CUESTIONARIO EA</title>
	
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
		<label>1.- MAS,  2.-MENOS</label><br> 
		</div>
		<hr>
	<p style="color: ghostwhite">Bienvenido <?php echo $_SESSION['username']; ?>!</p>
	</header>
	<br><br><br><br><br>
	<div align=center>
	<form name="cuestionario4" action="menu.php" method="post">
		
		
		
		<label> 1. Tengo fama de decir lo que pienso claramente y sin rodeos</label>	




			<br>

			
<input type="radio" name="q1" value="1"> MAS            <input type="radio" name="q1" value="2"> MENOS



	
		<br><br>

<label> 2. Estoy seguro lo que es bueno y lo que es malo, lo que está bien y lo que está mal.</label>	




			<br>

			
<input type="radio" name="q2" value="1"> MAS            <input type="radio" name="q2" value="2"> MENOS



	
		<br><br>

<label> 3. Muchas veces actúo sin mirar las consecuencias	<br>

			
<input type="radio" name="q3" value="1"> MAS            <input type="radio" name="q3" value="2"> MENOS



	
		<br><br>

<label> 4. Normalmente trato de resolver los problemas metódicamente y paso a paso</label>	




			<br>

			
<input type="radio" name="q4" value="1"> MAS            <input type="radio" name="q4" value="2"> MENOS



	
		<br><br>

<label> 5. Creo que los formalismos coartan y limitan la actuación libre de las personas</label>	




			<br>

			
<input type="radio" name="q5" value="1"> MAS            <input type="radio" name="q5" value="2"> MENOS



	
		<br><br>
<label> 6. Me interesa saber cuáles son los sistemas de valores de los demás y con qué criterios actúan</label>	




			<br>

			
<input type="radio" name="q6" value="1"> MAS            <input type="radio" name="q6" value="2"> MENOS



	
		<br><br>
<label>7. Pienso que el actuar intuitivamente puede ser siempre tan válido como actuar reflexivamente</label>	




			<br>

			
<input type="radio" name="q7" value="1"> MAS            <input type="radio" name="q7" value="2"> MENOS



	
		<br><br>
<label> 8. Creo que lo más importante es que las cosas funcionen</label>	




			<br>

			
<input type="radio" name="q8" value="1"> MAS            <input type="radio" name="q8" value="2"> MENOS



	
		<br><br>
<label> 9. Procuro estar al tanto de lo que ocurre aquí y ahora.</label>	




			<br>

			
<input type="radio" name="q9" value="1"> MAS            <input type="radio" name="q9" value="2"> MENOS



	
		<br><br>

<label> 10. Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a conciencia</label>	




			<br>

			
<input type="radio" name="q10" value="1"> MAS            <input type="radio" name="q10" value="2"> MENOS



	
		<br><br>


<label> 11. Estoy a gusto siguiendo un orden, en las comidas, en el estudio, haciendo ejercicio regularmente</label>	




			<br>

			
<input type="radio" name="q11" value="1"> MAS            <input type="radio" name="q11" value="2"> MENOS



	
		<br><br>

<label>12. Cuando escucho una nueva idea en seguida comienzo a pensar cómo ponerla en práctica </label>	




			<br>

			
<input type="radio" name="q12" value="1"> MAS            <input type="radio" name="q12" value="2"> MENOS



	
		<br><br>

<label> 13. Prefiero las ideas originales y novedosas aunque no sean prácticas</label>	




			<br>

			
<input type="radio" name="q13" value="1"> MAS            <input type="radio" name="q13" value="2"> MENOS



	
		<br><br>

<label> 14. Admito y me ajusto a las normas sólo si me sirven para lograr mis objetivos</label>	




			<br>

			
<input type="radio" name="q14" value="1"> MAS            <input type="radio" name="q14" value="2"> MENOS



	
		<br><br>

<label>15. Normalmente encajo bien con personas reflexivas, analíticas y me cuesta sintonizar con personas demasiado espontáneas, imprevisibles </label>	




			<br>

			
<input type="radio" name="q15" value="1"> MAS            <input type="radio" name="q15" value="2"> MENOS



	
		<br><br>

<label>16. Escucho con más frecuencia que hablo </label>	




			<br>

			
<input type="radio" name="q16" value="1"> MAS            <input type="radio" name="q16" value="2"> MENOS



	
		<br><br>

<label> 17. Prefiero las cosas estructuradas a las desordenadas</label>	




			<br>

			
<input type="radio" name="q17" value="1"> MAS            <input type="radio" name="q17" value="2"> MENOS



	
		<br><br>

<label> 18. Cuando poseo cualquier información, trato de interpretarla bien antes de manifestar alguna conclusión</label>	




			<br>

			
<input type="radio" name="q18" value="1"> MAS            <input type="radio" name="q18" value="2"> MENOS



	
		<br><br>

<label> 19. Antes de tomar una decisión estudio con cuidado sus ventajas e inconvenientes</label>	




			<br>

			
<input type="radio" name="q19" value="1"> MAS            <input type="radio" name="q19" value="2"> MENOS



	
		<br><br>

<label> 20. Me crezco con el reto de hacer algo nuevo y diferente</label>	




			<br>

			
<input type="radio" name="q20" value="1"> MAS            <input type="radio" name="q20" value="2"> MENOS



	
		<br><br>



<label> 21. Casi siempre procuro ser coherente con mis criterios y sistemas de valores. Tengo principios y los sigo</label>	




			<br>

			
<input type="radio" name="q21" value="1"> MAS            <input type="radio" name="q21" value="2"> MENOS



	
		<br><br>

<label>22. Cuando hay una discusión no me gusta ir con rodeos </label>	




			<br>

			
<input type="radio" name="q22" value="1"> MAS            <input type="radio" name="q22" value="2"> MENOS



	
		<br><br>

<label> 23. Me disgusta implicarme afectivamente en mi ambiente de trabajo. Prefiero mantener relaciones distantes</label>	




			<br>

			
<input type="radio" name="q23" value="1"> MAS            <input type="radio" name="q23" value="2"> MENOS



	
		<br><br>

<label> 24. Me gustan más las personas realistas y concretas que las teóricas</label>	




			<br>

			
<input type="radio" name="q24" value="1"> MAS            <input type="radio" name="q24" value="2"> MENOS



	
		<br><br>

<label> 25. Me cuesta ser creativo/a, romper estructuras</label>	




			<br>

			
<input type="radio" name="q25" value="1"> MAS            <input type="radio" name="q25" value="2"> MENOS



	
		<br><br>

<label>26. Me siento a gusto con personas espontáneas y divertidas </label>	




			<br>

			
<input type="radio" name="q26" value="1"> MAS            <input type="radio" name="q26" value="2"> MENOS



	
		<br><br>

<label> 27. La mayoría de las veces expreso abiertamente cómo me siento</label>	




			<br>

			
<input type="radio" name="q27" value="1"> MAS            <input type="radio" name="q27" value="2"> MENOS



	
		<br><br>

<label>28. Me gusta analizar y dar vueltas a las cosas </label>	




			<br>

			
<input type="radio" name="q28" value="1"> MAS            <input type="radio" name="q28" value="2"> MENOS



	
		<br><br>

<label> 29. Me molesta que la gente no se tome en serio las cosas</label>	




			<br>

			
<input type="radio" name="q29" value="1"> MAS            <input type="radio" name="q29" value="2"> MENOS



	
		<br><br>

<label>30. Me atrae experimentar y practicar las últimas técnicas y novedades </label>	




			<br>

			
<input type="radio" name="q30" value="1"> MAS            <input type="radio" name="q30" value="2"> MENOS



	
		<br><br>



<label>31. Soy cauteloso/a a la hora de sacar conclusiones </label>	




			<br>

			
<input type="radio" name="q31" value="1"> MAS            <input type="radio" name="q31" value="2"> MENOS



	
		<br><br>



<label> 32. Prefiero contar con el mayor número de fuentes de información. Cuantos más datos reúna para reflexionar, mejor</label>	




			<br>

			
<input type="radio" name="q32" value="1"> MAS            <input type="radio" name="q32" value="2"> MENOS



	
		<br><br>


<label> 33. Tiendo a ser perfeccionista</label>	




			<br>

			
<input type="radio" name="q33" value="1"> MAS            <input type="radio" name="q33" value="2"> MENOS



	
		<br><br>


<label> 34. Prefiero oír las opiniones de los demás antes de exponer la mía</label>	




			<br>

			
<input type="radio" name="q34" value="1"> MAS            <input type="radio" name="q34" value="2"> MENOS



	
		<br><br>


<label> 35. Me gusta afrontar la vida espontáneamente y no tener que planificar todo previamente</label>	




			<br>

			
<input type="radio" name="q35" value="1"> MAS            <input type="radio" name="q35" value="2"> MENOS



	
		<br><br>


<label> 36. En las discusiones me gusta observar cómo actúan los demás participantes</label>	




			<br>

			
<input type="radio" name="q36" value="1"> MAS            <input type="radio" name="q36" value="2"> MENOS



	
		<br><br>


<label>37. Me siento incómodo con las personas calladas y demasiado analíticas </label>	




			<br>

			
<input type="radio" name="q37" value="1"> MAS            <input type="radio" name="q37" value="2"> MENOS



	
		<br><br>


<label> 38. Juzgo con frecuencia las ideas de los demás por su valor práctico</label>	




			<br>

			
<input type="radio" name="q38" value="1"> MAS            <input type="radio" name="q38" value="2"> MENOS



	
		<br><br>


<label> 39. Me agobio si me obligan a acelerar mucho el trabajo para cumplir un plazo</label>	




			<br>

			
<input type="radio" name="q39" value="1"> MAS            <input type="radio" name="q39" value="2"> MENOS



	
		<br><br>


<label> 40. En las reuniones apoyo las ideas prácticas y realistas</label>	




			<br>

			
<input type="radio" name="q40" value="1"> MAS            <input type="radio" name="q40" value="2"> MENOS



	
		<br><br>


--

<label> 41. Es mejor gozar del momento presente que deleitarse pensando en el pasado o en el futuro</label>	




			<br>

			
<input type="radio" name="q41" value="1"> MAS            <input type="radio" name="q41" value="2"> MENOS



	
		<br><br>


<label> 42. Me molestan las personas que siempre desean apresurar las cosas</label>	




			<br>

			
<input type="radio" name="q42" value="1"> MAS            <input type="radio" name="q42" value="2"> MENOS



	
		<br><br>


<label> 43. Aporto ideas nuevas y espontáneas en los grupos de discusión</label>	




			<br>

			
<input type="radio" name="q43" value="1"> MAS            <input type="radio" name="q43" value="2"> MENOS



	
		<br><br>


<label> 44. Pienso que son más consistentes las decisiones fundamentadas en un minucioso análisis que las basadas en la intuición</label>	




			<br>

			
<input type="radio" name="q44" value="1"> MAS            <input type="radio" name="q44" value="2"> MENOS



	
		<br><br>


<label>45. Detecto frecuentemente la inconsistencia y puntos débiles en las argumentaciones de los demás </label>	




			<br>

			
<input type="radio" name="q45" value="1"> MAS            <input type="radio" name="q45" value="2"> MENOS



	
		<br><br>


<label> 46. Creo que es preciso saltarse las normas muchas más veces que cumplirlas</label>	




			<br>

			
<input type="radio" name="q46" value="1"> MAS            <input type="radio" name="q46" value="2"> MENOS



	
		<br><br>


<label>47. A menudo caigo en la cuenta de otras formas mejores y más prácticas de hacer las cosas </label>	




			<br>

			
<input type="radio" name="q47" value="1"> MAS            <input type="radio" name="q47" value="2"> MENOS



	
		<br><br>


<label> 48. En conjunto hablo más que escucho</label>	




			<br>

			
<input type="radio" name="q48" value="1"> MAS            <input type="radio" name="q48" value="2"> MENOS



	
		<br><br>


<label> 49. Prefiero distanciarme de los hechos y observarlos desde otras perspectivas</label>	




			<br>

			
<input type="radio" name="q49" value="1"> MAS            <input type="radio" name="q49" value="2"> MENOS



	
		<br><br>


<label> 50. Estoy convencido/a que debe imponerse la lógica y el razonamiento</label>	




			<br>

			
<input type="radio" name="q50" value="1"> MAS            <input type="radio" name="q50" value="2"> MENOS



	
		<br><br>


--

<label> 51. Me gusta buscar nuevas experiencias</label>	




			<br>

			
<input type="radio" name="q51" value="1"> MAS            <input type="radio" name="q51" value="2"> MENOS



	
		<br><br>


<label> 52. Me gusta experimentar y aplicar las cosas.</label>	




			<br>

			
<input type="radio" name="q52" value="1"> MAS            <input type="radio" name="q52" value="2"> MENOS



	
		<br><br>


<label> 53. Pienso que debemos llegar pronto al grano, al meollo de los temas</label>	




			<br>

			
<input type="radio" name="q53" value="1"> MAS            <input type="radio" name="q53" value="2"> MENOS



	
		<br><br>


<label> 54. Siempre trato de conseguir conclusiones e ideas claras</label>	




			<br>

			
<input type="radio" name="q54" value="1"> MAS            <input type="radio" name="q54" value="2"> MENOS



	
		<br><br>


<label>55. Prefiero discutir cuestiones concretas y no perder el tiempo con charlas vacías </label>	




			<br>

			
<input type="radio" name="q55" value="1"> MAS            <input type="radio" name="q55" value="2"> MENOS



	
		<br><br>


<label> 56. Me impaciento con las argumentaciones irrelevantes e incoherentes en las reuniones</label>	




			<br>

			
<input type="radio" name="q56" value="1"> MAS            <input type="radio" name="q56" value="2"> MENOS



	
		<br><br>


<label> 57. Compruebo antes si las cosas funcionan realmente</label>	




			<br>

			
<input type="radio" name="q57" value="1"> MAS            <input type="radio" name="q57" value="2"> MENOS



	
		<br><br>


<label>58. Hago varios borradores antes de la redacción definitiva de un trabajo </label>	




			<br>

			
<input type="radio" name="q58" value="1"> MAS            <input type="radio" name="q58" value="2"> MENOS



	
		<br><br>


<label> 59. Soy consciente de que en las discusiones ayudo a los demás a mantenerse centrados en el tema, evitando divagaciones</label>	




			<br>

			
<input type="radio" name="q59" value="1"> MAS            <input type="radio" name="q59" value="2"> MENOS



	
		<br><br>


<label> 60. Observo que, con frecuencia, soy uno de los más objetivos y desapasionados en las discusiones</label>	




			<br>

			
<input type="radio" name="q60" value="1"> MAS            <input type="radio" name="q60" value="2"> MENOS



	
		<br><br>

--

<label>61. Cuando algo va mal, le quito importancia y trato de hacerlo mejor </label>	




			<br>

			
<input type="radio" name="q61" value="1"> MAS            <input type="radio" name="q61" value="2"> MENOS



	
		<br><br>


<label> 62. Rechazo ideas originales y espontáneas si no las veo prácticas</label>	




			<br>

			
<input type="radio" name="q62" value="1"> MAS            <input type="radio" name="q62" value="2"> MENOS



	
		<br><br>


<label>63. Me gusta sopesar diversas alternativas antes de tomar una decisión </label>	




			<br>

			
<input type="radio" name="q63" value="1"> MAS            <input type="radio" name="q63" value="2"> MENOS



	
		<br><br>


<label>64. Con frecuencia miro hacia adelante para prever el futuro</label>	




			<br>

			
<input type="radio" name="q64" value="1"> MAS            <input type="radio" name="q64" value="2"> MENOS



	
		<br><br>


<label>65. En los debates prefiero desempeñar un papel secundario antes que ser el líder o el que más participa</label>	




			<br>

			
<input type="radio" name="q65" value="1"> MAS            <input type="radio" name="q65" value="2"> MENOS



	
		<br><br>


<label> 66. Me molestan las personas que no siguen un enfoque lógico</label>	




			<br>

			
<input type="radio" name="q66" value="1"> MAS            <input type="radio" name="q66" value="2"> MENOS



	
		<br><br>


<label> 67. Me resulta incómodo tener que planificar y prever las cosas</label>	




			<br>

			
<input type="radio" name="q67" value="1"> MAS            <input type="radio" name="q67" value="2"> MENOS



	
		<br><br>


<label> 68. Creo que el fin justifica los medios en muchos casos</label>	




			<br>

			
<input type="radio" name="q68" value="1"> MAS            <input type="radio" name="q68" value="2"> MENOS



	
		<br><br>


<label> 69. Suelo reflexionar sobre los asuntos y problemas</label>	




			<br>

			
<input type="radio" name="q69" value="1"> MAS            <input type="radio" name="q69" value="2"> MENOS



	
		<br><br>


<label> 70. El trabajar a conciencia me llena de satisfacción y orgullo</label>	




			<br>

			
<input type="radio" name="q70" value="1"> MAS            <input type="radio" name="q70" value="2"> MENOS



	
		<br><br>

--

<label> 71. Ante los acontecimientos trato de descubrir los principios y teorías en que se basan</label>	




			<br>

			
<input type="radio" name="q71" value="1"> MAS            <input type="radio" name="q71" value="2"> MENOS



	
		<br><br>


<label> 72. Con tal de conseguir el objetivo que pretendo soy capaz de herir sentimientos ajenos</label>	




			<br>

			
<input type="radio" name="q72" value="1"> MAS            <input type="radio" name="q72" value="2"> MENOS



	
		<br><br>


<label>73. No me importa hacer todo lo necesario para que sea efectivo mi trabajo </label>	




			<br>

			
<input type="radio" name="q73" value="1"> MAS            <input type="radio" name="q73" value="2"> MENOS



	
		<br><br>


<label>74. Con frecuencia soy una de las personas que más anima las fiestas. </label>	




			<br>

			
<input type="radio" name="q74" value="1"> MAS            <input type="radio" name="q74" value="2"> MENOS



	
		<br><br>


<label> 75. Me aburro enseguida con el trabajo metódico y minucioso</label>	




			<br>

			
<input type="radio" name="q75" value="1"> MAS            <input type="radio" name="q75" value="2"> MENOS



	
		<br><br>


<label>76. La gente con frecuencia cree que soy poco sensible a sus sentimientos </label>	




			<br>

			
<input type="radio" name="q76" value="1"> MAS            <input type="radio" name="q76" value="2"> MENOS



	
		<br><br>


<label>77. Suelo dejarme llevar por mis intuiciones </label>	




			<br>

			
<input type="radio" name="q77" value="1"> MAS            <input type="radio" name="q77" value="2"> MENOS



	
		<br><br>


<label> 78. Si trabajo en grupo procuro que se siga un método y un orden</label>	




			<br>

			
<input type="radio" name="q78" value="1"> MAS            <input type="radio" name="q78" value="2"> MENOS



	
		<br><br>


<label> 79. Con frecuencia me interesa averiguar lo que piensa la gente</label>	




			<br>

			
<input type="radio" name="q79" value="1"> MAS            <input type="radio" name="q79" value="2"> MENOS



	
		<br><br>


<label> 80. Esquivo los temas subjetivos, ambiguos y poco claros</label>	




			<br>

			
<input type="radio" name="q80" value="1"> MAS            <input type="radio" name="q80" value="2"> MENOS<br><br>



	
		<br><br>
	<input type="submit" value="Guardar" /> 

		</form>
	</div>
</body>
</html>