<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "coach".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $photo
 *
 * @property DataU[] $dataUs
 */
class Coach extends \yii\db\ActiveRecord
{

    public $upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coach';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_e'], 'safe'],
            [['name', 'email', 'phone', 'vk'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['email', 'phone', 'vk'], 'string', 'max' => 255],
            [['photo'], 'safe'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_e' => 'id_coach',
            'name' => 'Name',
            'email' => 'Email',
            'photo' => 'Photo',
            'vk' => 'VK',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[DataUs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataUs()
    {
        return $this->hasMany(DataU::className(), ['coach_sub_id' => 'id']);
    }

    public function uploadImage() {
        if ($this->upload) { // только если был выбран файл для загрузки
            $name = md5(uniqid(rand(), true)) . '.' . $this->upload->extension;
            // сохраняем исходное изображение в директории source
            $source = Yii::getAlias('@webroot/images/coaches/' . $name);
            if ($this->upload->saveAs($source)) {
                return $name;
            }
        }
        return false;
    }

    public static function removeImage($name) {
        if (!empty($name)) {
            $source = Yii::getAlias('@webroot/images/coaches/' . $name);
            if (is_file($source)) {
                unlink($source);
            }
//            $thumb = Yii::getAlias('@webroot/images/categories/thumb/' . $name);
//            if (is_file($thumb)) {
//                unlink($thumb);
//            }
        }
    }


}
