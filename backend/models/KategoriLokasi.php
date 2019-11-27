<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_lokasi".
 *
 * @property int $KATEGORI_LOKASI_ID
 * @property string $KATEGORI_LOKASI_NAMA
 *
 * @property Resep[] $reseps
 */
class KategoriLokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KATEGORI_LOKASI_ID'], 'required'],
            [['KATEGORI_LOKASI_ID'], 'integer'],
            [['KATEGORI_LOKASI_NAMA'], 'string', 'max' => 50],
            [['KATEGORI_LOKASI_ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KATEGORI_LOKASI_ID' => 'Kategori Lokasi ID',
            'KATEGORI_LOKASI_NAMA' => 'Kategori Lokasi Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReseps()
    {
        return $this->hasMany(Resep::className(), ['KATEGORI_LOKASI_ID' => 'KATEGORI_LOKASI_ID']);
    }
}
