<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Chat;

/**
 * ChatSearch represents the model behind the search form of `backend\models\Chat`.
 */
class ChatSearch extends Chat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CHAT_ID'], 'integer'],
            [['CHAT_PENGIRIM', 'CHAT_PENERIMA', 'CHAT_ISI', 'CHAT_WAKTU'], 'safe'],
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
        $query = Chat::find();

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
            'CHAT_ID' => $this->CHAT_ID,
            'CHAT_WAKTU' => $this->CHAT_WAKTU,
        ]);

        $query->andFilterWhere(['like', 'CHAT_PENGIRIM', $this->CHAT_PENGIRIM])
            ->andFilterWhere(['like', 'CHAT_PENERIMA', $this->CHAT_PENERIMA])
            ->andFilterWhere(['like', 'CHAT_ISI', $this->CHAT_ISI]);

        return $dataProvider;
    }
}
