<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Desert */

$this->title = 'Update Desert: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deserts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desert-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
