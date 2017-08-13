<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssessmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assessment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_assessment_start') ?>

    <?= $form->field($model, 'date_assessment_end') ?>

    <?= $form->field($model, 'assessment_summary') ?>

    <?= $form->field($model, 'assessment_recommendation') ?>

    <?php // echo $form->field($model, 'housekeepingsupervisor') ?>

    <?php // echo $form->field($model, 'housekeeping_staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
