<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%employee}}`.
 */
class m191110_171356_add_position_id_column_to_employee_table extends Migration
{
    public $tableName = '{{%employee}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'position_id', $this->integer());
        $this->addForeignKey(
            'fk-employee-position_id-position-id',
            $this->tableName,
            'position_id',
            \app\models\Position::tableName(),
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-employee-position_id-position-id', $this->tableName);
        $this->dropColumn($this->tableName, 'position_id');
    }
}
