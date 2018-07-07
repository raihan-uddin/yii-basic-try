<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 25-Jun-18
 * Time: 12:09 PM
 */

namespace app\models;

use yii\base\Model;

class UserForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}