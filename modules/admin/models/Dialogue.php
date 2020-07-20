<?php

namespace app\modules\admin\models;

use Yii;


class Dialogue extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'dialogue';
    }

    public static function findDialogue()
    {
        return self::find()->where([
            'and',
            ['coach_id' => \Yii::$app->user->getId()],
            ['user_id' => DataU::findSubscribers()]
        ])->asArray()->all();
    }

}
