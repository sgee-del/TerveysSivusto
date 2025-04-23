<?php
$page_title = "Ruokavalio";
$current_page = "ruokavalio";
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center" data-aos="fade-right">
                <img src="img/ruokavalio.jpg" alt="Terveellinen ruokavalio" class="img-fluid hero-img">
            </div>
            <div class="col-lg-7 hero-content" data-aos="fade-left">
                <h1 class="hero-title">Terveellinen <span style="color: var(--accent-pink);">Ruokavalio</span></h1>
                <h2 class="hero-subtitle">Ravinto hyvinvointisi perustana</h2>
                <p class="lead mb-4">Oikeanlainen ruokavalio on keskeinen osa terveellistä elämäntapaa. Tältä sivulta löydät tietoa terveellisen ruokavalion perusteista, ravintoaineista ja erilaisista ruokavalioista.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#ravinto-ohjeet" class="btn btn-primary">Katso ravintosuositukset</a>
                    <a href="#ruokavaliotyypit" class="btn btn-outline-light">Eri ruokavaliotyypit</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ruokavalion perusteet -->
<section id="ravinto-ohjeet" class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Terveellisen ruokavalion perusteet</h2>
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="info-card">
                    <h3 class="info-card-title">Terveellisen ruokavalion kulmakivet</h3>
                    <p>Terveellisessä ruokavaliossa tärkeintä on monipuolisuus, kohtuullisuus ja tasapaino. Seuraavat periaatteet auttavat sinua koostamaan terveellisen ruokavalion:</p>
                    <ul class="info-list">
                        <li><i class="fas fa-check"></i> Syö runsaasti kasviksia, hedelmiä ja marjoja (vähintään 500 g päivässä)</li>
                        <li><i class="fas fa-check"></i> Valitse täysjyväviljatuotteita</li>
                        <li><i class="fas fa-check"></i> Suosi hyviä rasvoja (pehmeät rasvat kuten oliiviöljy, pähkinät, siemenet)</li>
                        <li><i class="fas fa-check"></i> Käytä laadukkaita proteiinin lähteitä (kala, kana, palkokasvit)</li>
                        <li><i class="fas fa-check"></i> Vältä liiallista suolan käyttöä</li>
                        <li><i class="fas fa-check"></i> Rajoita sokerin ja prosessoitujen ruokien kulutusta</li>
                        <li><i class="fas fa-check"></i> Huolehdi riittävästä nesteytyksestä (1,5-2 litraa päivässä)</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <i class="fas fa-carrot fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Lautasmalli</h3>
                    <p>Lautasmalli on yksinkertainen tapa koostaa terveellinen ateria:</p>
                    <ul>
                        <li>1/2 lautasesta: kasviksia ja salaattia</li>
                        <li>1/4 lautasesta: perunaa, riisiä tai pastaa</li>
                        <li>1/4 lautasesta: lihaa, kalaa, munaa tai palkokasveja</li>
                        <li>Lisukkeena täysjyväleipä ja lasillinen vettä tai rasvatonta maitoa</li>
                    </ul>
                    <p class="mt-3">Lautasmallin noudattaminen auttaa pitämään annoskoot kohtuullisina ja varmistaa, että saat kaikkia tarpeellisia ravintoaineita.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="info-card">
                    <i class="fas fa-tint fa-3x mb-4" style="color: var(--accent-pink);"></i>
                    <h3 class="info-card-title">Säännöllinen ateriarytmi</h3>
                    <p>Säännöllinen ateriarytmi on tärkeä osa terveellistä ruokavaliota:</p>
                    <ul>
                        <li>Syö 3-5 ateriaa päivässä, noin 3-4 tunnin välein</li>
                        <li>Älä jätä aterioita väliin, erityisesti aamupalaa</li>
                        <li>Kiireessäkin pienikin välipala on parempi kuin ei mitään</li>
                        <li>Säännöllinen ateriarytmi auttaa pitämään verensokerin tasaisena ja hillitsee näläntunnetta</li>
                    </ul>
                    <p class="mt-3">Kun syöt säännöllisesti, vältät liian suuret annokset ja napostelun.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ravintoaineet -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Tärkeät ravintoaineet</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <h3 class="info-card-title">Proteiinit</h3>
                    <p><strong>Mitä:</strong> Proteiinit ovat kehon rakennusaineita, jotka koostuvat aminohapoista.</p>
                    <p><strong>Miksi tärkeää:</strong> Tarvitaan lihasten, kudosten ja hormonien rakentamiseen ja korjaamiseen.</p>
                    <p><strong>Hyviä lähteitä:</strong></p>
                    <ul>
                        <li>Kala ja äyriäiset</li>
                        <li>Kana, kalkkuna ja vähärasvainen liha</li>
                        <li>Kananmunat</li>
                        <li>Palkokasvit (pavut, linssit, herneet)</li>
                        <li>Tofu ja soijatuotteet</li>
                        <li>Pähkinät ja siemenet</li>
                        <li>Maitotuotteet</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="info-card">
                    <h3 class="info-card-title">Hiilihydraatit</h3>
                    <p><strong>Mitä:</strong> Hiilihydraatit ovat kehon ensisijainen energianlähde.</p>
                    <p><strong>Miksi tärkeää:</strong> Antavat energiaa aivoille, lihaksille ja muille kehon toiminnoille.</p>
                    <p><strong>Hyviä lähteitä:</strong></p>
                    <ul>
                        <li>Täysjyväviljat (ruisleipä, täysjyväpasta)</li>
                        <li>Kaura, quinoa, tattari</li>
                        <li>Juurekset ja peruna</li>
                        <li>Pavut ja linssit</li>
                        <li>Hedelmät</li>
                        <li>Marjat</li>
                    </ul>
                    <p>Suosi hitaasti imeytyviä hiilihydraatteja, jotka pitävät verensokerin tasaisena.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="info-card">
                    <h3 class="info-card-title">Rasvat</h3>
                    <p><strong>Mitä:</strong> Rasvat ovat tiivistä energiaa ja välttämättömiä kehon toiminnalle.</p>
                    <p><strong>Miksi tärkeää:</strong> Tarvitaan solujen rakenteisiin, hormonituotantoon ja rasvaliukoisten vitamiinien imeytymiseen.</p>
                    <p><strong>Hyviä lähteitä:</strong></p>
                    <ul>
                        <li>Oliiviöljy ja rypsiöljy</li>
                        <li>Avokado</li>
                        <li>Pähkinät ja siemenet</li>
                        <li>Rasvainen kala (lohi, makrilli)</li>
                        <li>Kananmunat</li>
                    </ul>
                    <p>Suosi pehmeitä, tyydyttymättömiä rasvoja ja vältä kovia, tyydyttyneitä rasvoja.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Erilaiset ruokavaliot -->
