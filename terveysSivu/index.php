<?php
$page_title = "Etusivu";
$current_page = "index";
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center" data-aos="fade-right">
                <img src="img/landingpageImg.jpg" alt="Terveellinen elämäntapa" class="img-fluid hero-img">
            </div>
            <div class="col-lg-7 hero-content" data-aos="fade-left">
                <h1 class="hero-title">Tervetuloa <span style="color: var(--accent-pink);">Terveyssivustolle</span></h1>
                <h2 class="hero-subtitle">Hyvinvointia ja terveyttä kaikille</h2>
                <p class="lead mb-4">Täältä löydät tietoa terveellisestä ruokavaliosta, liikunnasta, verenpaineesta ja muista terveyteen liittyvistä aiheista. Voit myös käyttää BMI-laskuria ja pitää liikuntapäiväkirjaa.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="liikunta.php" class="btn btn-primary">Tutustu liikuntaohjeisiin</a>
                    <a href="bmi.php" class="btn btn-outline-light">Testaa BMI</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Terveystieto pikalinkit -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Terveystietoa</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <i class="fas fa-heartbeat fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Verenpaine</h3>
                    <p>Tietoa verenpaineen rajoista, mittaamisesta ja keinoista vaikuttaa verenpaineeseen.</p>
                    <a href="verenpaine.php" class="btn btn-outline-light mt-3">Lue lisää</a>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="info-card">
                    <i class="fas fa-apple-alt fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Ruokavalio</h3>
                    <p>Terveellisen ruokavalion perusteet ja vinkkejä erilaisiin ruokavalioihin.</p>
                    <a href="ruokavalio.php" class="btn btn-outline-light mt-3">Lue lisää</a>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="info-card">
                    <i class="fas fa-running fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Liikunta</h3>
                    <p>Liikuntaohjeita eri tasoille: aloittelijoille, kuntoliikkujille ja urheilijoille.</p>
                    <a href="liikunta.php" class="btn btn-outline-light mt-3">Lue lisää</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BMI & Liikuntapäiväkirja -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="info-card">
                    <h3 class="info-card-title">BMI Testi</h3>
                    <p>Painoindeksi (BMI) on mitta-arvo, jonka avulla voidaan arvioida henkilön painon ja pituuden suhdetta.</p>
                    <p>Testaa oma BMI:si ja saa arvio kehosi painoindeksistä.</p>
                    <a href="bmi.php" class="btn btn-primary mt-3">Tee BMI-testi</a>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <h3 class="info-card-title">Liikuntapäiväkirja</h3>
                    <p>Kirjaa ylös liikuntasuorituksesi, seuraa kehitystäsi ja pidä yllä motivaatiota.</p>
                    <p>Liikuntapäiväkirja auttaa sinua saavuttamaan tavoitteesi.</p>
                    <a href="liikuntapaivakirja.php" class="btn btn-primary mt-3">Avaa liikuntapäiväkirja</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Viimeisimmät artikkelit -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Viimeisimmät artikkelit</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/index1.jpg" class="exercise-img" alt="Verenpaine">
                    <div class="exercise-content">
                        <span class="exercise-category">Verenpaine</span>
                        <h3 class="exercise-title">Miten alennat verenpaineesi luonnollisesti</h3>
                        <p>Vinkkejä ja keinoja verenpaineen alentamiseen luonnollisilla tavoilla ilman lääkitystä.</p>
                        <a href="verenpaine.php#luonnolliset_keinot" class="btn btn-outline-light mt-3">Lue lisää</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/index2.jpg" class="exercise-img" alt="Ruokavalio">
                    <div class="exercise-content">
                        <span class="exercise-category">Ruokavalio</span>
                        <h3 class="exercise-title">Parempi ravitsemus pienillä muutoksilla</h3>
                        <p>Miten voit parantaa ruokavaliotasi pienillä muutoksilla päivittäisiin valintoihisi.</p>
                        <a href="ruokavalio.php#pienet_muutokset" class="btn btn-outline-light mt-3">Lue lisää</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/index3.jpg" class="exercise-img" alt="Liikunta">
                    <div class="exercise-content">
                        <span class="exercise-category">Liikunta</span>
                        <h3 class="exercise-title">Tehokas aloittelijan treeniohjelman</h3>
                        <p>Helppo aloittelijan treeniohjelma, jolla pääset alkuun liikunnan parissa.</p>
                        <a href="liikunta.php?taso=aloittelija" class="btn btn-outline-light mt-3">Lue lisää</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Uutiskirje -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="section-title" data-aos="fade-up">Tilaa uutiskirjeemme</h2>
                <p class="mb-4" data-aos="fade-up">Saat tietoa uusimmista artikkeleista, vinkeistä ja tarjouksista suoraan sähköpostiisi.</p>
                <form class="d-flex flex-column flex-md-row gap-2" data-aos="fade-up">
                    <input type="email" class="form-control" placeholder="Sähköpostiosoitteesi" required>
                    <button type="submit" class="btn btn-primary">Tilaa</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>