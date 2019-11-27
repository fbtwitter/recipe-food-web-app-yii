<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep".
 *
 * @property int $RESEP_ID
 * @property int $KATEGORI_LOKASI_ID
 * @property string $USER_USERNAME
 * @property int $KATEGORI_MAKANAN_ID
 * @property string $RESEP_JUDUL
 * @property string $RESEP_FOTO
 * @property string $RESEP_DESKRIPSI
 *
 * @property Bahan[] $bahans
 * @property Langkah[] $langkahs
 * @property Likes[] $likes
 * @property KategoriLokasi $kATEGORILOKASI
 * @property Users $uSERUSERNAME
 * @property KategoriMakanan $kATEGORIMAKANAN
 * @property Review[] $reviews
 */
class Resep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName()
    {
        return 'resep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RESEP_ID'], 'required'],
            [['RESEP_ID', 'KATEGORI_LOKASI_ID', 'KATEGORI_MAKANAN_ID'], 'integer'],
            [['RESEP_DESKRIPSI'], 'string'],
            [['USER_USERNAME'], 'string', 'max' => 20],
            [['RESEP_JUDUL', 'RESEP_FOTO'], 'string', 'max' => 255],
            [['RESEP_ID'], 'unique'],
            [['file'], 'file'],
            [['KATEGORI_LOKASI_ID'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriLokasi::className(), 'targetAttribute' => ['KATEGORI_LOKASI_ID' => 'KATEGORI_LOKASI_ID']],
            [['USER_USERNAME'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['USER_USERNAME' => 'USER_USERNAME']],
            [['KATEGORI_MAKANAN_ID'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriMakanan::className(), 'targetAttribute' => ['KATEGORI_MAKANAN_ID' => 'KATEGORI_MAKANAN_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'RESEP_ID' => 'Resep ID',
            'KATEGORI_LOKASI_ID' => 'Kategori Lokasi ID',
            'USER_USERNAME' => 'User Username',
            'KATEGORI_MAKANAN_ID' => 'Kategori Makanan ID',
            'RESEP_JUDUL' => '',
            'RESEP_FOTO' => 'Resep Foto',
            'RESEP_DESKRIPSI' => 'Resep Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBahans()
    {
        return $this->hasMany(Bahan::className(), ['RESEP_ID' => 'RESEP_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangkahs()
    {
        return $this->hasMany(Langkah::className(), ['RESEP_ID' => 'RESEP_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikes()
    {
        return $this->hasMany(Likes::className(), ['RESEP_ID' => 'RESEP_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKATEGORILOKASI()
    {
        return $this->hasOne(KategoriLokasi::className(), ['KATEGORI_LOKASI_ID' => 'KATEGORI_LOKASI_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSERUSERNAME()
    {
        return $this->hasOne(Users::className(), ['USER_USERNAME' => 'USER_USERNAME']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKATEGORIMAKANAN()
    {
        return $this->hasOne(KategoriMakanan::className(), ['KATEGORI_MAKANAN_ID' => 'KATEGORI_MAKANAN_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['RESEP_ID' => 'RESEP_ID']);
    }
}
