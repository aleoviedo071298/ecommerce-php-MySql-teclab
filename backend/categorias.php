<?php
require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria = new categorias();
    $categoria->setNombre($_POST['categorias']);
    
    if($categoria->save()){
        echo "<script>alert('Categoria guardada correctamente');window.location.href='views/lista_categorias.html';</script>";
    }else{
        echo "<script>alert('Error al guardar la categoria');window.location.href='views/lista_categorias.html';</script>";
    }
}
?>
