<?php
require_once __DIR__ . "/../assets/functions/functions.php";

$perfil = getPerfil();
?>

<article>
    <div class="articulo-perfil">
        <div class="textoPerfil">
            <?php $nombre = htmlspecialchars($perfil['nombre']); ?>
            <?php $edad = htmlspecialchars($perfil['edad']); ?>
            <?php $estudios = htmlspecialchars(implode(", ", $perfil['estudios'])); ?>
            <?php $sobreMi = htmlspecialchars(implode(", ", $perfil['sobreMi'])); ?>
            <p>Nombre: <?php echo $nombre; ?></p>
            <p>Edad: <?php echo $edad; ?></p>
            <p>Estudios: <?php echo $estudios; ?></p>   
            <p>Sobre mí: <?php echo $sobreMi; ?></p>
        </div>
        <div class="imagenesPerfil" >
            <img src="./assets/img/miimaria.png" >
        </div>
    </div>

</article>
<style>
  

    .textoPerfil {
        display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    background-color: rgba(255, 255, 255, 0.07);
    gap: 10px;
     border: 1px solid #f0f0f0;
    border-radius: 20px;
    padding: 7px 10px;
    width:100%;
    }

 </style>