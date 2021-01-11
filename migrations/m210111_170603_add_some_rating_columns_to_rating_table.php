<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%rating}}`.
 */
class m210111_170603_add_some_rating_columns_to_rating_table extends Migration
{
    public $tableName = '{{%rating}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'is_inform_good', $this->boolean());
        $this->addColumn($this->tableName, 'is_polite_enough', $this->boolean());
        $this->addColumn($this->tableName, 'is_competent_enough', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210111_170603_add_some_rating_columns_to_rating_table cannot be reverted.\n";

        return false;
    }
}
