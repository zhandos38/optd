<?php

use yii\db\Migration;

/**
 * Class m201212_164927_add_department_id_in_employee_table
 */
class m201212_164927_add_department_id_in_employee_table extends Migration
{
    public $tableName = '{{%employee}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'department_id', $this->integer()->after('position_id'));
        $this->addForeignKey('fk-employee-department_id-department-id', $this->tableName, 'department_id', '{{%department}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201212_164927_add_department_id_in_employee_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201212_164927_add_department_id_in_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
