<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assessment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assessment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'date_assessment_start')->textInput() ?>

    <?= $form->field($model, 'date_assessment_end')->textInput() ?>

    <?= $form->field($model, 'assessment_summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assessment_recommendation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'housekeepingsupervisor')->textInput() ?>

    <?= $form->field($model, 'housekeeping_staff')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