<section id="ruokavaliotyypit" class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Erilaiset ruokavaliot</h2>
        
        <ul class="nav nav-tabs mb-4" id="ruokavalioTab" role="tablist" data-aos="fade-up">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kasvis-tab" data-bs-toggle="tab" data-bs-target="#kasvis" type="button" role="tab" aria-controls="kasvis" aria-selected="true">Kasvisruokavalio</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="keto-tab" data-bs-toggle="tab" data-bs-target="#keto" type="button" role="tab" aria-controls="keto" aria-selected="false">Ketogenic</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="paleo-tab" data-bs-toggle="tab" data-bs-target="#paleo" type="button" role="tab" aria-controls="paleo" aria-selected="false">Paleo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="valimeri-tab" data-bs-toggle="tab" data-bs-target="#valimeri" type="button" role="tab" aria-controls="valimeri" aria-selected="false">Välimeren</button>
            </li>
        </ul>
        
        <div class="tab-content" id="ruokavalioTabContent">
            <div class="tab-pane fade show active" id="kasvis" role="tabpanel" aria-labelledby="kasvis-tab">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="info-card">
                            <h3 class="info-card-title">Kasvisruokavalio</h3>
                            <p>Kasvisruokavaliossa vältetään lihaa, kalaa ja muita eläinperäisiä ruokia.</p>
                            <p><strong>Erilaisia kasvisruokavalioita:</strong></p>
                            <ul>
                                <li><strong>Vegaani:</strong> Ei mitään eläinperäistä (ei lihaa, kalaa, maitotuotteita, kananmunia tai hunajaa)</li>
                                <li><strong>Lakto-ovo-vegetaristi:</strong> Syö maitotuotteita ja kananmunia, mutta ei lihaa tai kalaa</li>
                                <li><strong>Pesco-vegetaristi:</strong> Syö kalaa, maitotuotteita ja kananmunia, mutta ei lihaa</li>
                            </ul>
                            <p><strong>Edut:</strong></p>
                            <ul>
                                <li>Vähentää sydän- ja verisuonitautien riskiä</li>
                                <li>Auttaa painonhallinnassa</li>
                                <li>Voi laskea verenpainetta</li>
                                <li>Ympäristöystävällisempi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="diet-plan">
                            <h4 class="meal-title">Esimerkki kasvisruokavalion päivästä</h4>
                            <div class="meal">
                                <h5>Aamiainen</h5>
                                <p>Kaurapuuro marjoilla, pähkinöillä ja siemenillä. Lasi kasvimaitoa.</p>
                            </div>
                            <div class="meal">
                                <h5>Lounas</h5>
                                <p>Linssikeitto, täysjyväleipä avokadolla ja kikhernekroketit.</p>
                            </div>
                            <div class="meal">
                                <h5>Välipala</h5>
                                <p>Hedelmä ja pieni kourallinen pähkinöitä.</p>
                            </div>
                            <div class="meal">
                                <h5>Päivällinen</h5>
                                <p>Tofu-wokki täysjyväriisillä, runsaasti kasviksia ja cashewpähkinöitä.</p>
                            </div>
                            <div class="meal">
                                <h5>Iltapala</h5>
                                <p>Kookosyogurtti ja granola.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="keto" role="tabpanel" aria-labelledby="keto-tab">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="info-card">
                            <h3 class="info-card-title">Ketogeeninen ruokavalio</h3>
                            <p>Ketogeeninen ruokavalio perustuu hyvin vähäiseen hiilihydraattien saantiin, kohtuulliseen proteiinin määrään ja runsaaseen rasvan saantiin.</p>
                            <p><strong>Pääperiaatteet:</strong></p>
                            <ul>
                                <li>Hiilihydraatteja erittäin vähän (20-50g/päivä)</li>
                                <li>Proteiinia kohtuullisesti</li>
                                <li>Rasvaa runsaasti (70-80% päivän energiansaannista)</li>
                            </ul>
                            <p><strong>Edut:</strong></p>
                            <ul>
                                <li>Voi edistää painonpudotusta lyhyellä aikavälillä</li>
                                <li>Saattaa alentaa verensokeria</li>
                                <li>Voi vähentää nälän tunnetta</li>
                                <li>Tutkimusnäyttöä hyödyistä epilepsian hoidossa</li>
                            </ul>
                            <p><strong>Huomioitavaa:</strong> Ketodieetti ei sovi kaikille. Keskustele lääkärin kanssa ennen dieetin aloittamista, erityisesti jos sinulla on terveysongelmia.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="diet-plan">
                            <h4 class="meal-title">Esimerkki ketogeenisen ruokavalion päivästä</h4>
                            <div class="meal">
                                <h5>Aamiainen</h5>
                                <p>Munakas avokadolla ja juustolla. Pekonia tai halloumia.</p>
                            </div>
                            <div class="meal">
                                <h5>Lounas</h5>
                                <p>Runsas salaatti kananrintafileellä, fetajuustolla, oliiveilla ja oliiviöljyllä.</p>
                            </div>
                            <div class="meal">
                                <h5>Välipala</h5>
                                <p>Kourallinen manteleita tai macadamiapähkinöitä.</p>
                            </div>
                            <div class="meal">
                                <h5>Päivällinen</h5>
                                <p>Lohi voi-sitruunakastikkeessa, paahdettuja parsakaaleja ja kukkakaalia.</p>
                            </div>
                            <div class="meal">
                                <h5>Iltapala</h5>
                                <p>Täyteläinen kaakao kookosmaito pohjalla (ei sokeria).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="paleo" role="tabpanel" aria-labelledby="paleo-tab">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="info-card">
                            <h3 class="info-card-title">Paleo-ruokavalio</h3>
                            <p>Paleo-ruokavalio perustuu ajatukseen, että ihmisen tulisi syödä samankaltaista ruokaa kuin metsästäjä-keräilijät söivät paleoliittisella ajalla.</p>
                            <p><strong>Mitä saa syödä:</strong></p>
                            <ul>
                                <li>Lihaa, kalaa ja mereneläviä</li>
                                <li>Kananmunia</li>
                                <li>Kasviksia ja hedelmiä</li>
                                <li>Pähkinöitä ja siemeniä</li>
                                <li>Terveitä öljyjä (oliiviöljy, avokadoöljy)</li>
                            </ul>
                            <p><strong>Mitä vältetään:</strong></p>
                            <ul>
                                <li>Viljatuotteita</li>
                                <li>Palkokasveja</li>
                                <li>Maitotuotteita</li>
                                <li>Sokeria ja keinotekoisia makeutusaineita</li>
                                <li>Prosessoituja ruokia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="diet-plan">
                            <h4 class="meal-title">Esimerkki paleo-ruokavalion päivästä</h4>
                            <div class="meal">
                                <h5>Aamiainen</h5>
                                <p>Kananmunat, avokado ja paistetut kasvikset.</p>
                            </div>
                            <div class="meal">
                                <h5>Lounas</h5>
                                <p>Grillattu kana, iso salaatti ja paahdettuja bataatteja.</p>
                            </div>
                            <div class="meal">
                                <h5>Välipala</h5>
                                <p>Omena ja manteleita.</p>
                            </div>
                            <div class="meal">
                                <h5>Päivällinen</h5>
                                <p>Grillattua lohta, höyrytettyjä kasviksia ja guacamolea.</p>
                            </div>
                            <div class="meal">
                                <h5>Iltapala</h5>
                                <p>Tuoreita marjoja ja kookosliha.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="valimeri" role="tabpanel" aria-labelledby="valimeri-tab">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="info-card">
                            <h3 class="info-card-title">Välimeren ruokavalio</h3>
                            <p>Välimeren ruokavalio perustuu perinteisiin ruokatottumuksiin Välimeren maissa, kuten Kreikassa ja Italiassa.</p>
                            <p><strong>Pääperiaatteet:</strong></p>
                            <ul>
                                <li>Runsaasti kasviksia, hedelmiä, pähkinöitä ja täysjyväviljoja</li>
                                <li>Oliiviöljy pääasiallisena rasvan lähteenä</li>
                                <li>Kohtuullinen määrä kalaa ja mereneläviä</li>
                                <li>Rajoitetusti siipikarjan lihaa, kananmunia ja maitotuotteita</li>
                                <li>Hyvin vähän punaista lihaa</li>
                                <li>Mahdollisesti kohtuullisesti punaviiniä aterioiden yhteydessä</li>
                            </ul>
                            <p><strong>Edut:</strong></p>
                            <ul>
                                <li>Vähentää sydän- ja verisuonitautien riskiä</li>
                                <li>Voi auttaa painonhallinnassa</li>
                                <li>Yhdistetty pienempään Alzheimerin taudin riskiin</li>
                                <li>Saattaa pidentää elinikää</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="diet-plan">
                            <h4 class="meal-title">Esimerkki Välimeren ruokavalion päivästä</h4>
                            <div class="meal">
                                <h5>Aamiainen</h5>
                                <p>Kreikkalainen jogurtti hunajalla, pähkinöillä ja tuoreilla hedelmillä.</p>
                            </div>
                            <div class="meal">
                                <h5>Lounas</h5>
                                <p>Täysjyväleipä, hummus, oliiveja ja tomatti-kurkkusalaatti oliiviöljyllä.</p>
                            </div>
                            <div class="meal">
                                <h5>Välipala</h5>
                                <p>Pieni kourallinen pähkinöitä ja tuoreita hedelmiä.</p>
                            </div>
                            <div class="meal">
                                <h5>Päivällinen</h5>
                                <p>Uunissa paistettua kalaa, paahdetuja kasviksia oliiviöljyllä ja täysjyväriisiä.</p>
                            </div>
                            <div class="meal">
                                <h5>Iltapala</h5>
                                <p>Pieni määrä tummaa suklaata (yli 70% kaakaota).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Terveelliset pienet muutokset -->
