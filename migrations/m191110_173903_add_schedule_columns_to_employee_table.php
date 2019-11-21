<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%employee}}`.
 */
class m191110_173903_add_schedule_columns_to_employee_table extends Migration
{
    public $tableName = '{{%employee}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'monday', $this->string(100));
        $this->addColumn($this->tableName, 'tuesday', $this->string(100));
        $this->addColumn($this->tableName, 'wednesday', $this->string(100));
        $this->addColumn($this->tableName, 'thursday', $this->string(100));
        $this->addColumn($this->tableName, 'friday', $this->string(100));
        $this->addColumn($this->tableName, 'saturday', $this->string(100));
        $this->addColumn($this->tableName, 'sunday', $this->string(100));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'monday');
        $this->dropColumn($this->tableName, 'tuesday');
        $this->dropColumn($this->tableName, 'wednesday');
        $this->dropColumn($this->tableName, 'thursday');
        $this->dropColumn($this->tableName, 'friday');
        $this->dropColumn($this->tableName, 'saturday');
        $this->dropColumn($this->tableName, 'sunday');
    }
}
