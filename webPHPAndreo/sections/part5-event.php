<?php
require_once __DIR__ . "/../assets/functions/functions.php";
$restaurantes = getRestaurantes();
?>

<article>
    <h2>Mis Restaurantes Favoritos</h2>
    <?php echo renderBotonesRestaurantes($restaurantes); ?>

    <!-- Contenedor del mapa -->
<iframe width="500" height="400"
        src="https://www.openstreetmap.org/export/embed.html?bbox=2.15%2C41.38%2C2.18%2C41.39&layer=mapnik&marker=41.3874%2C2.1686">
</iframe>
  
    
</article>

