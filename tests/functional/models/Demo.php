<?php

namespace functional\models;

use yii\base\Model;

/**
 * Class Demo
 * @package functional\models
 */
class Demo extends Model
{
    public $icon;

    /**
     * @inheritdoc
     * @return array
     */
    public function rules()
    {
        return [
            [['icon', 'icon_1'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'icon' => 'Icon',
        ];
    }
}
