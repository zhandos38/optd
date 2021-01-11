<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $name
 * @property string $name_kz
 * @property boolean $is_duty
 * @property int $order
 * @property int $parent_id
 *
 * @property Department $children
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
            [['name', 'name_kz'], 'string', 'max' => 255],
            ['schedule', 'string'],
            [['is_duty', 'is_staff', 'order', 'parent_id'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'name_kz' => 'Имя (KZ)',
            'is_duty' => 'Показовать расписание',
            'is_staff' => 'Показовать в списке врачей',
            'schedule' => 'Расписание',
            'order' => 'Очередь',
            'parent_id' => 'Родитель'
        ];
    }
	
	public function getAdmissions() 
	{
		return $this->hasMany(Admission::className(), ['department_id' => 'id']);
	}

	public function getChildren()
    {
        return $this->hasMany(Department::className(), ['parent_id' => 'id']);
    }

    public function getName()
    {
        return Yii::$app->language === 'ru' ? $this->name : $this->name_kz;
    }
}
