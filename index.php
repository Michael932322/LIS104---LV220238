<?php
$guias = [
    'Guia 2' => [
        'Ejemplo 1' => 'Guia_2/Ejemplo_1.2/bisiesto.php',
        'Ejemplo 2' => 'Guia_2/Ejemplo_2.2/Salario.php',
        'Ejemplo 3' => 'Guia_2/Ejemplo_3.2/Compararnumeros.html',
        'Ejemplo 4' => 'Guia_2/Ejemplo_4.2/Convertir.php',
        'Ejemplo 5' => 'Guia_2/Ejemplo_5.2/Convmonedas.php',
    ],
    'Guia 3' => [
        'Ejemplo 1' => 'Guia_3/Ejemplo_1.3/Ejemplo1.php',
        'Ejemplo 2' => 'Guia_3/Ejemplo_2.3/Ejemplo2.php',
        'Ejemplo 3' => 'Guia_3/Ejemplo_3.3/index.php',
        'Ejemplo 4' => 'Guia_3/Ejemplo_4.3/index.php',
    ],
    'Guia 4' => [
        'Ejemplo 1' => 'Guia_4/Ejemplo_1.4/monedas.php',
        'Ejemplo 2' => 'Guia_4/Ejemplo_2.4/fibonachi.php',
        'Ejemplo 3' => 'Guia_4/Ejemplo_3.4/elmayor.php',
        'Ejemplo 4' => 'Guia_4/Ejemplo_4.4/select.php',
    ],
    'Guia 6' => [
        'Ejemplo 1' => 'Guia_6/Ejemplo_1.6/autospoo.php',
        'Ejemplo 2' => 'Guia_6/Ejemplo_2.6/bankform.php',
        'Ejemplo 3' => 'Guia_6/Ejemplo_3.6/sueldoneto.php',
        'Ejemplo 4' => 'Guia_6/Ejemplo_4.6/distanciadospuntos.php',
    ],
];

$ejercicios_clase = [
    'Clase 3' => 'Ejercicios_clase/Ejemplo_clase3/arreglos.php',
    'Clase 4' => 'Ejercicios_clase/Ejemplo_clase4/funciones.php',
    'Clase 5' => 'Ejercicios_clase/Ejemplo_clase5/index.php',
    'Clase 7' => 'Ejercicios_clase/Ejemplo_clase7/lis.php',
];

$resultados = [
    'Resultados Guia 2' => 'Resultados/Resultados_2.2/Calculo_dias.php',
    'Resultados Guia 3' => 'Resultados/Resultados_2.3/index.php',
    'Resultados Guia 4' => 'Resultados/Resultados_1.4/index.php',
    'Resultados Guia 6' => 'Resultados/Resultados_1,2.6/index.php',
    'Resultados Guia 7' => 'Resultados/Resultados_1.7/lis.php',
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Proyectos</title>
    <link rel="stylesheet" href="estilo.css">
    <script>
        function toggleSection(id) {
            var section = document.getElementById(id);
            section.style.display = (section.style.display === 'none') ? 'block' : 'none';
        }
    </script>
</head>
<body>
    <h1>Menú de Proyectos</h1>
    
    <h2 onclick="toggleSection('guias')">Guías</h2>
    <ul id="guias" style="display: none;">
        <?php foreach ($guias as $guia => $ejemplos): ?>
            <li><strong><?php echo $guia; ?></strong>
                <ul>
                    <?php foreach ($ejemplos as $name => $link): ?>
                        <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2 onclick="toggleSection('ejercicios')">Ejercicios de Clase</h2>
    <ul id="ejercicios" style="display: none;">
        <?php foreach ($ejercicios_clase as $name => $link): ?>
            <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h2 onclick="toggleSection('resultados')">Resultados</h2>
    <ul id="resultados" style="display: none;">
        <?php foreach ($resultados as $name => $link): ?>
            <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
