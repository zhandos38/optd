<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $name
 * @property boolean $is_dury
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            ['schedule', 'string'],
            ['is_duty', 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'is_duty' => 'Дежурный',
            'schedule' => 'Расписание'
        ];
    }
	
	public function getAdmissions() 
	{
		return $this->hasMany(Admission::className(), ['department_id' => 'id']);
	}
}
