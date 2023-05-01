<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $files
 * @property file $file
 * @property string $about
 * @property string $when_is
 * @property string $where_is
 * @property string $author
 * @property string $date_create
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;

    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about', 'when_is', 'where_is', 'author'], 'required'],
            [['files'], 'required', 'on' => 'update'],
            [['files', 'about', 'where_is'], 'string'],
            [['file'], 'file', 'extensions'=>'png, jpeg, jpg, gif, avpi, mp4', 'maxSize' => 2048 * 2048 * 20],
            [['when_is', 'date_create'], 'safe'],
            [['author'], 'string', 'max' => 100],
        ];
    }

    public function upload($pathfile,$filename,$fileextension)
    {
        $this->file->saveAs($pathfile . $filename . '.' . $fileextension);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'files' => 'Добавьте фотографии и видео:',
            'file' => '123',
            'about' => 'Опишите, что произошло:',
            'when_is' => 'Уточните дату, когда это произошло:',
            'where_is' => 'Уточните, где это произошло:',
            'author' => 'Ваше имя:',
            'date_create' => 'Дата добавления',
        ];
    }
}
