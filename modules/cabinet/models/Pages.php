<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "cabinet_pages".
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
        return 'cabinet_pages';
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
            'id' => 'ID',
            'name' => 'Заголовок',
            'about' => 'Содержание',
            'active' => 'Active',
        ];
    }

}
