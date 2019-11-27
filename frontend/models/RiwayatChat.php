<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_chat".
 *
 * @property int $RIWAYAT_ID
 * @property string $RIWAYAT_PENGIRIM
 * @property string $RIWAYAT_PENERIMA
 *
 * @property Users $rIWAYATPENGIRIM
 * @property Users $rIWAYATPENERIMA
 */
class RiwayatChat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_chat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RIWAYAT_ID'], 'required'],
            [['RIWAYAT_ID'], 'integer'],
            [['RIWAYAT_PENGIRIM', 'RIWAYAT_PENERIMA'], 'string', 'max' => 20],
            [['RIWAYAT_ID'], 'unique'],
            [['RIWAYAT_PENGIRIM'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['RIWAYAT_PENGIRIM' => 'USER_USERNAME']],
            [['RIWAYAT_PENERIMA'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['RIWAYAT_PENERIMA' => 'USER_USERNAME']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'RIWAYAT_ID' => 'Riwayat ID',
            'RIWAYAT_PENGIRIM' => 'Riwayat Pengirim',
            'RIWAYAT_PENERIMA' => 'Riwayat Penerima',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRIWAYATPENGIRIM()
    {
        return $this->hasOne(Users::className(), ['USER_USERNAME' => 'RIWAYAT_PENGIRIM']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRIWAYATPENERIMA()
    {
        return $this->hasOne(Users::className(), ['USER_USERNAME' => 'RIWAYAT_PENERIMA']);
    }
}
