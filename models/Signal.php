<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "signal".
 *
 * @property int $id
 * @property int $name
 * @property int $cade
 * @property int $active
 */
class Signal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'signal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cade'], 'required'],
            [['cade', 'name'], 'string'],
            [['active'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'cade' => 'Код',
            'active' => 'Статус',
        ];
    }
}
