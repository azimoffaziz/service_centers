<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Centers;

/**
 * CentersSearch represents the model behind the search form about `frontend\models\Centers`.
 */
class CentersSearch extends Centers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'regions_id', 'city_id'], 'integer'],
            [['center_name', 'phone_number', 'adress', 'service_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Centers::find();

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
            'id' => $this->id,
            'regions_id' => $this->regions_id,
            'city_id' => $this->city_id,
        ]);

        $query->andFilterWhere(['like', 'center_name', $this->center_name])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'service_id', $this->service_id]);

        return $dataProvider;
    }
}
