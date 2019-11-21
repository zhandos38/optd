<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admission}}`.
 */
class m191121_163725_create_admission_table extends Migration
{
    public $tableName = '{{%admission}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(),
            'status' => $this->integer(),
            'type' => $this->integer(),
            'department_id' => $this->integer(),
            'room' => $this->integer(),
            'is_discharged' => $this->boolean(),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
