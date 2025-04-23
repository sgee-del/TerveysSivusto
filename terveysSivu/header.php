<?php
// Tietokantayhteys voidaan asettaa tässä, jos sivustossa on dynaamisia toimintoja
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " - Terveyssivusto" : "Terveyssivusto"; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Terveyssivusto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="index.php">Etusivu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'verenpaine') ? 'active' : ''; ?>" href="verenpaine.php">Verenpaine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'ruokavalio') ? 'active' : ''; ?>" href="ruokavalio.php">Ruokavalio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo ($current_page == 'liikunta') ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Liikunta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="liikunta.php?taso=aloittelija">Aloittelijoille</a></li>
                            <li><a class="dropdown-item" href="liikunta.php?taso=kuntoilija">Kuntoliikkujille</a></li>
                            <li><a class="dropdown-item" href="liikunta.php?taso=urheilija">Urheilijoille</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="liikuntalajit.php">Liikuntalajit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'bmi') ? 'active' : ''; ?>" href="bmi.php">BMI Testi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'liikuntapaivakirja') ? 'active' : ''; ?>" href="liikuntapaivakirja.php">Liikuntapäiväkirja</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Main Content Starts After This -->
    <div style="margin-top: 76px;"><!-- Spacer for fixed navbar --></div>