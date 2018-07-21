<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abc;

/**
 * AbcSearch represents the model behind the search form of `app\models\Abc`.
 */
class AbcSearch extends Abc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'movel_A', 'movel_B', 'tel_A', 'tel_B'], 'integer'],
            [['missao', 'valores', 'endereco', 'email', 'visao', 'novidades'], 'safe'],
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
        $query = Abc::find();

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
            'movel_A' => $this->movel_A,
            'movel_B' => $this->movel_B,
            'tel_A' => $this->tel_A,
            'tel_B' => $this->tel_B,
        ]);

        $query->andFilterWhere(['like', 'missao', $this->missao])
            ->andFilterWhere(['like', 'valores', $this->valores])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'visao', $this->visao])
            ->andFilterWhere(['like', 'novidades', $this->novidades]);

        return $dataProvider;
    }
}
