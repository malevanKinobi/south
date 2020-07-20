<?php


namespace app\models;

use yii\db\ActiveRecord;

class UserData extends ActiveRecord
{


    public static function tableName()
    {
        return 'data_u';
    }

    public static function getDataUser()
    {
        return self::find()
            ->where(['user_id' => \Yii::$app->user->getId()])
            ->asArray()
            ->one();
    }

    public function getCoachOne()
    {
        return self::find()->where(['user_id' => \Yii::$app->user->getId()])->one();
    }

}