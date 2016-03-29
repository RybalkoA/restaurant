
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<table class="table table-hover" >
  <caption><h1>Подтверждение заказа</h1></caption>
  
  <tbody>
    <tr>
      <td>Вы заказали блюда в колличестве:</td>
      <td><?= $totalQuantity .' шт.'?></td>
    </tr>
     <tr>
      <td>Общая сумма заказа:</td>
      <td><?= $totalPrice .' грн.'?> </td>
    </tr>
  </tbody>
</table>

            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'price')->hiddenInput (['value'=>$totalPrice])->label(false, ['style'=>'display:none'])?>
                <?= $form->field($model, 'count')->hiddenInput(['value'=>$totalQuantity])->label(false, ['style'=>'display:none']) ?>
                <?= $form->field($model, 'id_user')->hiddenInput(['value'=>$userName])->label(false, ['style'=>'display:none'])?>
                <?= $form->field($model, 'id_dish')->hiddenInput(['value'=>$iddishs])->label(false, ['style'=>'display:none']) ?>

                <div class="form-group">
                
                    <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
      
