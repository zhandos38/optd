<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%facility}}`.
 */
class m201228_153520_create_facility_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%facility}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'address' => $this->string(),
            'working_hours' => $this->string(),
            'lng' => $this->string(),
            'lat' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%facility}}');
    }
}
