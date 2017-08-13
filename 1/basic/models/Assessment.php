<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assessment".
 *
 * @property integer $id
 * @property string $date_assessment_start
 * @property string $date_assessment_end
 * @property string $assessment_summary
 * @property string $assessment_recommendation
 * @property integer $housekeepingsupervisor
 * @property integer $housekeeping_staff
 *
 * @property Employee $housekeepingsupervisor0
 * @property Employee $housekeepingStaff
 */
class Assessment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assessment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'housekeepingsupervisor', 'housekeeping_staff'], 'required'],
            [['id', 'housekeepingsupervisor', 'housekeeping_staff'], 'integer'],
            [['date_assessment_start', 'date_assessment_end'], 'safe'],
            [['assessment_summary', 'assessment_recommendation'], 'string', 'max' => 45],
            [['housekeepingsupervisor'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['housekeepingsupervisor' => 'id']],
            [['housekeeping_staff'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['housekeeping_staff' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_assessment_start' => 'Date Assessment Start',
            'date_assessment_end' => 'Date Assessment End',
            'assessment_summary' => 'Assessment Summary',
            'assessment_recommendation' => 'Assessment Recommendation',
            'housekeepingsupervisor' => 'Housekeepingsupervisor',
            'housekeeping_staff' => 'Housekeeping Staff',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousekeepingsupervisor0()
    {
        return $this->hasOne(Employee::className(), ['id' => 'housekeepingsupervisor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousekeepingStaff()
    {
        return $this->hasOne(Employee::className(), ['id' => 'housekeeping_staff']);
    }
}
