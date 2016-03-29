<?php

namespace frontend\controllers;

use frontend\components\Cart;

class CartController extends \yii\web\Controller
{
    public $layout='main4';
   
    // Добавляем блюдо в заказ
    public function actionAdd($id)
    {
        Cart::addDishs($id);
        return $this->redirect(\Yii::$app->request->referrer);
    }
    // Просмотр корзины
    public function actionIndex()
    {
        $this->layout='main4';
        $session = \Yii::$app->session;
        $session->open();
        if ($dishsInCart = Cart::getDishs()) {
        $dishsIds = array_keys($dishsInCart);
        $dishs = \common\models\Restmenu::getDishsByIds($dishsIds);
     } else
         { return $this->redirect('/site/index'); }
      return $this->render('index', [
          'dishsInCart' => $dishsInCart,
           'dishs'=>$dishs,
           ]);
    }
    
    // Тут у меня не получился Ajax запрос
/*public function actionAddajax($id)
    {
    $session = \Yii::$app->session;
    $session->open();
        // Добавляем товар в корзину и печатаем результат: количество товаров в корзине
        echo Cart::addDishs($id);
        return true;
    }*/
    
    // Удаляем блюдо из заказа
    public function actionDelete($id)
    {
        $session = \Yii::$app->session;
        $session->open();
        Cart::deleteDishs($id);
       return $this->redirect('index');
    }
    //Подтверждение заказа
    public function actionCheckout()
    {
          $this->layout='main4';
         if (!\Yii::$app->user->isGuest) {
            
            $id = \Yii::$app->user->id;
            
            // Получаем информацию о пользователе из БД
            $user = \common\models\User::findOne($id);
            $userName = $user->username;
            } else {
            // Если гость, поля формы останутся пустыми
            $id = false;
        }
        // Получием данные из заказа      
        $dishsInCart = Cart::getDishs();
        $iddishs =  json_encode($dishsInCart);
        // Если товаров нет, отправляем пользователи искать товары на главную
        if ($dishsInCart == false) {
           return $this->goHome();
        }
        // Находим общую стоимость
        $dishsIds = array_keys($dishsInCart);
        $dishs = \common\models\Restmenu::getDishsByIds($dishsIds);
        $totalPrice = Cart::getTotalPrice($dishs);

        // Количество товаров
        $totalQuantity = Cart::countItems();
        //Cохраняем данные в таблицу cart 
        $model = new \common\models\Cart();
        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            Cart::clear();
            return $this->goBack();
          
        } else {
            
            return $this->render('order', [
                'model' => $model,
                'iddishs'=>$iddishs,
                'totalPrice'=>$totalPrice,
                'totalQuantity'=>$totalQuantity,
                'userName'=>$userName
            ]);
        }
 }               
 }
