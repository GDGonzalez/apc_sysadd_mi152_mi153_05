<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_cleans_room".
 *
 * @property integer $id
 * @property integer $ROOM_room_id
 * @property integer $HOUSEKEEPING_CHECKLIST_id
 * @property integer $INSPECTION_CHECKLIST_id
 * @property string $room_inspected
 * @property string $hkeeping_timein
 * @property string $hkeeping_timeout
 * @property string $inspection_timein
 * @property string $inspection_timeout
 * @property string $inspect_room
 * @property integer $houkeepingsupervisor
 * @property integer $housekeeping_staff
 *
 * @property HousekeepingChecklist $hOUSEKEEPINGCHECKLIST
 * @property Employee $houkeepingsupervisor0
 * @property Employee $housekeepingStaff
 * @property InspectionChecklist $iNSPECTIONCHECKLIST
 * @property Room $rOOMRoom
 */
class EmployeeCleansRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_cleans_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ROOM_room_id', 'HOUSEKEEPING_CHECKLIST_id', 'INSPECTION_CHECKLIST_id', 'houkeepingsupervisor', 'housekeeping_staff'], 'required'],
            [['id', 'ROOM_room_id', 'HOUSEKEEPING_CHECKLIST_id', 'INSPECTION_CHECKLIST_id', 'houkeepingsupervisor', 'housekeeping_staff'], 'integer'],
            [['hkeeping_timein', 'hkeeping_timeout', 'inspection_timein', 'inspection_timeout'], 'safe'],
            [['room_inspected'], 'string', 'max' => 1],
            [['inspect_room'], 'string', 'max' => 45],
            [['HOUSEKEEPING_CHECKLIST_id'], 'exist', 'skipOnError' => true, 'targetClass' => HousekeepingChecklist::className(), 'targetAttribute' => ['HOUSEKEEPING_CHECKLIST_id' => 'id']],
            [['houkeepingsupervisor'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['houkeepingsupervisor' => 'id']],
            [['housekeeping_staff'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['housekeeping_staff' => 'id']],
            [['INSPECTION_CHECKLIST_id'], 'exist', 'skipOnError' => true, 'targetClass' => InspectionChecklist::className(), 'targetAttribute' => ['INSPECTION_CHECKLIST_id' => 'id']],
            [['ROOM_room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['ROOM_room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ROOM_room_id' => 'Room Room ID',
            'HOUSEKEEPING_CHECKLIST_id' => 'Housekeeping  Checklist ID',
            'INSPECTION_CHECKLIST_id' => 'Inspection  Checklist ID',
            'room_inspected' => 'Room Inspected',
            'hkeeping_timein' => 'Hkeeping Timein',
            'hkeeping_timeout' => 'Hkeeping Timeout',
            'inspection_timein' => 'Inspection Timein',
            'inspection_timeout' => 'Inspection Timeout',
            'inspect_room' => 'Inspect Room',
            'houkeepingsupervisor' => 'Houkeepingsupervisor',
            'housekeeping_staff' => 'Housekeeping Staff',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHOUSEKEEPINGCHECKLIST()
    {
        return $this->hasOne(HousekeepingChecklist::className(), ['id' => 'HOUSEKEEPING_CHECKLIST_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoukeepingsupervisor0()
    {
        return $this->hasOne(Employee::className(), ['id' => 'houkeepingsupervisor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousekeepingStaff()
    {
        return $this->hasOne(Employee::className(), ['id' => 'housekeeping_staff']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getINSPECTIONCHECKLIST()
    {
        return $this->hasOne(InspectionChecklist::className(), ['id' => 'INSPECTION_CHECKLIST_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getROOMRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'ROOM_room_id']);
    }
}
