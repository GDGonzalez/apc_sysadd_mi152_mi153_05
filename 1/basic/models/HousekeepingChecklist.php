<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "housekeeping_checklist".
 *
 * @property integer $id
 * @property string $checklist_description
 * @property string $checklist_result
 * @property string $checklist_comments
 *
 * @property EmployeeCleansRoom[] $employeeCleansRooms
 */
class HousekeepingChecklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'housekeeping_checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['checklist_description', 'checklist_result', 'checklist_comments'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'checklist_description' => 'Checklist Description',
            'checklist_result' => 'Checklist Result',
            'checklist_comments' => 'Checklist Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeCleansRooms()
    {
        return $this->hasMany(EmployeeCleansRoom::className(), ['HOUSEKEEPING_CHECKLIST_id' => 'id']);
    }
}
