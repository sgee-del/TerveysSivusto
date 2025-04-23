<?php
$page_title = "Liikuntaohjelmat";
$current_page = "liikunta";
include 'header.php';

// Tarkista mikä taso on valittu (aloittelija on oletus)
$taso = isset($_GET['taso']) ? $_GET['taso'] : 'aloittelija';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center" data-aos="fade-right">
                <img src="img/kuntoHero.jpg" alt="Liikunta ja terveys" class="img-fluid hero-img">
            </div>
            <div class="col-lg-7 hero-content" data-aos="fade-left">
                <h1 class="hero-title">Liikunta<span style="color: var(--accent-pink);">ohjelmat</span></h1>
                <h2 class="hero-subtitle">Hyvinvointia liikkumalla - kaikille tasoille</h2>
                <p class="lead mb-4">Löydä itsellesi sopiva liikuntaohjelma, joka kehittää kuntoasi, parantaa jaksamistasi ja edistää kokonaisvaltaista hyvinvointiasi. Tarjoamme ohjelmia aloittelijoille, kuntoliikkujille ja tavoitteellisemmille urheilijoille. HUOM! Aloittelijan ohjelma vasta valmis loput tulossa myöhemmin</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="?taso=aloittelija" class="btn btn-primary">Aloittelijan ohjelma</a>
                    <a href="?taso=kuntoilija" class="btn btn-outline-light">Kuntoilijan ohjelma</a>
                    <a href="?taso=edistynyt" class="btn btn-outline-light">Edistyneen ohjelma</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Liikunnan hyödyt -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Liikunnan terveyshyödyt</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <i class="fas fa-heart fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Fyysinen terveys</h3>
                    <ul class="info-list">
                        <li><i class="fas fa-check"></i> Vahvistaa sydäntä ja verenkiertoelimistöä</li>
                        <li><i class="fas fa-check"></i> Alentaa verenpainetta</li>
                        <li><i class="fas fa-check"></i> Parantaa veren sokeri- ja rasva-arvoja</li>
                        <li><i class="fas fa-check"></i> Vahvistaa luustoa ja lihaksia</li>
                        <li><i class="fas fa-check"></i> Auttaa painonhallinnassa</li>
                        <li><i class="fas fa-check"></i> Vahvistaa immuunijärjestelmää</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="info-card">
                    <i class="fas fa-brain fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Henkinen hyvinvointi</h3>
                    <ul class="info-list">
                        <li><i class="fas fa-check"></i> Vähentää stressiä ja ahdistusta</li>
                        <li><i class="fas fa-check"></i> Parantaa unen laatua</li>
                        <li><i class="fas fa-check"></i> Kohottaa mielialaa</li>
                        <li><i class="fas fa-check"></i> Lisää aivojen suorituskykyä</li>
                        <li><i class="fas fa-check"></i> Ehkäisee masennusta</li>
                        <li><i class="fas fa-check"></i> Parantaa itsetuntoa</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="info-card">
                    <i class="fas fa-users fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Elämänlaatu</h3>
                    <ul class="info-list">
                        <li><i class="fas fa-check"></i> Lisää energiaa ja jaksamista</li>
                        <li><i class="fas fa-check"></i> Parantaa keskittymiskykyä</li>
                        <li><i class="fas fa-check"></i> Edistää sosiaalisia suhteita</li>
                        <li><i class="fas fa-check"></i> Pidentää elinikää</li>
                        <li><i class="fas fa-check"></i> Ehkäisee ikääntymiseen liittyviä sairauksia</li>
                        <li><i class="fas fa-check"></i> Tuo iloa ja onnistumisen kokemuksia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Liikuntasuositukset -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Liikuntasuositukset</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="info-card">
                    <h3 class="info-card-title">Aikuisten viikoittainen liikuntasuositus</h3>
                    <p>UKK-instituutin liikuntasuositus aikuisille:</p>
                    
                    <div class="mb-4">
                        <h4>Kestävyyskuntoa</h4>
                        <p>Kohtuukuormitteista kestävyysliikuntaa, kuten kävelyä:</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="150" aria-valuemin="0" aria-valuemax="150">2h 30min viikossa</div>
                        </div>
                        <p class="mt-2">TAI</p>
                        <p>Rasittavaa kestävyysliikuntaa, kuten juoksua:</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="150">1h 15min viikossa</div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h4>Lihaskuntoa ja liikehallintaa</h4>
                        <p>Vähintään 2 kertaa viikossa</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="2">2 kertaa viikossa</div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h4>Kevyttä liikuskelua</h4>
                        <p>Mahdollisimman usein päivän mittaan</p>
                    </div>
                    
                    <div>
                        <h4>Paikallaan oloa ja istumista</h4>
                        <p>Tauota säännöllisesti. Välttämällä pitkiä istumisen jaksoja voit ehkäistä terveyshaittoja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($taso == 'aloittelija'): ?>
