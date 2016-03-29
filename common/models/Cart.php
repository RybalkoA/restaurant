<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $id_dish
 * @property string $price
 * @property integer $count
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_dish'], 'required'],
            [[ 'count'], 'integer'],
            [['price'], 'number'],
            [['id_dish'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_dish' => 'Id Dish',
            'price' => 'Price',
            'count' => 'Count',
        ];
    }
}
