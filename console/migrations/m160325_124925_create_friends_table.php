<?php

use yii\db\Migration;

class m160325_124925_create_friends_table extends Migration
{
    public function up()
    {
        $this->createTable('groups', [
            'id' => $this->primaryKey(),
            'tytle' => $this->string()->notNull()->unique(),
            'autor' => $this->integer()->notNull(),
             ]);
        $this->createTable('friends', [
            'id' => $this->primaryKey(),
            'id_group' => $this->integer()->notNull(),
            'id_user'=> $this->integer()->notNull(),   
            'status'=> $this->integer(), 
            ]);
    }

    public function down()
    {
        $this->dropTable('friends');
        $this->dropTable('groups');
    }
}
