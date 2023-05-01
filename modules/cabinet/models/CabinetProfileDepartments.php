<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "cabinet_profile_departments".
 *
 * @property int $id Номер
 * @property int $user_id Сотрудник
 * @property int $department_id Отдел
 * @property int $position_id
 * @property string $date_create Дата назначения
 * @property string|null $date_update Дата изменения
 * @property int $active Статус
 */
class CabinetProfileDepartments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cabinet_profile_departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'department_id', 'position_id'], 'required'],
            [['user_id', 'department_id', 'position_id', 'active'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'department_id' => 'Department ID',
            'position_id' => 'Position ID',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'active' => 'Active',
        ];
    }
}
