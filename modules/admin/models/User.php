<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash

 * @property string $email
// * @property int $status
//
 * @property int $role
 *
 * @property DataU[] $dataUs
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email'], 'required'],
            [['role'], 'integer'],
            [['username', 'password_hash', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
//            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
//            'password_reset_token' => 'Password Reset Token',
            'email' => 'E-mail',
//            'status' => 'Статус',
//            'created_at' => 'Created At',
//            'updated_at' => 'Updated At',
            'role' => 'Роль',
        ];
    }

    /**
     * Gets query for [[DataUs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataUs()
    {
        return $this->hasMany(DataU::className(), ['user_id' => 'id']);
    }
}
