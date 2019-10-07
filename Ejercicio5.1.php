<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5.1</title>
</head>
<body>
    
<?php

$numero = 1;
echo "<table border=1px >";

while($numero <= 10){

echo "<tr>";

    echo "<td>".$numero."</td>";

    if ($numero %2 == 0) {
        echo "<td>Par</td>";
    }else {
        echo "<td>Impar</td>";
    }


if ($numero > 1) {
    
    $aux = 2;

    while ($numero % $aux != 0) {
    
        $aux++;
    }

    if ($aux == $numero) {
        echo "<td>Es primo</td>";
    }else {
        echo "<td>No es primo</td>";

    }

}else {
    echo "<td>No es primo</td>";
}
$numero++;
}
echo "</tr>";
echo "</table>";
?>  
</body>


</html>