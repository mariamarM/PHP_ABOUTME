<?php
require_once __DIR__ . "/../assets/functions/functions.php";
?>
<article>
    <div class="articuloTravel">
         <h3>Sitios que he ido</h3>
          <div class="travelSlider">
           
            <div class="sitiosVIAJE">
                <?php echo ScrollHorizontal($sitiosPasado); ?>
            </div>
        </div>
   <h3>Sitios que me gustaría ir</h3>
        <div class="travelSlider">
         
            <div class="sitiosVIAJE">
                <?php echo ScrollHorizontal($sitiosFuturo); ?>
            </div>
        </div>
    </div>

</article>