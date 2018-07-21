<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $missao
 * @property string $filosofia
 * @property string $eqipa
 * @property string $nome
 * @property string $funcao
 * @property string $imagem
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'funcao', 'imagem'], 'required'],
            [['missao', 'filosofia'], 'string', 'max' => 300],
            [['imagem_about'], 'string', 'max' => 200],
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
            'filosofia' => 'Filosofia',
            'imagem_about' => 'Imagem',
        ];
    }
}
