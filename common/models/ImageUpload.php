<?php


namespace common\models;
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
            [['image'], 'file', 'extensions' => 'jpg,png,jpeg'],
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage){

        $this->image = $file;

//        file_exists(Yii::getAlias('@web'). 'uploads' . $currentImage) &&

        if($this->validate()){

            $this->deleteCurrentImage($currentImage);
             return $this->saveImage();
        };
    }

    private function getFolder(){
        return Yii::getAlias('@web'). 'uploads' . DIRECTORY_SEPARATOR;
    }
    private function generateFilename(){
        return strtolower(md5(uniqid($this->image->baseName)) . '.' .$this->image->extension);
    }
    public function deleteCurrentImage($currentImage){

        if($this->fileExists($currentImage)){

            unlink($this->getFolder() . $currentImage);
        }
    }
    public function fileExists($currentImage){
        if(file_exists($this->getFolder() . $currentImage) && is_file($this->getFolder() . $currentImage)){
            return true;
        } else {
            return false;
        }
    }
    public function saveImage(){
        $filename = $this->generateFilename();

        $this->image->saveAs($this->getFolder() . $filename);

        return $filename;
    }

}