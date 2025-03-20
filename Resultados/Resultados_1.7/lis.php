<?php 
require_once 'Models/Autoresmodel.php';
$model = new Autoresmodel();
$autores = [
    'codigo_autor'=>"AUT789",
    'nombre_autor'=>"michael",
    'nacionalidad'=>"Salvadoreña"
];
//echo $model->insert($autores);
//echo $model->delete('AUT789');
//echo $model->update($autores);

var_dump($model->get('')); 
?>
<button onclick="window.location.href='../../index.php'" style="
padding: 8px 12px; /* Reduce el espacio interno */
font-size: 14px; /* Hace el texto un poco más pequeño */
background-color: #ff5e62;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
position: fixed;
bottom: 10px;
left: 50%;
transform: translateX(-50%);
z-index: 1000;
width: 100px; /* Define un ancho fijo más pequeño */
">Regresar</button>