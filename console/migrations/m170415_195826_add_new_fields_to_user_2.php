<?php

use yii\db\Migration;
use yii\db\Schema;

class m170415_195826_add_new_fields_to_user_2 extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'nazwisko', Schema::TYPE_STRING);
    }

    public function safeDown()
    {
        echo "m170415_195826_add_new_fields_to_user_2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170415_195826_add_new_fields_to_user_2 cannot be reverted.\n";

        return false;
    }
    */
}
