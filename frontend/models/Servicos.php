<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicos".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $solucoes
 * @property string $imagem
 * @property string $criatividade
 */
class Servicos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'solucoes', 'imagemSer', 'criatividade'], 'required'],
            [['descricao'], 'string'],
            [['nome'], 'string', 'max' => 20],
            [['solucoes', 'imagemSer', 'criatividade'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'solucoes' => 'Solucoes',
            'imagemSer' => 'Imagem',
            'criatividade' => 'Criatividade',
        ];
    }
}
