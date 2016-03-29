<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "restmenu".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property double $price
 * @property integer $typeid
 */
class Restmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'restmenu';
    }

      public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title',  'price', 'typeid'], 'required'],
            [['title'], 'string'],
            [['price'], 'number'],
            [['typeid'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'price' => 'Price',
            'typeid' => 'Typeid',
        ];
    }
    /*
     * Определяем связи с моделью Type
     */
     public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'typeid']);
    }
    
     /*
     *Получаем модель Restmenu
     */
    public function getRestmenu($id)
    {
        if (
            ($model = Restmenu::findOne($id)) !== null )
                {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested post does not exist.');
        }
    }
    
    /*
     *Получаем все записи в Restmenu
     */
 public function getRestmenus()
    {
        return new \yii\data\ActiveDataProvider([
            'query' => Restmenu::find()
                
                ->orderBy(['price' => SORT_DESC])
        ]);
    }
    
    
public static function getDishsByIds($idsArray)
    {
           $dishs = Restmenu::find()
            ->where([
                'id' => $idsArray,
            ])
            ->all()
        ;
        return $dishs;
    }
}
