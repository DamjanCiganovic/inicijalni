<?php
$naslovStranice = "Usluge";
include 'zaglavlje.php';
?>
<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usluge i Cjenik - Aegis Security</title>
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
        <!-- HERO SEKCIJA -->
        <section class="pricing-hero">
            <span class="badge">Fleksibilni Paketi Zaštite</span>
            <h1>Sigurnosna rješenja prilagođena vašem poslovanju</h1>
            <p>Odaberite paket koji odgovara potrebama i veličini vašeg tima. Transparentni uvjeti bez skrivenih troškova.</p>
        </section>

        <!-- GLAVNI CJENIK -->
        <section class="pricing-section">
            <div class="pricing-grid">

                <!-- Starter Paket -->
                <div class="pricing-card">
                    <div class="card-header">
                        <div class="plan-icon"><i class="fas fa-user-shield"></i></div>
                        <h3>Starter Shield</h3>
                        <p class="plan-desc">Za male tvrtke i startupove koji žele pokriti osnovne sigurnosne standarde.</p>
                    </div>
                    <div class="card-price">
                        <span class="currency">€</span>
                        <span class="amount">290</span>
                        <span class="period">/ mjesečno</span>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Osnovna revizija web stranice</li>
                        <li><i class="fas fa-check text-success"></i> Nadzor domene i SSL/TLS provjera</li>
                        <li><i class="fas fa-check text-success"></i> Mjesečni sigurnosni izvještaji</li>
                        <li><i class="fas fa-check text-success"></i> Podrška putem e-pošte (48h odziv)</li>
                        <li class="disabled"><i class="fas fa-times"></i> Penetracijsko testiranje</li>
                        <li class="disabled"><i class="fas fa-times"></i> 24/7 Incident Response</li>
                    </ul>
                    <a href="kontakt.html?paket=Starter-Shield" class="btn btn-outline">
                        <span>Odaberi Starter</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Business Guard (Istaknuti) -->
                <div class="pricing-card featured">
                    <div class="badge-popular">Preporučeno</div>
                    <div class="card-header">
                        <div class="plan-icon"><i class="fas fa-shield-virus"></i></div>
                        <h3>Business Guard</h3>
                        <p class="plan-desc">Za rastuće tvrtke koje zahtijevaju aktivnu zaštitu i brzi odziv na prijetnje.</p>
                    </div>
                    <div class="card-price">
                        <span class="currency">€</span>
                        <span class="amount">690</span>
                        <span class="period">/ mjesečno</span>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Sve iz <strong>Starter Shield</strong> paketa</li>
                        <li><i class="fas fa-check text-success"></i> Kvartalno penetracijsko testiranje</li>
                        <li><i class="fas fa-check text-success"></i> Edukacija zaposlenika protiv Phishinga</li>
                        <li><i class="fas fa-check text-success"></i> Tjedno skeniranje ranjivosti</li>
                        <li><i class="fas fa-check text-success"></i> Prioritetna podrška (odziv unutar 4h)</li>
                        <li class="disabled"><i class="fas fa-times"></i> Posvećeni Dedicated SOC analitičar</li>
                    </ul>
                    <a href="kontakt.html?paket=Business-Guard" class="btn btn-primary">
                        <span>Zatražite Business Guard</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Enterprise Paket -->
                <div class="pricing-card">
                    <div class="card-header">
                        <div class="plan-icon"><i class="fas fa-building-shield"></i></div>
                        <h3>Enterprise Complete</h3>
                        <p class="plan-desc">Za veće organizacije s naprednim regulatornim i tehničkim zahtjevima.</p>
                    </div>
                    <div class="card-price">
                        <span class="amount custom-price">Po Dogovoru</span>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Sve iz <strong>Business Guard</strong> paketa</li>
                        <li><i class="fas fa-check text-success"></i> 24/7/365 Nadzor (SOC)</li>
                        <li><i class="fas fa-check text-success"></i> Incident Response (SLA do 30 min)</li>
                        <li><i class="fas fa-check text-success"></i> Usuglašavanje s NIS2 i ISO 27001</li>
                        <li><i class="fas fa-check text-success"></i> Osobni CISO savjetnik</li>
                        <li><i class="fas fa-check text-success"></i> Neograničeno pen-testiranje</li>
                    </ul>
                    <a href="kontakt.html?paket=Enterprise-Complete" class="btn btn-outline">
                        <span>Kontaktirajte Nas za Ponudu</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </section>

        <!-- DODATNE USLUGE (ADD-ONS) -->
        <section class="addons-section">
            <h2 class="text-center">Dodatne Pojedinačne Usluge</h2>
            <p class="section-subtitle text-center">Trebate li samo jednokratnu uslugu ili specifični revizijski pregled?</p>
            
            <div class="addons-grid">
                <div class="addon-box">
                    <div class="addon-icon"><i class="fas fa-bug"></i></div>
                    <div class="addon-info">
                        <h4>Jednokratni Penetracijski Test</h4>
                        <p>Dubinska analiza vaših aplikacija i mreže s detaljnim izvješćem o ranjivostima.</p>
                    </div>
                    <div class="addon-price">Od €800</div>
                </div>

                <div class="addon-box">
                    <div class="addon-icon"><i class="fas fa-certificate"></i></div>
                    <div class="addon-info">
                        <h4>NIS2 i ISO 27001 Priprema</h4>
                        <p>Usklađivanje poslovanja s novim europskim regulativama i standardima sigurnosti.</p>
                    </div>
                    <div class="addon-price">Od €1.200</div>
                </div>

                <div class="addon-box">
                    <div class="addon-icon"><i class="fas fa-graduation-cap"></i></div>
                    <div class="addon-info">
                        <h4>Radionice i Edukacije Zaposlenika</h4>
                        <p>Simulacije phishing napada i interaktivna obuka vašeg tima o cyber sigurnosti.</p>
                    </div>
                    <div class="addon-price">Od €450</div>
                </div>

                <div class="addon-box">
                    <div class="addon-icon"><i class="fas fa-code"></i></div>
                    <div class="addon-info">
                        <h4>Sigurnosna Revizija Koda</h4>
                        <p>Pregled izvornog koda aplikacije u potrazi za OWASP i logičkim ranjivostima.</p>
                    </div>
                    <div class="addon-price">Od €950</div>
                </div>
            </div>
        </section>

        <!-- ČESTA PITANJA (FAQ) -->
        <section class="faq-section">
            <h2 class="text-center">Česta Pitanja (FAQ)</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <h4><i class="fas fa-chevron-right"></i> Koliko traje izrada sigurnosne procjene?</h4>
                    <p>Za većinu standardnih aplikacija i mreža, brza revizija traje između 3 i 5 radnih dana, nakon čega dobivate detaljno strukturirano izvješće s uputama za sanaciju.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-chevron-right"></i> Mogu li nadograditi paket u bilo kojem trenutku?</h4>
                    <p>Da, vaš paket možete nadograditi ili prilagoditi u bilo kojem trenutku bez prekida u pružanju sigurnosnih usluga.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-chevron-right"></i> Nudite li podršku u slučaju cyber napada?</h4>
                    <p>Apsolutno. Naš tim za odziv na incidente (Incident Response Team) dostupan je 24/7 za korisnike Business i Enterprise paketa.</p>
                </div>
            </div>
        </section>
    </main>

    
    <?php include 'podnozje.php'; ?>

</body>
</html>
