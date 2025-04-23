<?php
$page_title = "Liikuntapäiväkirja";
$current_page = "liikuntapaivakirja";
include 'header.php';

// Tarkistetaan, onko lomake lähetetty
if (isset($_POST['save_workout'])) {
    $date = $_POST['date'];
    $activity = $_POST['activity'];
    $duration = $_POST['duration'];
    $intensity = $_POST['intensity'];
    $notes = $_POST['notes'];

    // Muodostetaan tallennettava rivi
    $workout_entry = "$date|$activity|$duration|$intensity|$notes\n";

    // Tallennetaan tiedostoon
    file_put_contents('data/workouts.txt', $workout_entry, FILE_APPEND);

    // Asetetaan onnistumisviesti
    $success_message = "Liikuntasuoritus tallennettu onnistuneesti!";
}

// Luodaan data-kansio, jos sitä ei ole olemassa
if (!is_dir('data')) {
    mkdir('data', 0755);
}

// Luetaan tallennetut liikuntasuoritukset
$workouts = [];
if (file_exists('data/workouts.txt')) {
    $lines = file('data/workouts.txt', FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $workouts[] = explode('|', $line);
    }
}

// Käännetään taulukko, jotta uusimmat ovat ensin
$workouts = array_reverse($workouts);

// JavaScript lähteenä sivulle
$page_scripts = <<<EOT
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Asetetaan päivämäärän oletusarvoksi tämä päivä
    document.getElementById('workout-date').valueAsDate = new Date();
    
    // Suodatus ja haku
    document.getElementById('search-input').addEventListener('keyup', filterWorkouts);
    document.getElementById('filter-activity').addEventListener('change', filterWorkouts);
    
    function filterWorkouts() {
        const searchText = document.getElementById('search-input').value.toLowerCase();
        const filterActivity = document.getElementById('filter-activity').value.toLowerCase();
        const workoutItems = document.querySelectorAll('.workout-entry');
        
        workoutItems.forEach(item => {
            const activity = item.querySelector('.workout-activity').textContent.toLowerCase();
            const allText = item.textContent.toLowerCase();
            
            const matchesSearch = searchText === '' || allText.includes(searchText);
            const matchesFilter = filterActivity === '' || activity === filterActivity;
            
            if (matchesSearch && matchesFilter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    // Kuvaajan alustus, jos sivulla on vähintään yksi harjoitus
    if (document.getElementById('workoutChart')) {
        const ctx = document.getElementById('workoutChart').getContext('2d');
        
        // Haetaan data PHP:lta
        const workoutDates = JSON.parse(document.getElementById('workout-dates').textContent);
        const workoutDurations = JSON.parse(document.getElementById('workout-durations').textContent);
        
        // Luodaan kuvaaja
        const workoutChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: workoutDates,
                datasets: [{
                    label: 'Liikuntasuorituksen kesto (min)',
                    data: workoutDurations,
                    backgroundColor: 'rgba(255, 135, 171, 0.2)',
                    borderColor: 'rgba(255, 135, 171, 1)',
                    borderWidth: 2,
                    tension: 0.3,
                    pointBackgroundColor: 'rgba(255, 135, 171, 1)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#E1E5EA'
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#E1E5EA'
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#E1E5EA'
                        }
                    }
                }
            }
        });
    }
        // Lisää näytä kaikki / näytä vähemmän -napit
    const showAllBtn = document.getElementById('show-all-btn');
    const showLessBtn = document.getElementById('show-less-btn');
    
    if (showAllBtn) {
        showAllBtn.addEventListener('click', function() {
            const workoutItems = document.querySelectorAll('.workout-entry');
            workoutItems.forEach(item => {
                item.style.display = 'block';
            });
            showAllBtn.style.display = 'none';
            showLessBtn.style.display = 'inline-block';
        });
    }
    
    if (showLessBtn) {
        showLessBtn.addEventListener('click', function() {
            const workoutItems = document.querySelectorAll('.workout-entry');
            workoutItems.forEach((item, index) => {
                if (index < 3) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
            showLessBtn.style.display = 'none';
            showAllBtn.style.display = 'inline-block';
        });
    }
    
    // Muokataan filterWorkouts-funktiota huomioimaan näkyvyysasetus
    function filterWorkouts() {
        const searchText = document.getElementById('search-input').value.toLowerCase();
        const filterActivity = document.getElementById('filter-activity').value.toLowerCase();
        const workoutItems = document.querySelectorAll('.workout-entry');
        let visibleCount = 0;
        const showingAll = document.getElementById('show-all-btn').style.display === 'none';
        
        workoutItems.forEach((item, index) => {
            const activity = item.querySelector('.workout-activity').textContent.toLowerCase();
            const allText = item.textContent.toLowerCase();
            
            const matchesSearch = searchText === '' || allText.includes(searchText);
            const matchesFilter = filterActivity === '' || activity === filterActivity;
            
            if (matchesSearch && matchesFilter) {
                if (showingAll || visibleCount < 3) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            } else {
                item.style.display = 'none';
            }
        });
        
        // Näytetään/piilotetaan napit tilanteen mukaan
        if (visibleCount > 3 && !showingAll) {
            document.getElementById('show-all-btn').style.display = 'inline-block';
        } else {
            document.getElementById('show-all-btn').style.display = 'none';
        }
    }
});
</script>
EOT;

