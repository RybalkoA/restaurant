<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property integer $id
 * @property string $tytle
 * @property integer $autor
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tytle', 'autor'], 'required'],
            [['autor'], 'integer'],
            [['tytle'], 'string', 'max' => 255],
            [['tytle'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tytle' => 'Название',
            'autor' => 'Администратор',
        ];
    }
    
    
     public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'autor']);
    }
    
   
        public static function Mygroups()
    {
       return new \yii\data\ActiveDataProvider([
            'query' => Groups::find()
                ->where(['autor'=> Yii::$app->user->id])
                
        ]);
    }
        
      
   }
