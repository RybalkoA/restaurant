<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FirstDish */

$this->title = 'Update First Dish: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'First Dishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="first-dish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
