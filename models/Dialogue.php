<?php


namespace app\models;


use yii\db\ActiveRecord;

class Dialogue extends ActiveRecord
{
    public static function tableName()
    {
        return 'dialogue';
    }

    public static function findDialogue()
    {
        return self::find()->where([
            'and',
            ['user_id' => \Yii::$app->user->getId()],
            ['coach_id' => Coach::getCurrentCoach()]
        ])->asArray()->one();
    }
}