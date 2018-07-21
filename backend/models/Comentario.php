<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $coment
 * @property int $id_post
 * @property string $data
 *
 * @property Post $post
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'coment', 'id_post'], 'required'],
            [['coment'], 'string'],
            [['id_post'], 'integer'],
            [['data'], 'safe'],
            [['nome'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
            [['id_post'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['id_post' => 'id']],
            ['email', 'email'],
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
            'email' => 'Email',
            'coment' => 'Coment',
            'id_post' => 'Id Post',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'id_post']);
    }
}
