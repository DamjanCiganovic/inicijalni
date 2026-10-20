<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWASP Top 10 za 2026. - Aegis Security</title>
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
            <span class="badge badge-dev">Za Developere</span>
            <h1 class="article-title">OWASP Top 10 za 2026.</h1>
            <div class="article-meta">Objavljeno: 28. Ožujka 2026. | Autor: Aegis Security Tim</div>

            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1200&q=80" alt="OWASP Top 10" class="article-hero-img">

            <div class="article-body">
                <p>OWASP (Open Web Application Security Project) donosi pregled najzastupljenijih sigurnosnih prijetnji za web aplikacije. Razumijevanje ovih konceptualnih propusta ključno je za svakog softverskog inženjera.</p>

                <h3>Glavne kategorije rizika:</h3>
                <p>1. <strong>Narušena kontrola pristupa (Broken Access Control):</strong> Korisnici mogu pristupiti podacima ili funkcijama izvan svojih dozvola.</p>
                <p>2. <strong>Kriptografski propusti (Cryptographic Failures):</strong> Nedovoljna zaštita osjetljivih podataka u prijenosu ili mirovanju (npr. nekorištenje jake enkripcije za lozinke).</p>
                <p>3. <strong>Injekcijske ranjivosti (Injections):</strong> Nezaštićeni unosi koji omogućuju izvršavanje zlonamjernih naredbi na poslužitelju ili u bazi podataka.</p>

                <h3>Kako uklopiti OWASP u svakodnevni rad?</h3>
                <p>Preporučujemo uvođenje "Shift Left" pristupa – testirajte sigurnost koda već u ranim fazama razvoja uz pomoć statičke analize koda (SAST) i redovitih revizija.</p>
            </div>
        </article>
    </main>

    <?php include 'podnozje.php'; ?>

    <script src="script.js"></script>
</body>
</html>