<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "cabinet_book".
 *
 * @property int $id Номер
 * @property string $title Заголовок
 * @property string $content Описание
 * @property int $user_id Автор
 * @property int $executor_user_id Исполнитель
 * @property string $report_info Отчет об исполнении
 * @property string $date_create Дата добавление
 * @property string|null $date_update Последняя дата редактирования
 * @property int $active
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cabinet_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'user_id'], 'required'],
            [['content'], 'string'],
            [['user_id', 'active', 'executor_user_id'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
            [['title'], 'string', 'max' => 500],
            [['report_info'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'title' => 'Заголовок',
            'content' => 'Текст заявки',
            'user_id' => 'Автор',
            'executor_user_id' => 'Исполнитель',
            'report_info' => 'Отчёт',
            'date_create' => 'Дата создания',
            'date_update' => 'Дата изменения',
            'active' => 'Статус',
        ];
    }

    public function getExecutor()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'executor_user_id']);
    }

    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'user_id']);
    }
}
