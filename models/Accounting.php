<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounting".
 *
 * @property int $id
 * @property int $entity_id
 * @property string $frequency частота
 * @property string $level Уровень
 * @property string $converting преобразование
 * @property string $scope предел
 * @property string $difference Разница
 * @property string $height Высота
 * @property string $azimuth Азимут
 * @property string $polarization Поляризация
 * @property string $date_create
 * @property string $date_update
 */
class Accounting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entity_id', 'frequency', 'level', 'converting', 'scope', 'difference', 'height', 'azimuth', 'polarization', 'date_update'], 'required'],
            [['entity_id'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
            [['frequency', 'level', 'converting', 'scope', 'difference', 'height', 'azimuth', 'polarization'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entity_id' => 'Entity ID',
            'frequency' => 'частота',
            'level' => 'Уровень',
            'converting' => 'преобразование',
            'scope' => 'предел',
            'difference' => 'Разница',
            'height' => 'Высота',
            'azimuth' => 'Азимут',
            'polarization' => 'Поляризация',
            'date_create' => 'Дата регистрации',
            'date_update' => 'Date Update',
        ];
    }
}
