<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;


class Total extends Widget{

    public function run(){
        $session = \Yii::$app->session;
        $session->open();
        if (isset($_SESSION['dishs'])) {
        $dishsInCart = \frontend\components\Cart::getDishs();
         $dishsIds = array_keys($dishsInCart);
        $dishs = \common\models\Restmenu::getDishsByIds($dishsIds);
        
        return $this->render('total',['total'=> \frontend\components\Cart::getTotalPrice($dishs)]);
    }


    }
}

