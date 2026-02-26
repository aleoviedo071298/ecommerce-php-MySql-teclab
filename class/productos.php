<?php
/* @autor Alejandro Oviedo */
require_once 'database.php';
class productos{
    private $id;
    private $nombre;
    private $imagen;
    private $descripcion;
    private $categoria_id;
    private $precio; // Added missing property declaration
    private $db;

    public function __construct(){
        $this->db = new database();
    }

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setCategoria($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    //guardar producto
    public function save(){
        $sql = "INSERT INTO productos (nombre, imagen, descripcion, categoria_id, precio) VALUES (?, ?, ?, ?, ?)";
        $params = [$this->nombre, $this->imagen, $this->descripcion, $this->categoria_id, $this->precio];
        return $this->db->insert($sql, $params);
    }

    //eliminar producto
    public function delete($id){
        $sql = "DELETE FROM productos WHERE id = ?";
        $params = [$id];
        return $this->db->delete($sql, $params);
    }

    //listar productos con categorias
    public function listarConCategorias(){
        $sql = "SELECT p.*, c.nombre as categoria_nombre 
                FROM productos p 
                LEFT JOIN categorias c ON p.categoria_id = c.id";
        return $this->db->select($sql);
    }
}