<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "hosp_profile".
 *
 * @property int $id Номер
 * @property string $full_name Полное имя
 * @property string $iin ИИН
 * @property string $adderess Адрес
 * @property string $date_create Дата создания
 * @property string|null $date_update Последняя дата редактирования
 * @property int $active Статус
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hosp_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'iin', 'adderess'], 'required'],
            [['active'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
            [['full_name'], 'string', 'max' => 250],
            [['iin'], 'string', 'max' => 20],
            [['adderess'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'full_name' => 'Полное имя',
            'iin' => 'Номер телефона',
            'adderess' => 'Адрес',
            'date_create' => 'Дата создания',
            'date_update' => 'Последняя дата редактирования',
            'active' => 'Статус',
        ];
    }
}
