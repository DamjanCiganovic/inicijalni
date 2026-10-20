<!DOCTYPE html>
<html lang="hr">
<!-- TSD-4RT | DC | 22.09.2026. -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($naslovStranice ?? 'Aegis Security', ENT_QUOTES, 'UTF-8') ?>
    </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="main-header">
    <div class="header-container">

        <a href="index.php" class="logo">
            <i class="fas fa-shield-alt"></i>
            <span>Aegis Security</span>
        </a>

        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="o-nama.php">O nama</a></li>
                <li><a href="usluge.php">Usluge</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>

    </div>
</header>