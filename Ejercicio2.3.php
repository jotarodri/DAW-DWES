<html>

<head>

<style>

h1{

color:blue;

}

    </style>

</head>
    <body>
       
        <h1>
            <?php

            $horaActual = date ("l d:F:Y ");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo "La fecha de hoy es $horaActual";
           
            ?>   
           
        </h1>
       
    </body>
</html>