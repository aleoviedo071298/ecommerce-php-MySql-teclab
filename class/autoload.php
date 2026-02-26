<?php
/* @autor Alejandro Oviedo */

spl_autoload_register(function ($clase) {
    $ruta = __DIR__ . '/' . $clase . '.php';
    if (file_exists($ruta)) {
        require_once $ruta;
    }
});

if (isset($_POST['action'])) {
    include __DIR__ . '/database.php';
    include __DIR__ . '/categorias.php';
    include __DIR__ . '/productos.php';

    $db = new database();
    
    switch ($_POST['action']) {
        case 'listarCategorias':
            $categorias = $db->select("SELECT * FROM categorias");
            foreach ($categorias as $categoria) {
                echo "<tr>
                 <td>{$categoria['id']}</td>
                 <td>{$categoria['nombre']}</td>
                 </tr>";
            }
            
            break;
        case 'listarProductos':
            $productos = $db->select("SELECT * FROM productos");
            foreach ($productos as $producto) {
                echo "<tr>
                 <td>{$producto['id']}</td>
                 <td><img src='../../assets/img/{$producto['imagen']}' width=80></td>
                 <td>{$producto['nombre']}</td>
                 <td>{$producto['descripcion']}</td>
                 <td>{$producto['categoria_id']}</td>
                 <td>{$producto['precio']}</td>
                 </tr>";
            }
            break;
    }
}


?>