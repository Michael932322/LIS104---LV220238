<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos de Días y Precios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cálculo de Días Vividos</h2>
        <form method="post">
            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNacimiento" required>
            <button type="submit" name="calcularDias">Calcular</button>
        </form>
        <p class="result">
            <?php
                if (isset($_POST['calcularDias'])) {
                    $fechaNacimiento = new DateTime($_POST['fechaNacimiento']);
                    $hoy = new DateTime();
                    $diasVividos = $hoy->diff($fechaNacimiento)->days;
                    echo "Has vivido aproximadamente $diasVividos días.";
                }
            ?>
        </p>
    </div>

    <div class="container">
        <h2>Cálculo de Precio Final</h2>
        <form method="post">
            <label for="precioBase">Precio Base del Artículo:</label>
            <input type="number" name="precioBase" step="0.01" required>
            <button type="submit" name="calcularPrecio">Calcular</button>
        </form>
        <p class="result">
            <?php
                if (isset($_POST['calcularPrecio'])) {
                    $precioBase = floatval($_POST['precioBase']);
                    $iva = $precioBase * 0.13;
                    $descuento = $precioBase > 100 ? $precioBase * 0.10 : 0;
                    $precioFinal = $precioBase + $iva - $descuento;
                    echo "Precio final: $" . number_format($precioFinal, 2) . " (IVA: $" . number_format($iva, 2) . ", Descuento: $" . number_format($descuento, 2) . ")";
                }
            ?>
        </p>
    </div>
    <button onclick="window.location.href='../index.php'" style="
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