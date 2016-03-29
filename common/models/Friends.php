<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "friends".
 *
 * @property integer $id
 * @property string $friend
 * @property integer $id_group
 * @property integer $id_user
 * @property integer $status
 */
class Friends extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friends';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_group', 'id_user'], 'required'],
            [['id_group', 'id_user', 'status'], 'integer'],
            ['id_group', 'unique', 'targetAttribute' => ['id_group', 'id_user']],
          
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_group' => 'Id Group',
            'id_user' => 'Id User',
            'status' => 'Status',
        ];
    }
    /*
     * Определяем связи с моделью Groups
     */
    public function getGroups()
{
    return $this->hasMany(Groups::className(), ['id' => 'id_group']);
}
     /*
     * Определяем связи с моделью User
     */
public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
    
   
    
}
