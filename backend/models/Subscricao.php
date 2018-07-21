<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscricao".
 *
 * @property int $id
 * @property string $email
 */
class Subscricao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscricao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'string', 'max' => 50],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
        ];
    }
}
