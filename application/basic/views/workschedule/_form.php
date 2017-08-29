<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Workschedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workschedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'shift_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shift_start_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shift_end_time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
