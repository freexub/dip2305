<?php

namespace app\modules\bank\models;

use Yii;

/**
 * This is the model class for table "bank_pages".
 *
 * @property int $id
 * @property string $name
 * @property string $about
 * @property int $active
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'about'], 'required'],
            [['name', 'about'], 'string'],
            [['active'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Заголовок',
            'about' => 'Содержание',
            'active' => 'Статус',
        ];
    }
}
