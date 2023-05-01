<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "hosp_category".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $active
 */
class HospCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hosp_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['active', 'price'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Уникальный номер',
            'name' => 'Название услуги',
            'price' => 'Цена в тенге',
            'active' => 'Статус',
        ];
    }
}
