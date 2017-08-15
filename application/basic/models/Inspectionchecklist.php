<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inspection_checklist".
 *
 * @property integer $id
 * @property integer $checklist_description
 * @property string $checklist_comments
 *
 * @property EmployeeCleansRoom[] $employeeCleansRooms
 */
class Inspectionchecklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inspection_checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checklist_description'], 'required'],
            [['id', 'checklist_description'], 'integer'],
            [['checklist_comments'], 'string', 'max' => 45],
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
            'checklist_comments' => 'Checklist Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeCleansRooms()
    {
        return $this->hasMany(EmployeeCleansRoom::className(), ['INSPECTION_CHECKLIST_id' => 'id']);
    }
}
