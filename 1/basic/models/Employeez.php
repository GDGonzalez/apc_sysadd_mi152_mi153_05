<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property integer $emp_no
 * @property string $emp_lname
 * @property string $emp_fname
 * @property string $emp_mname
 * @property integer $DEPARTMENT_id
 * @property integer $POSITION_id
 *
 * @property Assessment[] $assessments
 * @property Assessment[] $assessments0
 * @property EmloyeeHasWorkschedule[] $emloyeeHasWorkschedules
 * @property Department $dEPARTMENT
 * @property Position $pOSITION
 * @property EmployeeCleansRoom[] $employeeCleansRooms
 * @property EmployeeCleansRoom[] $employeeCleansRooms0
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'DEPARTMENT_id', 'POSITION_id'], 'required'],
            [['id', 'emp_no', 'DEPARTMENT_id', 'POSITION_id'], 'integer'],
            [['emp_lname', 'emp_fname', 'emp_mname'], 'string', 'max' => 45],
            [['DEPARTMENT_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['DEPARTMENT_id' => 'id']],
            [['POSITION_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['POSITION_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_no' => 'Emp No',
            'emp_lname' => 'Emp Lname',
            'emp_fname' => 'Emp Fname',
            'emp_mname' => 'Emp Mname',
            'DEPARTMENT_id' => 'Department ID',
            'POSITION_id' => 'Position ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssessments()
    {
        return $this->hasMany(Assessment::className(), ['housekeepingsupervisor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssessments0()
    {
        return $this->hasMany(Assessment::className(), ['housekeeping_staff' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmloyeeHasWorkschedules()
    {
        return $this->hasMany(EmloyeeHasWorkschedule::className(), ['EMPLOYEE_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDEPARTMENT()
    {
        return $this->hasOne(Department::className(), ['id' => 'DEPARTMENT_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPOSITION()
    {
        return $this->hasOne(Position::className(), ['id' => 'POSITION_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeCleansRooms()
    {
        return $this->hasMany(EmployeeCleansRoom::className(), ['houkeepingsupervisor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeCleansRooms0()
    {
        return $this->hasMany(EmployeeCleansRoom::className(), ['housekeeping_staff' => 'id']);
    }
}
