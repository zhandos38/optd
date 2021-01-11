<?php

use yii\db\Migration;

/**
 * Class m210111_161416_alter_description_column_to_employee_table
 */
class m210111_161416_alter_description_column_to_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%employee}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_161416_alter_description_column_to_employee_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_161416_alter_description_column_to_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
