<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RiwayatChat;

/**
 * RiwayatChatSearch represents the model behind the search form of `backend\models\RiwayatChat`.
 */
class RiwayatChatSearch extends RiwayatChat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RIWAYAT_ID'], 'integer'],
            [['RIWAYAT_PENGIRIM', 'RIWAYAT_PENERIMA'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RiwayatChat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'RIWAYAT_ID' => $this->RIWAYAT_ID,
        ]);

        $query->andFilterWhere(['like', 'RIWAYAT_PENGIRIM', $this->RIWAYAT_PENGIRIM])
            ->andFilterWhere(['like', 'RIWAYAT_PENERIMA', $this->RIWAYAT_PENERIMA]);

        return $dataProvider;
    }
}
