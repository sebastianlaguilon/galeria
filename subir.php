<?php
require 'funciones.php';
$conexion = conexion('galeria_practica', 3310,'root','');

if(!$conexion){
    echo "error";
    die();
}

if($_SERVER['REQUEST_METHOD']== 'POST' && !empty($_FILES)){
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if($check !== false){
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUE (:titulo, :imagen, :texto)');
        $statement->execute(array(':titulo'=>$_POST['titulo'],
                                  ':imagen'=>$_FILES['foto']['name'],
                                  ':texto'=> $_POST['texto']
    ));

    header('Location: index.php');
    }
    $error = "El archivo no es una imagen o el archivo es muy pesado";
}

require 'views/subir.view.php';