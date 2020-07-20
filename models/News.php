<?php


namespace app\models;


use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function getAllNews()
    {
        return self::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
    }

    public static function getOneNews($id = null)
    {
        return self::find()->where(['id' => $id])->asArray()->one();
    }
}