<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galerias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $foto
 */
class Galerias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galerias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'fotoG'], 'required'],
            [['titulo', 'fotoG'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'fotoG' => 'Foto',
        ];
    }
}
