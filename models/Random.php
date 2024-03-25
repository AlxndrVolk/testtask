<?php

namespace app\models;

use Exception;
use yii\db\ActiveRecord;

/**
 * Class Random
 * @package app\models
 * @property $id
 * @property $number
 */
class Random extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'rndm';
    }

    public function rules()
    {
        return [
            [['number'], 'required'],
            [['number'], 'integer'],
        ];
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function generate()
    {
        $this->number = random_int(1, 100000);
        return $this->save();
    }

    /**
     * @param $id
     * @return Random|null
     */
    public static function retrieve($id)
    {
        return self::findOne(['id' => $id]);
    }
}
