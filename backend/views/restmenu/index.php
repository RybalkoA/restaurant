<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RestmenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Restmenus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restmenu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Restmenu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'image',
            'price',
            'typeid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
