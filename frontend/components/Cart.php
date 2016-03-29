<?php
namespace frontend\components;

use yii\base\Component;
use Yii;

class Cart extends Component{
    /**
   Добавляем блюда в заказ (записываем в сессию)
     */
     public static function addDishs($id)
    {
         $id = intval($id);
        $dishsInCart = array();
        $session = Yii::$app->session;
        $session->open();
       
        if (isset($_SESSION['dishs'])) {
            $dishsInCart = $_SESSION['dishs'];
        }
        if (array_key_exists($id, $dishsInCart)) {
            $dishsInCart[$id] ++;
        } else {
            $dishsInCart[$id] = 1;
        }
        $_SESSION['dishs'] = $dishsInCart;
        return self::countItems();
    }

    /**
     * Подсчет количество блюд (в сессии)
     */
    public static function countItems()
    {
          if (isset($_SESSION['dishs'])) {
            $count = 0;
            foreach ($_SESSION['dishs'] as $id => $number) {
                $count = $count + $number;
            }
            return $count;
        } else {
            return 0;
        }
    }

    /**
     * Возвращает массив с идентификаторами и количеством блюд в заказе
     * 
     */
    public static function getDishs()
    {
           if (isset($_SESSION['dishs'])) {
            return $_SESSION['dishs'];
        }
        return false;
    }

    /**
     * Получаем общую стоимость заказа
    */
   public static function getTotalPrice($dishs)
    {
        $dishsInCart = self::getDishs();
        $total = 0;
        if ($dishsInCart) {
            foreach ($dishs as $item) {
                 $total += $item->price * $dishsInCart[$item->id];
            }
        }
        return $total;
    }

    /**
     * Очищает заказ
     */
    public static function clear()
    {
        if (isset($_SESSION['dishs'])) {
            unset($_SESSION['dishs']);
        }
    }

    /**
     * Удаляет блюдо с указанным id из заказа
     
     */
  public static function deleteDishs($id)
    {
         $dishsInCart = self::getDishs();
         unset($dishsInCart[$id]);
         $_SESSION['dishs'] = $dishsInCart;
    }
}
