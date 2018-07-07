<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 28-Jun-18
 * Time: 1:47 PM
 */

namespace app\models;

use yii\db\ActiveRecord;

class Countries extends ActiveRecord
{
    /**
     * Returns the static model of the specified Countries class.
     * @return Countries the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'countries';
    }
}