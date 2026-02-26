<?php
if (!isset($_POST['action'])) {
    header("Location: ./views/home.html");
    exit();

} 
require_once './class/autoload.php';

$productos = new productos();
$lista = $productos->listarConCategorias();

if (isset($_POST['action']) && $_POST['action'] == 'cartas') {
    foreach ($lista as $producto) {
                $categoria_nombre = $producto['categoria_nombre'] ?? "Sin Categoria";
                echo "<div class='col-12 col-md-6 col-lg-3 d-flex'>
                    <div class='card w-100 shadow-sm border-0'>
                        <div class='card-img-container p-3'>
                            <img src='../assets/img/{$producto['imagen']}' class='card-img-top img-fluid product-image' alt='{$producto['nombre']}'>
                        </div>
                        <div class='card-body d-flex flex-column'>
                            <h5 class='card-title fw-bold mb-1'>{$producto['nombre']}</h5>
                            <p class='text-muted small mb-2'>{$categoria_nombre}</p>
                            <p class='card-text flex-grow-1 mb-3'>{$producto['descripcion']}</p>
                            <h6 class='fw-bold mb-0'>$ {$producto['precio']}</h6>
                        </div>
                    </div>
                </div>";
            }
            exit();
}
?>