<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $room_no
 * @property integer $ROOM_TYPE_id
 *
 * @property EmployeeCleansRoom[] $employeeCleansRooms
 * @property RoomType $rOOMTYPE
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ROOM_TYPE_id'], 'required'],
            [['id', 'ROOM_TYPE_id'], 'integer'],
            [['room_no'], 'string', 'max' => 45],
            [['ROOM_TYPE_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomType::className(), 'targetAttribute' => ['ROOM_TYPE_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_no' => 'Room No',
            'ROOM_TYPE_id' => 'Room  Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeCleansRooms()
    {
        return $this->hasMany(EmployeeCleansRoom::className(), ['ROOM_room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getROOMTYPE()
    {
        return $this->hasOne(RoomType::className(), ['id' => 'ROOM_TYPE_id']);
    }
}
