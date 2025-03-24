<?php
// filepath: /projet-ahdlc/projet-ahdlc/views/news/index.php

// Fetch news articles from the NewsController
$newsArticles = []; // This should be populated with data from the NewsController

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités - Action Humanitaire pour le développement et la lutte contre le chômage</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include '../layouts/main.php'; ?>

    <div class="news-container">
        <h1>Actualités</h1>
        <?php if (!empty($newsArticles)): ?>
            <ul>
                <?php foreach ($newsArticles as $article): ?>
                    <li>
                        <h2><?php echo htmlspecialchars($article['title']); ?></h2>
                        <p><?php echo htmlspecialchars($article['summary']); ?></p>
                        <a href="/news/<?php echo $article['id']; ?>">Lire la suite</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucune actualité disponible.</p>
        <?php endif; ?>
    </div>

    <?php include '../layouts/footer.php'; ?>
</body>
</html>