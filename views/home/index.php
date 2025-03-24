<?php
// filepath: /projet-ahdlc/projet-ahdlc/views/home/index.php

// Include the main layout
include_once '../layouts/main.php';

// Fetch data for the banner and services sections
// This is a placeholder for the actual data fetching logic
$bannerTitle = "Welcome to Action Humanitaire";
$bannerSubtitle = "For Development and the Fight Against Unemployment";
$services = [
    "Service 1" => "Description of Service 1",
    "Service 2" => "Description of Service 2",
    "Service 3" => "Description of Service 3",
];

?>

<div class="home-banner">
    <h1><?php echo $bannerTitle; ?></h1>
    <p><?php echo $bannerSubtitle; ?></p>
</div>

<div class="services-section">
    <h2>Our Services</h2>
    <ul>
        <?php foreach ($services as $service => $description): ?>
            <li>
                <strong><?php echo $service; ?>:</strong> <?php echo $description; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>