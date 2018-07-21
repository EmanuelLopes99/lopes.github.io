<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blog;

/**
 * BlogSearch represents the model behind the search form of `app\models\Blog`.
 */
class BlogSearch extends Blog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['conteudo', 'tags', 'post', 'categoria', 'nomeBlog', 'dataBlog'], 'safe'],
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
        $query = Blog::find();

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
            'dataBlog' => $this->dataBlog,
        ]);

        $query->andFilterWhere(['like', 'conteudo', $this->conteudo])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'post', $this->post])
            ->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'nomeBlog', $this->nomeBlog]);

        return $dataProvider;
    }
}
