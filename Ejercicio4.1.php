<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4.1</title>
</head>
<body>
    
<?php

//("H:i:s");

$horaActual =  date ("H:i:s");

echo 'Hora actual -> ' . $horaActual . '<br>';

if($horaActual > "07:00:00" && $horaActual < "15:00:00"){
echo 'Buenos dias';
}elseif($horaActual > "15:00:00" && $horaActual < "21:00:00"){
    echo 'Buenas tardes';
}else{
    echo 'Buenas noches';
}

?>  

</body>
</html>