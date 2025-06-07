<?php
require_once "app/Model/Nota.php";
require_once "app/Model/database.php";

class NotasController {
    private $db;
    private $nota;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->nota = new Nota($this->db);
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->nota->estudiante = $_POST['estudiante'] ?? '';
            $this->nota->descripcion = $_POST['descripcion'] ?? '';
            $this->nota->nota = $_POST['nota'] ?? 0;

            if ($this->nota->registrar()) {
                header("Location: index.php?action=listar");
                exit();
            } else {
                echo "Error al registrar la nota.";
            }
        } else {
            require "app/views/registrar.php";
        }
    }

    public function listar() {
        $notas = $this->nota->listar();

        require "app/views/listar.php";
    }
}
?>
