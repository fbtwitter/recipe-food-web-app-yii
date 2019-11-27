<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KategoriMakanan;

/**
 * KategoriMakananSearch represents the model behind the search form of `backend\models\KategoriMakanan`.
 */
class KategoriMakananSearch extends KategoriMakanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KATEGORI_MAKANAN_ID'], 'integer'],
            [['KATEGORI_MAKANAN'], 'safe'],
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
        $query = KategoriMakanan::find();

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
            'KATEGORI_MAKANAN_ID' => $this->KATEGORI_MAKANAN_ID,
        ]);

        $query->andFilterWhere(['like', 'KATEGORI_MAKANAN', $this->KATEGORI_MAKANAN]);

        return $dataProvider;
    }
}
