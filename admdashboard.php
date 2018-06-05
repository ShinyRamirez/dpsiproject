
<div id="countdown"></div> 

<script type="text/javascript"> 
    var countdown_time = 14400; //secconds 
<?php 
	//session_start();
    #Si la variable $_SESSION['countdown_start'] está declarada => Han recargado la página => Establecemos el tiempo de la cuenta atras a (TIME()ACTUAL - TIME()DE SESIÓN) 
    if(isset($_SESSION['countdown_start'])){ 
        echo "countdown_time -= ". time() - $_SESSION['countdown_start'] . ";"; 
    }else{ 
        $_SESSION['countdown_start'] = time(); 
    } 
?> 
    /* Función controladora de la cuenta atrás */ 
    function countdown(cd_time){ 
        document.getElementById('countdown').innerHTML = cd_time; 
        countdown = setInterval( function(){ 
            if(cd_time>0){ 
                cd_time--; 
                document.getElementById('countdown').innerHTML = cd_time; 
            }else{ 
                showButton(); 
                clearInterval(countdown); 
            } 
        }, 1000); 
    } 
     
    /* Función para mostrar el boton en cuanto se acaba el countdown */ 
    function showButton(){ 
        document.getElementById('countdown').innerHTML = "<a href='mipagina.com'>Continuar</a>" 
    } 
     
    /* Iniciar la cuenta atrás al cargar la página */ 
    document.addEventListener("load", countdown(countdown_time), false); 
</script>

<?php 
	
	echo nl2br("hola este deberia ser el dashboard del administrador, donde se podra ver los usuarios registrados \r\n");
echo nl2br(" se podra eliminar a los existentes\r\n");
echo(" pero aun no esta desarrollada :p");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
	
	<script language="javascript">
<!--
//Codigo que muestra una cuenta atras hasta finalizar el tiempo indicado
//La Web del Programador
//http://www.lawebdelprogramador.com

//variables que determinan el tital de horas, minutos y segundos para la cuenta atras
toHour=0;
toMinute=1;
toSecond=0;

//cuenta atras
function countDown()
{
	toSecond=toSecond-1;
	if(toSecond<0)
	{
		toSecond=59;
		toMinute=toMinute-1;
	}
	form.second.value=toSecond;

	if(toMinute<0)
	{
		toMinute=59;
		toHour=toHour-1;
	}
	form.minute.value=toMinute;

	form.hour.value=toHour;
	if(toHour<0)
	{
		//final
		form.second.value=0;
		form.minute.value=0;
		form.hour.value=0;
	}else{
		setTimeout("countDown()",1000);
	}
}
-->
</script>
</head>

<body onLoad="countDown();">
	
	<input type="button" onClick="location.href='/login/logout.php'" value="Logout" />
	
	
	<form name="form">
	Tiempo restante...: 
	<input type="text" size="5" class="form_input" name="hour" disabled>:
	<input type="text" size="5" class="form_input" name="minute" disabled>:
	<input type="text" size="5" class="form_input" name="second" disabled>
</form>
</body>
</html>