<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeCleansRoomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-cleans-room-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ROOM_room_id') ?>

    <?= $form->field($model, 'HOUSEKEEPING_CHECKLIST_id') ?>

    <?= $form->field($model, 'INSPECTION_CHECKLIST_id') ?>

    <?= $form->field($model, 'room_inspected') ?>

    <?php // echo $form->field($model, 'hkeeping_timein') ?>

    <?php // echo $form->field($model, 'hkeeping_timeout') ?>

    <?php // echo $form->field($model, 'inspection_timein') ?>

    <?php // echo $form->field($model, 'inspection_timeout') ?>

    <?php // echo $form->field($model, 'inspect_room') ?>

    <?php // echo $form->field($model, 'houkeepingsupervisor') ?>

    <?php // echo $form->field($model, 'housekeeping_staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
