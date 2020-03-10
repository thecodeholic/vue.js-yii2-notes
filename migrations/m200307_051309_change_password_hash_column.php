<?php

use yii\db\Migration;

/**
 * Class m200307_051309_change_password_hash_column
 */
class m200307_051309_change_password_hash_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%users}}', 'password_hash', $this->string(2048));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%users}}', 'password_hash', $this->string(256));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200307_051309_change_password_hash_column cannot be reverted.\n";

        return false;
    }
    */
}
