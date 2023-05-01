<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "hosp_book".
 *
 * @property int $id Номер
 * @property int $profile_id Номер личного дела
 * @property string $title Заголовок
 * @property string $content Описание
 * @property int $user_id Автор
 * @property string $date_create Дата добавление
 * @property string|null $date_update Последняя дата редактирования
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hosp_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profile_id', 'title', 'content', 'user_id'], 'required'],
            [['profile_id', 'user_id'], 'integer'],
            [['content'], 'string'],
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
            'profile_id' => 'Номер личного дела',
            'title' => 'Заголовок',
            'content' => 'Описание',
            'user_id' => 'Автор',
            'date_create' => 'Дата добавление',
            'date_update' => 'Последняя дата редактирования',
        ];
    }
}
