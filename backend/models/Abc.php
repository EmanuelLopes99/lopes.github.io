<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abc".
 *
 * @property int $id
 * @property string $missao
 * @property string $valores
 * @property string $endereco
 * @property int $movel_A
 * @property int $movel_B
 * @property int $tel_A
 * @property int $tel_B
 * @property string $email
 * @property string $visao
 * @property string $novidades
 */
class Abc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missao', 'valores', 'endereco', 'movel_A', 'tel_A', 'visao'], 'required'],
            [['missao', 'valores'], 'string'],
            [['movel_B', 'tel_A', 'tel_B'], 'integer'],
            [['endereco'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 50],
            [['visao', 'novidades'], 'string', 'max' => 300],
            [['movel_A'],'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'missao' => 'Missao',
            'valores' => 'Valores',
            'endereco' => 'Endereco',
            'movel_A' => 'Movel  A',
            'movel_B' => 'Movel  B',
            'tel_A' => 'Tel  A',
            'tel_B' => 'Tel  B',
            'email' => 'Email',
            'visao' => 'Visao',
            'novidades' => 'Novidades',
        ];
    }
}
