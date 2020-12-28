<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%facility}}`.
 */
class m201228_165518_add_phone_column_to_facility_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%facility}}', 'phone', $this->string()->after('address'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201228_165518_add_phone_column_to_facility_table cannot be reverted.\n";

        return false;
    }
}
