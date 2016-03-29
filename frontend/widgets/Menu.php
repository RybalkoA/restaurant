<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;


class Menu extends Widget{

    public function run(){

        $type = new \common\models\Type;
        $types = $type->find()->all();
        return $this->render('menu',['model' => $types]);
    }



}