<?php 
//Definición de la clase 
class auto   {     
    //Propiedades de la clase auto     
    private $marca;     
    private $modelo;     
    private $color;     
    private $image;          
    //Método constructor     
    function __construct($marca='Honda', $modelo='Civic', $color='Gris', $image='img/hondacivic.jpg'){
        //El constructor inicializada los valores de las propiedades         
        //del objeto con los valores recibido en los argumentos          
        //del método constructor.         
        $this->marca = $marca;         
        $this->modelo = $modelo;         
        $this->color = $color;         
        $this->image = $image;     }          
        //Métodos de la clase     
        function mostrar(){         
            //El método mostrar() crea una tabla HTML donde se muestran
            //los detalles del objeto auto, como la marca, una imagen,         
            //el modelo y el color del auto.         
            $tabla  = "<div class='col-4 mb-3'>";            
            $tabla  .="<div class='card'>";         
            $tabla  .="<div class='card-header'>". $this->marca ."</div>";         
            $tabla  .="<img class='card-img-top' src='". $this->image ."' alt='Card image cap'>";         
            $tabla  .="<div class='card-body'>";         
            $tabla  .="<h5 class='card-title'>". $this->marca ." ". $this->modelo ."</h5>";         
            $tabla  .="<p class='card-text'> MODELO:". $this->modelo ."<br>";         
            $tabla .= "COLOR:". $this->color ."</p>";         
            $tabla  .="</div>";         
            $tabla  .="</div>";         
            $tabla  .="</div>";         
            echo $tabla;     
        } 
    } 
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