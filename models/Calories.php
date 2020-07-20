<?php


namespace app\models;


use yii\base\Model;

class Calories extends Model
{
    public $user_id;
    public $weight;
    public $height;
    public $gender;
    public $active;
    public $age;

    public function rules()
    {
        return [
            [['weight', 'height', 'gender', 'active', 'age'], 'required'],
            [['weight', 'height', 'gender', 'active', 'age'], 'safe'],
            [['weight', 'height'], 'double'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'weight' => 'Вес',
            'height' => 'Рост',
            'gender' => 'Пол',
            'active' => 'Активность',
            'age' => 'Год рождения',
        ];
    }

    public  function getResult()
    {

        if ($this->gender == 1)
        {
            return $result = ((66 + (13.7 * $this->weight) + (5 * $this->height)) - (6.76 * (date('Y') - $this->age))) * $this->active;
        }
        elseif ($this->gender == 0)
        {
            return $result = ((655  + (9.5 * $this->weight) + (1.8 * $this->height)) - (4.7 * (date('Y') - $this->age))) * $this->active;
        }
        return 'Ошибка в подсчете';
    }

}