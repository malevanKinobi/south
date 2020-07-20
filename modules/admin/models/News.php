<?php

namespace app\modules\admin\models;


use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $date
 * @property string|null $image
 * @property int|null $username
 */
class News extends \yii\db\ActiveRecord
{

    public $upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'content', 'username'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
            ['image', 'image', 'extensions' => 'png, jpg, gif'],
        ];
    }

    public function uploadImage() {
        if ($this->upload) { // только если был выбран файл для загрузки
            $name = md5(uniqid(rand(), true)) . '.' . $this->upload->extension;
            // сохраняем исходное изображение в директории source
            $source = Yii::getAlias('@webroot/images/news/' . $name);
            if ($this->upload->saveAs($source)) {
                return $name;
            }
        }
        return false;
    }

    public static function removeImage($name) {
        if (!empty($name)) {
            $source = Yii::getAlias('@webroot/images/news/' . $name);
            if (is_file($source)) {
                unlink($source);
            }
//            $thumb = Yii::getAlias('@webroot/images/categories/thumb/' . $name);
//            if (is_file($thumb)) {
//                unlink($thumb);
//            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Контент',
            'date' => 'Дата',
            'image' => 'Картинка',
            'username' => 'Автор',
        ];
    }
}
