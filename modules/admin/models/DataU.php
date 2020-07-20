<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "data_u".
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $coach_sub_id
 * @property string $name
 *@property string $gender
 * @property string $age
 * @property string $weight
 * @property string $height
 * @property User $user
 * @property Coach $coachSub
 */
class DataU extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_u';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name'], 'required'],
            [['user_id', 'coach_sub_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            ['gender', 'string'],
            ['age', 'number', 'min'=> 1900, 'max' => 9999],
            ['weight', 'double'],
            ['height', 'double'],
//            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
//            [['coach_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => Coach::className(), 'targetAttribute' => ['coach_sub_id' => 'id']],
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
            'coach_sub_id' => 'id тренера',
            'name' => 'Имя клиента',
            'gender' => 'Пол',
            'age' => 'Год рождения',
            'weight' => 'Вес',
            'height' => 'Рост',
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

    /**
     * Gets query for [[CoachSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoachSub()
    {
        return $this->hasOne(Coach::className(), ['id' => 'coach_sub_id']);
    }

    public static function getSubscribers()
    {
        return self::find()->where(['coach_sub_id' => Yii::$app->user->getId()])->count();
    }

    public static function findSubscribers()
    {
        return self::find()->where(['coach_sub_id' => Yii::$app->user->getId()])->asArray()->all();
    }
}
