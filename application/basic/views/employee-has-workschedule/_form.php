<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeHasWorkschedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-has-workschedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EMPLOYEE_id')->textInput() ?>

    <?= $form->field($model, 'WORKSCHEDULE_id')->textInput() ?>

    <?= $form->field($model, 'time_in')->textInput() ?>

    <?= $form->field($model, 'time_out')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