<!-- Aloittelijan ohjelma -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Aloittelijan liikuntaohjelma</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="info-card mb-4">
                    <h3 class="info-card-title">Tervetuloa liikunnan pariin!</h3>
                    <p>Tämä ohjelma on suunniteltu erityisesti sinulle, joka olet vasta aloittamassa säännöllistä liikuntaa tai palaamassa pitkän tauon jälkeen liikunnan pariin. Ohjelman tavoitteena on auttaa sinua:</p>
                    <ul>
                        <li>Luomaan säännöllinen liikuntatottumus</li>
                        <li>Parantamaan peruskuntoa turvallisesti</li>
                        <li>Nauttimaan liikunnasta ilman liiallista rasitusta</li>
                        <li>Rakentamaan pohja jatkuvalle liikunnalle</li>
                    </ul>
                    <p class="mt-3">Aloita maltillisesti ja lisää rasitusta vähitellen. Kuuntele kehoasi ja muista, että myös lepo on tärkeä osa harjoittelua.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <h3 class="exercise-title p-4">Viikko-ohjelma - Aloittelija</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Päivä</th>
                                    <th>Liikunta</th>
                                    <th>Kesto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Maanantai</td>
                                    <td>Kävely</td>
                                    <td>20-30 min</td>
                                </tr>
                                <tr>
                                    <td>Tiistai</td>
                                    <td>Lepo / Venyttely</td>
                                    <td>15 min</td>
                                </tr>
                                <tr>
                                    <td>Keskiviikko</td>
                                    <td>Kotikuntopiiri</td>
                                    <td>20 min</td>
                                </tr>
                                <tr>
                                    <td>Torstai</td>
                                    <td>Lepo</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Perjantai</td>
                                    <td>Kävely / Pyöräily</td>
                                    <td>20-30 min</td>
                                </tr>
                                <tr>
                                    <td>Lauantai</td>
                                    <td>Kotikuntopiiri</td>
                                    <td>20 min</td>
                                </tr>
                                <tr>
                                    <td>Sunnuntai</td>
                                    <td>Pidempi kävely / Venyttely</td>
                                    <td>30-40 min</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <h3 class="exercise-title p-4">Edistyminen</h3>
                    <div class="exercise-content">
                        <p>Suosittelemme noudattamaan tätä ohjelmaa 4-6 viikkoa. Tämän jälkeen voit:</p>
                        <ul>
                            <li>Lisätä harjoitusten kestoa 5-10 minuuttia</li>
                            <li>Lisätä kävelyyn intervalleja (kävele välillä reippaammin)</li>
                            <li>Lisätä kotikuntopiiriin toistoja tai uusia liikkeitä</li>
                            <li>Kokeilla uusia liikuntalajeja</li>
                        </ul>
                        <p class="mt-3">Kun pystyt noudattamaan tätä ohjelmaa säännöllisesti ja se tuntuu kevyeltä, on aika siirtyä kuntoilijan ohjelmaan!</p>
                        <div class="mt-4">
                            <a href="?taso=kuntoilija" class="btn btn-outline-light">Siirry kuntoilijan ohjelmaan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aloittelijan kotikuntopiiri -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Aloittelijan kotikuntopiiri</h2>
        <p class="text-center mb-5" data-aos="fade-up">Tee jokaista liikettä 10-15 toistoa (tai 30 sekuntia), 2-3 kierrosta. Pidä kierrosten välillä 1-2 minuutin tauko.</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/kyykky.jpg" class="exercise-img" alt="Kyykky">
                    <div class="exercise-content">
                        <span class="exercise-category">Alavartalon liike</span>
                        <h3 class="exercise-title">Kyykky</h3>
                        <ol class="exercise-steps">
                            <li>Seiso jalat hartioiden leveydellä</li>
                            <li>Koukista polvia ja työnnä takapuolta taaksepäin</li>
                            <li>Laskeudu niin alas kuin tuntuu mukavalta</li>
                            <li>Nouse takaisin ylös</li>
                        </ol>
                        <p class="mt-3">Helpotus: Tukeudu tuoliin tai seinään. Rajoita liikkeen syvyyttä.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/punnerrus.jpg" class="exercise-img" alt="Punnerrus">
                    <div class="exercise-content">
                        <span class="exercise-category">Ylävartalon liike</span>
                        <h3 class="exercise-title">Punnerrus</h3>
                        <ol class="exercise-steps">
                            <li>Asetu punnerrusasentoon polvet maassa</li>
                            <li>Pidä selkä suorana ja keskivartalo tiukkana</li>
                            <li>Koukista käsiä ja laske rintakehää kohti lattiaa</li>
                            <li>Työnnä itsesi takaisin ylös</li>
                        </ol>
                        <p class="mt-3">Helpotus: Tee punnerrukset seinää vasten. Vaikeampi: Tee punnerrukset varpaat maassa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/lantionnosto.jpg" class="exercise-img" alt="Lantion nosto">
                    <div class="exercise-content">
                        <span class="exercise-category">Keskivartalon liike</span>
                        <h3 class="exercise-title">Lantion nosto</h3>
                        <ol class="exercise-steps">
                            <li>Makaa selälläsi, jalkapohjat maassa, polvet koukussa</li>
                            <li>Jännitä vatsalihakset ja pakarat</li>
                            <li>Nosta lantio ylös niin, että vartalo muodostaa suoran linjan</li>
                            <li>Laske lantio hallitusti alas</li>
                        </ol>
                        <p class="mt-3">Vaikeampi: Pidä asentoa ylhäällä 3-5 sekuntia ennen laskeutumista.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/march.jpg" class="exercise-img" alt="Paikallaan marssi">
                    <div class="exercise-content">
                        <span class="exercise-category">Aerobinen liike</span>
                        <h3 class="exercise-title">Paikallaan marssi</h3>
                        <ol class="exercise-steps">
                            <li>Seiso suorassa, vatsa tiukkana</li>
                            <li>Nosta vuorotellen polvia kohti rintaa</li>
                            <li>Heiluta käsiä vastakkaiseen tahtiin</li>
                            <li>Jatka 30-60 sekuntia</li>
                        </ol>
                        <p class="mt-3">Helpotus: Nosta polvia matalammalle. Vaikeampi: Nosta polvia korkeammalle ja marssi nopeammin.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/chairDip.jpg" class="exercise-img" alt="Tuolidipit">
                    <div class="exercise-content">
                        <span class="exercise-category">Ylävartalon liike</span>
                        <h3 class="exercise-title">Tuolidipit</h3>
                        <ol class="exercise-steps">
                            <li>Istu tuolin reunalla, kädet reunalla vartalon vieressä</li>
                            <li>Liu'uta takapuoli tuolin reunan yli, jalat koukussa</li>
                            <li>Koukista kyynärpäitä ja laske vartaloa alaspäin</li>
                            <li>Työnnä itsesi takaisin ylös</li>
                        </ol>
                        <p class="mt-3">Helpotus: Rajoita liikkeen syvyyttä. Vaikeampi: Pidä jalat suorina edessä.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/plank1.jpg" class="exercise-img" alt="Lankku">
                    <div class="exercise-content">
                        <span class="exercise-category">Keskivartalon liike</span>
                        <h3 class="exercise-title">Lankku</h3>
                        <ol class="exercise-steps">
                            <li>Asetu kyynärvarsien ja varpaiden varaan</li>
                            <li>Pidä vartalo suorana päästä kantapäihin</li>
                            <li>Jännitä vatsalihakset ja pakarat</li>
                            <li>Pidä asento 15-30 sekuntia</li>
                        </ol>
                        <p class="mt-3">Helpotus: Tee lankku polvet maassa. Vaikeampi: Pidä asentoa pidempään.</p>
                    </div>
                </div>
                </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($taso == 'kuntoilija'): ?>
