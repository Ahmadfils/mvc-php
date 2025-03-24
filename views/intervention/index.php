<?php
// File: /projet-ahdlc/projet-ahdlc/views/intervention/index.php

// Include the main layout
include_once '../layouts/main.php';

// Fetch data for areas of intervention (this would typically come from a controller)
$interventions = [
    ['title' => 'Education', 'description' => 'Programs aimed at improving education in underprivileged areas.'],
    ['title' => 'Health', 'description' => 'Initiatives focused on providing healthcare services to communities.'],
    ['title' => 'Employment', 'description' => 'Projects designed to create job opportunities and reduce unemployment.'],
];

// Start the content section
?>

<div class="intervention">
    <h1>Areas of Intervention</h1>
    <div class="intervention-list">
        <?php foreach ($interventions as $intervention): ?>
            <div class="intervention-item">
                <h2><?php echo htmlspecialchars($intervention['title']); ?></h2>
                <p><?php echo htmlspecialchars($intervention['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// End of content section
?>