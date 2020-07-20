<?php


namespace app\models;


use Exception;
use yii\db\ActiveRecord;

class Programs extends ActiveRecord
{
    public static function getUserPrograms()
    {
        return self::find()->where(['user_id' => \Yii::$app->user->getId()])->asArray()->all();
    }

    public static function getDownloadProgram($id = null)
    {
        $dataProgram =  self::find()->where(['id' => $id])->asArray()->one();
        $file_name = $dataProgram['file_name'];
        $path = \Yii::getAlias('@webroot');
        $file = $path . "/file/$file_name";
        if (file_exists($file)) {
            return \Yii::$app->response->sendFile($file);
        }
        throw new Exception('File not found');
    }
}