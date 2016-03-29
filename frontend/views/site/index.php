<?php

$this->title = 'КОРЧМА';
?>
<div class="span9">
			  
		  <h3>Выберите блюдо </h3>
		
		  <ul class="thumbnails">
                      
                       <?php
    foreach ($restmenus->models as $restmenu) {
        echo $this->render('../restmenu/shortView', [
            'model' => $restmenu
        ]);
    }
    ?>
         
		  </ul>	
                  
</div>
	