<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Humanitaire pour le développement et la lutte contre le chômage</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Action Humanitaire</h1>
        <nav>
            <ul>
                <li><a href="/home">Accueil</a></li>
                <li><a href="/about">À Propos</a></li>
                <li><a href="/news">Actualités</a></li>
                <li><a href="/intervention">Domaines d'Intervention</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php include($view); ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Action Humanitaire. Tous droits réservés.</p>
    </footer>

    <script src="/js/main.js"></script>
</body>
</html>