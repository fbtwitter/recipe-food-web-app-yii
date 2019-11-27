<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori_makanan".
 *
 * @property int $KATEGORI_MAKANAN_ID
 * @property string $KATEGORI_MAKANAN
 *
 * @property Resep[] $reseps
 */
class KategoriMakanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_makanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KATEGORI_MAKANAN_ID'], 'required'],
            [['KATEGORI_MAKANAN_ID'], 'integer'],
            [['KATEGORI_MAKANAN'], 'string', 'max' => 50],
            [['KATEGORI_MAKANAN_ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KATEGORI_MAKANAN_ID' => 'Kategori Makanan ID',
            'KATEGORI_MAKANAN' => 'Kategori Makanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReseps()
    {
        return $this->hasMany(Resep::className(), ['KATEGORI_MAKANAN_ID' => 'KATEGORI_MAKANAN_ID']);
    }
}
