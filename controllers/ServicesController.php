<?php
// filepath: c:\xampp\htdocs\projet-ahdlc\controllers\ServicesController.php

class ServicesController {
    public function index() {
        // Logic to retrieve service-related information
        $services = $this->getServices();
        require_once '../views/services/index.php';
    }

    private function getServices() {
        // This function would typically interact with the Service model to fetch data
        // For now, returning a static array as a placeholder
        return [
            ['title' => 'Service 1', 'description' => 'Description of Service 1'],
            ['title' => 'Service 2', 'description' => 'Description of Service 2'],
            ['title' => 'Service 3', 'description' => 'Description of Service 3'],
        ];
    }
}