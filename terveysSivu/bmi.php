<?php
$page_title = "BMI Testi";
$current_page = "bmi";
include 'header.php';

$bmi = null;
$bmi_category = '';
$bmi_description = '';
$marker_position = 0;

if(isset($_POST['calculate_bmi'])) {
    $height = $_POST['height'] / 100; // Muunnetaan cm metreiksi
    $weight = $_POST['weight'];
    
    if($height > 0 && $weight > 0) {
        $bmi = round($weight / ($height * $height), 1);
        
        // BMI kategoriat
        if($bmi < 18.5) {
            $bmi_category = 'Alipaino';
            $bmi_description = 'BMI-arvosi osoittaa alipainoa. Suosittelemme terveellisen ruokavalion ja elämäntapojen noudattamista painon nostamiseksi normaaliin alueeseen.';
            $marker_position = ($bmi / 18.5) * 25; // 0-25%
        } elseif($bmi < 25) {
            $bmi_category = 'Normaalipaino';
            $bmi_description = 'Onnittelut! BMI-arvosi on normaalipainon alueella, mikä on hyvä terveydelle.';
            $marker_position = 25 + (($bmi - 18.5) / 6.5) * 25; // 25-50%
        } elseif($bmi < 30) {
            $bmi_category = 'Ylipaino';
            $bmi_description = 'BMI-arvosi osoittaa ylipainoa. Pienillä muutoksilla ruokavalioon ja lisäämällä liikuntaa voit siirtyä kohti normaalipainoa.';
            $marker_position = 50 + (($bmi - 25) / 5) * 25; // 50-75%
        } else {
            $bmi_category = 'Merkittävä ylipaino';
            $bmi_description = 'BMI-arvosi osoittaa merkittävää ylipainoa. Suosittelemme terveellisen ruokavalion ja säännöllisen liikunnan aloittamista sekä mahdollisesti asiantuntijan konsultoimista.';
            $marker_position = 75 + min((($bmi - 30) / 10) * 25, 25); // 75-100% (max 100%)
        }
    }
}

// JavaScript lähteenä sivulle
$page_scripts = <<<EOT
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('bmi-form');
    const heightInput = document.getElementById('height');
    const weightInput = document.getElementById('weight');
    const resultDiv = document.getElementById('bmi-result');
    
    // Aseta muutoksen kuuntelija lomakkeelle
    form.addEventListener('input', function() {
        // Tarkista onko molemmat kentät täytetty
        if (heightInput.value && weightInput.value) {
            const height = heightInput.value / 100; // cm to m
            const weight = weightInput.value;
            
            // Laske BMI
            const bmi = (weight / (height * height)).toFixed(1);
            
            // Päivitä realtime-näyttö
            document.getElementById('realtime-bmi').textContent = bmi;
            document.getElementById('realtime-display').style.display = 'block';
        } else {
            document.getElementById('realtime-display').style.display = 'none';
        }
    });
});
</script>
EOT;
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 40vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">BMI Testi</h1>
                <p class="lead">Laske painoindeksisi ja arvioi painosi terveellisyyttä</p>
            </div>
        </div>
    </div>
</section>

<!-- BMI Calculator Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <!-- BMI Information -->
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="info-card">
                    <h3 class="info-card-title">Mikä on BMI?</h3>
                    <p>Painoindeksi (Body Mass Index, BMI) on mitta-arvo, jonka avulla voidaan arvioida painon ja pituuden suhdetta. Se lasketaan jakamalla paino (kg) pituuden (m) neliöllä.</p>
                    
                    <h4 class="mt-4 mb-3">BMI-luokitus aikuisilla:</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>BMI</th>
                                <th>Luokitus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>alle 18.5</td>
                                <td>Alipaino</td>
                            </tr>
                            <tr>
                                <td>18.5 - 24.9</td>
                                <td>Normaalipaino</td>
                            </tr>
                            <tr>
                                <td>25.0 - 29.9</td>
                                <td>Ylipaino</td>
                            </tr>
                            <tr>
                                <td>30.0 tai yli</td>
                                <td>Merkittävä ylipaino</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <p class="mt-3"><strong>Huom!</strong> BMI on vain yksi mittari terveydentilan arvioinnissa. Se ei ota huomioon esimerkiksi lihasmassan määrää tai kehon koostumusta. Siksi tuloksia tulee tulkita varoen ja tarvittaessa keskustella terveydenhuollon ammattilaisen kanssa.</p>
                </div>
            </div>
            
            <!-- BMI Calculator -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bmi-calculator">
                    <h3 class="mb-4">Laske BMI</h3>
                    
                    <form method="post" action="" id="bmi-form">
                        <div class="mb-3">
                            <label for="height" class="form-label">Pituus (cm)</label>
                            <input type="number" class="form-control" id="height" name="height" min="120" max="250" required value="<?php echo isset($_POST['height']) ? $_POST['height'] : ''; ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="weight" class="form-label">Paino (kg)</label>
                            <input type="number" class="form-control" id="weight" name="weight" min="30" max="300" step="0.1" required value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : ''; ?>">
                        </div>
                        
                        <!-- Reaaliaikainen BMI-näyttö -->
                        <div id="realtime-display" class="alert alert-info" style="display: none;">
                            Painoindeksi: <span id="realtime-bmi">0.0</span>
                        </div>
                        
                        <button type="submit" name="calculate_bmi" class="btn btn-primary">Laske BMI</button>
                    </form>
                    
                    <?php if($bmi !== null): ?>
                        <div id="bmi-result" class="mt-4">
                            <div class="alert alert-info">
                                <h4>Tuloksesi</h4>
                                <p class="mb-0">BMI: <strong><?php echo $bmi; ?></strong></p>
                                <p>Kategoria: <strong><?php echo $bmi_category; ?></strong></p>
                            </div>
                            
                            <div class="bmi-indicator">
                                <div class="bmi-segment bmi-underweight">Alipaino</div>
                                <div class="bmi-segment bmi-normal">Normaalipaino</div>
                                <div class="bmi-segment bmi-overweight">Ylipaino</div>
                                <div class="bmi-segment bmi-obese">Merkittävä ylipaino</div>
                                <div class="bmi-marker" style="left: <?php echo $marker_position; ?>%;"></div>
                            </div>
                            
                            <div class="mt-4">
                                <p><?php echo $bmi_description; ?></p>
                                
                                <?php if($bmi < 18.5): ?>
                                    <p>Tutustu <a href="ruokavalio.php#weight_gain">painonnousuun tarkoitettuihin ruokavinkkeihin</a>.</p>
                                <?php elseif($bmi >= 25): ?>
                                    <p>Tutustu <a href="ruokavalio.php#weight_loss">painonpudotukseen tarkoitettuihin ruokavinkkeihin</a> ja <a href="liikunta.php">liikuntaohjeisiin</a>.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>