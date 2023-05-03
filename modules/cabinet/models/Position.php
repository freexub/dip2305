<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "cabinet_position".
 *
 * @property int $id
 * @property string $name
 * @property int $active
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cabinet_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['active'], 'integer'],
            [['name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Должность',
            'active' => 'Active',
        ];
    }
}
