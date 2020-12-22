<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%department}}`.
 */
class m201222_062351_add_parent_id_column_to_department_table extends Migration
{
    public $tableName = '{{%department}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%department}}', 'parent_id', $this->integer());
        $this->addForeignKey('fk-department-parent_id', $this->tableName, 'parent_id', $this->tableName, 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201222_062351_add_parent_id_column_to_department_table cannot be reverted.\n";

        return false;
    }
}
