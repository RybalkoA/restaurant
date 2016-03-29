<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Restmenu */

$this->title = 'Create Restmenu';
$this->params['breadcrumbs'][] = ['label' => 'Restmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restmenu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
