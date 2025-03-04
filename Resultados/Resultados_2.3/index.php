<?php
$estudiantes = [
    ["nombre" => "Carlos López", "tarea" => 85, "investigacion" => 90, "examen" => 78],
    ["nombre" => "María Pérez", "tarea" => 92, "investigacion" => 88, "examen" => 95],
    ["nombre" => "Juan Martínez", "tarea" => 75, "investigacion" => 80, "examen" => 85],
    ["nombre" => "Ana Castillo", "tarea" => 88, "investigacion" => 92, "examen" => 90]
];

function calcularPromedio($tarea, $investigacion, $examen)
{
    return round(($tarea * 0.50) + ($investigacion * 0.30) + ($examen * 0.20), 2);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de Estudiantes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Listado de Notas</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tarea (50%)</th>
                    <th>Investigación (30%)</th>
                    <th>Examen (20%)</th>
                    <th>Promedio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) : ?>
                    <tr>
                        <td><?= $estudiante["nombre"] ?></td>
                        <td><?= $estudiante["tarea"] ?></td>
                        <td><?= $estudiante["investigacion"] ?></td>
                        <td><?= $estudiante["examen"] ?></td>
                        <td class="promedio"><?= calcularPromedio($estudiante["tarea"], $estudiante["investigacion"], $estudiante["examen"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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
</body>
</html>
