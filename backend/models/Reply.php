<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reply".
 *
 * @property int $REPLY_ID
 * @property int $REVIEW_ID
 * @property string $REPLY_BALASAN
 *
 * @property Review $rEVIEW
 */
class Reply extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reply';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REPLY_ID'], 'required'],
            [['REPLY_ID', 'REVIEW_ID'], 'integer'],
            [['REPLY_BALASAN'], 'string', 'max' => 255],
            [['REPLY_ID'], 'unique'],
            [['REVIEW_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Review::className(), 'targetAttribute' => ['REVIEW_ID' => 'REVIEW_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REPLY_ID' => 'Reply ID',
            'REVIEW_ID' => 'Review ID',
            'REPLY_BALASAN' => 'Reply Balasan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getREVIEW()
    {
        return $this->hasOne(Review::className(), ['REVIEW_ID' => 'REVIEW_ID']);
    }
}
