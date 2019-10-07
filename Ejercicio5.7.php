<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5.7</title>

   
   
</head>

<body>

    <?php

    $suma = 0;
    $n1 = 1;
    $n2 = 0;
    
    echo '0 ';
    for ($i=0; $i < 9; $i++) { 
        
       $suma =  $n1+$n2;
       $n1=$n2;
       $n2=$suma;
       echo $suma.' ';
       
    }

    ?>


</body>


</html>



