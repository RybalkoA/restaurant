<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DesertSearche */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deserts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Desert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'desert_title:ntext',
            'desert_image',
            'desert_price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
