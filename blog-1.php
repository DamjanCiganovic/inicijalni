<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigurno Kodiranje u 2026. - Aegis Security</title>
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
            <a href="blog.html" class="btn-back"><i class="fas fa-arrow-left"></i> Natrag na blogove</a>
            
            <span class="badge badge-dev">Za Developere</span>
            <h1 class="article-title">Sigurno Kodiranje u 2026. godine</h1>
            <div class="article-meta">
                <span><i class="far fa-calendar"></i> 10. Svibanj 2026.</span> &bull; 
                <span><i class="far fa-clock"></i> 5 min čitanja</span> &bull; 
                <span>Autor: Ana Horvat</span>
            </div>

            <!-- Tematska slika članka -->
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=80" alt="Sigurno Kodiranje" class="article-hero-img">

            <div class="article-body">
                <p>U današnje vrijeme razvitak web aplikacija odvija se brže nego ikada. Međutim, brzi ciklusi isporuke softvera često dovode do zanemarivanja osnovnih sigurnosnih principa...</p>
                
                <h3>1. Validacija i sanitizacija svih ulaza</h3>
                <p>Nikada nemojte vjerovati podacima koji dolaze od korisnika. Svi ulazni podaci moraju se strogo provjeravati na strani poslužitelja (server-side)...</p>

                <blockquote>
                    "Sigurnost nije opcija koja se dodaje na kraju razvoja – ona mora biti utkana u svaki redak koda od prvog dana."
                </blockquote>

                <h3>2. Sprječavanje SQL Injection napada</h3>
                <p>Korištenjem pripremljenih izjava (Prepared Statements) i ORM alata u potpunosti se eliminira rizik od ubrizgavanja zlonamjernih SQL upita u vašu bazu podataka.</p>
            </div>
        </article>
    </main>

    <?php include 'podnozje.php'; ?>

</body>
</html>