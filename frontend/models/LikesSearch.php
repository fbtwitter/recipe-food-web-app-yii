<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Likes;

/**
 * LikesSearch represents the model behind the search form of `frontend\models\Likes`.
 */
class LikesSearch extends Likes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LIKE_ID', 'RESEP_ID', 'LIKE_JUMLAH'], 'integer'],
            [['USER_USERNAME'], 'safe'],
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
        $query = Likes::find();

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
            'LIKE_ID' => $this->LIKE_ID,
            'RESEP_ID' => $this->RESEP_ID,
            'LIKE_JUMLAH' => $this->LIKE_JUMLAH,
        ]);

        $query->andFilterWhere(['like', 'USER_USERNAME', $this->USER_USERNAME]);

        return $dataProvider;
    }
}
