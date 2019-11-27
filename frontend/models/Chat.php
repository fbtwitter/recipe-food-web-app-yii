<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "chat".
 *
 * @property int $CHAT_ID
 * @property string $CHAT_PENGIRIM
 * @property string $CHAT_PENERIMA
 * @property string $CHAT_ISI
 * @property string $CHAT_WAKTU
 *
 * @property Users $cHATPENGIRIM
 * @property Users $cHATPENERIMA
 */
class Chat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CHAT_ID'], 'required'],
            [['CHAT_ID'], 'integer'],
            [['CHAT_ISI'], 'string'],
            [['CHAT_WAKTU'], 'safe'],
            [['CHAT_PENGIRIM', 'CHAT_PENERIMA'], 'string', 'max' => 20],
            [['CHAT_ID'], 'unique'],
            [['CHAT_PENGIRIM'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['CHAT_PENGIRIM' => 'USER_USERNAME']],
            [['CHAT_PENERIMA'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['CHAT_PENERIMA' => 'USER_USERNAME']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CHAT_ID' => 'Chat ID',
            'CHAT_PENGIRIM' => 'Chat Pengirim',
            'CHAT_PENERIMA' => 'Chat Penerima',
            'CHAT_ISI' => '',
            'CHAT_WAKTU' => 'Chat Waktu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCHATPENGIRIM()
    {
        return $this->hasOne(Users::className(), ['USER_USERNAME' => 'CHAT_PENGIRIM']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCHATPENERIMA()
    {
        return $this->hasOne(Users::className(), ['USER_USERNAME' => 'CHAT_PENERIMA']);
    }
}
