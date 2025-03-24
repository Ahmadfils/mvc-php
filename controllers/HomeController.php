<?php
// filepath: c:\xampp\htdocs\projet-ahdlc\controllers\HomeController.php

class HomeController {
    public function index() {
        // Fetch data for the banner and services sections
        $bannerData = $this->getBannerData();
        $servicesData = $this->getServicesData();

        // Load the home view and pass the data
        require_once '../views/home/index.php';
    }

    private function getBannerData() {
        // Logic to fetch banner data from the model or database
        return [
            'title' => 'Welcome to Action Humanitaire',
            'subtitle' => 'For Development and Fight Against Unemployment',
        ];
    }

    private function getServicesData() {
        // Logic to fetch services data from the model or database
        return [
            ['name' => 'Service 1', 'description' => 'Description of Service 1'],
            ['name' => 'Service 2', 'description' => 'Description of Service 2'],
            // Add more services as needed
        ];
    }
}