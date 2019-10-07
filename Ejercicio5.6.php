<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5.6</title>

   
   
</head>

<body>

    <?php

  
    $arraycolores = ["A152FF","684AE8","524AE8","EBAE67","DBE84A","FF52BF","EBAE67","CAFDC3","D7C3E8","B8EFFF"];

    echo "<table border=1px >";
    echo "<caption>Tablas de multiplicar</caption>";

  
for ($numero=1; $numero <=10 ; $numero++) { 
   
    $tabla = 1;
    echo '<tr bgcolor="'.$arraycolores[$numero-1].'">';
    echo '<td>'. $numero. '</td>';

    for ($tabla=0; $tabla <=10 ; $tabla++) { 
        echo '<td>'. $numero. ' * '. $tabla.' = '.$numero*$tabla.'</td>';
    }
    echo '</tr>';
}
echo "</table>";
    echo "</table>";
    ?>


</body>


</html>