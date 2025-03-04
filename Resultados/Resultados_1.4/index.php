<?php
function convertir($valor, $de, $a) {
    $unidades = [
        "metros" => 1,
        "yardas" => 1.09361,
        "pies" => 3.28084,
        "varas" => 1.1963
    ];
    
    if (!isset($unidades[$de]) || !isset($unidades[$a])) {
        return "Conversión no válida";
    }
    
    $valorEnMetros = $valor / $unidades[$de];
    return $valorEnMetros * $unidades[$a];
}

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST["valor"]);
    $de = $_POST["de"];
    $a = $_POST["a"];
    
    $resultado = convertir($valor, $de, $a);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Unidades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Conversor de Unidades</h2>
        <form method="post" action="">
            <label for="valor">Cantidad:</label>
            <input type="number" step="any" name="valor" required>
            
            <label for="de">Convertir de:</label>
            <select name="de" required>
                <option value="metros">Metros</option>
                <option value="yardas">Yardas</option>
                <option value="pies">Pies</option>
                <option value="varas">Varas</option>
            </select>
            
            <label for="a">A:</label>
            <select name="a" required>
                <option value="metros">Metros</option>
                <option value="yardas">Yardas</option>
                <option value="pies">Pies</option>
                <option value="varas">Varas</option>
            </select>
            
            <button type="submit">Convertir</button>
        </form>
        
        <?php if ($resultado !== ""): ?>
            <div class="resultado">
                <p>Resultado: <?= htmlspecialchars($resultado) ?></p>
            </div>
        <?php endif; ?>
    </div>
    <script src="script.js"></script>
    <button onclick="window.location.href='../../index.php'" style="
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
</body>
</html>
