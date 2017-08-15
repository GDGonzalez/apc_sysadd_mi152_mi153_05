<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_has_workschedule".
 *
 * @property integer $id
 * @property integer $EMPLOYEE_id
 * @property integer $WORKSCHEDULE_id
 * @property string $time_in
 * @property string $time_out
 *
 * @property Employee $eMPLOYEE
 * @property Workschedule $wORKSCHEDULE
 */
class EmployeeHasWorkschedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_has_workschedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMPLOYEE_id', 'WORKSCHEDULE_id'], 'required'],
            [['EMPLOYEE_id', 'WORKSCHEDULE_id'], 'integer'],
            [['time_in', 'time_out'], 'safe'],
            [['EMPLOYEE_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['EMPLOYEE_id' => 'id']],
            [['WORKSCHEDULE_id'], 'exist', 'skipOnError' => true, 'targetClass' => Workschedule::className(), 'targetAttribute' => ['WORKSCHEDULE_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'EMPLOYEE_id' => 'Employee ID',
            'WORKSCHEDULE_id' => 'Workschedule ID',
            'time_in' => 'Time In',
            'time_out' => 'Time Out',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEMPLOYEE()
    {
        return $this->hasOne(Employee::className(), ['id' => 'EMPLOYEE_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWORKSCHEDULE()
    {
        return $this->hasOne(Workschedule::className(), ['id' => 'WORKSCHEDULE_id']);
    }
}
