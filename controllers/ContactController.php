<?php
// filepath: c:\xampp\htdocs\projet-ahdlc\controllers\ContactController.php

class ContactController {
    public function index() {
        // Load the contact view
        require_once '../views/contact/index.php';
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Process the contact form submission
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Here you would typically validate the input and save it to the database
            // For now, we'll just simulate a successful submission
            $success = true;

            if ($success) {
                // Redirect or show a success message
                header('Location: /contact?success=true');
                exit;
            } else {
                // Handle the error
                header('Location: /contact?error=true');
                exit;
            }
        }
    }
}