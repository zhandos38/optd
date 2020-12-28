<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facility".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $working_hours
 * @property string|null $phone
 * @property string|null $lng
 * @property string|null $lat
 */
class Facility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facility';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'working_hours', 'lng', 'lat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Найменование',
            'address' => 'Адрес',
            'phone' => 'Номер телефона',
            'working_hours' => 'Время работы',
            'lng' => 'Lng',
            'lat' => 'Lat',
        ];
    }
}
