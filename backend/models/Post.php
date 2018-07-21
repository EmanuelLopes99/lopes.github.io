<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $capa
 * @property string $imagem
 * @property string $noticias
 * @property string $data_post
 *
 * @property Comentario[] $comentarios
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'imagemPost', 'noticias'], 'required'],
            [['content'], 'string'],
            [['data_post'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['capa'], 'string', 'max' => 100],
            [['imagemPost', 'noticias'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'capa' => 'Capa',
            'imagemPost' => 'Logotipo',
            'noticias' => 'Noticias',
            'data_post' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['id_post' => 'id']);
    }
}
