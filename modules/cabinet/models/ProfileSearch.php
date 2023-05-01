<?php

namespace app\modules\cabinet\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\cabinet\models\Profile;

/**
 * ProfileSearch represents the model behind the search form of `app\modules\cabinet\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'iin', 'active'], 'integer'],
            [['full_name', 'adderess', 'date_create', 'date_update'], 'safe'],
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
        $query = Profile::find();

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
            'user_id' => $this->user_id,
            'iin' => $this->iin,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'adderess', $this->adderess]);

        return $dataProvider;
    }
}
