<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "programs".
 *
 * @property int $id
 * @property int $user_id
 * @property string $prog_name
 * @property string $file_name
 * @property string $description
 * @property string $date
 *
 * @property User $user
 */
class Programs extends \yii\db\ActiveRecord
{
    public $upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'prog_name'], 'required'],
            [['user_id'], 'integer'],
            [['prog_name'], 'string', 'max' => 255],
            ['file_name', 'file', 'extensions' => 'xls, xlsx'],
            ['date', 'safe'],
            ['description', 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'prog_name' => 'Заголовок',
            'file_name' => 'Название файла',
            'description' => 'Описание',
            'date' => 'Дата'
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function upload()
    {

    }

    public function uploadFile() {
        if ($this->upload) { // только если был выбран файл для загрузки
            $name = md5(uniqid(rand(), true)) . '.' . $this->upload->extension;
            // сохраняем исходное изображение в директории source
            $source = Yii::getAlias('@webroot/file/' . $name);
            if ($this->upload->saveAs($source)) {
                return $name;
            }
        }
        return false;
    }

    public static function getReplacement()
    {
        return self::find()->where(['<=', 'date', date('Y-m-d') ])->count();
    }

}
