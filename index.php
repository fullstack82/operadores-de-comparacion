<?php

// Ejemplo de operadores de comparación
$nombre = "Pablo Picasso";
$edad = 32;
$ciudad = "Barcelona";
$continente = "Asia";
$mayoria_de_edad = 18;

// IF y anidar if
if ($edad >= $mayoria_de_edad) {
    echo "<h1>$nombre es mayor de edad </h1>";
    if ($continente == "Europa") {
        echo "<h2> y vive en $ciudad</h2>";
    } else {
        echo "<h2> y No es europeo</h2>";
    }
} else {
    echo "<h1>$nombre No es mayor de edad </h1>";
};


// Else If anidadps

$dia = 4;

if ($dia == 1) {
    echo "Es lunes";
} else {
    if ($dia == 2) {
        echo "Es martes";
    } else {
        if ($dia == 3) {
            echo "Es miercoles";
        } else {
            if ($dia == 4){
                echo "Es jueves";
            }else{
                if($dia == 5){
                    echo "Es viernes";
                }else{
                    if($dia == 6){
                        echo "Es sabado";
                    }else{
                        if($dia == 7){
                            echo "Es domingo";
                        }else{
                            echo "No existen más días ";
                        }
                    }
                }
            }
            
        }
    }
}
