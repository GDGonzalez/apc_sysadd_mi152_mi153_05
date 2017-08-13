<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HousekeepingChecklist;

/**
 * HousekeepingChecklistSearch represents the model behind the search form about `app\models\HousekeepingChecklist`.
 */
class HousekeepingChecklistSearch extends HousekeepingChecklist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['checklist_description', 'checklist_result', 'checklist_comments'], 'safe'],
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
        $query = HousekeepingChecklist::find();

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
        ]);

        $query->andFilterWhere(['like', 'checklist_description', $this->checklist_description])
            ->andFilterWhere(['like', 'checklist_result', $this->checklist_result])
            ->andFilterWhere(['like', 'checklist_comments', $this->checklist_comments]);

        return $dataProvider;
    }
}
