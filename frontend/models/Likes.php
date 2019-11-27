<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "likes".
 *
 * @property int $LIKE_ID
 * @property string $USER_USERNAME
 * @property int $RESEP_ID
 * @property int $LIKE_JUMLAH
 *
 * @property Resep $rESEP
 * @property Users $uSERUSERNAME
 */
class Likes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'likes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LIKE_ID'], 'required'],
            [['LIKE_ID', 'RESEP_ID', 'LIKE_JUMLAH'], 'integer'],
            [['USER_USERNAME'], 'string', 'max' => 20],
            [['LIKE_ID'], 'unique'],
            [['RESEP_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['RESEP_ID' => 'RESEP_ID']],
            [['USER_USERNAME'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['USER_USERNAME' => 'USER_USERNAME']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'LIKE_ID' => 'Like ID',
            'USER_USERNAME' => 'User Username',
            'RESEP_ID' => 'Resep ID',
            'LIKE_JUMLAH' => 'Like Jumlah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRESEP()
    {
        return $this->hasOne(Resep::className(), ['RESEP_ID' => 'RESEP_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSERUSERNAME()
    {
        return $this->hasOne(Users::className(), ['USER_USERNAME' => 'USER_USERNAME']);
    }
}
