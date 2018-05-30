<?php

$uno=0;
$dos=0;
$tres=0;


for($i = 0; $i < count($_POST['Cq']); ++$i) {
    if($_POST['Cq'][$i] == '1') {
        ++$uno;
    }
	
	elseif($_POST['Cq'][$i] == '2'){
		++$dos;		
		
	}
	
	elseif($_POST['Cq'][$i] == '3'){
		++$tres;
		
	}

}

$visual=($uno*100)/15;
$auditivo=($dos*100)/15;
$kinestesico=($tres*100)/15;




/*echo ($visual);
echo nl2br("\n\r");
echo($auditivo);
echo nl2br("\n\r");
echo($kinestesico);
*/
?>

<html>
<head>
<title>
	
</title>	
	
</head>
<body>
	
	<tr>
	<td>
		</td>
	</tr>
	
	<table width="300" border="1">
  <tbody>
    <tr>
      <th scope="row">Visual   </th>
      <td><?php echo round($visual,2),"%" ?></td>
		
    </tr>
    <tr>
      <th scope="row">Auditivo</th>
      <td><?php echo round($auditivo,2),"%" ?></td>
		
    </tr>
    <tr>
      <th scope="row">Kinestesico</th>
      <td><?php echo round($kinestesico,2),"%" ?></td>
		
    </tr>
  </tbody>
</table>
	
</body>
	
	
</html>