<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "admission".
 *
 * @property int $id
 * @property string $full_name
 * @property int $status
 * @property int $type
 * @property int $department
 * @property int $room
 * @property int $is_discharged
 * @property int $updated_at
 * @property int $created_at
 */
class Admission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admission';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'type', 'department_id', 'room', 'is_discharged', 'updated_at', 'created_at'], 'integer'],
            [['full_name'], 'string', 'max' => 255],
            [['full_name', 'type', 'status', 'department_id'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => Yii::t('site', 'Ф.И.О'),
            'status' => Yii::t('site', 'Статус'),
            'type' => Yii::t('site', 'Тип'),
            'department_id' => Yii::t('site', 'Отделение'),
            'room' => Yii::t('site', 'Палата'),
            'is_discharged' => Yii::t('site', 'Выписан'),
            'updated_at' => 'Updated At',
            'created_at' => Yii::t('site', 'Дата обращение'),
        ];
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }
}
