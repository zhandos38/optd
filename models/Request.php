<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $message
 * @property int|null $created_at
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['created_at'], 'integer'],
            [['full_name', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Ф.И.О',
            'phone' => 'Номер телефона',
            'message' => 'Сообщение',
            'created_at' => 'Время добавление',
        ];
    }
}