<!-- Kuntoilijan ohjelma -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Kuntoilijan liikuntaohjelma</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="info-card mb-4">
                    <h3 class="info-card-title mb-4">Tervetuloa kuntoilijan ohjelmaan!</h3>
                    <p>Tämä ohjelma on suunniteltu sinulle, joka harrastat jo säännöllisesti liikuntaa ja haluat kehittyä edelleen. Ohjelman tavoitteena on:</p>
                    <ul>
                        <li>Parantaa kestävyyskuntoa monipuolisesti</li>
                        <li>Kehittää lihasvoimaa ja -kestävyyttä</li>
                        <li>Edistää palautumista ja kehon hyvinvointia</li>
                        <li>Tarjota vaihtelua ja haastetta harjoitteluun</li>
                    </ul>
                    <p class="mt-3">Tämä ohjelma sisältää monipuolisesti erilaisia harjoitusmuotoja, jotka kehittävät fyysisen kunnon eri osa-alueita.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <h3 class="exercise-title p-4">Viikko-ohjelma - Kuntoilija</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Päivä</th>
                                    <th>Liikunta</th>
                                    <th>Kesto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Maanantai</td>
                                    <td>Kuntosali / Lihaskuntoharjoitus</td>
                                    <td>45-60 min</td>
                                </tr>
                                <tr>
                                    <td>Tiistai</td>
                                    <td>Reipas kävely / Kevyt juoksu</td>
                                    <td>30-40 min</td>
                                </tr>
                                <tr>
                                    <td>Keskiviikko</td>
                                    <td>Kotitreeni / HIIT</td>
                                    <td>30 min</td>
                                </tr>
                                <tr>
                                    <td>Torstai</td>
                                    <td>Lepo / Kevyt venyttely</td>
                                    <td>20 min</td>
                                </tr>
                                <tr>
                                    <td>Perjantai</td>
                                    <td>Kuntosali / Lihaskuntoharjoitus</td>
                                    <td>45-60 min</td>
                                </tr>
                                <tr>
                                    <td>Lauantai</td>
                                    <td>Juoksu / Pyöräily / Uinti</td>
                                    <td>40-50 min</td>
                                </tr>
                                <tr>
                                    <td>Sunnuntai</td>
                                    <td>Palauttava harjoitus / Venyttely</td>
                                    <td>30 min</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <h3 class="exercise-title p-4">Edistyminen</h3>
                    <div class="exercise-content">
                        <p>Tätä ohjelmaa suositellaan noudatettavan 6-8 viikkoa. Tämän jälkeen voit:</p>
                        <ul>
                            <li>Lisätä harjoitusten intensiteettiä (esim. juoksu nopeammin)</li>
                            <li>Kasvattaa harjoitusten kestoa asteittain</li>
                            <li>Lisätä vastusta lihaskuntoharjoituksissa</li>
                            <li>Lisätä erilaisia harjoitusmuotoja ja tekniikkaa</li>
                        </ul>
                        <p class="mt-3">Muista kuitenkin kuunnella kehoasi ja pitää riittävästi lepopäiviä harjoitusten välissä.</p>
                        <div class="mt-4">
                            <a href="?taso=edistynyt" class="btn btn-outline-light">Siirry edistyneen ohjelmaan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kuntoilijan treeniohjelma -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Kuntoilijan HIIT-harjoitus</h2>
        <p class="text-center mb-5" data-aos="fade-up">Tämä tehokas intervalliharjoitus kestää 30 minuuttia. Tee jokaista liikettä maksimiteholla 40 sekuntia, lepää 20 sekuntia, ja siirry seuraavaan liikkeeseen. Tee 3 kierrosta ja pidä kierrosten välissä 2 minuutin tauko.</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/exercise-burpee.jpg" class="exercise-img" alt="Burpee">
                    <div class="exercise-content">
                        <span class="exercise-category">Kokovartaloliike</span>
                        <h3 class="exercise-title">Burpee</h3>
                        <ol class="exercise-steps">
                            <li>Seiso suorassa, laskeudu kyykkyyn</li>
                            <li>Aseta kädet lattiaan ja hyppää jalat taakse punnerrusasentoon</li>
                            <li>Tee punnerrus (voit jättää myös väliin)</li>
                            <li>Hyppää jalat takaisin käsien luo kyykkyyn</li>
                            <li>Ponnista ylös ja taputa kädet pään yläpuolella</li>
                        </ol>
                        <p class="mt-3">Helpotus: Jätä hyppy pois lopusta tai tee ilman punnerrusta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/exercise-mountain-climber.jpg" class="exercise-img" alt="Vuorikiipeilijä">
                    <div class="exercise-content">
                        <span class="exercise-category">Keskivartalon liike</span>
                        <h3 class="exercise-title">Vuorikiipeilijä</h3>
                        <ol class="exercise-steps">
                            <li>Asetu punnerrusasentoon kädet hartioiden alla</li>
                            <li>Vedä oikea polvi kohti rintaa</li>
                            <li>Vaihda nopeasti jalkaa ja vedä vasen polvi eteen</li>
                            <li>Jatka vuorotahtiin nopealla tempolla</li>
                        </ol>
                        <p class="mt-3">Vaikeampi: Lisää tempoa tai tee "kaksoisvuorikiipeilijä" vetämällä molemmat polvet eteen vuorotellen.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/exercise-jump-squat.jpg" class="exercise-img" alt="Kyykky hypyllä">
                    <div class="exercise-content">
                        <span class="exercise-category">Alavartalon liike</span>
                        <h3 class="exercise-title">Kyykky hypyllä</h3>
                        <ol class="exercise-steps">
                            <li>Seiso jalat hartioiden leveydellä</li>
                            <li>Laskeudu kyykkyyn työntäen takapuolta taakse</li>
                            <li>Ponnista voimakkaasti ylös hyppyyn</li>
                            <li>Laskeudu pehmeästi takaisin kyykkyyn</li>
                        </ol>
                        <p class="mt-3">Helpotus: Tee tavallinen kyykky ilman hyppyä. Vaikeampi: Lisää käsien heilautus alas-ylös liikkeen tahtiin.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/exercise-plank-reach.jpg" class="exercise-img" alt="Lankku kurkotuksella">
                    <div class="exercise-content">
                        <span class="exercise-category">Keskivartalon liike</span>
                        <h3 class="exercise-title">Lankku kurkotuksella</h3>
                        <ol class="exercise-steps">
                            <li>Asetu lankkuasentoon kyynärvarret lattiassa</li>
                            <li>Pidä keskivartalo tiukkana ja selkä suorana</li>
                            <li>Kurota oikealla kädellä eteenpäin</li>
                            <li>Palauta käsi ja kurota vasemmalla kädellä</li>
                        </ol>
                        <p class="mt-3">Vaikeampi: Kurota kädellä sivulle tai nosta vastakkaista jalkaa samanaikaisesti.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/exercise-skater.jpg" class="exercise-img" alt="Luistelijahyppy">
                    <div class="exercise-content">
                        <span class="exercise-category">Aerobinen liike</span>
                        <h3 class="exercise-title">Luistelijahyppy</h3>
                        <ol class="exercise-steps">
                            <li>Hyppää sivuttain oikealle jalalle</li>
                            <li>Kumarru ja kosketa vasemmalla kädellä oikeaan jalkaan</li>
                            <li>Hyppää sivuttain vasemmalle jalalle</li>
                            <li>Kumarru ja kosketa oikealla kädellä vasempaan jalkaan</li>
                        </ol>
                        <p class="mt-3">Helpotus: Tee ilman hyppyä askeltamalla sivulle. Vaikeampi: Hyppää pidemmälle ja alemmaksi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/exercise-pushup-rotation.jpg" class="exercise-img" alt="Punnerrus kierrolla">
                    <div class="exercise-content">
                        <span class="exercise-category">Ylävartalon liike</span>
                        <h3 class="exercise-title">Punnerrus kierrolla</h3>
                        <ol class="exercise-steps">
                            <li>Tee tavallinen punnerrus</li>
                            <li>Noustuasi ylös, kierrä ylävartaloa ja nosta oikea käsi ylös</li>
                            <li>Palaa punnerrusasentoon ja tee uusi punnerrus</li>
                            <li>Nouse ylös ja kierrä nostaen vasen käsi ylös</li>
                        </ol>
                        <p class="mt-3">Helpotus: Tee punnerrukset polvet maassa. Vaikeampi: Pidä jalkoja kapeammalla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($taso == 'edistynyt'): ?>
