<?php

namespace tests\models;

/**
 * Class Post
 * @package tests\functional\models
 *
 * @property string $icon Icon
 */
class Post extends \yii\base\Model
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
