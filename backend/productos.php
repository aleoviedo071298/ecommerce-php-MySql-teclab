<?php
require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? null;
    $imagen = $_POST['imagen'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $categoria = $_POST['categoria'] ?? null;
    $precio = $_POST['precio'] ?? null;

    //--Imagen
    $imagen=null;
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK){
        $nombreOriginal = $_FILES['imagen']['name'];
        $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);
        $nombreNuevo = uniqid('img') . '.' . $extension;
        $rutaDestino = '../assets/img/' . $nombreNuevo;
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
            $imagen = $nombreNuevo;
        }else{
            die("Error al subir la imagen");
        }
    }
    // crear producto
    $producto = new productos();
    $producto->setNombre($nombre);
    $producto->setImagen($imagen);
    $producto->setDescripcion($descripcion);
    $producto->setCategoria($categoria);
    $producto->setPrecio($precio);

    if($producto->save()){
        echo "<script>alert('Producto guardado correctamente');window.location.href='views/lista_productos.html';</script>";
    }else{
        echo "<script>alert('Error al guardar el producto');window.location.href='views/lista_productos.html';</script>";
    }
}else{
    include '../views/productos.html';
}