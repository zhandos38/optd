<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rating}}`.
 */
class m191120_183105_create_rating_table extends Migration
{
    public $tableName = '{{%rating}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'employee_id' => $this->integer(),
            'value' => $this->float(),
            'comment' => $this->text(),
            'iin' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-rating-employee_id-employee-id',
            $this->tableName,
            'employee_id',
            \app\models\Employee::tableName(),
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
