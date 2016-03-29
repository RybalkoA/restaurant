<?php

use yii\helpers\Html;
use yii\grid\GridView;/* @var $this yii\web\View */
/* @var $searchModel common\models\GroupsSearche */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Группы';
echo $this->render('../default/index');
?>
<div class="groups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?php if(Yii::$app->session->hasFlash('success')):?>
            <?php
            $success = Yii::$app->session->getFlash('success');
            echo \yii\bootstrap\Alert::widget([
                'options'=>[
                    'class'=>'alert-info'
                ],
                'body'=>$success
            ])
            ?>
             <?php endif;?>   
        <?php //echo Html::a('Create Groups', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'tytle',
            'user.username',
         

            ['class' => 'yii\grid\ActionColumn',
                'template' =>  '{start}',
                'buttons' => [
                'start' => function ($url, $model, $key) {
                  return Html::a('Вступить в группу', \yii\helpers\Url::to(['addfriend', 'id_group' => $model->id]));
                }
            ],
                ],
        ],
    ]); ?>
    
</div>


