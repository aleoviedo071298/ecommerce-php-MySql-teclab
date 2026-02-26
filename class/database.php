<?php
/* @autor Alejandro Oviedo */

class database{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $database="miproyecto";
    private $conn;

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database};charset=utf8mb4", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Error en la conexion: " . $e->getMessage();
        }
    }


    //Funcion INSERTAR
    public function insert($sql, $params=[]){
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    } 

    //Funcion SELECT
    public function select($sql, $params=[]){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    //Funcion UPDATE
    public function update($sql, $params=[]){
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    //Funcion DELETE
    public function delete($sql, $params=[]){
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }
}
?>