<!-- Edistyneen ohjelma -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Edistyneen liikuntaohjelma</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="info-card mb-4">
                    <h3 class="info-card-title">Tervetuloa edistyneen ohjelmaan!</h3>
                    <p>Tämä ohjelma on suunniteltu aktiiviselle liikkujalle, joka haluaa tavoitteellisesti kehittää kuntoaan ja suorituskykyään. Ohjelman tavoitteena on:</p>
                    <ul>
                        <li>Kehittää voimaa, nopeutta ja kestävyyttä monipuolisesti</li>
                        <li>Maksimoida harjoitusvasteen tehokkuus</li>
                        <li>Vahvistaa lihaksia ja parantaa kestävyyskuntoa</li>
                        <li>Edistää kehonhallintaa ja liikkuvuutta</li>
                    </ul>
                    <p class="mt-3">Ohjelma sisältää monipuolisesti erilaisia harjoitusmuotoja, jotka haastavat kehoa ja mieltä uudella tavalla.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <h3 class="exercise-title p-4">Viikko-ohjelma - Edistynyt</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Päivä</th>
                                    <th>Liikunta</th>
                                    <th>Kesto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Maanantai</td>
                                    <td>Voimaharjoitus (ylävartalo)</td>
                                    <td>60-75 min</td>
                                </tr>
                                <tr>
                                    <td>Tiistai</td>
                                    <td>Intervalliharjoitus (HIIT)</td>
                                    <td>45 min</td>
                                </tr>
                                <tr>
                                    <td>Keskiviikko</td>
                                    <td>Voimaharjoitus (alavartalo)</td>
                                    <td>60-75 min</td>
                                </tr>
                                <tr>
                                    <td>Torstai</td>
                                    <td>Kestävyysharjoitus (juoksu/pyöräily)</td>
                                    <td>45-60 min</td>
                                </tr>
                                <tr>
                                    <td>Perjantai</td>
                                    <td>Toiminnallinen kokovartaloharjoitus</td>
                                    <td>60 min</td>
                                </tr>
                                <tr>
                                    <td>Lauantai</td>
                                    <td>Pidempi kestävyysharjoitus</td>
                                    <td>60-90 min</td>
                                </tr>
                                <tr>
                                    <td>Sunnuntai</td>
                                    <td>Lepo / Aktiivinen palautuminen / Liikkuvuus</td>
                                    <td>30-45 min</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <h3 class="exercise-title p-4">Harjoittelun jaksotus</h3>
                    <div class="exercise-content">
                        <p>Edistyneen harjoittelussa tärkeää on jaksottaa harjoittelua periodisoimalla:</p>
                        <ul>
                            <li><strong>Viikot 1-2:</strong> Peruskuntokausi - Kevyempi intensiteetti, keskittyminen tekniikkaan</li>
                            <li><strong>Viikot 3-5:</strong> Voimakausi - Progressiivisesti lisättävä vastus ja teho</li>
                            <li><strong>Viikko 6:</strong> Kevyempi palauttava viikko</li>
                            <li><strong>Viikot 7-9:</strong> Tehokausi - Korkeampi intensiteetti, lyhyemmät sarjat</li>
                            <li><strong>Viikko 10:</strong> Palauttava viikko ja testaus</li>
                        </ul>
                        <p class="mt-3">Muista että oikea ravinto ja riittävä lepo ovat erittäin tärkeitä edistyneen harjoittelussa!</p>
                        <div class="mt-4">
                            <a href="#ravinto-ohjelma" class="btn btn-outline-light">Tutustu ravinto-ohjeisiin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Edistyneen voimaharjoitus -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Edistyneen voimaharjoitus - Ylävartalo</h2>
        <p class="text-center mb-5" data-aos="fade-up">Tämä voimaharjoitus keskittyy ylävartalon lihaksiin. Tee 3-4 sarjaa jokaista liikettä, 8-12 toistoa sarjassa. Sarjojen välillä 60-90 sekunnin lepo.</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/exercise-benchpress.jpg" class="exercise-img" alt="Penkkipunnerrus">
                    <div class="exercise-content">
                        <span class="exercise-category">Rinta / Olkapäät / Ojentajat</span>
                        <h3 class="exercise-title">Penkkipunnerrus</h3>
                        <ol class="exercise-steps">
                            <li>Asetu penkille selälleen, jalat tukevasti maassa</li>
                            <li>Tartu tankoon hieman hartioita leveämmällä otteella</li>
                            <li>Laske tanko hallitusti rintakehälle</li>
                            <li>Punnerra tanko takaisin ylös suorille käsille</li>
                        </ol>
                        <p class="mt-3">Haasta itseäsi: Kokeile eri kulmissa (vinopenkkipunnerrus) tai käytä käsipainoja.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/exercise-pullup.jpg" class="exercise-img" alt="Leuanveto">
                    <div class="exercise-content">
                        <span class="exercise-category">Selkä / Hauis</span>
                        <h3 class="exercise-title">Leuanveto</h3>
                        <ol class="exercise-steps">
                            <li>Tartu tankoon hartioita leveämmällä otteella</li>
                            <li>Roiku suorilla käsillä, keskivartalo tiukkana</li>
                            <li>Vedä itseäsi ylös kunnes leuka on tangon yli</li>
                            <li>Laskeudu hallitusti takaisin lähtöasentoon</li>
                        </ol>
                        <p class="mt-3">Helpotus: Käytä avustettua leuanvetokonetta tai kuminauhaa. Vaikeampi: Lisää painoa tai muuta oteleveyttä.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/exercise-military-press.jpg" class="exercise-img" alt="Pystypunnerrus">
                    <div class="exercise-content">
                        <span class="exercise-category">Olkapäät / Ojentajat</span>
                        <h3 class="exercise-title">Pystypunnerrus</h3>
                        <ol class="exercise-steps">
                            <li>Seiso tankoon hartioiden leveydellä, tanko rinnan korkeudella</li>
                            <li>Punnerra tanko suoraan ylös pään yläpuolelle</li>
                            <li>Lukitse kädet hetkeksi yläasennossa</li>
                            <li>Laske tanko hallitusti takaisin rinnan korkeudelle</li>
                        </ol>
                        <p class="mt-3">Variaatio: Kokeile käsipainoilla tai istuen tehtynä. Tekniikka ennen painoja!</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/exercise-row.jpg" class="exercise-img" alt="Kulmasoutu">
                    <div class="exercise-content">
                        <span class="exercise-category">Selkä / Hauis</span>
                        <h3 class="exercise-title">Kulmasoutu</h3>
                        <ol class="exercise-steps">
                            <li>Seiso jalat hartioiden leveydellä, polvet hieman koukussa</li>
                            <li>Taivuta ylävartaloa eteen noin 45 asteen kulmaan</li>
                            <li>Vedä painot/tanko kohti alavatsaa</li>
                            <li>Purista lapaluita yhteen yläasennossa ja laske hallitusti alas</li>
                        </ol>
                        <p class="mt-3">Tekniikka: Pidä selkä suorana, vain pieni taivutus lantiosta. Älä pyöristä selkää.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/exercise-dips.jpg" class="exercise-img" alt="Dippipunnerrus">
                    <div class="exercise-content">
                        <span class="exercise-category">Rinta / Ojentajat</span>
                        <h3 class="exercise-title">Dippipunnerrus</h3>
                        <ol class="exercise-steps">
                            <li>Tartu dippitelineeseen, kädet suorina</li>
                            <li>Laske vartaloa alaspäin koukistamalla kyynärpäitä</li>
                            <li>Laskeudu kunnes olkavarret ovat vaakasuorassa</li>
                            <li>Punnerra takaisin ylös</li>
                        </ol>
                        <p class="mt-3">Helpotus: Käytä avustettua dippilaitetta. Vaikeampi: Lisää painoa vyöpainolla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/exercise-face-pull.jpg" class="exercise-img" alt="Face Pull">
                    <div class="exercise-content">
                        <span class="exercise-category">Yläselkä / Olkapäät</span>
                        <h3 class="exercise-title">Face Pull</h3>
                        <ol class="exercise-steps">
                            <li>Asetu taljaan, ota köydestä kiinni kädet suorina</li>
                            <li>Vedä köyden päitä kohti kasvojasi, kyynärpäät korkealla</li>
                            <li>Purista lapaluita yhteen ja kierrä käsiä ulospäin</li>
                            <li>Palauta hallitusti alkuasentoon</li>
                        </ol>
                        <p class="mt-3">Tärkeää: Keskity tekniikkaan ja pienempiin painoihin. Tämä liike parantaa ryhtiä ja ennaltaehkäisee vammoja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA-osio -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <h2 class="section-title">Aloita matkasi hyvinvointiin tänään!</h2>
                <p class="lead mb-4">Säännöllinen liikunta on yksi parhaista asioista, joita voit tehdä terveytesi eteen. Valitse itsellesi sopiva ohjelma ja ota ensimmäinen askel kohti energisempää ja terveempää elämää.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="?taso=aloittelija" class="btn btn-primary">Aloittelijan ohjelma</a>
                    <a href="?taso=kuntoilija" class="btn btn-outline-light">Kuntoilijan ohjelma</a>
                    <a href="?taso=edistynyt" class="btn btn-outline-light">Edistyneen ohjelma</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Liikuntapäiväkirja -->

<?php include 'footer.php'; ?>   