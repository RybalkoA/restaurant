<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FirstDishSearche */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'First Dishes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="first-dish-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create First Dish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_title:ntext',
            'first_image',
            'first_price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
