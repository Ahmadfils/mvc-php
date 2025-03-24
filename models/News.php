<?php

class News {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllNews() {
        $query = "SELECT * FROM news ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id) {
        $query = "SELECT * FROM news WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createNews($data) {
        $query = "INSERT INTO news (title, content, created_at) VALUES (:title, :content, NOW())";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':content', $data['content']);
        return $stmt->execute();
    }

    public function updateNews($id, $data) {
        $query = "UPDATE news SET title = :title, content = :content WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':content', $data['content']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function deleteNews($id) {
        $query = "DELETE FROM news WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}