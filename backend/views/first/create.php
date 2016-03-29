<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FirstDish */

$this->title = 'Create First Dish';
$this->params['breadcrumbs'][] = ['label' => 'First Dishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="first-dish-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
