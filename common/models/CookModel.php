<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cook".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $sale
 * @property string $describtion
 * @property int $status
 * @property string $image
 */
class CookModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['describtion', 'image'], 'string'],
            [['status'], 'integer'],
            [['name', 'price', 'sale'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'sale' => 'Sale',
            'describtion' => 'Describtion',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }
    public function saveImage($filename){
        $this->image = $filename;
        if($this->save()){
            return true;
        }
        return false;
    }

    public function deleteImage(){
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);

    }
    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public function getImage(){
        return ($this->image) ? '/uploads/' . $this->image : '/diam1.jpg';
    }
}
