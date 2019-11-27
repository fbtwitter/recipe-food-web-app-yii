<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $REVIEW_ID
 * @property int $RESEP_ID
 * @property string $REVIEW_KOMENTAR
 *
 * @property Reply[] $replies
 * @property Resep $rESEP
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REVIEW_ID'], 'required'],
            [['REVIEW_ID', 'RESEP_ID'], 'integer'],
            [['REVIEW_KOMENTAR'], 'string', 'max' => 255],
            [['REVIEW_ID'], 'unique'],
            [['RESEP_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['RESEP_ID' => 'RESEP_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REVIEW_ID' => 'Review ID',
            'RESEP_ID' => 'Resep ID',
            'REVIEW_KOMENTAR' => '',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReplies()
    {
        return $this->hasMany(Reply::className(), ['REVIEW_ID' => 'REVIEW_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRESEP()
    {
        return $this->hasOne(Resep::className(), ['RESEP_ID' => 'RESEP_ID']);
    }
}
