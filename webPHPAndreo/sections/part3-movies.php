<?php
require_once __DIR__ . "/../assets/functions/functions.php";

//    $favPeliculas = getFavoritas('peliculas');
//    $generosFav = getFavoritas('generos');
?>

<article>
    <div class="articulo-perfil">
       
         <h3>Peliculas favoritas</h3>
          <div class="travelSlider">
           
            <div class="sitiosVIAJE">
                <?php echo ScrollHorizontal($favPeliculas); ?>
            </div>
        </div>
   <h3>Generos favoritos/ mas vistos</h3>
        <div class="travelSlider">
         
            <div class="sitiosVIAJE">
                <?php echo ScrollHorizontal($generosFav); ?>
            </div>
        </div>
    
        <div class="letterboxd">
           <a href="https://letterboxd.com" target="_blank">
            <img src="./assets/img/letterboxd_icon.png" alt="Logo de Letterboxd" class="logoletterboxd">
           </a>
        </div>
    </div>

</article>
<style>
.logoletterboxd {
    width: 50px;
    height: auto;
   position: relative;
   bottom:5px;
   margin-bottom:20px;
}
</style>