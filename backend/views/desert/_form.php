<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Desert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desert-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'desert_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desert_image')->fileInput() ?>
    <div class="form-group">
        <div class="col-md-offset-0 col-md-0">
            <?
                $images = $model->getImages();
            ?>
            <div class="row">
                <?php foreach ($images as $image):?>
                <div class="col-md-2">
                    <img src="<?= $image->getUrl('200x100')?>" alt="" />
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'desert_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
