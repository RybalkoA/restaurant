<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Groups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="groups-form">
  

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tytle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor')->hiddenInput(['value'=>\Yii::$app->user->identity->id])->label(false, ['style'=>'display:none'])?> 

    <div class="form-group">
         
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
