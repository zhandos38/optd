<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%position}}`.
 */
class m201218_084926_add_name_kz_column_to_position_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%position}}', 'name_kz', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201218_084926_add_name_kz_column_to_position_table cannot be reverted.\n";

        return false;
    }
}
