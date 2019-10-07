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

            $horaActual = date ("g:i:s a");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo 'La hora actual es $horaActual';
           
            //El uso de comillas simple no nos muestra la variable $horaActual sino que muestra el texto tal cual.

            ?>   
           
        </h1>
       
    </body>
</html>