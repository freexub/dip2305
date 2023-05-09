<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "cabinet_profile".
 *
 * @property int $user_id Пользователь
 * @property string $full_name Полное имя
 * @property string $iin ИИН
 * @property string $adderess Адрес
 * @property string $photo Фото
 * @property string $date_create Дата создания
 * @property string|null $date_update Последняя дата редактирования
 * @property int $active Статус
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cabinet_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'adderess'], 'required'],
            [['user_id', 'iin', 'active'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
            [['iin'], 'string', 'max' => 13],
            [['photo'], 'string', 'max' => 50],
            [['full_name'], 'string', 'max' => 250],
            [['adderess'], 'string', 'max' => 500],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'Идентификатор',
            'full_name' => 'Полное имя',
            'iin' => 'ИИН',
            'adderess' => 'Адрес',
            'photo' => 'Фото',
            'date_create' => 'Дата регистрации',
            'date_update' => 'Последняя дата редактирования',
            'active' => 'Статус',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getPosition()
    {
        return $this->hasOne(CabinetProfileDepartments::className(), ['user_id' => 'user_id']);
    }
}
