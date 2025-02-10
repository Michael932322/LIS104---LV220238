<?php
$projects = [
    'Ejemplo 1 - Guia 2' => 'Ejemplo_1.2\bisiesto.php',
    'Ejemplo 2 - Guia 2' => 'Ejemplo_2.2\Salario.php',
    'Ejemplo 3 - Guia 2' => 'Ejemplo_3.2\Compararnumeros.html',
    'Ejemplo 4 - Guia 2' => 'Ejemplo_4.2\Convertir.php',
    'Ejemplo 5 - Guia 2' => 'Ejemplo_5.2\Convmonedas.php',
    'Resultados - Guia 2' => 'Resultados_2.2\Calculo_dias.php',
    'Clase 3 - Guia 3' => 'Ejemplo_clase3\arreglos.php',
    'Ejemplo 1 - Guia 3' => 'Ejemplo_1.3\Ejemplo1.php',
    'Ejemplo 2 - Guia 3' => 'Ejemplo_2.3\Ejemplo2.php',
    'Ejemplo 3 - Guia 3' => 'Ejemplo_3.3\index.php',
    'Ejemplo 4 - Guia 3' => 'Ejemplo_4.3\index.php',
    'Resultados - Guia 3' => 'Resultados_2.3\index.php',
    'Clase 4 - Guia 4' => 'Ejemplo_clase4\funciones.php',
    'Ejemplo 1 - Guia 4' => 'Ejemplo_1.4\monedas.php',
    'Ejemplo 2 - Guia 4' => 'Ejemplo_2.4\fibonachi.php',
    'Ejemplo 3 - Guia 4' => 'Ejemplo_3.4\elmayor.php',
    'Ejemplo 4 - Guia 4' => 'Ejemplo_4.4\select.php',
    'Resultados - Guia 4' => 'Resultados_1.4\index.php',
];
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
