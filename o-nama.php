<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegis Security - O Nama</title>
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
        <!-- O nama Banner Slika -->
        <section class="about-hero">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" alt="Naš Tim" class="about-banner-img">
            <div class="about-hero-text">
                <h2>Vaš pouzdani partner u digitalnoj sigurnosti</h2>
                <p>Kombiniramo napredna tehnička znanja i proaktivan pristup kako bismo osigurali poslovanje u digitalnom dobu.</p>
            </div>
        </section>

        <!-- Kartica Osnivača / Stručnjaka -->
        <section class="section">
            <div class="founder-card">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80" alt="Ana Horvat" class="founder-img">
                <div class="founder-info">
                    <h3>Ana Horvat</h3>
                    <p class="subtitle">Glavna stručnjakinja za kibernetičku sigurnost & Osnivačica</p>
                    <p>S više od 10 godina iskustva u analizi ranjivosti i penetracijskom testiranju, Ana vodi tim stručnjaka posvećenih zaštiti poslovnih sustava od najsloženijih kibernetičkih prijetnji.</p>
                </div>
            </div>
        </section>

        <!-- Vrijednosti i Misija sa slikom -->
        <section class="section">
            <div class="about-grid">
                <div class="about-card">
                    <i class="fas fa-bullseye about-icon"></i>
                    <h3>Naša Misija</h3>
                    <p>Pružiti tvrtkama svih veličina bezbrižno digitalno okruženje kroz kontinuiranu procjenu rizika, edukaciju i brzu reakciju na incidente.</p>
                </div>

                <div class="about-card">
                    <i class="fas fa-eye about-icon"></i>
                    <h3>Naša Vizija</h3>
                    <p>Postati vodeći regionalni centar izvrsnosti za kibernetičku sigurnost, prepoznat po inovacijama i visokim standardima zaštite podataka.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'podnozje.php'; ?>

</body>
</html>