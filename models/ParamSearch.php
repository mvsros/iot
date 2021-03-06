<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Param;

/**
 * ParamSearch represents the model behind the search form about `app\models\Param`.
 */
class ParamSearch extends Param
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['param_id'], 'integer'],
            [['param_name', 'param_type', 'comment'], 'safe'],
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
        $query = Param::find();

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
            'param_id' => $this->param_id,
        ]);

        $query->andFilterWhere(['like', 'param_name', $this->param_name])
            ->andFilterWhere(['like', 'param_type', $this->param_type])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
