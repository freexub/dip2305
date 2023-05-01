<?php

namespace app\modules\hosp\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\hosp\models\HospOrder;

/**
 * HospOrderSearch represents the model behind the search form of `app\modules\hosp\models\HospOrder`.
 */
class HospOrderSearch extends HospOrder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'profile_id', 'active'], 'integer'],
            [['date_create'], 'safe'],
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
        $query = HospOrder::find();

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
            'category_id' => $this->category_id,
            'profile_id' => $this->profile_id,
            'date_create' => $this->date_create,
            'active' => $this->active,
        ]);

        return $dataProvider;
    }
}
