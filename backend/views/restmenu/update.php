<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Restmenu */

$this->title = 'Update Restmenu: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Restmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restmenu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
