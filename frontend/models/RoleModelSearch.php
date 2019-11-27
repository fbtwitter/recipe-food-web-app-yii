<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RoleModel;

/**
 * RoleModelSearch represents the model behind the search form of `frontend\models\RoleModel`.
 */
class RoleModelSearch extends RoleModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_model_id'], 'integer'],
            [['role_model_nama'], 'safe'],
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
        $query = RoleModel::find();

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
            'role_model_id' => $this->role_model_id,
        ]);

        $query->andFilterWhere(['like', 'role_model_nama', $this->role_model_nama]);

        return $dataProvider;
    }
}
