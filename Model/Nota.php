<?php

class Nota {
    public $conex;
    public $table_name= "notas";

    public $id;
    public $estudiante;
    public $descripcion;
    public $nota;

    public function __construct($db) {
        $this->conex = $db;
    }

     public function registrar() {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET estudiante = :estudiante, descripcion = :descripcion, nota = :nota";

        $stmt = $this->conex->prepare($query);


        $this->estudiante = htmlspecialchars(strip_tags($this->estudiante));
        $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
        $this->nota = htmlspecialchars(strip_tags($this->nota));

        $stmt->bindParam(":estudiante", $this->estudiante);
        $stmt->bindParam(":descripcion", $this->descripcion);
        $stmt->bindParam(":nota", $this->nota);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


     public function listar() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";

        $stmt = $this->conex->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}
