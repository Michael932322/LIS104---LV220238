<?php

    include 'validaciones.php';
    session_start();

    if(!empty($_POST)){
        $errores = [];
        $nombres = $_POST['nombres']?? '';
        $apellidos = $_POST['apellidos']?? '';
        $correo = $_POST['correo']?? '';
        $telefono = $_POST['telefono']?? '';
        $carnet = $_POST['carnet']?? '';

        if(empty(trim($nombres))){
            array_push($errores, "El campo nombres es obligatorio");
        }else if(!isText($nombres)){
            array_push($errores, "El campo nombres solo puede contener letras y espacios");
        }

        if(empty(trim($apellidos))){
            array_push($errores, "El campo apellidos es obligatorio");
        }else if(!isText($apellidos)){
            array_push($errores, "El campo apellidos solo puede contener letras y espacios");
        }

        if(empty(trim($carnet))){
            array_push($errores, "El campo carnet es obligatorio");
        }else if(!isCarnet($carnet)){
            array_push($errores, "Carne no valido");
        }
        
        if(empty(trim($telefono))){
            array_push($errores, "El campo telefono es obligatorio");
        }else if(!isPhone($telefono)){
            array_push($errores, "El campo telefono solo puede contener numeros");
        }

        if(empty(trim($correo))){
            array_push($errores, "El campo correo es obligatorio");
        }else if(!iscorreo($correo)){
            array_push($errores, "El campo correo no es valido");
        }
        
        if(empty($errores)){
            echo "<h1>Usurio registrado</h1>";
        }else{
            $_SESSION['errores'] = $errores;
            $_SESSION['datos']=['nombres' =>$nombres,
                                'apellidos'=>$apellidos,
                                'carnet' =>$carnet,
                                'telefono' =>$telefono,
                                'correo' =>$correo];
            header('Location: index.php');
        }

    }
    

?>