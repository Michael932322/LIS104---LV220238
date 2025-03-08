<?php
// Definición de la clase Auto
class Auto {
    private $marca;
    private $modelo;
    private $color;
    private $image;

    function __construct($marca='Honda', $modelo='Civic', $color='Gris', $image='img/hondacivic.jpg') {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->image = $image;
    }

    function mostrar() {
        echo "<div class='card mb-3' style='width: 18rem;'>
                <div class='card-header'>{$this->marca}</div>
                <img class='card-img-top' src='{$this->image}' alt='Imagen del auto'>
                <div class='card-body'>
                    <h5 class='card-title'>{$this->marca} {$this->modelo}</h5>
                    <p class='card-text'>Modelo: {$this->modelo}<br>Color: {$this->color}</p>
                </div>
              </div>";
    }
}

// Definición de la clase Empleado
class Empleado {
    private $nombre;
    private $apellido;
    private $isss;
    private $renta;
    private $afp;
    private $prestamo;
    private $sueldoNominal;
    private $sueldoLiquido;
    private $pagoxhoraextra;

    const descISSS = 0.03;
    const descRENTA = 0.075;
    const descAFP = 0.0625;

    function __construct() {
        $this->nombre = "";
        $this->apellido = "";
        $this->sueldoLiquido = 0.0;
        $this->pagoxhoraextra = 0.0;
        $this->prestamo = 0.0;
    }

    function obtenerSalarioNeto($nombre, $apellido, $salario, $horasextras, $pagoxhoraextra=0.0, $prestamo=0.0) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->pagoxhoraextra = $horasextras * $pagoxhoraextra;
        $this->sueldoNominal = $salario;
        $this->prestamo = $prestamo;

        $totalIngresos = $salario + $this->pagoxhoraextra;
        $this->isss = $totalIngresos * self::descISSS;
        $this->afp = $totalIngresos * self::descAFP;

        $salarioConDescuentos = $totalIngresos - ($this->isss + $this->afp);
        
        if ($salarioConDescuentos > 2038.10) {
            $this->renta = $salarioConDescuentos * 0.3;
        } elseif ($salarioConDescuentos > 895.24) {
            $this->renta = $salarioConDescuentos * 0.2;
        } elseif ($salarioConDescuentos > 472.00) {
            $this->renta = $salarioConDescuentos * 0.1;
        } else {
            $this->renta = 0.0;
        }

        $this->sueldoLiquido = $totalIngresos - ($this->isss + $this->afp + $this->renta + $this->prestamo);
        $this->imprimirBoletaPago();
    }

    function imprimirBoletaPago() {
        echo "<table class='table'>
                <tr><td>Nombre:</td><td>{$this->nombre} {$this->apellido}</td></tr>
                <tr><td>Salario nominal:</td><td>$ " . number_format($this->sueldoNominal, 2) . "</td></tr>
                <tr><td>Horas extras:</td><td>$ " . number_format($this->pagoxhoraextra, 2) . "</td></tr>
                <tr><td>ISSS:</td><td>$ " . number_format($this->isss, 2) . "</td></tr>
                <tr><td>AFP:</td><td>$ " . number_format($this->afp, 2) . "</td></tr>
                <tr><td>Renta:</td><td>$ " . number_format($this->renta, 2) . "</td></tr>";
        if ($this->prestamo > 0) {
            echo "<tr><td>Descuento por préstamo:</td><td>$ " . number_format($this->prestamo, 2) . "</td></tr>";
        }
        echo "<tr><td><strong>Sueldo líquido:</strong></td><td><strong>$ " . number_format($this->sueldoLiquido, 2) . "</strong></td></tr>
              </table>";
    }
}

// Datos de autos disponibles
$autos = [
    new Auto("Peugeot", "307", "Gris", "img/peugeot.jpg"),
    new Auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg"),
    new Auto("BMW", "X3", "Negro", "img/bmwserie6.jpg"),
    new Auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg"),
    new Auto()
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos y Salarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="container">
    <h1 class="mt-4">Autos disponibles</h1>
    <form method="POST">
        <select name="autoSeleccionado" class="form-control mb-3">
            <option value="">Seleccione un auto</option>
            <?php foreach ($autos as $index => $auto) : ?>
                <option value="<?= $index ?>"><?= $auto->mostrar(); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Mostrar Auto</button>
    </form>
    <?php
        if (isset($_POST['autoSeleccionado']) && $_POST['autoSeleccionado'] !== '') {
            $autos[$_POST['autoSeleccionado']]->mostrar();
        }
    ?>

    <h1 class="mt-5">Cálculo de Salario</h1>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
        <input type="text" name="apellido" placeholder="Apellido" class="form-control mb-2">
        <input type="number" name="sueldo" placeholder="Sueldo" class="form-control mb-2">
        <input type="number" name="horasextras" placeholder="Horas Extras" class="form-control mb-2">
        <input type="number" name="pagohoraextra" placeholder="Pago por Hora Extra" class="form-control mb-2">
        <input type="number" name="prestamo" placeholder="Préstamo (si aplica)" class="form-control mb-2">
        <button type="submit" name="calcular" class="btn btn-success">Calcular Salario</button>
    </form>

    <?php
        if (isset($_POST['calcular'])) {
            $empleado = new Empleado();
            $empleado->obtenerSalarioNeto($_POST['nombre'], $_POST['apellido'], $_POST['sueldo'], $_POST['horasextras'], $_POST['pagohoraextra'], $_POST['prestamo']);
        }
    ?>
</body>
</html>
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