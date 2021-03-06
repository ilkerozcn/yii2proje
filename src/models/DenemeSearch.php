<?php

namespace vendor\ilkerozcn\yii2proje\src\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\ilkerozcn\yii2proje\src\models\Deneme;

/**
 * DenemeSearch represents the model behind the search form of `vendor\ilkerozcn\yii2proje\src\models\Deneme`.
 */
class DenemeSearch extends Deneme
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ad', 'Soyad'], 'safe'],
            [['Yas', 'id','Sinif_id'], 'integer'],

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
        $query = Deneme::find();

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
            'Yas' => $this->Yas,
            'id' => $this->id,
            'Sinif_id'=> $this->Sinif_id,
        ]);

        $query->andFilterWhere(['like', 'Ad', $this->Ad])
            ->andFilterWhere(['like', 'Soyad', $this->Soyad]);

        return $dataProvider;
    }
}
