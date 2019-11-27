<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KategoriLokasi;

/**
 * KategoriLokasiSearch represents the model behind the search form of `frontend\models\KategoriLokasi`.
 */
class KategoriLokasiSearch extends KategoriLokasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KATEGORI_LOKASI_ID'], 'integer'],
            [['KATEGORI_LOKASI_NAMA'], 'safe'],
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
        $query = KategoriLokasi::find();

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
            'KATEGORI_LOKASI_ID' => $this->KATEGORI_LOKASI_ID,
        ]);

        $query->andFilterWhere(['like', 'KATEGORI_LOKASI_NAMA', $this->KATEGORI_LOKASI_NAMA]);

        return $dataProvider;
    }
}
