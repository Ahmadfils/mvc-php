<?php

class Service {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllServices() {
        $query = "SELECT * FROM services";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServiceById($id) {
        $query = "SELECT * FROM services WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}