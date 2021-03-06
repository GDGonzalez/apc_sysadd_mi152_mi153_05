<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmployeeHasWorkschedule;

/**
 * EmployeeHasWorkscheduleSearch represents the model behind the search form about `app\models\EmployeeHasWorkschedule`.
 */
class EmployeeHasWorkscheduleSearch extends EmployeeHasWorkschedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'EMPLOYEE_id', 'WORKSCHEDULE_id'], 'integer'],
            [['time_in', 'time_out'], 'safe'],
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
        $query = EmployeeHasWorkschedule::find();

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
            'EMPLOYEE_id' => $this->EMPLOYEE_id,
            'WORKSCHEDULE_id' => $this->WORKSCHEDULE_id,
            'time_in' => $this->time_in,
            'time_out' => $this->time_out,
        ]);

        return $dataProvider;
    }
}
