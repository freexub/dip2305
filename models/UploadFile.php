<?php
/**
 * Created by PhpStorm.
 * User: k.shtefan
 * Date: 08.11.2017
 * Time: 15:53
 */
namespace app\models;

use app\models\Data;
use yii\web\UploadedFile;

class UploadFile extends Data
{
    /**
     * @var UploadedFile
     */
    public $files;

    public function rules()
    {
        return [
            [['files'], 'file', 'extensions'=>'png, jpeg, jpg, gif, avpi, mp4'],
            /* Капча */
            #['verifyCode', 'captcha'],
        ];
    }

    public function upload($pathfile,$filename,$fileextension)
    {
        $this->files->saveAs($pathfile . $filename . '.' . $fileextension);
        return true;
    }
    public function attributeLabels()
    {
        return [
            'files' => 'Фото / видео',
        ];
    }
}