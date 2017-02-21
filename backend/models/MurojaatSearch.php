<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Murojaat;

/**
 * MurojaatSearch represents the model behind the search form about `backend\models\Murojaat`.
 */
class MurojaatSearch extends Murojaat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'regions_id', 'city_id'], 'integer'],
            [['full_name', 'adress', 'e_mail', 'tel_number', 'sex', 'birth_date', 'status', 'type_mur', 'text_mur'], 'safe'],
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
        $query = Murojaat::find();

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
            'birth_date' => $this->birth_date,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'tel_number', $this->tel_number])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'type_mur', $this->type_mur])
            ->andFilterWhere(['like', 'text_mur', $this->text_mur]);

        return $dataProvider;
    }
}
