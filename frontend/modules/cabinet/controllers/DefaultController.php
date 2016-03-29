<?php

namespace app\modules\cabinet\controllers;

use yii\web\Controller;

/**
 * Default controller for the `cabinet` module
 */
class DefaultController extends Controller
{
     public $layout='main4';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
