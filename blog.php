<!DOCTYPE html>
<!-- TSD-4RT | DC | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegis Security - Blog & Baza Znanja</title>
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
        <section class="section">
            <div class="section-header">
                <h2>Stručni Članci & Baza Znanja</h2>
                <p>Pročitajte najnovije analize, vodiče i savjete naših stručnjaka za informacijsku sigurnost.</p>
            </div>
            <footer class="glavno-podnozje">
                <div class="info">
                  <p>&copy; 2026 Web Sigurnost d.o.o. Sva prava pridržana.</p>
                </div>
                <div class="newsletter">
                  <form action="https://formspree.io/f/xeaogrop" method="POST" onsubmit="return provjeriUnosNewslettera(event)">
                    <label for="newsletter-email">Prijava na newsletter</label>
                    <input id="newsletter-email" type="email" name="email" required placeholder="tvoja@adresa.hr">
                    <button type="submit">Prijavi me</button>
                  </form>
                </div>
              </footer>

            <div class="blog-grid">
                
                <!-- Članak 1 -->
                <a href="blog-1.html" class="blog-card">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" alt="Sigurno Kodiranje" class="blog-card-img">
                    <div class="blog-card-content">
                        <span class="badge badge-dev">Za Developere</span>
                        <h3>Sigurno Kodiranje u 2026.</h3>
                        <p>Praktične smjernice za sprječavanje SQL Injection i XSS napada prilikom razvoja web aplikacija.</p>
                    </div>
                    <span class="read-more-text">Pročitaj članak <i class="fas fa-arrow-right"></i></span>
                </a>

                <!-- Članak 2 -->
                <a href="blog-2.html" class="blog-card">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80" alt="Phishing Napadi" class="blog-card-img">
                    <div class="blog-card-content">
                        <span class="badge badge-sec">Sigurnost</span>
                        <h3>Zaštita od Phishing Napada</h3>
                        <p>Kako educirati zaposlenike i prepoznati moderne oblike socijalnog inženjeringa i lažnih e-poruka.</p>
                    </div>
                    <span class="read-more-text">Pročitaj članak <i class="fas fa-arrow-right"></i></span>
                </a>

                <!-- Članak 3 -->
                <a href="blog-3.html" class="blog-card">
                    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80" alt="Zero-Day Ranjivosti" class="blog-card-img">
                    <div class="blog-card-content">
                        <span class="badge badge-tech">Tehnologija</span>
                        <h3>Zero-Day Ranjivosti</h3>
                        <p>Što su zero-day napadi, kako ih napadači iskorištavaju i koje obrambene mehanizme trebate primijeniti.</p>
                    </div>
                    <span class="read-more-text">Pročitaj članak <i class="fas fa-arrow-right"></i></span>
                </a>

                <!-- Članak 4 -->
                <a href="blog-4.html" class="blog-card">
                    <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?auto=format&fit=crop&w=600&q=80" alt="Dvofaktorska Autentifikacija" class="blog-card-img">
                    <div class="blog-card-content">
                        <span class="badge badge-sec">Sigurnost</span>
                        <h3>Važnost Dvofaktorske Autentifikacije (2FA)</h3>
                        <p>Zašto same lozinke više nisu dovoljne i kako 2FA sprečava 99% neovlaštenih pristupnih pokušaja.</p>
                    </div>
                    <span class="read-more-text">Pročitaj članak <i class="fas fa-arrow-right"></i></span>
                </a>

                <!-- Članak 5 -->
                <a href="blog-5.html" class="blog-card">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=600&q=80" alt="OWASP Top 10" class="blog-card-img">
                    <div class="blog-card-content">
                        <span class="badge badge-dev">Za Developere</span>
                        <h3>OWASP Top 10 za 2026.</h3>
                        <p>Pregled najkritičnijih sigurnosnih rizika za web aplikacije i kako ih izbjeći u ranoj fazi razvoja.</p>
                    </div>
                    <span class="read-more-text">Pročitaj članak <i class="fas fa-arrow-right"></i></span>
                </a>

                <!-- Članak 6 -->
                <a href="blog-6.html" class="blog-card">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80" alt="Cloud Security" class="blog-card-img">
                    <div class="blog-card-content">
                        <span class="badge badge-tech">Tehnologija</span>
                        <h3>Sigurnost u Oblaku (Cloud Security)</h3>
                        <p>Najbolje prakse za zaštitu podataka i aplikacija prilikom migracije na AWS, Azure ili Google Cloud.</p>
                    </div>
                    <span class="read-more-text">Pročitaj članak <i class="fas fa-arrow-right"></i></span>
                </a>

            </div>
        </section>
    </main>

    <?php include 'podnozje.php'; ?>

</body>
</html>