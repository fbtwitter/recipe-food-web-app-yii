<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bahan".
 *
 * @property int $BAHAN_ID
 * @property int $RESEP_ID
 * @property string $BAHAN_NAMA
 *
 * @property Resep $rESEP
 */
class Bahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BAHAN_NAMA'], 'required'],
            [['BAHAN_ID', 'RESEP_ID'], 'integer'],
            [['BAHAN_NAMA'], 'string', 'max' => 255],
            [['BAHAN_ID'], 'unique'],
            [['RESEP_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['RESEP_ID' => 'RESEP_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BAHAN_ID' => 'Bahan ID',
            'RESEP_ID' => 'Resep ID',
            'BAHAN_NAMA' => 'Bahan Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRESEP()
    {
        return $this->hasOne(Resep::className(), ['RESEP_ID' => 'RESEP_ID']);
    }
}
