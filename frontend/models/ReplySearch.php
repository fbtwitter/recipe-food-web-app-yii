<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Reply;

/**
 * ReplySearch represents the model behind the search form of `frontend\models\Reply`.
 */
class ReplySearch extends Reply
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REPLY_ID', 'REVIEW_ID'], 'integer'],
            [['REPLY_BALASAN'], 'safe'],
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
        $query = Reply::find();

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
            'REPLY_ID' => $this->REPLY_ID,
            'REVIEW_ID' => $this->REVIEW_ID,
        ]);

        $query->andFilterWhere(['like', 'REPLY_BALASAN', $this->REPLY_BALASAN]);

        return $dataProvider;
    }
}
