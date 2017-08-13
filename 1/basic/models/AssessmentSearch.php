<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Assessment;

/**
 * AssessmentSearch represents the model behind the search form about `app\models\Assessment`.
 */
class AssessmentSearch extends Assessment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'housekeepingsupervisor', 'housekeeping_staff'], 'integer'],
            [['date_assessment_start', 'date_assessment_end', 'assessment_summary', 'assessment_recommendation'], 'safe'],
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
        $query = Assessment::find();

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
            'date_assessment_start' => $this->date_assessment_start,
            'date_assessment_end' => $this->date_assessment_end,
            'housekeepingsupervisor' => $this->housekeepingsupervisor,
            'housekeeping_staff' => $this->housekeeping_staff,
        ]);

        $query->andFilterWhere(['like', 'assessment_summary', $this->assessment_summary])
            ->andFilterWhere(['like', 'assessment_recommendation', $this->assessment_recommendation]);

        return $dataProvider;
    }
}
