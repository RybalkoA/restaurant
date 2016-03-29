<?php

namespace frontend\controllers;

class TypeController extends \yii\web\Controller

{
      public $layout='main4';
    public function actionView($id)
    {
        $typeModel = new \common\models\Type();
        $type = $typeModel->getType($id);
       
   return $this->render('index', [
            'type' => $type,
            'restmenus' => $type->getRestmenus(),
            'types' => $typeModel->getTypes()
        ]);
    }
} 