<?php
class Database {
    private $host = "localhost";
    private $db_name = "notas_db";
    private $username = "root";
    private $password = ""; 
    public $conex;

    public function getConnection() {
        $this->conex = null;
        try {
            $this->conex = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conex->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conex;
    }
}
?>