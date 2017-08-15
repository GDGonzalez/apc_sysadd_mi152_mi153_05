<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeCleansRoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee Cleans Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-cleans-room-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee Cleans Room', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ROOM_room_id',
            'HOUSEKEEPING_CHECKLIST_id',
            'INSPECTION_CHECKLIST_id',
            'room_inspected',
            // 'hkeeping_timein',
            // 'hkeeping_timeout',
            // 'inspection_timein',
            // 'inspection_timeout',
            // 'inspect_room',
            // 'houkeepingsupervisor',
            // 'housekeeping_staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
