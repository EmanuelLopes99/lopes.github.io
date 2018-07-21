<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $conteudo
 * @property string $tags
 * @property string $post
 * @property string $categoria
 * @property string $nomeBlog
 * @property string $dataBlog
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomeBlog'], 'required'],
            [['dataBlog'], 'safe'],
            [['conteudo'], 'string', 'max' => 300],
            [['tags', 'post', 'categoria', 'nomeBlog'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'conteudo' => 'Conteudo',
            'tags' => 'Tags',
            'post' => 'Post',
            'categoria' => 'Categoria',
            'nomeBlog' => 'Nome Blog',
            'dataBlog' => 'Data Blog',
        ];
    }
}
