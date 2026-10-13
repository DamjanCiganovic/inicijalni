<?php
// TSD-4RT | inicijali | datum
$naslovStranice = "Kontakt";
include 'dijelovi/zaglavlje.php';
?>
<!DOCTYPE html>
<!-- TSD-4RT | AB | 22.09.2026. -->
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aegis Security - Kontakt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="main-header">
        <div class="header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-shield-halved"></i>
                <span>Aegis Security</span>
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.html">Početna</a></li>
                    <li><a href="o-nama.html">O nama</a></li>
                    <li><a href="usluge.html">Usluge i Cjenik</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="kontakt.html" class="active">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <section class="section">
            <h2>Kontaktirajte nas</h2>
            <p>Javite nam se za procjenu sigurnosti vašeg sustava ili dodatne upite.</p>

            <div class="contact-grid">
                <!-- Kontakt Forma -->
                <form id="contactForm" novalidate
      action="https://formspree.io/f/mqpkrvzk"
      method="POST">

    <div class="form-group">
        <label for="name">Ime i Prezime *</label>
        <input type="text" id="name" name="name" autocomplete="name" required>
        <span class="error-msg" id="nameError">Molimo unesite ime.</span>
    </div>

    <div class="form-group">
        <label for="email">E-mail adresa *</label>
        <input type="email" id="email" name="email" autocomplete="email" required>
        <span class="error-msg" id="emailError">Molimo unesite valjanu e-mail adresu.</span>
    </div>

    <div class="form-group">
        <label for="message">Poruka *</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        <span class="error-msg" id="messageError">Poruka ne smije biti prazna.</span>
    </div>

    <button type="submit" class="btn-submit">Pošalji poruku</button>
</form>   
                <!-- Karta s lokacijom -->
                <div class="map-box">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89123.63282218413!2d15.908000450000002!3d45.815005350000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d692c9022d13%3A0xf7026e64032c52e1!2sZagreb!5e0!3m2!1shr!2shr!4v1700000000000!5m2!1shr!2shr" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="index.html" class="footer-logo">
                        <i class="fas fa-shield-halved"></i>
                        <span>Aegis Security</span>
                    </a>
                    <p>Proaktivna zaštita i savjetovanje u informacijskoj sigurnosti za moderno poslovanje.</p>
                </div>

                <div class="footer-links">
                    <div class="footer-col">
                        <span class="footer-heading">Navigacija</span>
                        <ul>
                            <li><a href="o-nama.html">O nama</a></li>
                            <li><a href="usluge.html">Usluge i cjenik</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="kontakt.html">Kontakt</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <span class="footer-heading">Pravno</span>
                        <ul>
                            <li><a href="#">Privatnost</a></li>
                            <li><a href="#">Uvjeti korištenja</a></li>
                            <li><a href="#">Kolačići</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Aegis Security d.o.o. Sva prava pridržana.</p>
                <div class="footer-socials">
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="X"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>

    
    </footer>

</body>
</html>
<?php include 'dijelovi/podnozje.php'; ?>