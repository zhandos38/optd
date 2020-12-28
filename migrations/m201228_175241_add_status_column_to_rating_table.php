<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%rating}}`.
 */
class m201228_175241_add_status_column_to_rating_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%rating}}', 'status', $this->tinyInteger(2)->defaultValue(0)->after('customer_name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201228_175241_add_status_column_to_rating_table cannot be reverted.\n";

        return false;
    }
}
