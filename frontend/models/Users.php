<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $USER_ID
 * @property string $USER_NAMA_LENGKAP
 * @property string $USER_USERNAME
 * @property string $USER_PASSWORD
 * @property string $USER_FOTO
 * @property string $USER_EMAIL
 * @property int $user_role_model_id
 *
 * @property Chat[] $chats
 * @property Chat[] $chats0
 * @property Likes[] $likes
 * @property Resep[] $reseps
 * @property RiwayatChat[] $riwayatChats
 * @property RiwayatChat[] $riwayatChats0
 * @property RoleModel $userRoleModel
 * @property User $uSER
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USER_USERNAME', 'user_role_model_id'], 'required'],
            [['user_role_model_id'], 'integer'],
            [['USER_NAMA_LENGKAP', 'USER_EMAIL'], 'string', 'max' => 50],
            [['USER_USERNAME', 'USER_PASSWORD'], 'string', 'max' => 20],
            [['USER_FOTO'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['USER_USERNAME'], 'unique'],
            [['user_role_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoleModel::className(), 'targetAttribute' => ['user_role_model_id' => 'role_model_id']],
            [['USER_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['USER_ID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USER_ID' => 'User ID',
            'USER_NAMA_LENGKAP' => 'User Nama Lengkap',
            'USER_USERNAME' => 'User Username',
            'USER_PASSWORD' => 'User Password',
            'USER_FOTO' => 'User Foto',
            'USER_EMAIL' => 'User Email',
            'user_role_model_id' => 'User Role Model ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats()
    {
        return $this->hasMany(Chat::className(), ['CHAT_PENGIRIM' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChats0()
    {
        return $this->hasMany(Chat::className(), ['CHAT_PENERIMA' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikes()
    {
        return $this->hasMany(Likes::className(), ['USER_USERNAME' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReseps()
    {
        return $this->hasMany(Resep::className(), ['USER_USERNAME' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatChats()
    {
        return $this->hasMany(RiwayatChat::className(), ['RIWAYAT_PENGIRIM' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatChats0()
    {
        return $this->hasMany(RiwayatChat::className(), ['RIWAYAT_PENERIMA' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRoleModel()
    {
        return $this->hasOne(RoleModel::className(), ['role_model_id' => 'user_role_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSER()
    {
        return $this->hasOne(User::className(), ['id' => 'USER_ID']);
    }
}
