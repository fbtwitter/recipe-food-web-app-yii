<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "role_model".
 *
 * @property int $role_model_id
 * @property string $role_model_nama
 *
 * @property Users[] $users
 */
class RoleModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'role_model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_model_nama'], 'required'],
            [['role_model_nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'role_model_id' => 'Role Model ID',
            'role_model_nama' => 'Role Model Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['user_role_model_id' => 'role_model_id']);
    }
}
