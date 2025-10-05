<?php
$albumesFavoritos = [
    ['nombre' => 'Alice In Chains - FaceLift', 'imagen' => './assets/img/facelift_AIC.png'],
    ['nombre' => 'Amnesiac - Radiohead', 'imagen' => './assets/img/amnesiac.jpg'],
    ['nombre' => 'Desorden - La Plata', 'imagen' => './assets/img/desorden.jpg']
];

$CancionesFavoritas = [
    ['nombre' => 'LAS PLÁSTICAS - Metrika', 'imagen' => './assets/img/toto.jpg'],
    ['nombre' => 'Hamster Party - Hampton The Hampster ', 'imagen' => './assets/img/hamster.jpg'],
    ['nombre' => 'These Things Take Time - The Smiths', 'imagen' => './assets/img/SMITHS.jpg']
];

$PlaylistsOdio = [
    ['nombre' => 'Loop de Spotify', 'imagen' => './assets/img/enbucle.jpg'],
    ['nombre' => 'El wrapped de 2023', 'imagen' => './assets/img/2023wrapped.jpg'],
    ['nombre' => 'Your Top Songs 2019 - Spotify', 'imagen' => './assets/img/2019.jpg']
];
?>



<article>
    <div class="articuloperfilMusica">
        <div class="contenedorMusica">
            <p class="tituloMusica">Albumes favoritos</p>
            <div class="albumesFavoritos">
                <?php foreach ($albumesFavoritos as $album): ?>
                    <div class="album">
                        <p><?php echo $album['nombre']; ?></p>
                        <img src="<?php echo $album['imagen']; ?>"  ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="contenedorMusica">
            <p class="tituloMusica">Canciones favoritas</p>
            <div class="albumesFavoritos">
                <?php foreach ($CancionesFavoritas as $cancion): ?>
                    <div class="album">
                        <p><?php echo $cancion['nombre']; ?></p>
                        <img src="<?php echo $cancion['imagen']; ?>"  ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="contenedorMusica">
            <p class="tituloMusica">Playlists que odio</p>
            <div class="albumesFavoritos">
                <?php foreach ($PlaylistsOdio as $playlist): ?>
                    <div class="album">
                        <p><?php echo $playlist['nombre']; ?></p>
                        <img src="<?php echo $playlist['imagen']; ?>"  ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</article>

    <script src="../assets/js/tabs.js"></script>

