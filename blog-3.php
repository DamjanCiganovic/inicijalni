<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero-Day Ranjivosti - Aegis Security</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// TSD-4RT | DC | 20.10.2026
$naslovStranice = "Kontakt";
include 'zaglavlje.php';
?>

    <main class="main-content">
        <article class="article-container">
            <a href="blog.html" class="btn-back"><i class="fas fa-arrow-left"></i> Natrag na sve blogove</a>
            
            <br>
            <span class="badge badge-tech">Tehnologija</span>
            <h1 class="article-title">Zero-Day Ranjivosti</h1>
            <div class="article-meta">Objavljeno: 03. Ožujka 2026. | Autor: Aegis Security Tim</div>

            <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1200&q=80" alt="Zero-Day Ranjivosti" class="article-hero-img">

            <div class="article-body">
                <p>Zero-day ranjivost je sigurnosni propust u softveru koji je nepoznat samom proizvođaču. Izraz "Zero-Day" znači da developeri imaju točno 0 dana za izradu sigurnosne zakrpe jer je napad već u tijeku.</p>

                <h3>Koji je rizik od Zero-Day napada?</h3>
                <p>Budući da ne postoji službena zakrpa, tradicionalni antivirusni alati i sigurni sustavi u pravilu ne mogu automatski blokirati ove napade jer ne prepoznaju uzorak napada.</p>

                <h3>Strategije ublažavanja rizika:</h3>
                <ul>
                    <li><strong>Analiza ponašanja sustava (EDR/XDR):</strong> Praćenje neobičnih aktivnosti na računalu umjesto oslanjanja samo na poznate antivirusne baze.</li>
                    <li><strong>Segmentacija mreže:</strong> Ograničavanje pristupa osjetljivim dijelovima mreže kako se napadač ne bi mogao slobodno kretati u slučaju provale.</li>
                    <li><strong>Brzo ažuriranje (Patch Management):</strong> Čim proizvođač objavi zakrpu za detektiranu ranjivost, potrebno ju je primijeniti bez odgode.</li>
                </ul>
            </div>
        </article>
    </main>

    <?php include 'podnozje.php'; ?>

    <script src="script.js"></script>
</body>
</html>