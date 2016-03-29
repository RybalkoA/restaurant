<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property integer $id
 * @property string $type
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 255],
            [['type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }
  public function getRestmenus()
    {
        return new \yii\data\ActiveDataProvider([
            'query' => Restmenu::find()
                ->where([
                    'typeid' => $this->id,
                   
                ])
        ]);
    }
    /*
     * Получаем список категорий
     */
    public function getTypes()
    {
        return new \yii\data\ActiveDataProvider([
            'query' => Type::find()
        ]);
    }
    /**
     * Получаем модель категории.
     
     */
    public function getType($id)
    {
        if (($model = Type::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested post does not exist.');
        }
    }
}