<section id="pienet_muutokset" class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Pieniä terveellisiä muutoksia ruokavalioon</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="exercise-card">
                    <img src="img/ruokavalio1.jpg" class="exercise-img" alt="Ruoan valmistus">
                    <div class="exercise-content">
                        <h3 class="exercise-title">Valmista ruokasi itse</h3>
                        <p>Kun valmistat ruokasi itse, tiedät tarkalleen mitä syöt. Voit kontrolloida suolan, sokerin ja rasvan määrää sekä lisätä enemmän kasviksia.</p>
                        <p>Kokeile valmistaa viikonloppuna osa seuraavan viikon aterioista etukäteen. Se säästää aikaa ja auttaa välttämään pikaruokahoukutuksia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="exercise-card">
                    <img src="img/ruokavalio2.jpg" class="exercise-img" alt="Vesi">
                    <div class="exercise-content">
                        <h3 class="exercise-title">Juo enemmän vettä</h3>
                        <p>Korvaa sokeripitoiset juomat vedellä. Se vähentää kalorien saantia merkittävästi ja edistää terveyttä.</p>
                        <p>Tavoittele 1,5-2 litraa vettä päivässä. Pidä vesipullo mukanasi ja juo säännöllisesti pitkin päivää.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="exercise-card">
                    <img src="img/ruokavalio3.jpg" class="exercise-img" alt="Annoskoko">
                    <div class="exercise-content">
                        <h3 class="exercise-title">Kiinnitä huomiota annoskokoihin</h3>
                        <p>Liian suuret annokset johtavat helposti ylensyöntiin. Käytä pienempiä lautasia ja mittaa annoksesi.</p>
                        <p>Syö hitaasti ja keskity ruokailuun. Anna kylläisyyden tunteen ehtiä kehittyä ennen kuin otat lisää.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lisätietoa ja linkit -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Lisätietoa ja työkaluja</h2>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="info-card">
                    <h3 class="info-card-title">Hyödyllisiä työkaluja</h3>
                    <p>Näiden työkalujen avulla voit seurata ruokavaliotasi ja saada hyödyllistä tietoa:</p>
                    <ul class="info-list">
                        <li><i class="fas fa-calculator"></i> <a href="bmi.php" class="text-light">BMI-laskuri</a> - Tarkista painoindeksisi</li>
                        <li><i class="fas fa-utensils"></i> <a href="#" class="text-light">Ravintoainelaskuri</a> - Tarkista mitä ravinto  
                        <li><i class="fas fa-utensils"></i> <a href="#" class="text-light">Ravintoainelaskuri</a> - Tarkista mitä ravintoaineita saat päivittäisestä ruokavaliostasi</li>
                        <li><i class="fas fa-clipboard-list"></i> <a href="#" class="text-light">Ruokapäiväkirja</a> - Seuraa ruokavaliotasi ja tunnista kehittämiskohteet</li>
                        <li><i class="fas fa-shopping-cart"></i> <a href="#" class="text-light">Kauppalistan laatija</a> - Suunnittele ostoksesi etukäteen</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-card">
                    <h3 class="info-card-title">Vinkkejä terveellisempään ruokavalioon</h3>
                    <ul class="info-list">
                        <li><i class="fas fa-check"></i> Lisää kasviksia jokaiselle aterialle</li>
                        <li><i class="fas fa-check"></i> Korvaa valkoiset viljatuotteet täysjyvätuotteilla</li>
                        <li><i class="fas fa-check"></i> Vähennä sokeria sisältäviä juomia ja välipaloja</li>
                        <li><i class="fas fa-check"></i> Opettele lukemaan tuoteselosteita</li>
                        <li><i class="fas fa-check"></i> Korvaa suola yrteillä ja mausteilla</li>
                        <li><i class="fas fa-check"></i> Valitse terveellisempiä ruoanvalmistusmenetelmiä (keittäminen, höyryttäminen, uunissa paistaminen)</li>
                        <li><i class="fas fa-check"></i> Nauti ruoasta ja syö tietoisesti</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Usein kysytyt kysymykset -->
