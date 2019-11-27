<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bahan;

/**
 * BahanSearch represents the model behind the search form of `backend\models\Bahan`.
 */
class BahanSearch extends Bahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BAHAN_ID', 'RESEP_ID'], 'integer'],
            [['BAHAN_NAMA'], 'safe'],
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
        $query = Bahan::find();

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
            'BAHAN_ID' => $this->BAHAN_ID,
            'RESEP_ID' => $this->RESEP_ID,
        ]);

        $query->andFilterWhere(['like', 'BAHAN_NAMA', $this->BAHAN_NAMA]);

        return $dataProvider;
    }
}
