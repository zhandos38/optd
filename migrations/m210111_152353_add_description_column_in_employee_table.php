<?php

use yii\db\Migration;

/**
 * Class m210111_152353_add_description_column_in_employee_table
 */
class m210111_152353_add_description_column_in_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%employee}}', 'description', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_152353_add_description_column_in_employee_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_152353_add_description_column_in_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
