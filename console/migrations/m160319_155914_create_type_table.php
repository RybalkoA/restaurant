<?php

use yii\db\Migration;

class m160319_155914_create_type_table extends Migration
{
    public function up()
    {
        $this->createTable('type', [
            'id' => $this->primaryKey(),
			'type'=>$this->string()->notNull()->unique(),
        ]);
    }

    public function down()
    {
        $this->dropTable('type_table');
    }
}
