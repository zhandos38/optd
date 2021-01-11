<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $full_name
 * @property int $position_id
 * @property int $department_id
 * @property string $cabinet
 * @property string $image
 * @property int $created_at
 * @property int $updated_at
 * @property string $monday [varchar(100)]
 * @property string $tuesday [varchar(100)]
 * @property string $wednesday [varchar(100)]
 * @property string $thursday [varchar(100)]
 * @property string $friday [varchar(100)]
 * @property string $saturday [varchar(100)]
 * @property string $sunday [varchar(100)]
 * @property string $description
 *
 * @property Position $position
 * @property Department $department
 */
class Employee extends \yii\db\ActiveRecord
{
    public $imageFile;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position_id', 'department_id', 'created_at', 'updated_at'], 'integer'],
            [['full_name', 'cabinet', 'image'], 'string', 'max' => 255],
            [['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'], 'string'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],

            ['description', 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'full_name' => Yii::t('site', 'Полное имя'),
            'position_id' => Yii::t('site', 'Должность'),
            'department_id' => Yii::t('site', 'Отделение'),
            'cabinet' => Yii::t('site', 'Кабинет'),
            'image' => Yii::t('site', 'Рисунок'),
            'created_at' => Yii::t('site', 'Добавлено в'),
            'updated_at' => Yii::t('site', 'Обновлено в'),
            'monday' => 'Понидельник',
            'tuesday' => 'Вторник',
            'wednesday' => 'Среда',
            'thursday' => 'Четверг',
            'friday' => 'Пятница',
            'saturday' => 'Субботка',
            'sunday' => 'Воскресенье',
            'imageFile' => 'Рисунок',
            'description' => 'Описание'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    public function upload()
    {
        if ($this->validate() && !empty($this->imageFile)) {
            $this->imageFile->saveAs('img/employee/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
        }
        return true;
    }

    public function beforeSave($insert)
    {
        if (!empty($this->imageFile))
            $this->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;
        return true;
    }
}
