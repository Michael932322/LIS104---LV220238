<?php 



function calculardistaciaentrepuntos($x0,$y0,$x1=0,$y1=0){
    $distancia = sqrt(pow($x1-$x0,2)+pow($y1-$y0,2));
    return round($distancia,2);
}

function calcularmediavarianza(...$numeros){
    $suma = 0;
    $suma2 = 0;
    $n = count($numeros);
    foreach($numeros as $numero){
        $suma += $numero;
        $suma2 += pow($numero,2);
    }
    $media = $suma/$n;
    $varianza = ($suma2/$n)-pow($media,2);
    return ["promedio" => $media,
            "varianza" => $varianza];  
}   

function calcularfactorial($n){
    if($n==0){
        return 1;
    }else{
        return $n*calcularfactorial($n-1);
    }
}

echo "La distancia del punto al origen es: ".calculardistaciaentrepuntos(3,5)."<br>";
echo "La distancia del punto (3,5) y (1,1) es: ".calculardistaciaentrepuntos(3,5,1,1)."<br>";
$resultados = calcularmediavarianza(10,12,14,16,18);
echo "El promedio es: ".$resultados["promedio"]."<br>";
echo "La varianza es: ".$resultados["varianza"]."<br>";
echo "El factorial de 6 es: ".calcularfactorial(6)."<br>";


?>
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