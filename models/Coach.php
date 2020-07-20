<?php


namespace app\models;


use yii\db\ActiveRecord;

class Coach extends ActiveRecord
{
    public static function tableName()
    {
        return 'coach';
    }

    public static function getAllRecord()
    {
        return self::find()->asArray()->all();
    }

    public static function getCurrentCoach()
    {
        $userData = UserData::getDataUser();
        return self::find()->where(['id_e' => $userData['coach_sub_id']])->asArray()->one();
    }

}