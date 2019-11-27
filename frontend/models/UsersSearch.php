<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Users;

/**
 * UsersSearch represents the model behind the search form of `frontend\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USER_ID', 'user_role_model_id'], 'integer'],
            [['USER_NAMA_LENGKAP', 'USER_USERNAME', 'USER_PASSWORD', 'USER_FOTO', 'USER_EMAIL'], 'safe'],
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
        $query = Users::find();

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
            'USER_ID' => $this->USER_ID,
            'user_role_model_id' => $this->user_role_model_id,
        ]);

        $query->andFilterWhere(['like', 'USER_NAMA_LENGKAP', $this->USER_NAMA_LENGKAP])
            ->andFilterWhere(['like', 'USER_USERNAME', $this->USER_USERNAME])
            ->andFilterWhere(['like', 'USER_PASSWORD', $this->USER_PASSWORD])
            ->andFilterWhere(['like', 'USER_FOTO', $this->USER_FOTO])
            ->andFilterWhere(['like', 'USER_EMAIL', $this->USER_EMAIL]);

        return $dataProvider;
    }
}
