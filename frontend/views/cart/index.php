<?php
/* @var $this yii\web\View */
?>
<h1>Ваш заказ</h1>

			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
		  <th>Price</th>
      		</tr>
              </thead>
              <tbody>
                <?php foreach ($dishs as $dish) :?>
                  <tr>
                  <td> 
                    <?php $image = $dish->getImage();?>
                    <img src="<?= $image->getUrl('200x100')?>" alt=""/>  
                  </td>
                  <td><br/><?= $dish->title ?></td>
		  <td><?= $dishsInCart[$dish->id] ?></td>
                  <td><?= $dish->price ?></td>
                  <td><?= $dish->price ?></td>
                  <td><a  href="<?=  yii\helpers\Url::toRoute(['cart/delete', 'id' => $dish->id]) ?>" class="btn btn-default add-to-cart" data-id="<?php echo $model->id; ?>"><i class="fa fa-shopping-cart"></i>Удалить</a> </td>
		<?php endforeach?> 		
				
                <tr>
                  <td colspan="6" align="right">Total Price:	</td>
                  <td><?= \frontend\widgets\Total::widget()?></td>
                </tr>
               </tbody>
            </table>
        <a href="<?= yii\helpers\Url::toRoute('cart/checkout')?>" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
