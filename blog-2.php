<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaštita od Phishing Napada - Aegis Security</title>
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
            <span class="badge badge-sec">Sigurnost</span>
            <h1 class="article-title">Zaštita od Phishing Napada</h1>
            <div class="article-meta">Objavljeno: 22. Veljače 2026. | Autor: Aegis Security Tim</div>

            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1200&q=80" alt="Phishing Napadi" class="article-hero-img">

            <div class="article-body">
                <p>Phishing ostaje najčešći ulazni vektor za hakere u poslovne sustave. Napadači često ne pokušavaju "razbiti" kompleksne šifre, već jednostavno prevare zaposlenike da im sami predaju svoje pristupne podatke.</p>

                <h3>Kako prepoznati Phishing e-mail?</h3>
                <ul>
                    <li><strong>Lažna adresa pošiljatelja:</strong> Domena se razlikuje u samo jednom slovu (npr. @aegis-securty.hr umjesto @aegis-security.hr).</li>
                    <li><strong>Hitnost i pritisak:</strong> Poruke s prijetnjama o blokiranju računa ako ne kliknete na poveznicu u roku od par sati.</li>
                    <li><strong>Sumnjive poveznice:</strong> Kada prijeđete mišem preko linka, stvarna web adresa ne odgovara službenoj stranici.</li>
                </ul>

                <blockquote>
                    "Tehnologija je samo dio obrane – edukacija zaposlenika je najjači štit protiv socijalnog inženjeringa."
                </blockquote>

                <h3>Kako se zaštititi?</h3>
                <p>Uvedite redovite simulacije phishing napada u tvrtki, aktivirajte dvofaktorsku autentifikaciju (2FA) te koristite napredne filtere za e-poštu koji automatski blokiraju sumnjive privitke i linkove.</p>
            </div>
        </article>
    </main>

    <?php include 'podnozje.php'; ?>

    <script src="script.js"></script>
</body>
</html>