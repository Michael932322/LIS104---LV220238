<?php

$edades = [10,14,25,96,96,7];

echo $edades[0]."<br/>";

$edades[1]=28;
unset($edades[0]);
print_r($edades);

echo "<h2>Recorriendo el arreglo</h2>";
foreach($edades as $edad){
    echo "<p>$edad</p>";
}   

$tamaño = count($edades);
echo "<p>El tamaño del arreglo es $tamaño</p>";

//ordenarlo
sort($edades);
$edades = array_reverse($edades);
print_r($edades);


$datos_personales["nombre"] ="Michael";
$datos_personales["Apellido"]="Lopez";
$datos_personales["estatura"]=1.75;
$datos_personales["Sexo"]="Masculino";

echo "<h2>Imprimiendo los elementos del arreglo</h2>";
foreach($datos_personales as $clave =>$dato){
    echo "<p>$clave : $dato</p>";
}

?>

<html>
<button onclick="window.location.href='../index.php'" style="
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1000;
    ">Regresar</button>
    </html>