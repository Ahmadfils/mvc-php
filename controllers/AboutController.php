<?php
// filepath: c:\xampp\htdocs\projet-ahdlc\controllers\AboutController.php

class AboutController {
    public function index() {
        // Logic to retrieve information for the about page
        $aboutInfo = $this->getAboutInfo();
        require_once '../views/about/index.php';
    }

    private function getAboutInfo() {
        // Placeholder for fetching about information from a model or database
        return [
            'title' => 'About Us',
            'content' => 'This is the about page content for Action Humanitaire pour le développement et la lutte contre le chômage.'
        ];
    }
}