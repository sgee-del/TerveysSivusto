<?php
$page_title = "Verenpaine";
$current_page = "verenpaine";
include 'header.php';

// JavaScript for the page using NOWDOC syntax
$page_scripts = <<<'EOT'
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Bp check
    const bpForm = document.getElementById('bp-form');
    if (bpForm) {
        bpForm.addEventListener('submit', function(e) {
            e.preventDefault();
           
            // Kääyttäjän syöttämät arvot
            const systolic = parseInt(document.getElementById('systolic').value);
            const diastolic = parseInt(document.getElementById('diastolic').value);
           
            let category = '';
            let advice = '';
            let alertClass = '';
           
            if (systolic < 90 || diastolic < 60) {
                category = 'Matala verenpaine';
                advice = 'Matala verenpaine voi aiheuttaa huimausta ja pyörtymistä. Jos koet oireita, keskustele lääkärin kanssa.';
                alertClass = 'alert-info';
            } else if (systolic < 120 && diastolic < 80) {
                category = 'Normaali verenpaine';
                advice = 'Erinomaista! Verenpainetasosi on terveellisellä alueella. Jatka terveellisiä elämäntapoja.';
                alertClass = 'alert-success';
            } else if (systolic < 130 && diastolic < 85) {
                category = 'Kohonnut normaali verenpaine';
                advice = 'Verenpaineesi on hieman kohonnut. Terveelliset elämäntavat voivat auttaa alentamaan sitä.';
                alertClass = 'alert-warning';
            } else if (systolic < 140 && diastolic < 90) {
                category = 'Tyydyttävä verenpaine';
                advice = 'Verenpaineesi on hieman koholla. Harkitse elämäntapamuutoksia kuten suolan vähentämistä ja liikunnan lisäämistä.';
                alertClass = 'alert-warning';
            } else if (systolic < 160 && diastolic < 100) {
                category = 'Lievästi kohonnut verenpaine';
                advice = 'Verenpaineesi on kohonnut. Suosittelemme keskustelemaan lääkärin kanssa ja tekemään elämäntapamuutoksia.';
                alertClass = 'alert-danger';
            } else if (systolic < 180 && diastolic < 110) {
                category = 'Kohtalaisesti kohonnut verenpaine';
                advice = 'Verenpaineesi on selvästi kohonnut. Hakeudu lääkärin vastaanotolle pian.';
                alertClass = 'alert-danger';
            } else {
                category = 'Vaikeasti kohonnut verenpaine';
                advice = 'Verenpaineesi on vaarallisen korkea. Hakeudu välittömästi lääkärin hoitoon.';
                alertClass = 'alert-danger';
            }
            
            // Show result
            const resultDiv = document.getElementById('bp-result');
            resultDiv.innerHTML = `
                <div class="alert ${alertClass}">
                    <h4 class="alert-heading">${category}</h4>
                    <p>Systolinen: ${systolic} mmHg, Diastolinen: ${diastolic} mmHg</p>
                    <p>${advice}</p>
                </div>
            `;
            
            // siirtää markerin oikeaan kohtaan
            updateBPMarker(systolic, diastolic);
        });
    }
    
    // Function markerin siirtämiseen
    function updateBPMarker(systolic, diastolic) {
        const bpRange = document.querySelector('.bp-range');
        if (!bpRange) return;
        
        const totalWidth = bpRange.offsetWidth;
        
        let position = 0;
        
        if (systolic < 90 || diastolic < 60) {
            position = totalWidth * 0.1; // Low
        } else if (systolic < 120 && diastolic < 80) {
            position = totalWidth * 0.3; // Normal
        } else if (systolic < 130 && diastolic < 85) {
            position = totalWidth * 0.45; // Elevated normal
        } else if (systolic < 140 && diastolic < 90) {
            position = totalWidth * 0.6; // Satisfactory
        } else if (systolic < 160 && diastolic < 100) {
            position = totalWidth * 0.75; // Mildly elevated
        } else if (systolic < 180 && diastolic < 110) {
            position = totalWidth * 0.9; // Moderately elevated
        } else {
            position = totalWidth * 0.95; // Severely elevated
        }
        
        // markeri oikeeseen kothaan
        const marker = document.getElementById('bp-marker');
        if (marker) {
            marker.style.left = `${position}px`;
            marker.style.display = 'block';
        }
    }
});
</script>
EOT;
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 40vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Verenpaineen seuranta</h1>
                <p class="lead">Tarkista ja seuraa verenpainettasi helposti</p>
            </div>
        </div>
    </div>
</section>

