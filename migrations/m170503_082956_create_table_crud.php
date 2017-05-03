<?php

use yii\db\Migration;

class m170503_082956_create_table_crud extends Migration
{
    public function up()
    {
        $this->createTable('crud', [
            'id' => $this->primaryKey(),
            'client_name' => $this->string()->notNull()->unique(),
            'client_phone' => $this->string(32)->notNull(),
            'client_age' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('crud');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
