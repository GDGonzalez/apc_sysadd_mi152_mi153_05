<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workschedule".
 *
 * @property integer $id
 * @property string $shift_name
 * @property string $shift_start_time
 * @property string $shift_end_time
 *
 * @property EmloyeeHasWorkschedule[] $emloyeeHasWorkschedules
 */
class Workschedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workschedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['shift_start_time', 'shift_end_time'], 'safe'],
            [['shift_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shift_name' => 'Shift Name',
            'shift_start_time' => 'Shift Start Time',
            'shift_end_time' => 'Shift End Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmloyeeHasWorkschedules()
    {
        return $this->hasMany(EmloyeeHasWorkschedule::className(), ['WORKSCHEDULE_id' => 'id']);
    }
}
