<?php

use yii\db\Migration;

/**
 * Class m201002_104336_add_authKey_to_user_table
 */
class m201002_104336_add_authKey_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'authKey', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201002_104336_add_authKey_to_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201002_104336_add_authKey_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
