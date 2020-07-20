<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $message
 * @property string $date
 * @property int $sender_id
 * @property int $dialogue_id
 *
 * @property User $sender
 * @property Dialogue $dialogue
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'message' => 'Сообщения',
        ];
    }



}
