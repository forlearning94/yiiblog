<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{

    public $image; 

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg, png, jpeg']
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

       if($this->validate())
       {
            
            $this->deleteCurrentImage($currentImage);
            
            return $this->saveImage();
       }
    }

    private function getFolder()
    {
        return Yii::getAlias('@app') . '/web/uploads/';
    }

    private function generateFileName()
    {
        return md5(uniqid($this->image->baseName)) . '.' . $this->image->extension;
    }

    public function fileExists($currentImage)
    {
        if($currentImage != null && !empty($currentImage))
        {
            return file_exists($this->getFolder() . $currentImage);
        }
    }

    public function saveImage()
    {
        $fileName = $this->generateFileName();

        $this->image->saveAs($this->getFolder() . $fileName);

        return $fileName;
    }

    public function deleteCurrentImage($currentImage)
    {
        if($this->fileExists($currentImage))
        {
            unlink($this->getFolder() . $currentImage);
        }
    }

}