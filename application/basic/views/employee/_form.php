<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'emp_no')->textInput() ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPARTMENT_id')->textInput() ?>

    <?= $form->field($model, 'POSITION_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
