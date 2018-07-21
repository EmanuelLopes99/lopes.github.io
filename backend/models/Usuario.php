<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $email
 * @property string $password_hash
 * @property string $username
 * @property string $auth_key
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 * @property string $niveis_acesso
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password_hash', 'username', 'auth_key', 'created_at', 'updated_at', 'niveis_acesso'], 'required'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['email'], 'string', 'max' => 100],
            [['password_hash'], 'string', 'max' => 200],
            [['username', 'auth_key'], 'string', 'max' => 255],
            [['niveis_acesso'], 'string', 'max' => 20],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'niveis_acesso' => 'Niveis Acesso',
        ];
    }

    public function usuario()
    { 
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
