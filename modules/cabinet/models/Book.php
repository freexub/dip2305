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
            [['user_id', 'active'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
            [['title'], 'string', 'max' => 500],
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
            'date_create' => 'Дата создания',
            'date_update' => 'Дата изменения',
            'active' => 'Статус',
        ];
    }
}
