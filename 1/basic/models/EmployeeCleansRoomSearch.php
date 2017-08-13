<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmployeeCleansRoom;

/**
 * EmployeeCleansRoomSearch represents the model behind the search form about `app\models\EmployeeCleansRoom`.
 */
class EmployeeCleansRoomSearch extends EmployeeCleansRoom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ROOM_room_id', 'HOUSEKEEPING_CHECKLIST_id', 'INSPECTION_CHECKLIST_id', 'houkeepingsupervisor', 'housekeeping_staff'], 'integer'],
            [['room_inspected', 'hkeeping_timein', 'hkeeping_timeout', 'inspection_timein', 'inspection_timeout', 'inspect_room'], 'safe'],
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
        $query = EmployeeCleansRoom::find();

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
            'ROOM_room_id' => $this->ROOM_room_id,
            'HOUSEKEEPING_CHECKLIST_id' => $this->HOUSEKEEPING_CHECKLIST_id,
            'INSPECTION_CHECKLIST_id' => $this->INSPECTION_CHECKLIST_id,
            'hkeeping_timein' => $this->hkeeping_timein,
            'hkeeping_timeout' => $this->hkeeping_timeout,
            'inspection_timein' => $this->inspection_timein,
            'inspection_timeout' => $this->inspection_timeout,
            'houkeepingsupervisor' => $this->houkeepingsupervisor,
            'housekeeping_staff' => $this->housekeeping_staff,
        ]);

        $query->andFilterWhere(['like', 'room_inspected', $this->room_inspected])
            ->andFilterWhere(['like', 'inspect_room', $this->inspect_room]);

        return $dataProvider;
    }
}
