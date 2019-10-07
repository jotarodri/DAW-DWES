<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4.2</title>
</head>
<body>
    
<?php

$añoActual =  2019;

echo(($añoActual%4 == 0 && $añoActual%100 != 0) || $añoActual %400 ==0)?"Es año bisiesto":"No es año bisiesto";

?>  

</body>
</html>