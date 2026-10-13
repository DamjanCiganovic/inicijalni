<?php
// TSD-4RT | inicijali | datum
$naslovStranice = "Početna";
include 'zaglavlje.php';
?>
<link rel="stylesheet" href="style.css">
<main>
    <!-- Hero sekcija -->
    <section class="hero-section hero-with-bg">
        <div class="hero-overlay"></div>

        <div class="hero-container">
            <span class="hero-badge">
                <i class="fas fa-lock"></i>
                Sigurnost na prvom mjestu
            </span>

            <h1>
                Zaštitite svoje poslovanje od modernih kibernetičkih prijetnji
            </h1>

            <p>
                Nudimo vrhunska rješenja u području penetracijskog
                testiranja, analize ranjivosti i edukacije zaposlenika
                za bezbrižno digitalno poslovanje.
            </p>

            <div class="hero-buttons">
                <a href="kontakt.php" class="btn-primary">
                    Zatražite ponudu
                    <i class="fas fa-arrow-right"></i>
                </a>

                <a href="usluge.php" class="btn-secondary">
                    Pogledajte usluge
                </a>
            </div>
        </div>
    </section>

    <div class="main-content">

        <!-- Statistika -->
        <section class="section">
            <div class="stats-grid">

                <div class="stat-card">
                    <i class="fas fa-bug"></i>
                    <h3>500+</h3>
                    <p>Pronađenih ranjivosti</p>
                </div>

                <div class="stat-card">
                    <i class="fas fa-user-shield"></i>
                    <h3>100%</h3>
                    <p>Posvećenost klijentima</p>
                </div>

                <div class="stat-card">
                    <i class="fas fa-building"></i>
                    <h3>50+</h3>
                    <p>Zaštićenih tvrtki</p>
                </div>

                <div class="stat-card">
                    <i class="fas fa-clock"></i>
                    <h3>24/7</h3>
                    <p>Podrška i nadzor</p>
                </div>

            </div>
        </section>

        <!-- Kartice usluga -->
        <section class="section">

            <div class="section-header">
                <h2>Naša ključna rješenja</h2>
                <p>
                    Sveobuhvatni pristup sigurnosti prilagođen vašim potrebama.
                </p>
            </div>

            <div class="features-grid">

                <div class="feature-card">
                    <img
                        src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=600&q=80"
                        alt="Penetracijsko testiranje"
                        class="feature-img"
                    >

                    <div class="feature-content">
                        <h3>Penetracijsko testiranje</h3>

                        <p>
                            Testiramo otpornost vaših aplikacija i mrežnih
                            sustava na kontrolirane hakerske napade.
                        </p>

                        <a href="usluge.php" class="feature-link">
                            Saznaj više
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="feature-card">
                    <img
                        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80"
                        alt="Edukacija djelatnika"
                        class="feature-img"
                    >

                    <div class="feature-content">
                        <h3>Edukacija djelatnika</h3>

                        <p>
                            Treninzi i simulacije phishing napada za podizanje
                            svijesti o kibernetičkim opasnostima.
                        </p>

                        <a href="usluge.php" class="feature-link">
                            Saznaj više
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="feature-card">
                    <img
                        src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80"
                        alt="Sigurnosna revizija"
                        class="feature-img"
                    >

                    <div class="feature-content">
                        <h3>Sigurnosna revizija</h3>

                        <p>
                            Detaljna analiza usklađenosti s vodećim
                            industrijskim sigurnosnim standardima.
                        </p>

                        <a href="usluge.php" class="feature-link">
                            Saznaj više
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Izdvojeni članci -->
        <section class="section">

            <div class="section-header">
                <h2>Izdvojeni članci</h2>

                <p>
                    Pratite najnovije vijesti i savjete iz svijeta
                    kibernetičke sigurnosti.
                </p>
            </div>

            <div class="blog-grid">

                <a href="blog-1.html" class="blog-card">
                    <img
                        src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80"
                        alt="Sigurno Kodiranje"
                        class="blog-card-img"
                    >

                    <div class="blog-card-content">
                        <span class="badge badge-dev">
                            Za Developere
                        </span>

                        <h3>Sigurno Kodiranje u 2026.</h3>

                        <p>
                            Praktične smjernice za sprječavanje SQL Injection
                            i XSS napada prilikom razvoja web aplikacija.
                        </p>
                    </div>

                    <span class="read-more-text">
                        Pročitaj članak
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="blog-2.html" class="blog-card">
                    <img
                        src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80"
                        alt="Phishing Napadi"
                        class="blog-card-img"
                    >

                    <div class="blog-card-content">
                        <span class="badge badge-sec">
                            Sigurnost
                        </span>

                        <h3>Zaštita od Phishing Napada</h3>

                        <p>
                            Kako educirati zaposlenike i prepoznati moderne
                            oblike socijalnog inženjeringa i lažnih e-poruka.
                        </p>
                    </div>

                    <span class="read-more-text">
                        Pročitaj članak
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

            </div>
        </section>

    </div>
</main>

<?php
include 'podnozje.php';
?>