<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipe".
 *
 * @property int $id
 * @property string $nome
 * @property string $funcao
 * @property string $descrecaoEquipe
 * @property string $foto
 */
class Equipe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'foto'], 'string', 'max' => 200],
            [['funcao'], 'string', 'max' => 300],
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
            'funcao' => 'Função',
            'foto' => 'Foto',
        ];
    }
}
