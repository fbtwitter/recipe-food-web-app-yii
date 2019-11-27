<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "langkah".
 *
 * @property int $LANGKAH_ID
 * @property int $RESEP_ID
 * @property int $LANGKAH_NO
 * @property string $LANGKAH_NAMA
 *
 * @property Resep $rESEP
 */
class Langkah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'langkah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LANGKAH_NO','LANGKAH_NAMA'], 'required'],
            [['LANGKAH_ID', 'RESEP_ID', 'LANGKAH_NO'], 'integer'],
            [['LANGKAH_NAMA'], 'string'],
            [['LANGKAH_ID'], 'unique'],
            [['RESEP_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['RESEP_ID' => 'RESEP_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'LANGKAH_ID' => 'Langkah ID',
            'RESEP_ID' => 'Resep ID',
            'LANGKAH_NO' => 'Langkah No',
            'LANGKAH_NAMA' => 'Langkah Nama',
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
