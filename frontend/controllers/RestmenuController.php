<?php

namespace frontend\controllers;

class RestmenuController extends \yii\web\Controller
{
   
    public $layout='main4';

    public function actionIndex()
    {
        $type = new \common\models\Type;
        $restmenu = new \common\models\Restmenu;
        return $this->render('index', [
            'types' => $type->getTypes(),
            'restmenus' => $restmenu->getRestmenus(),
        ]);
    }
   
    public function actionView($id)
    {
        $restmenu = new \common\models\Restmenu();
        return $this->render('view', [
            'model' => $restmenu->getRestmenu($id),
      ]);
    }
}
