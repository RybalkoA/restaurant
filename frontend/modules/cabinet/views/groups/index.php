<?= $this->render('../default/index')?>
<?php foreach ($mygroups->models as $arr):?>
<div>
   <table> 
   <tr>
       <th><?=$arr->tytle?></th>
        </tr>   
   
   <tr>
      
       <td></td>
       <td></td>
   </tr>   
   
   </table>
</div>


<?php endforeach ?>  