// Haetaan ainutlaatuiset liikuntatyypit suodatusta varten
$activity_types = [];
foreach ($workouts as $workout) {
    if (isset($workout[1]) && !in_array($workout[1], $activity_types)) {
        $activity_types[] = $workout[1];
    }
}
sort($activity_types);

// Muotoillaan data Chart.js:ää varten
$chart_dates = [];
$chart_durations = [];
foreach (array_slice($workouts, 0, 7) as $workout) {
    if (count($workout) >= 3) {
        $chart_dates[] = $workout[0];
        $chart_durations[] = intval($workout[2]);
    }
}
// Käännä järjestys vanhin ensin
$chart_dates = array_reverse($chart_dates);
$chart_durations = array_reverse($chart_durations);
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 40vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Liikuntapäiväkirja</h1>
                <p class="lead">Seuraa liikuntaasi, aseta tavoitteita ja näe edistymisesi</p>
            </div>
        </div>
    </div>
</section>

<!-- Liikuntapäiväkirja Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Lomake uuden liikuntasuorituksen lisäämiseen -->
            <div class="col-lg-5 mb-4" data-aos="fade-right">
                <div class="workout-form">
                    <h3 class="mb-4">Lisää uusi liikuntasuoritus</h3>
                    
                    <?php if(isset($success_message)): ?>
                        <div class="alert alert-success">
                            <?php echo $success_message; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="workout-date" class="form-label">Päivämäärä</label>
                            <input type="date" class="form-control" id="workout-date" name="date" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="workout-activity" class="form-label">Liikuntalaji</label>
                            <select class="form-control" id="workout-activity" name="activity" required>
                                <option value="">Valitse liikuntalaji</option>
                                <option value="Kävely">Kävely</option>
                                <option value="Juoksu">Juoksu</option>
                                <option value="Pyöräily">Pyöräily</option>
                                <option value="Uinti">Uinti</option>
                                <option value="Kuntosali">Kuntosali</option>
                                <option value="Jooga">Jooga</option>
                                <option value="Hiit">HIIT</option>
                                <option value="Tanssi">Tanssi</option>
                                <option value="Muu">Muu</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="workout-duration" class="form-label">Kesto (minuuttia)</label>
                            <input type="number" class="form-control" id="workout-duration" name="duration" min="1" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="workout-intensity" class="form-label">Rasitustaso</label>
                            <select class="form-control" id="workout-intensity" name="intensity" required>
                                <option value="Kevyt">Kevyt</option>
                                <option value="Kohtalainen">Kohtalainen</option>
                                <option value="Raskas">Raskas</option>
                                <option value="Erittäin raskas">Erittäin raskas</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="workout-notes" class="form-label">Muistiinpanot</label>
                            <textarea class="form-control" id="workout-notes" name="notes" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" name="save_workout" class="btn btn-primary">Tallenna liikuntasuoritus</button>
                    </form>
                </div>
            </div>
            
            <!-- Liikuntasuoritusten visualisointi -->
            <div class="col-lg-7" data-aos="fade-left">
                <?php if(count($workouts) > 0): ?>
                    <div class="health-chart mb-4">
                        <h3 class="mb-4">Viimeisimmät suoritukset</h3>
                        <canvas id="workoutChart"></canvas>
                        <!-- Piilotettu data kuvaajaa varten -->
                        <div style="display: none;" id="workout-dates"><?php echo htmlspecialchars(json_encode($chart_dates)); ?></div>
                        <div style="display: none;" id="workout-durations"><?php echo htmlspecialchars(json_encode($chart_durations)); ?></div>
                    </div>
                <?php endif; ?>
                
                <!-- Liikuntasuoritusten historia -->
                <div class="workout-history">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3>Liikuntahistoria</h3>
                        <div class="d-flex">
                            <input type="text" id="search-input" class="form-control form-control-sm me-2" placeholder="Hae...">
                            <select id="filter-activity" class="form-control form-control-sm">
                                <option value="">Kaikki lajit</option>
                                <?php foreach($activity_types as $type): ?>
                                    <option value="<?php echo htmlspecialchars($type); ?>"><?php echo htmlspecialchars($type); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    <?php if(count($workouts) > 0): ?>
                        <div id="workout-entries-container">
                            <?php 
                            $counter = 0;
                            foreach($workouts as $workout): 
                                if(count($workout) >= 5):
                                    $display_style = ($counter < 3) ? "block" : "none";
                                    $counter++;
                            ?>
                                <div class="workout-entry" style="display: <?php echo $display_style; ?>">
                                    <div class="d-flex justify-content-between">
                                        <div class="workout-date"><?php echo htmlspecialchars($workout[0]); ?></div>
                                        <div class="badge bg-info"><?php echo htmlspecialchars($workout[3]); ?></div>
                                    </div>
                                    <h5 class="mt-2 workout-activity"><?php echo htmlspecialchars($workout[1]); ?></h5>
                                    <p>Kesto: <?php echo htmlspecialchars($workout[2]); ?> minuuttia</p>
                                    <?php if(!empty($workout[4])): ?>
                                        <p class="text-muted"><?php echo htmlspecialchars($workout[4]); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                        
                        <?php if(count($workouts) > 3): ?>
                            <div class="text-center mt-4">
                                <button id="show-all-btn" class="btn btn-outline-primary">Näytä kaikki suoritukset</button>
                                <button id="show-less-btn" class="btn btn-outline-secondary" style="display: none;">Näytä vähemmän</button>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="text-center py-4">
                            <p>Ei vielä liikuntasuorituksia. Aloita lisäämällä ensimmäinen suorituksesi!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>