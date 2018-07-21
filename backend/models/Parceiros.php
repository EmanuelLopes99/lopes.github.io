<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parceiros".
 *
 * @property int $id
 * @property string $nome
 * @property string $link
 * @property string $logo
 */
class Parceiros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $logo;

    public static function tableName()
    {
        return 'parceiros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'link', 'logo'], 'required'],
            [['nome'], 'string', 'max' => 20],
            [['link'], 'string', 'max' => 50],
            [['logo'], 'string', 'max' => 255],
            [['logo'],'file','extensions' => 'png, jpg, gif'],
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
            'link' => 'Link',
            'logo' => 'Logotipo',
        ];
    }
}
