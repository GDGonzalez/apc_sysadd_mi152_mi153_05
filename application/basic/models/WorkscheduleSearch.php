<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Workschedule;

/**
 * WorkscheduleSearch represents the model behind the search form about `app\models\Workschedule`.
 */
class WorkscheduleSearch extends Workschedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['shift_name', 'shift_start_time', 'shift_end_time'], 'safe'],
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
        $query = Workschedule::find();

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
            'shift_start_time' => $this->shift_start_time,
            'shift_end_time' => $this->shift_end_time,
        ]);

        $query->andFilterWhere(['like', 'shift_name', $this->shift_name]);

        return $dataProvider;
    }
}
