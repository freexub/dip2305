<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "cabinet_departments".
 *
 * @property int $id Номер отдела
 * @property string $name Название отдела
 * @property string $color Цвет
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cabinet_departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 150],
            [['color'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Департамент',
            'color' => 'Цвет',
        ];
    }
}
