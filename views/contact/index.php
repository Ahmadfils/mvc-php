<?php
// filepath: c:\xampp\htdocs\projet-ahdlc\views\contact\index.php

include_once '../layouts/main.php';
?>

<div class="contact-container">
    <h1>Contact Us</h1>
    <form action="/projet-ahdlc/controllers/ContactController.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>