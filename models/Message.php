<?php


namespace app\models;

use yii\db\ActiveRecord;

class Message extends ActiveRecord
{
    public static function tableName()
    {
        return 'message';
    }

    public function rules()
    {
        return
        [
            [['message'], 'safe'],
            ['date', 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'message' => 'Сообщение',
        ];
    }

    public static function getMessage()
    {
        $dialogue_id = Dialogue::findDialogue();
        return self::find()->where(['dialogue_id' => $dialogue_id['id']])->asArray()->all();
    }
}