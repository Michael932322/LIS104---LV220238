<!DOCTYPE html>
<html lang="es">
<head>
 <title>Productos de la tienda</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">'
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>'
 <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<section>
<article>
<table class='table table-bordered'>
 <thead>
 <th class="head">Productos</th>
 </thead>
 <tbody>
 <?php
 if(isset($_POST['enviar'])){
 if(isset($_POST['ingresados'])){
 foreach($_POST["ingresados"] as $productos){
 echo "<tr>\n<td>$productos</td>\n</tr>";
 }
 }
 }
 ?>
 </tbody>
</table>
</article>
</section>
<button onclick="window.location.href='index.php'" style="
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