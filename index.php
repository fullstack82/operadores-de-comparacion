<?php

// Ejemplo de operadores de comparación
$nombre = "Pablo Picasso";
$edad = 32;
$ciudad = "Barcelona";
$continente = "Asia";
$mayoria_de_edad = 18;

// Anidar if
if($edad >= $mayoria_de_edad){
    echo "<h1>$nombre es mayor de edad </h1>";
    if($continente == "Europa"){
        echo "<h2> y vive en $ciudad</h2>";
    }else{
        echo "<h2> y No es europeo</h2>";
    }
    
}else{
    echo "<h1>$nombre No es mayor de edad </h1>";
};


