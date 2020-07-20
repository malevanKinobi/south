<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string $auth_key
// * @property integer $status

 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const ROLE_USER = 1;
    const ROLE_MODER = 5;
    const ROLE_ADMIN = 10;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status']);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     * @throws \yii\base\Exception
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     * @throws \yii\base\Exception
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /*-----------------------------------------*/
    public static function roles()
    {
        return [
            self::ROLE_USER => Yii::t('app', 'User'),
            self::ROLE_ADMIN => Yii::t('app', 'Admin'),
            self::ROLE_MODER => Yii::t('app', 'Manager'),
        ];
    }

    /**
     * Название роли
     * @param int $id
     * @return mixed|null
     */

    public function getRoleName(int $id)
    {
        $list = self::roles();
        return isset($list[$id]) ? $list[$id] : null;
    }

    public function isAdmin()
    {
        return ($this->role == self::ROLE_ADMIN);
    }

    public function isManager()
    {
        return ($this->role == self::ROLE_MODER);
    }

    public function isUser()
    {
        return ($this->role == self::ROLE_USER);
    }

}