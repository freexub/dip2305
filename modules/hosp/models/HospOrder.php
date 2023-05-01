<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "hosp_order".
 *
 * @property int $id Уникальный номер
 * @property int $category_id Категория
 * @property int $profile_id Клиент
 * @property string $date_create Дата
 * @property int $active Статус
 *
 * @property HospCategory $category
 * @property HospProfile $profile
 */
class HospOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hosp_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'profile_id'], 'required'],
            [['category_id', 'profile_id', 'active'], 'integer'],
            [['date_create'], 'safe'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => HospCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profile_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'profile_id' => 'Profile ID',
            'date_create' => 'Дата создания записи',
            'active' => 'Active',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(HospCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Profile]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }
}
