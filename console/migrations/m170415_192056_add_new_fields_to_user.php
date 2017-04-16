<?php

use yii\db\Migration;
use yii\db\Schema;

class m170415_192056_add_new_fields_to_user extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'imie', Schema::TYPE_STRING);
    }

    public function safeDown()
    {
        echo "m170415_192056_add_new_fields_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170415_192056_add_new_fields_to_user cannot be reverted.\n";

        return false;
    }
    */
}
