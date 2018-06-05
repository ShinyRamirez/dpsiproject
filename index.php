
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-3.3.1.min.js" type="text/javascript" > </script>
	<script> 
	/*$(document).ready(function(){ $("a").click(function(evento){alert("has pulsado el enlace...");
	});
		}); */
					  
	</script>
	
<style>
	input[type=password] {padding:5px; border:2px solid #ccc;
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=password]:focus {border-color:#333;}
	
	
	input[type=text] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=text]:focus {border-color:#333; }
	
	input[type=email] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=email]:focus {border-color:#333; }

input[type=submit] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
	 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
	
	input[type=submit]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;
		
	}
	
	input[type=button] {padding:5px 10px; background:#b9dfff; color: #FFFFFF; border:1px solid #eeeeee;
	 box-shadow: 5px 5px 5px #eee; text-shadow: none;
    cursor:pointer;
    -webkit-border-radius: 20px;
    border-radius: 20px; }
	
	input[type=button]:hover{
		background: #016ABC;
		color:#FFFFFF; border: 1px solid #eee; border-radius: 20px; box-shadow: 5px 5px 5px #eee; text-shadow:none;
		
	}
	
	
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 1px 1px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
	
body {
    
	background-image: url(img/gradientglow.jpg);
    
}

</style>
	
</head>
<body>
	
<div align="right"> 
	<input type="button" onClick="location.href='/login/admin.php'" value="Admin" />
	<input type="button" onClick="location.href='/login/menu.php'" value="Menu"/>
	<input type="button" onclick="location.href='/login/registrousr.php' "value="Registrarse" />
	</div>
<div align=center> <h2 style="color: turquoise">OROBUX LOGIN</h2><br>

<form name="login" action="usuario.php" method="post"> 
	
	<label>Nombre de usuario</label><br>
	<input type="email" style="width:215px; height:25px " name="username" placeholder="Usuario" required /><br><br><br>
	<label>Contraseña</label><br>
	<input type="password" style="width:230px; height:35px" name="password" placeholder="Contraseña" required/><br>
	
	<br><input type="submit" value="Login" /> 
	
	<br>
	

	
  </form>
	 
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>
	
</body>
</html>