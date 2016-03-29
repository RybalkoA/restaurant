<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Restmenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restmenu-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
 <div class="form-group">
        <div class="col-md-offset-0 col-md-0">
            <?
                $images = $model->getImages();
            ?>
            <div class="row">
                <?php foreach ($images as $image):?>
                <div class="col-md-2">
                    <img src="<?= $image->getUrl('200x200')?>" alt="" />
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
    <?= $form->field($model, 'price')->textInput() ?>
    

    <?= $form->field($model, 'typeid')->textInput()->dropDownList(\yii\helpers\ArrayHelper::map(common\models\Type::find()->all(), 'id', 'type')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
