<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5.2</title>

   
   
</head>

<body>

    <?php

    $numero = 1;
    $arraycolores = ["A152FF","684AE8","524AE8","EBAE67","DBE84A","FF52BF","EBAE67","CAFDC3","D7C3E8","B8EFFF"];

    echo "<table border=1px >";
    echo "<caption>Tablas de multiplicar</caption>";

    /*while ($numero <= 10) {
        $tabla = 1;
        echo '<tr bgcolor="'.$arraycolores[$numero-1].'">';
        echo '<td>'. $numero. '</td>';
        while ($tabla <= 10) {
            
        
        echo '<td>'. $numero. ' * '. $tabla.' = '.$numero*$tabla.'</td>';
        
        $tabla++;
        
        }
        $numero++;
        echo '</tr>';
    }*/

  do {
      
    $tabla = 1;
    echo '<tr bgcolor="'.$arraycolores[$numero-1].'">';
    echo '<td>'. $numero. '</td>';

    do {
        echo '<td>'. $numero. ' * '. $tabla.' = '.$numero*$tabla.'</td>';
        
        $tabla++;
    } while ($tabla<=10);
    $numero++;
    echo '</tr>';
  } while ($numero <=10);

  
    echo "</table>";
    ?>


</body>


</html>