<!-- BP Calculator Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <!-- BP Information -->
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="info-card">
                    <h3 class="info-card-title">Miksi verenpaineen seuranta on tärkeää?</h3>
                    <p>
                        Verenpaineen säännöllinen seuranta on yksi tärkeimmistä terveyden mittareista. 
                        Kohonnut verenpaine on usein oireeton, mutta voi pitkään jatkuessaan aiheuttaa 
                        vakavia terveysongelmia kuten sydän- ja verisuonitauteja, aivohalvauksia ja munuaisvaurioita.
                    </p>
                    <p>
                        Suositeltava verenpaine aikuisilla on alle 120/80 mmHg. Käytä viereistä 
                        laskuria tarkistaaksesi oman verenpaineesi tilan.
                    </p>
                    
                    <h4 class="mt-4 mb-3">Verenpaineen luokittelu:</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Luokka</th>
                                <th>Systolinen (yläpaine)</th>
                                <th>Diastolinen (alapaine)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Matala</td>
                                <td>&lt; 90 mmHg</td>
                                <td>&lt; 60 mmHg</td>
                            </tr>
                            <tr>
                                <td>Normaali</td>
                                <td>&lt; 120 mmHg</td>
                                <td>&lt; 80 mmHg</td>
                            </tr>
                            <tr>
                                <td>Kohonnut normaali</td>
                                <td>120-129 mmHg</td>
                                <td>80-84 mmHg</td>
                            </tr>
                            <tr>
                                <td>Tyydyttävä</td>
                                <td>130-139 mmHg</td>
                                <td>85-89 mmHg</td>
                            </tr>
                            <tr>
                                <td>Lievästi kohonnut</td>
                                <td>140-159 mmHg</td>
                                <td>90-99 mmHg</td>
                            </tr>
                            <tr>
                                <td>Kohtalaisesti kohonnut</td>
                                <td>160-179 mmHg</td>
                                <td>100-109 mmHg</td>
                            </tr>
                            <tr>
                                <td>Vaikeasti kohonnut</td>
                                <td>≥ 180 mmHg</td>
                                <td>≥ 110 mmHg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- BP Calculator -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bmi-calculator">
                    <h3 class="mb-4">Tarkista verenpaine</h3>
                    
                    <div class="health-chart">
                        <h4 class="mb-4">Verenpaineen luokittelu</h4>
                        
                        <div class="bp-range position-relative">
                            <div class="bp-segment bp-low">Matala<br>&lt;90/60</div>
                            <div class="bp-segment bp-normal">Normaali<br>&lt;120/80</div>
                            <div class="bp-segment bp-elevated">Kohonnut<br>&lt;130/85</div>
                            <div class="bp-segment bp-high1">Tyydyttävä<br>&lt;140/90</div>
                            <div class="bp-segment bp-high2">Kohonnut<br>&lt;160/100</div>
                            <div class="bp-segment bp-crisis">Korkea<br>&gt;160/100</div>
                            <div id="bp-marker" class="bmi-marker" style="display: none;"></div>
                        </div>
                    </div>
                    
                    <form id="bp-form" class="mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="systolic" class="form-label">Yläpaine (Systolinen) mmHg:</label>
                                    <input type="number" class="form-control" id="systolic" min="70" max="250" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="diastolic" class="form-label">Alapaine (Diastolinen) mmHg:</label>
                                    <input type="number" class="form-control" id="diastolic" min="40" max="150" required>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Tarkista verenpaine</button>
                    </form>
                    
                    <div id="bp-result" class="mt-4"></div>
                </div>
                
                <div class="info-card-bp mt-4">
                    <h3 class="info-card-title">Vinkkejä verenpaineen mittaamiseen</h3>
                    <p>
                        Verenpaine kannattaa mitata aamulla ja illalla, 1-2 tunnin välein. 
                        Levähtä ennen mittausta 5 minuuttia istuen. Älä juo kofeiinipitoisia juomia 
                        tai tupakoi 30 minuuttia ennen mittausta. Mittaa verenpaine rauhallisessa ympäristössä.
                    </p>
                    <p>
                        Kirjaa ylös mittaustulokset ja päivämäärä. Tuo tulokset mukanasi lääkärin vastaanotolle.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="info-card">
                    <h3 class="info-card-title">Verenpaineen alentamisen vinkit</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="info-list">
                                <li><i class="fas fa-utensils"></i> Vähennä suolan käyttöä (alle 5g päivässä)</li>
                                <li><i class="fas fa-apple-alt"></i> Syö runsaasti hedelmiä ja vihanneksia</li>
                                <li><i class="fas fa-running"></i> Liiku säännöllisesti (vähintään 150 min/viikko)</li>
                                <li><i class="fas fa-weight"></i> Ylläpidä terveellistä painoa</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="info-list">
                                <li><i class="fas fa-wine-glass-alt"></i> Vähennä alkoholin käyttöä</li>
                                <li><i class="fas fa-smoking-ban"></i> Lopeta tupakointi</li>
                                <li><i class="fas fa-spa"></i> Hallitse stressiä</li>
                                <li><i class="fas fa-bed"></i> Nuku riittävästi (7-8 tuntia yössä)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>