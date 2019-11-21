<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%department}}`.
 */
class m191121_163807_create_department_table extends Migration
{
    public $tableName = '{{%department}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string()
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
