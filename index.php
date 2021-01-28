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


// Else If anidados (solo es una prueba, no se debe hacer así)

/*$dia = 4;

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
}*/

// La manera correcta de hacerlo, usando elseif;
$dia = 5;
if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} elseif ($dia == 6) {
    echo "Sabado";
} elseif ($dia == 7) {
    echo "Domingo";
} else {
    echo "NO existe ese dia de la semana";
};

echo "<hr>";

// Operadores logicos

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;


if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {    // Se tienen que cumplir las dos condiciones (&& = signifinca and(y))
    echo "Esta en edad de trabajar";
} else {
    echo "No puede trabajar";
}
