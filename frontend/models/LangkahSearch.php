<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Langkah;

/**
 * LangkahSearch represents the model behind the search form of `frontend\models\Langkah`.
 */
class LangkahSearch extends Langkah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LANGKAH_ID', 'RESEP_ID', 'LANGKAH_NO'], 'integer'],
            [['LANGKAH_NAMA'], 'safe'],
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
        $query = Langkah::find();

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
            'LANGKAH_ID' => $this->LANGKAH_ID,
            'RESEP_ID' => $this->RESEP_ID,
            'LANGKAH_NO' => $this->LANGKAH_NO,
        ]);

        $query->andFilterWhere(['like', 'LANGKAH_NAMA', $this->LANGKAH_NAMA]);

        return $dataProvider;
    }
}
