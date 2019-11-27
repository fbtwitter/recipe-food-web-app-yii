<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Resep;

/**
 * ResepSearch represents the model behind the search form of `backend\models\Resep`.
 */
class ResepSearch extends Resep
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RESEP_ID', 'KATEGORI_LOKASI_ID', 'KATEGORI_MAKANAN_ID'], 'integer'],
            [['USER_USERNAME', 'RESEP_JUDUL', 'RESEP_FOTO', 'RESEP_DESKRIPSI'], 'safe'],
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
        $query = Resep::find();

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
            'RESEP_ID' => $this->RESEP_ID,
            'KATEGORI_LOKASI_ID' => $this->KATEGORI_LOKASI_ID,
            'KATEGORI_MAKANAN_ID' => $this->KATEGORI_MAKANAN_ID,
        ]);

        $query->andFilterWhere(['like', 'USER_USERNAME', $this->USER_USERNAME])
            ->andFilterWhere(['like', 'RESEP_JUDUL', $this->RESEP_JUDUL])
            ->andFilterWhere(['like', 'RESEP_FOTO', $this->RESEP_FOTO])
            ->andFilterWhere(['like', 'RESEP_DESKRIPSI', $this->RESEP_DESKRIPSI]);

        return $dataProvider;
    }
}
