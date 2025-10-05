<?php
    require __DIR__ . "/assets/functions/functions.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 PHP</title>
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php require __DIR__ . "/includes/header.php"; ?>
    <main>
        <div class="carousel">
            <div class="carruselPresentacion">
                <section class="frameCarrusel" data-section="part1-profile">
                    Perfil
                </section>
                <section class="frameCarrusel" data-section="part2-music">
                    Música
                </section>
                <section class="frameCarrusel" data-section="part3-movies">
                    Películas
                </section>

                <section class="frameCarrusel" data-section="part5-event">
                    Menu
                </section>
                <section class="frameCarrusel" data-section="part6-travel">
                    Viajes
                </section>
            </div>
        </div>
        
    </main>
    <div class="sidebar" id="sidebar">
        <button class="close-btn" id="closeSidebar">✕</button>
        <div class="sidebar-content" id="sidebarContent">
       
        </div>
    </div>
    <?php require __DIR__ . "/includes/footer.php"; ?>

    <script src="assets/js/tabs.js"></script>

</body>

</html>