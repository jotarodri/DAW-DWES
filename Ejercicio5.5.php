<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5.5</title>
</head>
<body>
    
<?php

$numero = 1;

echo '<table border=1px>';
/*
do {
    echo '<tr>';
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

} while ($numero <=10);
*/

for ($numero=1; $numero <= 10 ; $numero++) { 
    
    echo '<tr>';
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

        if($aux == $numero){
            echo '<td>Es primo </td>';
        }else{
            echo '<td>No es primo </td>';
        }
       

    }else {
        echo "<td>No es primo</td>";
    }
}

echo "</tr>";
echo "</table>";

?>  
</body>


</html>