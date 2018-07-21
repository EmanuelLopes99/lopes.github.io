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
            [['imagem_about'], 'required'],
            [['missao', 'filosofia'], 'string', 'max' => 500],
            [['imagem_about'], 'string', 'max' => 200],
            [['descrecaoEquipe'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'missao' => 'Missão',
            'filosofia' => 'Filosofia',
            'descrecaoEquipe' => 'Descrição',
            'imagem_about' => 'Foto',
        ];
    }
}
