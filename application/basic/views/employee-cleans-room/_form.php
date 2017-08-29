<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeCleansRoom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-cleans-room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'ROOM_room_id')->textInput() ?>

    <?= $form->field($model, 'HOUSEKEEPING_CHECKLIST_id')->textInput() ?>

    <?= $form->field($model, 'INSPECTION_CHECKLIST_id')->textInput() ?>

    <?= $form->field($model, 'room_inspected')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hkeeping_timein')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hkeeping_timeout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspection_timein')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspection_timeout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspect_room')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'houkeepingsupervisor')->textInput() ?>

    <?= $form->field($model, 'housekeeping_staff')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
