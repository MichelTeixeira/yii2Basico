<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Course extends ActiveRecord
{
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'hours'], 'required'],
            [['hours'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }
}