<section class="section-padding bg-dark-accent">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Usein kysytyt kysymykset</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="info-card">
                    <h4 class="mb-4">Vastauksia yleisimpiin ruokavaliota koskeviin kysymyksiin</h4>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-question-circle" style="color: var(--accent-pink);"></i> Kuinka monta ateriaa päivässä tulisi syödä?</h5>
                        <p>Useimmille sopiva määrä on 3-5 ateriaa päivässä. Tärkeintä on säännöllinen ateriarytmi, joka auttaa pitämään verensokerin tasaisena ja hillitsemään näläntunnetta. Kokeile mikä toimii sinulle parhaiten.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-question-circle" style="color: var(--accent-pink);"></i> Pitääkö karppaaminen paikkansa?</h5>
                        <p>Vähähiilihydraattinen ruokavalio voi toimia painonpudotuksessa joillekin ihmisille, mutta se ei ole ainoa oikea tapa. Tärkeintä on löytää tasapainoinen ja kestävä ruokavalio, jota voit noudattaa pitkäaikaisesti. Kaikkia hiilihydraatteja ei kannata karsia, sillä täysjyväviljat, hedelmät ja kasvikset sisältävät tärkeitä ravintoaineita.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-question-circle" style="color: var(--accent-pink);"></i> Ovatko rasvat epäterveellisiä?</h5>
                        <p>Kaikki rasvat eivät ole epäterveellisiä. Tyydyttymättömät rasvat (oliiviöljy, pähkinät, avokado, rasvainen kala) ovat terveellisiä ja välttämättömiä elimistölle. Tyydyttyneiden rasvojen (voi, rasvainen liha, leivonnaiset) liiallista saantia kannattaa välttää, ja transrasvoja (monet einekset ja leivonnaiset) tulisi välttää kokonaan.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-question-circle" style="color: var(--accent-pink);"></i> Saanko tarpeeksi proteiinia kasvisruokavaliolla?</h5>
                        <p>Kyllä, kasvisruokavaliolla voi saada riittävästi proteiinia. Hyviä kasviproteiinin lähteitä ovat palkokasvit (pavut, linssit, herneet), tofu ja muut soijatuotteet, tempeh, seitan, quinoa sekä pähkinät ja siemenet. Lakto-ovo-vegetaristit saavat proteiinia myös kananmunista ja maitotuotteista.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-question-circle" style="color: var(--accent-pink);"></i> Miten syödä terveellisesti pienellä budjetilla?</h5>
                        <p>Terveellinen syöminen ei vaadi kalliita superfoodeja. Hyvä perusta on edullisissa ruoka-aineissa: kausikasvikset, pakastemarjat, täysjyvätuotteet, kuivatut pavut ja linssit, kananmunat ja säilyketonnikala ovat hyviä ja edullisia valintoja. Suunnittele ateriat etukäteen, hyödynnä tarjoukset ja vältä ruokahävikkiä.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ota yhteyttä -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Ota yhteyttä</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="contact-form">
                    <p class="mb-4">Onko sinulla kysymyksiä ruokavaliosta tai tarvitsetko henkilökohtaista neuvontaa? Ota yhteyttä täyttämällä lomake ja teemmee juuri sinulle sopivan ruokavalion!</p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Nimi" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Sähköposti" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Aihe">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Viesti" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Lähetä viesti</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>     