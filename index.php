<?php
$projects = [
    'Ejemplo 1 - Guia 2' => 'Ejemplo_1\bisiesto.php',
    'Ejemplo 2 - Guia 2' => 'Ejemplo_2\Salario.php',
    'Ejemplo 3 - Guia 2' => 'Ejemplo_3\Compararnumeros.html',
    'Ejemplo 4 - Guia 2' => 'Ejemplo_4\Convertir.php',
    'Ejemplo 5 - Guia 2' => 'Ejemplo_5\Convmonedas.php',
    'Resultados - Guia 2' => 'Resultados_2\Calculo_dias.php'
];
/*<button onclick="window.location.href='../index.php'" style="
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
    ">Regresar</button> */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Proyectos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Menú de Proyectos</h1>
    <ul>
        <?php foreach ($projects as $name => $link): ?>
            <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
