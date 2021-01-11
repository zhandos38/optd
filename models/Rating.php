<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "rating".
 *
 * @property int $id
 * @property int|null $employee_id
 * @property float|null $value
 * @property string|null $comment
 * @property string|null $iin
 * @property int $status
 * @property int $is_inform_good
 * @property int $is_polite_enough
 * @property int $is_competent_enough
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Employee $employee
 */
class Rating extends \yii\db\ActiveRecord
{
    const STATUS_NEW = 0;
    const STATUS_IN_PROCESS = 1;
    const STATUS_FINISHED = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['value'], 'number'],
            [['comment', 'customer_name'], 'string'],
            [['iin'], 'string', 'max' => 255],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            ['value', 'required'],

            [['is_inform_good', 'is_polite_enough', 'is_competent_enough'], 'boolean']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Врачи',
            'value' => Yii::t('site', 'Оценка'),
            'comment' => Yii::t('site', 'Комментарий'),
            'iin' => Yii::t('site', 'ИИН пациента'),
            'created_at' => 'Время создание',
            'updated_at' => 'Время обновление',
            'customer_name' => Yii::t('site', 'Ф.И.О пациента'),
            'status' => 'Статус',
            'is_inform_good' => Yii::t('site', 'Вас недостаточно проинформировали?'),
            'is_polite_enough' => Yii::t('site', 'Врач/медсестра был недостаточно вежливым?'),
            'is_competent_enough' => Yii::t('site', 'Врач/медсестра оказался недостаточно компетентным?'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    public static function getStatuses()
    {
        return [
            self::STATUS_NEW => 'Не решен',
            self::STATUS_IN_PROCESS => 'В процессе',
            self::STATUS_FINISHED => 'Решен',
        ];
    }

    public function getStatus()
    {
        return ArrayHelper::getValue(self::getStatuses(), $this->status);
    }
}
