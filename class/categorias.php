<?php
/* @autor Alejandro Oviedo */
require_once 'database.php';
class categorias{
    private $id;
    private $nombre;
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

    //metodo guardar
    public function save(){
        $sql = "INSERT INTO categorias (nombre) VALUES (?)";
        $params = [$this->nombre];
        return $this->db->insert($sql, $params);
    }

    //metodo eliminar
    public function delete(){
        $sql = "DELETE FROM categorias WHERE id = ?";
        $params = [$this->id];
        return $this->db->delete($sql, $params);
    }
}

?>