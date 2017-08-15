<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeCleansRoom */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employee Cleans Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-cleans-room-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ROOM_room_id',
            'HOUSEKEEPING_CHECKLIST_id',
            'INSPECTION_CHECKLIST_id',
            'room_inspected',
            'hkeeping_timein',
            'hkeeping_timeout',
            'inspection_timein',
            'inspection_timeout',
            'inspect_room',
            'houkeepingsupervisor',
            'housekeeping_staff',
        ],
    ]) ?>

</div>
